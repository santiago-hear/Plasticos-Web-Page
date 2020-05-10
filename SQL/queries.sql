SELECT 
    CategoryId as cid,
    CategoryName,Description, 
    (select count(*) from productxcategory as p where cid = p.CategoryId) as amount_p 
from category;