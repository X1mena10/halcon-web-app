# Halcón Backend - API REST (Laravel)

API REST desarrollada con Laravel 10 para el sistema de gestión y distribución de materiales de construcción **"Halcón"**. Este backend maneja los recursos principales de usuarios y órdenes, implementando operaciones CRUD, validaciones, relaciones Eloquent y borrado lógico (*soft deletes*).

## Endpoints Disponibles

### Usuarios (`/api/users`)
* **`POST /api/users`**
  * **Descripción:** Registra un nuevo usuario en el sistema.
  * **Datos requeridos (JSON):** `name`, `email`, `password`.

### Órdenes (`/api/orders`)
* **`POST /api/orders`**
  * **Descripción:** Crea una nueva orden asociada a un usuario existente.
  * **Datos requeridos (JSON):** `user_id`, `invoice_number`, `total`, `status`, `description`.
* **`GET /api/orders/{id}`**
  * **Descripción:** Consulta los detalles de una orden específica por su ID, incluyendo la relación con el usuario.
* **`PUT /api/orders/{id}`**
  * **Descripción:** Actualiza la información o estatus de una orden existente.
* **`DELETE /api/orders/{id}`**
  * **Descripción:** Aplica un borrado lógico (*soft delete*) a una orden sin eliminarla permanentemente de la base de datos.
* **`GET /api/orders/archived`**
  * **Descripción:** Consulta la lista especial de todas las órdenes que han sido archivadas mediante borrado lógico.