<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Sobre Laravel

Laravel es un framework de aplicaciones web con una sintaxis expresiva y elegante. Creemos que el desarrollo debe ser una experiencia agradable y creativa para ser verdaderamente gratificante. Laravel elimina las dificultades del desarrollo al facilitar las tareas comunes que se utilizan en muchos proyectos web.


## Instalación
**Para instatalas dependencias necesarias**

    npm install

**Instalar SCSS**

    npm add -D sass-embedded

Ejecute 


    npm run dev



# **Requerimientos Funcionales y No Funcionales**
**Funcionales**

•	Perfil de usuario: Registro y autenticación de clientes y barbero.

•	Gestión de citas: Permitir la selección de fechas y horas.

•	Panel de administración: Control de citas y de horarios del personal. 

**No Funcionales**

•	Seguridad: Encriptación de datos y autenticación segura.

•	Usabilidad: Interfaz intuitiva y fluida en dispositivos móviles.

•	Disponibilidad: Alta disponibilidad y redundancia de datos.

# Arquitectura de la Aplicación
**Elección de Plataforma y Tecnología**

•	Frontend: Blade (s un motor de plantillas que se usa para generar las páginas en el front-end).

•	Backend: Node.js 

•	Base de Datos: MySQL para almacenar información de usuarios y citas.
Estructura de la Base de Datos

•	Usuarios: Información básica, roles (cliente/barbero), historial de citas.

•	Citas: Fecha, hora, usuarios.

•	Servicios: Nombre del servicio y precio.
 
# Diseño de la Interfaz de Usuario (UI/UX)
**Investigación y Análisis**

•	Diseño centrado en el usuario: Crear prototipos de interfaces basados en la experiencia deseada para el cliente.

•	Wireframes: Bocetos iniciales para cada pantalla clave.
Pantallas Principales

•	Registro y Login: Acceso para clientes y barbero.

•	Pantalla de Inicio: Servicios.

•	Calendario de Citas: Selección de fechas y horas disponibles.

•	Historial de Citas: Visualización de citas pasadas y futuras.

•	Panel de Administración (para barberos): Gestión de disponibilidad y citas.
Desarrollo e Integración de Funcionalidades

**Creación de Backend**

•	Configuración del servidor y bases de datos.

•	Desarrollo de endpoints para registro de usuario, agendamiento de citas y notificaciones.

•	Integración de autenticación segura.

**Implementación del Frontend**

•	Integración de diseño de UI en React Native.

•	Implementación de navegación entre pantallas.

•	Conexión con el backend para obtener y enviar datos.

**Pruebas Funcionales**

•	Validación de los flujos de usuario en cada pantalla.

•	Pruebas de creación, edición y cancelación de citas.

**Pruebas de Usabilidad**

•	Tests A/B para interfaces de usuario.

•	Pruebas con usuarios reales para recoger feedback y mejorar la usabilidad.
Seguridad y Rendimiento

•	Pruebas de carga: Asegurar la escalabilidad.

•	Pruebas de seguridad: Validación de la seguridad en la autenticación y protección de datos.

# Lanzamiento y Mantenimiento
**Preparación para el Lanzamiento**

•	Marketing: Planificación de campañas para la promoción de la app.

•	Incorporación de Feedback Inicial: Escuchar a los primeros usuarios para mejoras rápidas.

**Actualizaciones y Soporte**

•	Mejoras continuas: Escuchar feedback e implementar nuevas funciones.

•	Soporte: Creación de canales de soporte para resolver problemas de usuarios.
****
