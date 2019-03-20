TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` trigger venta_after_insert after insert on venta for each row insert into pid (saleId, status) values(NEW.vId, \'WAIT\')' 'CREATE DEFINER=`root`@`localhost` trigger venta_after_update after update on venta for each row begin if NEW.hora <> OLD.hora then   insert into pid (saleId, status) values(NEW.vId, \'WAIT\'); end if; end'
sql_modes=1342177280 1342177280
definers='root@localhost' 'root@localhost'
