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