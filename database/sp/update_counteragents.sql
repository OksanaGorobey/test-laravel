CREATE DEFINER=`root`@`%` PROCEDURE `test`.`update_counteragents`( IN id_val INT, name_val VARCHAR(255), phone_val VARCHAR(255), status_val INT )
BEGIN

    IF( SELECT id  FROM test.counteragents WHERE id = id_val LIMIT 1 ) IS NULL
    THEN
        BEGIN
            SELECT NULL;
        END;
    END IF;

    UPDATE
        test.counteragents
    SET
        name = name_val,
        phone = phone_val,
        status = status_val,
        updated_at = CURRENT_TIMESTAMP
    WHERE
        id = id_val ;
END