-- UTF-8 MB4 Unicode-ci

CREATE TABLE users(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);




-- Write user_details table sql query
-- Field: Full Name, Address, Contact, Age, Profile_pic , 

