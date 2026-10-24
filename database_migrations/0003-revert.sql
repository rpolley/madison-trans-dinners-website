ALTER TABLE signup DROP IF EXISTS when_inserted;

DELETE FROM migration where migration = '2';