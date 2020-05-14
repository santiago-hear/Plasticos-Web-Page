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

INSERT INTO company SET CompanyId = 1, 
						CompanyName = 'Plásticos La 17', 
                        PhoneNumber = '6 882 47 58', 
                        MobileNumber = '+57 314 625 3419',
                        Email = 'plasticosla17@gmail.com',
                        AboutUs = 'Somos una empresa manizaleña fundada de 2019 por Carlos Mario,
                        			a raiz de la experiencia familar en el campo de los desechables
                                    sindo fabricantes de gran parte de nuestros productos de alli
                                    la economía y calidad de nuestros productos',
                        Mission = 'Impulsar la buena presentacion de nuestros alimentos y la organización
                        			de los mismos, la comodidad de las personas al realizar sus fiestas
                                    familiares con laa mayor simplicidad posible con el uso de productos
                                    desechables',
                        Vision = 'Formar una empresa con calidad humana que pueda vender a nivel Nacional
                        			conservando la calidad de todos sus productos',
                        Place = 'Calle 22 # 16 - 23 local 122',
                        FrameLocation = '<iframe height="500px" width="1000px"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d993.5499803443171!2d-75.51832817080246!3d5.071320999769954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNcKwMDQnMTYuOCJOIDc1wrAzMScwNC4wIlc!5e0!3m2!1ses-419!2sco!4v1588109342729!5m2!1ses-419!2sco" 
                    frameborder="0" allowfullscreen="true" aria-hidden="false" tabindex="0">
                </iframe>';