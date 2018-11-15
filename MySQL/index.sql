CREATE TABLE `php2509_2`.`users` ( 
    `id` INT NOT NULL AUTO_INCREMENT COMMENT 'khoa chinh cua table' , 
    `name` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL , `email` VARCHAR(100) NOT NULL , 
    `birthdate` DATE NULL DEFAULT NULL , 
    `password` VARCHAR(100) NULL DEFAULT NULL , 
    `created_at` DATETIME NULL DEFAULT CURRENT_TIMESTAMP , 
    `updated_at` DATETIME NULL DEFAULT NULL , 
    PRIMARY KEY (`id`), 
    UNIQUE `unique_email` (`email`)
);


-- Show san pham moi, show sp ban chay, sp khuyen mai
-- tao slider trang chu
-- danh muc cac san pham
-- luu hoa don da mua, cho biet trang thai cua hoa don 
-- luu tru ds khach hang


CREATE TABLE `php2509_2`.`products` ( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `name` VARCHAR(225) NOT NULL , 
    `price` FLOAT NOT NULL DEFAULT '0' , 
    `promotion_price` FLOAT NOT NULL DEFAULT '0' , 
    `type_id` INT NOT NULL , 
    `image` VARCHAR(255) NOT NULL , 
    `summary` VARCHAR(500) NOT NULL , 
    `detail` TEXT NOT NULL , 
    `new` TINYINT(1) NOT NULL DEFAULT '0' COMMENT '0_old, 1_new' , 
    `status` TINYINT(1) NOT NULL DEFAULT '0' COMMENT '0_hide, 1_show' , 
    `created_at` DATETIME NULL DEFAULT NULL , 
    `updated_at` DATETIME NULL DEFAULT NULL , 
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

CREATE TABLE `php2509_2`.`banner` ( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `image` VARCHAR(225) NOT NULL , 
    `title` VARCHAR(255) NULL DEFAULT NULL , 
    `link` VARCHAR(255) NULL DEFAULT NULL , 
    `status` TINYINT(1) NOT NULL DEFAULT '0' COMMENT '0_hide, 1_show' , 
    `created_at` DATETIME NULL DEFAULT NULL , 
    `updated_at` DATETIME NULL DEFAULT NULL , 
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

CREATE TABLE `php2509_2`.`categories` ( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `name` VARCHAR(255) NOT NULL , 
    `image` VARCHAR(255) NOT NULL , 
    `parent_id` INT NOT NULL , 
    `status` TINYINT(1) NULL DEFAULT '0' COMMENT '0_hide, 1_show' , 
    `created_at` DATETIME NULL DEFAULT NULL , 
    `updated_at` DATETIME NULL DEFAULT NULL , 
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

CREATE TABLE `php2509_2`.`bills` ( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `customer_id` INT NOT NULL , 
    `date_order` DATETIME NOT NULL , 
    `date_delivery` DATETIME NULL DEFAULT NULL , 
    `total` FLOAT NOT NULL DEFAULT '0' , 
    `total_discount` FLOAT NOT NULL DEFAULT '0' , 
    `status` TINYINT(1) NOT NULL DEFAULT '0' COMMENT '0_DHthanhcong, 1_DHdanhan, 2_danggiao, 3_dagiao, 4_bihuy' , 
    `created_at` DATETIME NULL DEFAULT NULL , 
    `updated_at` DATETIME NULL DEFAULT NULL , 
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;


CREATE TABLE `php2509_2`.`bill_detail` ( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `bill_id` INT NOT NULL , 
    `product_id` INT NOT NULL , 
    `quantity` FLOAT NOT NULL DEFAULT '0' , 
    `total` FLOAT NOT NULL DEFAULT '0' , 
    `created_at` DATETIME NULL DEFAULT NULL , 
    `updated_at` DATETIME NULL DEFAULT NULL , 
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;


ALTER TABLE `bill_detail` 
    ADD CONSTRAINT `fk_bills_bill_detail` 
    FOREIGN KEY (`bill_id`) REFERENCES `bills`(`id`) 
    ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `bill_detail` 
    ADD FOREIGN KEY (`product_id`) REFERENCES `products`(`id`) 



INSERT INTO users(id,name,email,birthdate,password)
VALUES (2,'Khoa Phạm 02','khoapham04@gmail.com','1999-2-16','244232335fgsdfjfw'),
       (3,'Khoa Phạm 03','khoapham05@gmail.com','1999-2-16','244232335fgsdfjfw');


INSERT INTO users
VALUES (...);



UPDATE users
SET name='Nguyen Van A', birthdate='2000-3-30'
WHERE id=2

UPDATE users
SET email='khoa@yahoo.com'
WHERE email='khoapham05@gmail.com'

UPDATE users
SET password='234567'
WHERE email LIKE '%gmail com%'


= <= >= != <>
LIKE 
NOT LIKE
IN(1,2,3)
NOT IN() 
IS NULL
IS NOT NULL 
id BETWEEN 1 AND 4  ~ id>=1 AND id<=4
AND 
OR ~ IN(1,2,3,7,6)


DELETE FROM users
WHERE id IN (1,2,3) 
LIMIT 0,3


SELECT column1, column2,... 
FROM table1, table2,.... 
WHERE DKLK
    AND ... 
GROUP BY column1,... 
HAVING DK_cho_group_by 
ORDER BY column ASC|DESC
LIMIT position,quantity




20. Liệt kê danh sách sản phẩm gồm có tên Tên loại, Tên sp, Mô tả, Đơn giá và sắp xếp Tên loại theo chiều tăng dần.

SELECT categories.name AS tenloai , products.name AS tensp, detail 
FROM products, categories
WHERE products.id_type = categories.id 
AND categories.name = '...'
ORDER BY categories.name ASC


SELECT categories.name AS tenloai , products.name AS tensp, detail 
FROM products
INNER JOIN categories
ON products.id_type = categories.id 
WHERE categories.name = '...'
ORDER BY categories.name ASC
