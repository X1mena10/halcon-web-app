# Proyecto Halcón - Sistema de Inventario para Imprenta

## Descripción del Proyecto
Aplicación web desarrollada en **Laravel** para la gestión y control de inventarios en una imprenta. Permite administrar categorías, materiales, proveedores y movimientos de almacén en tiempo real.

## Diagrama Entidad-Relación (ER)

```mermaid
erDiagram
    CATEGORIES ||--o{ MATERIALS : "contiene"
    SUPPLIERS ||--o{ INVENTORY_MOVEMENTS : "provee"
    MATERIALS ||--o{ INVENTORY_MOVEMENTS : "registra"

    CATEGORIES {
        bigint id PK
        string name
    }

    MATERIALS {
        bigint id PK
        string name
        integer stock
        decimal unit_price
    }

    SUPPLIERS {
        bigint id PK
        string name
        string phone
        string email
    }

    INVENTORY_MOVEMENTS {
        bigint id PK
        string type
        integer quantity
    }
