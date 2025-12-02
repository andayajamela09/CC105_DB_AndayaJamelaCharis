SELECT p.id, p.name, p.price, c.category_name
FROM products p
JOIN categories c ON p.category_id = c.id
WHERE c.category_name = 'Electronics';
