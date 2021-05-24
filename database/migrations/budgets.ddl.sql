CREATE TABLE `budgets` (
   `id` int NOT NULL AUTO_INCREMENT,
   `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Title of budget',
   PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci