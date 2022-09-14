#
# Table schema for MySQL
#
CREATE TABLE urlinfo (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    url VARCHAR(1000) NOT NULL,
    created DATETIME NOT NULL,
    PRIMARY KEY (id)
   
);
