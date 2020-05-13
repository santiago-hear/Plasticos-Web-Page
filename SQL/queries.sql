ALTER TABLE product MODIFY COLUMN Image MEDIUMBLOB;

SELECT 
    CategoryId as cid,
    CategoryName,
    Description, 
    (select count(*) from productxcategory as p where cid = p.CategoryId) as amount_p 
from category;

CREATE TRIGGER SET_ID BEFORE INSERT ON product
FOR EACH ROW
BEGIN
	SET NEW.ProductId = (SELECT MAX(ProductId)+1 FROM product);
END;

DELIMITER //
CREATE FUNCTION GET_CATEGORIES (pid INT) RETURNS VARCHAR(100)
BEGIN
	DECLARE finished INTEGER DEFAULT 0;
    DECLARE category varchar(100) DEFAULT "";
	DECLARE categories varchar(1000) DEFAULT "";

	-- declare cursor for employee email
	DECLARE cats 
		CURSOR FOR 
			SELECT c.categoryName as cat 
                FROM category c 
                WHERE c.categoryId 
                IN (select categoryId FROM productxcategory where productId = pid);

	-- declare NOT FOUND handler
	DECLARE CONTINUE HANDLER 
        FOR NOT FOUND SET finished = 1;

	OPEN cats;

	getCats: LOOP
		FETCH cats INTO category;
		IF finished = 1 THEN 
			LEAVE getCats;
		END IF;
		-- build email list
		SET categories = CONCAT(category,",",categories);
	END LOOP getCats;
	CLOSE cats;
	RETURN categories;
END;//
DELIMITER ;


SELECT 
    p.ProductId,
    p.ProductName,
    Description,
    p.Amount,
    p.Price, 
    (SELECT get_categories(p.ProductId)) as categories,
    Brands,
    Material  
FROM product p;