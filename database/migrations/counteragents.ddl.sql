CREATE TABLE `counteragents` (
     `id` int NOT NULL AUTO_INCREMENT,
     `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Name',
     `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Phone number',
     `address_id` int NOT NULL COMMENT 'Address',
     `status` int NOT NULL DEFAULT '1' COMMENT 'status: active - 1, not active - 2, 0 - deleted',
     `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
     PRIMARY KEY (`id`),
     UNIQUE KEY `phone` (`phone`),
     KEY `address_id` (`address_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci