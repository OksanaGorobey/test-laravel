CREATE TABLE `products` (
    `id` int NOT NULL AUTO_INCREMENT,
    `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Title of product',
    `status` int NOT NULL COMMENT 'status: 1 - active, 0 - not available',
    `quantity` int NOT NULL COMMENT 'Available quantity',
    `counteragent_id` int NOT NULL COMMENT 'Id of counteragent',
    `price` int NOT NULL COMMENT 'Price by one ',
    PRIMARY KEY (`id`),
    KEY `counteragent_id` (`counteragent_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci