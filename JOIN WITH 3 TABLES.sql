SELECT il.id, p.name AS product, u.username, il.action, il.quantity, il.log_date
FROM inventory_logs il
JOIN products p ON il.product_id = p.id
JOIN users u ON il.user_id = u.id;
