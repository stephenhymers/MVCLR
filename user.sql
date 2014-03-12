CREATE TABLE tbl_user (
             user_id MEDIUMINT NOT NULL AUTO_INCREMENT,
             user_name CHAR(30) NOT NULL,
             password CHAR(12) NOT NULL,
             PRIMARY KEY (user_id)
             );
             
INSERT INTO tbl_user (user_name, password) VALUES 
('joe', 'joepass'),
('ebbi', 'ebbipass');

COMMIT;