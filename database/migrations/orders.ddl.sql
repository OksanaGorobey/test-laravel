CREATE TABLE `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_id` int NOT NULL COMMENT 'Product id',
  `quantity` int NOT NULL COMMENT 'Quantity in order',
  `order_date` timestamp NULL DEFAULT NULL COMMENT 'Date of creation order',
  `invoice_date` timestamp NULL DEFAULT NULL COMMENT 'Date of creation invoice',
  `total_price` int DEFAULT NULL COMMENT 'Total price by quantity in USD',
  `deadline_payment_date` timestamp NOT NULL COMMENT 'Deadline for payment',
  `paid_amount1` int DEFAULT NULL COMMENT 'First paid',
  `paid_amount2` int DEFAULT NULL COMMENT 'Second paid',
  `budget_id` int NOT NULL COMMENT 'Budget id',
  `status` int NOT NULL COMMENT 'status: 0-deleted, 1-paid, 2 - unpaid, 3 - partly paid',
  `counteragent_id` int NOT NULL COMMENT 'Id of counteragent',
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`),
  KEY `budget_id` (`budget_id`),
  KEY `counteragent_id` (`counteragent_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci