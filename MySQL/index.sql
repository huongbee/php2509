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
