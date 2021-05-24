CREATE TABLE `mains` (
 `pon` int NOT NULL COMMENT 'Purchase order number',
 `eta_date` timestamp NULL DEFAULT NULL COMMENT 'Estimated time delivery',
 `address_id` int NOT NULL COMMENT 'Destination Address',
 `etd_date` timestamp NULL DEFAULT NULL COMMENT 'Estimated time arrival',
 `delivery_date` timestamp NULL DEFAULT NULL COMMENT 'Date of delivering',
 `status` int NOT NULL COMMENT 'status: 1 - delivered, 2 - ready at factory, 3 - in production, 4 - shipped, 0 - deleted',
 `pickup_date` timestamp NULL DEFAULT NULL COMMENT 'Pick up date',
 PRIMARY KEY (`pon`),
 KEY `address_id` (`address_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci