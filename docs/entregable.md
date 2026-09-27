# Entregable Final - Proyecto Aplicación Web "Halcón"

---

## 1. Introducción y Análisis del Problema
La empresa **Halcón**, dedicada a la distribución de materiales de construcción, requiere la automatización de sus procesos clave. La solución planteada consiste en una aplicación web desarrollada con el *stack* **Laravel (PHP / MySQL)** que integra:
* Consulta pública del estado del pedido para clientes (*Ordered*, *In process*, *In route*, *Delivered*).
* Dashboard administrativo con control de accesos basado en roles (*Sales*, *Purchasing*, *Warehouse*, *Route*, *Admin*).
* Seguimiento completo del ciclo de vida del pedido e integración de evidencias fotográficas.
* Auditoría de datos mediante borrado lógico (*Soft-Delete*).

---

## 2. Estructura y Artefactos del Repositorio

Todos los artefactos requeridos por la rúbrica se encuentran organizados dentro de la carpeta `docs/`:

1. **Metodología de Trabajo:** [metodologia.md](metodologia.md)
   * Detalle y justificación del marco ágil **Scrum**.
2. **Diagramas del Sistema:** [diagramas.md](diagramas.md)
   * Diagrama BPMN (`bpmn-diagram.png`).
   * Diagrama de Casos de Uso (`use-cases-diagram.png`).
   * Diagrama de Clases (`class-diagram.png`).
   * Diagrama de Actividades (`activity-diagram.png`).
   * Diagrama Entidad-Relación (`er-diagram.png`).

---

## 3. Reflexión Personal

El desarrollo del análisis y diseño arquitectónico de la plataforma **Halcón** nos permitió comprender la importancia de traducir los requerimientos operativos de una empresa logística a un modelo de software robusto. 

La estructuración de permisos orientados a roles garantiza que cada área (Ventas, Almacén, Compras y Ruta) opere únicamente sobre los datos de su competencia, reduciendo cuellos de botella y asegurando la trazabilidad del producto. Por otro lado, la adopción del patrón de *Soft Deletes* añade una capa vital de seguridad para la recuperación de información y auditoría de pedidos. La colaboración a través de Git y GitHub facilitó la gestión del proyecto bajo el marco de trabajo Scrum.
