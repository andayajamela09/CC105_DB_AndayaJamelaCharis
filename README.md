# CC105_DB_AndayaJamelaCharis

SUBMITTED BY:
Andaya Jamela Charis A.

BSCS 2A


SHORT REPORT/ README

•	System overview and Purpose
•	Table description and relationships
•	Sample outputs or screenshots of query results


System Overview and Purpose
The Inventory Management System is a web-based application designed to record, update, monitor, and manage product stocks for small businesses.
It allows the user to:

•	Add new products to inventory
•	Update product information such as quantity, price, category, and supplier
•	Delete products that are no longer needed
•	Automatically log inventory changes for tracking (e.g., ADD, UPDATE)
•	View a complete list of products in a clean and organized table
This system helps businesses maintain accurate stock levels, prevent shortages, and track product movement efficiently.
This system helps businesses maintain accurate stock levels, prevent shortages, and track product movement efficiently.

Table Descriptions and Relationships

categories
Stores product categories.
Column	Description
id (PK)	Unique category ID
category_name	Name of category (e.g., Electronics, Furniture)

suppliers
Stores supplier information.
Column	Description
id (PK)	Unique supplier ID
supplier_name	Name of supplier
address	Supplier address
contact_number	Phone number of supplier



products
Main table storing all product information.
Column	Description
id (PK)	Product ID
name	Product name
category_id (FK) categories.id	Category of the product
Supplier_id (FK) suppliers.id	Supplier of the product
quantity	Current stock level
price	Product price
created_at	Auto timestamp when added

Relationships:
•	A product belongs to one category
•	A product belongs to one supplier

inventory_logs
Tracks all product changes.
Column	Description
id (PK)	Log ID
product_id (FK) → products.id	Product affected
User_id	Default user who made the action
activity	ADD / UPDATE
quantity_before	Previous quantity
quantity_after	New quantity
log_date	Timestamp

users
(Only if you created this table if not, remove this section )
Stores user information for logging purposes.

Relationships Diagram Summary
•	categories → products = One-to-Many
•	suppliers → products = One-to-Many
•	products → inventory_logs = One-to-Many





Sample Outputs / Query Examples

Show All Products
 

Show All Categories
 

Show All Suppliers
 



Show Product Logs
 

Count how many products per category
 


Conclusion
This Inventory Management System successfully fulfills the requirements for maintaining product records, tracking inventory changes, and providing an organized interface for CRUD operations. The system is efficient, beginner-friendly, and scalable for future improvements such as authentication, reporting, and automated low-stock alerts.

