# Plugin WordPress: Menú Bares

Este plugin permite mostrar menús dinámicos para bares y restaurantes en una página de WordPress, detectando el `slug` desde la URL.

## 📦 Shortcode principal

[menu_dinamico_bares]

markdown
Copiar
Editar

Este shortcode:
- Detecta el slug (ej: `/nocturno/`)
- Busca al cliente correspondiente
- Muestra su menú agrupado por categoría

## 🛠️ Tablas necesarias

- `aa_clientes_autorizados (id, nombre, slug)`
- `aa_menu_categorias (id, nombre, orden)`
- `aa_menu_productos (id, cliente_id, categoria_id, nombre, descripcion, precio, orden)`

## 📂 Estructura

menu-bares/
├── menu-bares.php
├── README.md

shell
Copiar
Editar

## ✍️ Autor

desarrolloydisenio.com.ar