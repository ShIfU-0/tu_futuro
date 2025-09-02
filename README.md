# 🎯 Tu Futuro - Sistema de Orientación Vocacional

## 📋 Descripción

**Tu Futuro** es una aplicación web desarrollada en PHP que proporciona un sistema completo de orientación vocacional para estudiantes. La aplicación incluye un test de intereses profesionales, administración de usuarios, generación de resultados y un panel administrativo completo.

## ✨ Características Principales

- **Test de Orientación Vocacional**: Cuestionario interactivo con preguntas sobre diferentes áreas de interés
- **Sistema de Usuarios**: Registro, autenticación y gestión de perfiles de estudiantes
- **Panel Administrativo**: Interfaz para administradores con gestión completa de usuarios
- **Generación de Resultados**: Sistema de evaluación y presentación de resultados vocacionales
- **Generación de PDF**: Exportación de resultados en formato PDF usando DOMPDF
- **Interfaz Responsiva**: Diseño adaptable para diferentes dispositivos

## 🏗️ Estructura del Proyecto

```
tu_futuro/
├── CSS/                    # Archivos de estilos
├── HTML/                   # Archivos PHP y HTML principales
│   ├── admin.php          # Panel de administración
│   ├── admin_preg.php     # Administración de preguntas
│   ├── conexion.php       # Configuración de base de datos
│   ├── guardar_dts.php    # Procesamiento de respuestas del test
│   ├── login.php          # Sistema de autenticación
│   ├── principal.php      # Test principal de orientación
│   ├── resultados.php     # Visualización de resultados
│   └── dompdf/            # Librería para generación de PDFs
├── IMAGENES/              # Recursos gráficos del proyecto
└── SCRIPS/                # Scripts adicionales
```

## 🚀 Requisitos del Sistema

- **Servidor Web**: Apache/Nginx
- **PHP**: 7.4 o superior
- **Base de Datos**: MySQL 5.7 o superior
- **Extensiones PHP**: mysqli, gd, mbstring

## 📦 Instalación

### 1. Clonar el Repositorio
```bash
git clone [URL_DEL_REPOSITORIO]
cd tu_futuro
```

### 2. Configurar la Base de Datos
1. Crear una base de datos MySQL llamada `proyecto`
2. Importar la estructura de la base de datos (si existe un archivo SQL)
3. Configurar las credenciales en `HTML/conexion.php`:

```php
$cone = new mysqli('localhost', 'root', '', 'proyecto');
```

### 3. Configurar el Servidor Web
- Colocar el proyecto en el directorio web del servidor
- Asegurar que PHP tenga permisos de escritura en las carpetas necesarias

### 4. Acceder a la Aplicación
- Abrir el navegador y dirigirse a la URL del proyecto
- La página principal se encuentra en `HTML/inicio.html`

## 🎮 Uso de la Aplicación

### Para Estudiantes
1. **Acceso**: Navegar a la página principal
2. **Test Vocacional**: Completar el cuestionario de intereses
3. **Resultados**: Consultar los resultados de orientación vocacional
4. **Exportar**: Descargar resultados en formato PDF

### Para Administradores
1. **Login**: Acceder con credenciales de administrador
2. **Gestión de Usuarios**: Crear, modificar y eliminar usuarios
3. **Administración de Preguntas**: Gestionar el banco de preguntas del test
4. **Reportes**: Ver estadísticas y resultados generales

## 🔧 Funcionalidades Técnicas

### Sistema de Test
- **Preguntas Dinámicas**: Sistema de preguntas configurable
- **Escala de Respuestas**: Sistema de 4 niveles (Nada, Poco, Regular, Mucho)
- **Áreas de Interés**: Cobertura de múltiples campos vocacionales

### Gestión de Datos
- **CRUD Completo**: Operaciones de Crear, Leer, Actualizar y Eliminar
- **Validación de Formularios**: Verificación de datos de entrada
- **Seguridad**: Protección contra inyección SQL básica

### Generación de PDF
- **DOMPDF**: Librería integrada para generación de documentos
- **Plantillas Personalizables**: Formato profesional para resultados
- **Descarga Automática**: Generación y descarga automática de PDFs

## 🎨 Personalización

### Estilos CSS
- **Temas**: Múltiples archivos CSS para diferentes secciones
- **Responsive Design**: Adaptación automática a diferentes dispositivos
- **Componentes**: Estilos modulares y reutilizables

### Configuración
- **Base de Datos**: Configuración centralizada en `conexion.php`
- **Rutas**: Configuración de rutas relativas y absolutas
- **Imágenes**: Sistema de logos y recursos gráficos personalizables

## 📊 Base de Datos

### Tablas Principales
- **usuarios**: Información de estudiantes y administradores
- **preguntas**: Banco de preguntas del test vocacional
- **respuestas**: Respuestas de los estudiantes
- **resultados**: Evaluaciones y orientaciones vocacionales

## 🔒 Seguridad

- **Validación de Entrada**: Verificación de datos de formularios
- **Prevención SQL Injection**: Uso de consultas preparadas
- **Control de Acceso**: Sistema de roles para administradores
- **Sanitización**: Limpieza de datos de entrada

## 🚧 Limitaciones y Mejoras Futuras

### Limitaciones Actuales
- Sistema de autenticación básico
- Validación de formularios limitada
- Interfaz administrativa básica

### Mejoras Propuestas
- Sistema de autenticación robusto con JWT
- API REST para integración con otras aplicaciones
- Dashboard administrativo con gráficos y estadísticas
- Sistema de notificaciones por email
- Múltiples idiomas
- Aplicación móvil nativa

## 🤝 Contribución

Para contribuir al proyecto:

1. Fork del repositorio
2. Crear una rama para tu feature (`git checkout -b feature/nueva-funcionalidad`)
3. Commit de tus cambios (`git commit -am 'Agregar nueva funcionalidad'`)
4. Push a la rama (`git push origin feature/nueva-funcionalidad`)
5. Crear un Pull Request

## 📝 Licencia

Este proyecto está bajo la Licencia [ESPECIFICAR_LICENCIA]. Ver el archivo `LICENSE` para más detalles.

## 📞 Contacto

- **Desarrollador**: [TU_NOMBRE]
- **Email**: [TU_EMAIL]
- **Proyecto**: Tu Futuro - Sistema de Orientación Vocacional

## 🙏 Agradecimientos

- **DOMPDF**: Por la librería de generación de PDFs
- **Comunidad PHP**: Por el soporte y documentación
- **Contribuidores**: Todos aquellos que han ayudado en el desarrollo

---

**Tu Futuro** - Ayudando a los estudiantes a encontrar su camino profesional 🎓✨