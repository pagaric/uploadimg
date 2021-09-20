CREATE TABLE images (
img_id INT NOT NULL AUTO_INCREMENT ,
img_nom VARCHAR( 50 ) NOT NULL ,
img_taille VARCHAR( 25 ) NOT NULL ,
img_type VARCHAR( 25 ) NOT NULL ,
img_desc VARCHAR( 255 ) NOT NULL ,
img_blob LONGBLOB NOT NULL ,
PRIMARY KEY ( img_id )
);
