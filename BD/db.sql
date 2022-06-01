create database apidevs;
use apidevs;

CREATE TABLE `users` (
  `id_users`      int(11) NOT NULL AUTO_INCREMENT,
  `username`      varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` 		  varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name`    varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` 	  varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password_user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateCreated`   datetime DEFAULT CURRENT_TIMESTAMP,
  `dateUpdated`   datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `flag_users`    int(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_users`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `guide` (
  `id_guide`    int(11) NOT NULL AUTO_INCREMENT,
  `name_guide`  varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL ,
  `desc_guide`  varchar(4000) COLLATE utf8mb4_unicode_ci NOT NULL , 
  `path_guide`	varchar(500),
  `dateCreated` datetime DEFAULT CURRENT_TIMESTAMP,
  `dateUpdated` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `flag_guide`  int(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_guide`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `module` (
     `id_module`     int(11) NOT NULL AUTO_INCREMENT,
     `id_guide` 	 int NOT NULL,
     `title_module`  varchar(300)COLLATE utf8mb4_unicode_ci NOT NULL ,
     `title_secondary`  varchar(300)COLLATE utf8mb4_unicode_ci NOT NULL ,
     `desc_module`   varchar(4000)COLLATE utf8mb4_unicode_ci NOT NULL ,
     `path_module`   varchar(500)COLLATE utf8mb4_unicode_ci NOT NULL ,
     `dateCreated` 	 datetime DEFAULT CURRENT_TIMESTAMP,
     `dateUpdated`   datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
     `flag_module`	 int(1) NOT NULL DEFAULT 1,
    PRIMARY KEY(`id_module`),
    INDEX (`id_guide`),
    FOREIGN KEY (`id_guide`) REFERENCES `guide`(`id_guide`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `section` (
     `id_section`  	  int(11) NOT NULL AUTO_INCREMENT,
     `id_module`   	  int NOT NULL,
     `title_section`  varchar(300)COLLATE utf8mb4_unicode_ci NOT NULL ,
     `desc_section`   varchar(4000)COLLATE utf8mb4_unicode_ci NOT NULL ,
     `path_section`   varchar(4000)COLLATE utf8mb4_unicode_ci NOT NULL ,
     `dateCreated` 	  datetime DEFAULT CURRENT_TIMESTAMP,
     `dateUpdated` 	  datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
     `flag_section`   int(1) NOT NULL DEFAULT 1,
    PRIMARY KEY(`id_section`),
    INDEX (`id_module`),
    FOREIGN KEY (`id_module`) REFERENCES `module`(`id_module`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
 
CREATE TABLE `image` (
     `id_image`  		int(11) NOT NULL AUTO_INCREMENT, 
     `title_image`  	varchar(300)COLLATE utf8mb4_unicode_ci NOT NULL, 
     `path_image`   	varchar(4000)COLLATE utf8mb4_unicode_ci NOT NULL,
     `dateCreated` 		datetime DEFAULT CURRENT_TIMESTAMP,
     `dateUpdated` 		datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
     `flag_image` 		int(1) NOT NULL DEFAULT 1,
    PRIMARY KEY(`id_image`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `image_rel` (
	 `id_image_rel`  	int(11) NOT NULL AUTO_INCREMENT,
     `id_image`  		int NOT NULL,
     `id_section`   	int NOT NULL, 
     `data_image`  		varchar(50)COLLATE utf8mb4_unicode_ci NOT NULL,
     `dateCreated` 		datetime DEFAULT CURRENT_TIMESTAMP,
     `dateUpdated` 		datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
     `flag_image` 		int(1) NOT NULL DEFAULT 1,
    PRIMARY KEY(`id_image_rel`), 
    CONSTRAINT FOREIGN KEY (`id_image`) REFERENCES `image`(`id_image`),
    CONSTRAINT FOREIGN KEY (`id_section`) REFERENCES `section`(`id_section`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
