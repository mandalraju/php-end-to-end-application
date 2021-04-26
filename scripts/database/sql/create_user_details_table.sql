CREATE TABLE user_details (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    full_name VARCHAR(255) NOT NULL,
    address VARCHAR(255) NOT NULL,
    contact VARCHAR(255),
    age INT NOT NULL,
    profile_pic VARCHAR(255),
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);