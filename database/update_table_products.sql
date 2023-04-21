-- ALTER TABLE products ADD COLUMN image VARCHAR(255) DEFAULT 'assets/no_image.png';

UPDATE products
SET image = 
  CASE
    WHEN category_id = 1 THEN 'assets/man.jpeg'
    WHEN category_id = 2 THEN 'assets/women.jpg'
    WHEN category_id = 3 THEN 'assets/kids.webp'
    ELSE 'assets/no_image.jpg'
  END;