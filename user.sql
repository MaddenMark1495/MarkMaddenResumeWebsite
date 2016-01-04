DROP TABLE IF EXISTS users;
CREATE TABLE users (
      userName VARCHAR(20) PRIMARY KEY,
      userType VARCHAR(20),
      salt VARCHAR(20),
      hashed_password VARCHAR(256)
)ENGINE = INNODB;