# 📦 fundamentos-backend

## 🧾 Descripción

Aplicación web construida con Laravel 13 enfocada en el aprendizaje del backend desde cero.

Este proyecto sigue un enfoque práctico y progresivo para comprender cómo funciona Laravel internamente, desarrollando fundamentos sólidos en lógica, arquitectura y buenas prácticas.

---

## 🎯 Objetivos

* Comprender el flujo completo de una aplicación web

* Aprender a trabajar con:

  * Rutas
  * Controladores
  * Modelos
  * Validación (Form Requests)
  * Vistas (Blade)
  * Base de datos

* Aplicar buenas prácticas

* Desarrollar lógica

---

## 🛠️ Tecnologías utilizadas

* PHP

* Laravel

* Blade

* MySQL

---

## 🚀 Instalación del proyecto

Sigue estos pasos para ejecutar el proyecto en tu máquina local:

### 1. Clonar el repositorio

```bash id="clon1"
git clone https://github.com/MoisesOsorioD/fundamentos-backend.git
```

### 2. Entrar al proyecto

```bash id="clon2"
cd fundamentos-backend
```

### 3. Instalar dependencias

```bash id="clon3"
composer install
```

---

### 4. Configurar entorno

```bash id="clon4"
cp .env.example .env
php artisan key:generate
```

Luego edita el archivo `.env` y configura tu base de datos:

```env id="clon5"
DB_DATABASE=nombre_de_tu_bd
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_password
```

---

### 5. Ejecutar migraciones

```bash id="clon6"
php artisan migrate
```

---

### 6. Levantar el servidor

```bash id="clon7"
php artisan serve
```

Abrir en el navegador:

---

## 📚 Estructura del proyecto (fundamental)

* `routes/`
  Define las rutas de la aplicación (URLs)

* `app/Http/Controllers/`
  Contienen la lógica de la aplicación

* `app/Models/`
  Representan las tablas de la base de datos
  (cada modelo corresponde a una tabla)

* `app/Http/Requests/`
  Manejan la validación de datos antes de procesarlos

* `resources/views/`
  Vistas (interfaz que ve el usuario)

* `database/migrations/`
  Definen la estructura de la base de datos

---

## 🧠 Enfoque de aprendizaje

Este proyecto está diseñado para:

* Aprender desde lo más básico

* Entender cada parte del sistema

* Construir conocimiento sólido
