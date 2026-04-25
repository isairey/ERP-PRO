<p align="center">
  <img src="https://raw.githubusercontent.com/aureuserp/temp-media/master/aureus-logo-light.png" width="140" />
</p>

<h1 align="center">Aureus ERP</h1>

<p align="center">
  <b>🚀 Sistema ERP Open Source moderno para la gestión empresarial</b><br>
  <sub>Laravel 11 • FilamentPHP • PHP 8.3+</sub>
</p>

<p align="center">
  <img src="https://img.shields.io/badge/PHP-8.3+-blue?style=flat-square">
  <img src="https://img.shields.io/badge/Laravel-11-red?style=flat-square">
  <img src="https://img.shields.io/badge/License-MIT-green?style=flat-square">
  <img src="https://img.shields.io/badge/Status-Production-success?style=flat-square">
</p>

---

## 💻 Sobre el proyecto

**Aureus ERP** es una solución completa de planificación de recursos empresariales (ERP) diseñada para optimizar la gestión de negocios modernos.

El sistema permite administrar diferentes áreas como:

- 📊 Contabilidad  
- 📦 Inventarios  
- 👥 Recursos Humanos  
- 💰 Ventas y CRM  
- 📁 Proyectos  

Su arquitectura modular permite escalar fácilmente y adaptarse a cualquier tipo de empresa.

---

## ⚙️ Características

- [x] Arquitectura moderna con Laravel
- [x] Sistema modular basado en plugins
- [x] Interfaz moderna con TailwindCSS
- [x] Control de acceso por roles (RBAC)
- [x] Reportes y analítica en tiempo real
- [x] Soporte multi-idioma
- [x] Integración con APIs externas
- [x] Actualizaciones dinámicas con Livewire

---

## 🧩 Módulos del sistema

### 🔹 Núcleo
- Seguridad
- Analítica
- Comunicación interna

### 🔹 Finanzas
- Contabilidad
- Facturación
- Pagos

### 🔹 Operaciones
- Inventarios
- Productos
- Compras
- Ventas

### 🔹 Recursos Humanos
- Empleados
- Reclutamiento
- Control de asistencias

### 🔹 CRM
- Clientes
- Proveedores
- Contactos

### 🔹 Proyectos
- Gestión de proyectos
- Blogs
- Sitio web

---

## 🚀 Instalación

### 📋 Requisitos

- PHP 8.3+
- Composer
- Node.js 18+
- MySQL o SQLite

### ⚡ Pasos

```bash
# Clonar repositorio
git clone https://github.com/isairey/ERP-PRO.git
cd ERP-PRO

# Instalar dependencias
composer install

# Configurar entorno
cp .env.example .env
php artisan key:generate

# Instalar sistema
php artisan erp:install

# Ejecutar servidor
php artisan serve
