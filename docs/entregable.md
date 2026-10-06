# Evidencia 1 - Proyecto Halcón
## Sistema de Gestión de Inventario para Imprenta

**Repositorio:** [X1mena10/halcon-web-app](https://github.com/X1mena10/halcon-web-app)  
**Framework:** Laravel  

---

## 1. Descripción del Proyecto
El **Proyecto Halcón** es un sistema web concebido para la administración y control de inventario de una imprenta.

---

## 2. Arquitectura de Base de Datos (Diagrama ER)

```mermaid
erDiagram
    categories ||--o{ materials : "contiene"
    suppliers ||--o{ inventory_movements : "provee"
    materials ||--o{ inventory_movements : "registra"

    categories {
        bigint id PK
        string name
        text description
    }

    materials {
        bigint id PK
        bigint category_id FK
        string name
        integer stock
        decimal unit_price
    }

    suppliers {
        bigint id PK
        string name
        string phone
        string email
    }

    inventory_movements {
        bigint id PK
        bigint material_id FK
        bigint supplier_id FK
        string type
        integer quantity
    }
git add docs/entregable.md
git commit -m "Actualizar entregable.md con Diagrama ER Mermaid"
git push origin main
