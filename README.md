# LeagueStats 🎮

LeagueStats es una plataforma integral diseñada para los entusiastas del entorno competitivo de **League of Legends**.
El proyecto combina el análisis de estadísticas detalladas con una experiencia de gamificación que permite a los usuarios participar en apuestas (Pick'ems) y comentar en las noticias diseñadas.

Este ecosistema está compuesto por tres grandes módulos:
* **Backend (API):** Desarrollado en **PHP Laravel 11**, encargado de la lógica de negocio, persistencia de datos y servicios RESTful. [cite: 48, 52]
* **Frontend Administrador (Web):** Desarrollado en **Angular**, permitiendo la gestión completa de ligas, equipos, jugadores y eventos. [cite: 25, 26]
* **Frontend Usuario (App Móvil):** Desarrollado en **Flutter** utilizando el patrón de diseño **BLoC** para una gestión de estado reactiva y fluida. [cite: 25, 27, 55]

---

## 🚀 Guía de Instalación del Backend (API)

Sigue estos pasos para configurar el núcleo del proyecto:

### 1. Clonar el repositorio
```bash
git clone [https://github.com/MiguelUrquizaG/leaguestats-api](https://github.com/MiguelUrquizaG/leaguestats-api)
cd leaguestats-api

```

### 2. Configuración del entorno (.env)

Crea un archivo llamado `.env` en la raíz del proyecto y copia exactamente el siguiente contenido (basado en la configuración oficial): 

```env
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:Hj0rhWiyZXbkYiVcfcpVNdKBSt+JEH+p+j392H2goro=
APP_DEBUG=true
APP_URL=http://localhost:8000
FRONTEND_URL=http://localhost:4200

APP_LOCALE=en
APP_FALLBACK_LOCALE=en
APP_FAKER_LOCALE=en_US

APP_MAINTENANCE_DRIVER=file
APP_MAINTENANCE_STORE=database

BCRYPT_ROUNDS=12

LOG_CHANNEL=stack
LOG_STACK=single
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=proyecto_api
DB_USERNAME=proyecto_user
DB_PASSWORD='Qpi.ScdAh1x(xaOT'

SESSION_DRIVER=file
SESSION_LIFETIME=120
SESSION_ENCRYPT=false
SESSION_PATH=/
SESSION_DOMAIN=null

BROADCAST_CONNECTION=log
FILESYSTEM_DISK=local
QUEUE_CONNECTION=database
CACHE_STORE=file

MEMCACHED_HOST=127.0.0.1

REDIS_CLIENT=phpredis
REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=log
MAIL_HOST=127.0.0.1
MAIL_PORT=25

```

### 3. Instalación y Base de Datos (Muy Importante) ⚠️

Para que la aplicación sea funcional y contenga los datos iniciales necesarios, es **obligatorio ejecutar las migraciones y los seeders**:

```bash
# Instalar dependencias de PHP
composer install

# Generar la clave de la aplicación
php artisan key:generate

# Ejecutar migraciones y cargar datos de prueba (SEEDERS)
php artisan migrate --seed

```

---

## 🔐 Credenciales de Administrador

Una vez ejecutados los seeders, podrás acceder al panel de administración con los siguientes datos:

* **URL del Panel (Web):** `http://localhost:4200`
* **Email:** `admin@leaguestats.com`
* **Contraseña:** `12345678`

---
## 🔐 Credenciales de Usuario

Una vez ejecutados los seeders, podrás acceder al programa como usuario con los siguientes datos:

* **URL del Panel (Flutter):** flutter
* **Email:** `raul@email.com`
* **Contraseña:** `12345678`

---

## 🛠️ Otros Componentes

### Web de Administración (Angular)

Permite la gestión de la base de datos de jugadores, equipos y la creación de eventos de partidas. 

1. `npm install`
2. `ng serve`

### Aplicación Móvil (Flutter)

Enfocada al usuario final para consulta de estadísticas, apuestas simbólicas y valoraciones. 

1. `flutter pub get`
2. `flutter run`

---

## ✨ Funcionalidades Destacadas

* **Sistema de Pick'em:** Apuestas simbólicas con puntos para ganar premios futuros. 


* **Valoración de Jugadores:** Calificación del desempeño individual tras cada partida. 


* **Estadísticas Detalladas:** Acceso a métricas de rendimiento como KDA, oro y resultados históricos. 


* **Noticias:** Sección de actualidad sobre el competitivo del League of Legends. 



---

**Autor:** Miguel Urquiza García 

**Proyecto Intermodular - Junio 2026** 
