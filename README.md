# CSIT206
CSIT206 project 

##Start php server at

php -S localhost:80 -t public


##DB settings

database name: csit206

table name : account
schema: ```CREATE TABLE account
        (
          id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
          user_name VARCHAR(255),
          password VARCHAR(255),
          last_name VARCHAR(255),
          first_name VARCHAR(255),
          created_at DATETIME DEFAULT 'CURRENT_TIMESTAMP',
          updated_at DATETIME DEFAULT 'CURRENT_TIMESTAMP'
        );
        CREATE UNIQUE INDEX account_user_name_uindex ON account (user_name);```