# Menu Bares

Plugin personalizado para WordPress que permite mostrar y editar el menú de un bar mediante shortcodes. Desarrollado para ser utilizado por clientes directamente desde el frontend.

## 📦 Características

- Listado de productos categorizados por tipo (bebidas, comidas, etc.)
- Soporte para precios y descripciones
- Edición desde frontend protegida por login personalizado
- Acceso público mediante slug único (ej: `/nocturno-menu/`)

## 🧩 Shortcodes

- `[menu_bar]`  
  Muestra el menú público del bar según el slug en la URL.

- `[form_menu_cliente]`  
  Muestra el formulario para que el cliente (dueño del bar) edite su menú. Requiere autenticación.

## ⚙️ Estructura

menu-bares/
├── menu-bares.php # Plugin principal
├── README.md # Este archivo


## 🚀 Uso

1. Subir `menu-bares.php` a la carpeta `/wp-content/plugins/`.
2. Activar el plugin desde el panel de WordPress.
3. Crear una página con el shortcode `[menu_bar]` o `[form_menu_cliente]` según corresponda.
4. Ingresar usando el slug o usuario del cliente.

## 🛡️ Seguridad

- El menú público se carga usando el `slug` de la URL, sin requerir login.
- El formulario de edición del menú requiere validación mediante login del cliente.

---

Desarrollado por [albertohilal](https://github.com/albertohilal)


