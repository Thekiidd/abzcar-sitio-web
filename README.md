# ABZCAR - Sitio Web Corporativo

Sitio web informativo para la empresa ABZCAR, dedicada a servicios de mecánica automotriz y grúas.

[![GitHub](https://img.shields.io/badge/GitHub-Repository-blue?style=for-the-badge&logo=github)](https://github.com/Thekiidd/abzcar-sitio-web)
[![PHP](https://img.shields.io/badge/PHP-8.0+-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-8.0+-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com/)
[![XAMPP](https://img.shields.io/badge/XAMPP-8.0+-FB7A24?style=for-the-badge&logo=apache&logoColor=white)](https://www.apachefriends.org/)

## Características

- **Diseño Responsive**: Compatible con dispositivos móviles, tablets y computadoras
- **Base de Datos MySQL**: Gestión dinámica de contenido
- **Panel de Administración**: Interfaz para gestionar servicios, testimonios, proyectos y FAQs
- **Formulario de Contacto**: Sistema de contacto funcional
- **Tecnologías Modernas**: HTML5, CSS3, JavaScript, PHP

## Estructura del Proyecto

```
abzcar/
├── assets/
│   ├── css/
│   │   └── style.css
│   ├── js/
│   │   └── main.js
│   ├── images/
│   └── fonts/
├── includes/
│   ├── header.php
│   ├── navbar.php
│   └── footer.php
├── config/
│   └── config.php
├── database/
│   └── init.sql
├── admin/
│   ├── index.php
│   ├── servicios.php
│   ├── testimonios.php
│   ├── proyectos.php
│   ├── faqs.php
│   └── contactos.php
├── index.php
├── servicios.php
├── proyectos.php
├── testimonios.php
├── faqs.php
├── contacto.php
└── README.md
```

## Instalación

### Requisitos Previos

- XAMPP (Apache + MySQL + PHP)
- Navegador web moderno

### Pasos de Instalación

1. **Clonar el repositorio**
   ```bash
   git clone https://github.com/Thekiidd/abzcar-sitio-web.git
   cd abzcar-sitio-web
   ```
   
   O descargar el proyecto y colocar todos los archivos en la carpeta `htdocs/abzcar/` de XAMPP

2. **Configurar la Base de Datos**
   - Abrir phpMyAdmin (http://localhost/phpmyadmin)
   - Crear una nueva base de datos llamada `abzcar`
   - Importar el archivo `database/init.sql` para crear las tablas

3. **Configurar la Conexión**
   - Copiar el archivo de configuración de ejemplo:
     ```bash
     cp config/config.example.php config/config.php
     ```
   - Editar `config/config.php` con tus credenciales de base de datos:
     ```php
     $host = 'localhost';
     $user = 'root';
     $password = '';
     $db = 'abzcar';
     ```

4. **Iniciar Servicios**
   - Iniciar Apache y MySQL en XAMPP
   - Acceder al sitio: http://localhost/abzcar/

## Uso

### Sitio Web Público

- **Inicio**: http://localhost/abzcar/
- **Servicios**: http://localhost/abzcar/servicios.php
- **Proyectos**: http://localhost/abzcar/proyectos.php
- **Testimonios**: http://localhost/abzcar/testimonios.php
- **FAQs**: http://localhost/abzcar/faqs.php
- **Contacto**: http://localhost/abzcar/contacto.php

### Panel de Administración

**PROXIMAMENTE.......**

## Base de Datos

### Tablas Principales

1. **servicios**: Almacena los servicios ofrecidos
   - id, nombre, descripcion, categoria

2. **testimonios**: Comentarios de clientes
   - id, nombre_cliente, comentario, fecha

3. **contactos**: Formularios de contacto
   - id, nombre, correo, telefono, mensaje, fecha

4. **proyectos**: Trabajos realizados
   - id, titulo, descripcion, imagen, fecha

5. **faqs**: Preguntas frecuentes
   - id, pregunta, respuesta

## Personalización

### Estilos CSS
- Editar `assets/css/style.css` para modificar la apariencia
- El diseño es responsive y se adapta a diferentes dispositivos

### Contenido
- Usar el panel de administración para gestionar contenido dinámico
- Los cambios se reflejan automáticamente en el sitio web

## Despliegue en Hostinger

1. **Subir archivos** via FTP al directorio público
2. **Crear base de datos** en el panel de Hostinger
3. **Importar** `database/init.sql`
4. **Actualizar** `config/config.php` con las credenciales de Hostinger
5. **Configurar** dominio y SSL si es necesario

## Soporte

Para soporte técnico o consultas sobre el proyecto, contactar al desarrollador.

## Contribución

Si deseas contribuir a este proyecto:

1. Haz un Fork del repositorio
2. Crea una rama para tu feature (`git checkout -b feature/AmazingFeature`)
3. Commit tus cambios (`git commit -m 'Add some AmazingFeature'`)
4. Push a la rama (`git push origin feature/AmazingFeature`)
5. Abre un Pull Request

## Licencia

Este proyecto fue desarrollado específicamente para ABZCAR.

## Autor

Desarrollado para ABZCAR - Servicios de Mecánica Automotriz y Grúas.

---

⭐ Si este proyecto te ha sido útil, ¡dale una estrella al repositorio! 
