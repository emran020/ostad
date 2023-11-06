SELECT
    Categories.name AS category_name, SUM(oi.quantity * oi.unit_price) AS total_revenue
FROM Categories LEFT JOIN Products
ON Categories.category_id = Products.category_id
LEFT JOIN Order_Items oi
ON Products.product_id = oi.product_id
GROUP BY Categories.category_id, c.name
ORDER BY total_revenue DESC;