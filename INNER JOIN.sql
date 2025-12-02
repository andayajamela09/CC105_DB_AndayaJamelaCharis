SELECT p.name, p.price, p.quantity, 
       c.category_name, s.supplier_name
FROM products p
JOIN categories c ON p.category_id = c.id
JOIN suppliers s ON p.supplier_id = s.id;
