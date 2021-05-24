CREATE DEFINER=`root`@`%` PROCEDURE `test`.`select_counteragents`( IN numb_offset INT)
BEGIN
    SELECT
        counteragents.*, addresses.address
    FROM
        counteragents
    JOIN
        addresses
        ON
        counteragents.address_id = addresses.id
    WHERE
        counteragents.id <> 1
        AND
        status > 0
    LIMIT
        10
    OFFSET
        numb_offset;
END