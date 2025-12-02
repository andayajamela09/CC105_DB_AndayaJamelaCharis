SELECT c.category_name, p.name AS product_name
FROM categories c
LEFT JOIN products p ON p.category_id = c.id;
