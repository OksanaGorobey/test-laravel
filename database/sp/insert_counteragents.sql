CREATE DEFINER=`root`@`%` PROCEDURE `test`.`insert_counteragents`( IN name_val VARCHAR(255), phone_val VARCHAR(255), address_val VARCHAR(255), status_val INT )
BEGIN

    IF( SELECT id  FROM test.addresses WHERE address = address_val LIMIT 1 ) IS NULL
    THEN
        BEGIN
            INSERT INTO test.addresses ( address ) VALUES ( address_val );
        END;
    END IF;

    INSERT INTO test.counteragents (name,phone,address_id,status) VALUES (name_val, phone_val, ( SELECT id  FROM test.addresses WHERE address = address_val LIMIT 1 ), status_val);
END