CREATE TABLE IF NOT EXISTS announcement (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title text,
    category text,
    category_href text,
    body text,
    when_inserted timestamp
);

INSERT INTO migration VALUES (4, NOW());