ALTER TABLE signup ADD IF NOT EXISTS when_inserted timestamp;

UPDATE signup SET when_inserted = for_date WHERE when_inserted IS NULL;

INSERT INTO migration VALUES (3, NOW());