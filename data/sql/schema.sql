CREATE TABLE cars (id BIGINT AUTO_INCREMENT, brand VARCHAR(255) NOT NULL, model VARCHAR(255) NOT NULL, submodel VARCHAR(255) NOT NULL, year DATETIME NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;