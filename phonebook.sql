CREATE TABLE users (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50),
    last_name VARCHAR(50)
);

CREATE TABLE phone_numbers (
    user_id INT(10) NOT NULL,
    phone VARCHAR(50)
);

/* Sample Users */
INSERT INTO users (first_name, last_name)
    VALUES ('Daniel', 'Prada');
INSERT INTO users (first_name, last_name)
    VALUES ('Robin', 'Carter');
INSERT INTO users (first_name, last_name)
    VALUES ('John', 'Smith');

/* Sample Phones */
INSERT INTO phone_numbers (user_id, phone)
    VALUES (1, '(954)128-4579');
INSERT INTO phone_numbers (user_id, phone)
    VALUES (1, '(561)421-6731');
INSERT INTO phone_numbers (user_id, phone)
    VALUES (2, '(401)310-1250');
INSERT INTO phone_numbers (user_id, phone)
    VALUES (3, '(305)990-9845');