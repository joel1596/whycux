UPDATE products
SET image = 
  CASE
    WHEN imagen_id = 1 THEN 'assets/CamisetaparaHombre.jpg'
    WHEN imagen_id = 2 THEN 'assets/VestidoparaMujer.jpg'
    WHEN imagen_id = 3 THEN 'assets/JeansparaNiños.jpg'
    WHEN imagen_id = 4 THEN 'assets/SudaderaconCapuchaparaHombre.jpg'
    WHEN imagen_id = 5 THEN 'assets/FaldaparaMujer.jpg'
    WHEN imagen_id = 6 THEN 'assets/CamisetaparaNiños.jpg'
    WHEN imagen_id = 7 THEN 'assets/JeansparaHombre.jpg'
    WHEN imagen_id = 8 THEN 'assets/CamisaPolodeHombre.jpg'
    WHEN imagen_id = 9 THEN 'assets/BlusadeMujer.jpg'
    WHEN imagen_id = 10 THEN 'assets/SudaderaconCapuchaparaNiños.jpg'
    WHEN imagen_id = 11 THEN 'assets/PantalónCortodeHombre.jpg'
    WHEN imagen_id = 12 THEN 'assets/JeansdeMujer.jpg'
    WHEN imagen_id = 13 THEN 'assets/VestidoparaNiños.jpg'
    WHEN imagen_id = 14 THEN 'assets/SuéterdeHombre.jpg'
    WHEN imagen_id = 15 THEN 'assets/CárdigandeMujer.jpg'
    WHEN imagen_id = 16 THEN 'assets/PantalónCortoparaNiños.jpg'
    WHEN imagen_id = 17 THEN 'assets/BlusadeMujer2.jpg'
    WHEN imagen_id = 18 THEN 'assets/SudaderaconCapuchaparaNiños2.jpg'
    WHEN imagen_id = 19 THEN 'assets/JeansdeMujer2.jpg'
    ELSE 'assets/no_image.jpg'
  END;