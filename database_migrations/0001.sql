CREATE TABLE IF NOT EXISTS migration
  (migration INT, ran_on TIMESTAMP);

INSERT INTO migration VALUES (1, NOW());