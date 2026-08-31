CREATE TABLE IF NOT EXISTS signup (
    id INT PRIMARY KEY AUTO_INCREMENT,
    for_date DATE NOT NULL,
    first_name TEXT NOT NULL,
    last_name TEXT NOT NULL,
    email TEXT NOT NULL,
    phone TEXT NOT NULL,
    pronouns TEXT NOT NULL,
    dietary_needs TEXT NOT NULL,
    volunteer_selection TEXT NOT NULL,
    comments TEXT
);
INSERT INTO migration VALUES (2, NOW());