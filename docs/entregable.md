# Final Deliverable - "Halcón" Web Application Project

---

## 1. Introduction and Problem Analysis

The company Halcón, dedicated to the distribution of construction materials, requires the automation of its key processes. The proposed solution consists of a web application developed with the Laravel stack (PHP / MySQL) that integrates:

* Public order status lookup for customers (`Ordered`, `In process`, `In route`, `Delivered`).
* Administrative dashboard with Role-Based Access Control (`Sales`, `Purchasing`, `Warehouse`, `Route`, `Admin`).
* Full tracking of the order lifecycle and integration of photographic delivery evidence.
* Data auditing via soft deletes (*Soft-Delete*).

---

## 2. Working Methodology

### Framework Selection
The Scrum framework was selected for the development of the "Halcón" Web Application.

### Justification
Automating material distribution processes involves multiple departments with specific requirements. Scrum is the ideal methodology due to:

1. **Incremental and Prioritized Deliveries:** Enables deploying high-value operational modules first, such as public order lookup and role-based access control.
2. **Adaptability to Change:** Short iterations (2-week Sprints) make it easy to adjust warehouse and route workflows based on direct feedback from operational staff.
3. **Transparency and Quality Control:** Scrum events (Daily, Review, and Retrospect) maintain continuous visibility into technical progress and block resolution.

---

## 3. System Diagrams

### A. BPMN Diagram (Business Logic)
![BPMN Diagram](images/bpmn-diagram.png)

### B. Use Case Diagram
![Use Case Diagram](images/use-cases-diagram.png)

### C. Class Diagram
![Class Diagram](images/class-diagram.png)

### D. Activity Diagram
![Activity Diagram](images/activity-diagram.png)

---

## 4. Database and Entity-Relationship (ER) Diagram

### Entity-Relationship Diagram
![Entity-Relationship Diagram](images/er-diagram.png)

### Entity and Data Type Specifications

1. **`users`**: Stores credentials and roles for administrative and operational staff.
   * Attributes: `id` (PK), `name` (VARCHAR), `email` (VARCHAR), `password` (VARCHAR), `role` (ENUM), `deleted_at` (TIMESTAMP).
2. **`products`**: Construction materials catalog.
   * Attributes: `id` (PK), `sku` (VARCHAR), `name` (VARCHAR), `stock` (INT), `price` (DECIMAL), `deleted_at` (TIMESTAMP).
3. **`orders`**: Record of the order and its current workflow status.
   * Attributes: `id` (PK), `tracking_number` (VARCHAR), `customer_name` (VARCHAR), `status` (ENUM), `user_id` (FK), `deleted_at` (TIMESTAMP).
4. **`order_items`**: Details of the items requested in each order.
   * Attributes: `id` (PK), `order_id` (FK), `product_id` (FK), `quantity` (INT), `unit_price` (DECIMAL).
5. **`delivery_evidences`**: Attached photo serving as proof of delivery.
   * Attributes: `id` (PK), `order_id` (FK), `image_path` (VARCHAR), `uploaded_at` (TIMESTAMP).

---

## 5. Final Reflections

1. **How did the clear definition of roles and agile methodologies influence the design of the Halcón application?**
   The Scrum framework made it possible to break down the distributor's operational workflow into well-defined user stories aligned with each role (`Sales`, `Purchasing`, `Warehouse`, `Route`, `Admin`), ensuring that the technical solution directly addresses the real needs of every process stage.

2. **Why is it essential to properly structure the database before writing code in Laravel?**
   Designing the Entity-Relationship model beforehand ensures data referential integrity, simplifies the creation of Eloquent ORM migrations and models, and guarantees the proper operation of critical features such as data auditing and soft deletes (*Soft-Delete*).
