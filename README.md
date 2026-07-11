# 💻 LaptopHub — Интернет-магазин ноутбуков

[![PHP](https://img.shields.io/badge/PHP-7.4+-blue.svg)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-5.7+-orange.svg)](https://www.mysql.com/)
[![HTML5](https://img.shields.io/badge/HTML5-E34F26?logo=html5&logoColor=white)](https://developer.mozilla.org/en-US/docs/Web/HTML)
[![CSS3](https://img.shields.io/badge/CSS3-1572B6?logo=css3&logoColor=white)](https://developer.mozilla.org/en-US/docs/Web/CSS)
[![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?logo=javascript&logoColor=black)](https://developer.mozilla.org/en-US/docs/Web/JavaScript)
[![Status](https://img.shields.io/badge/status-coursework-brightgreen.svg)]()

**Русский** | **[English (below)](#english-version)**

---

## Оглавление
1. [Описание проекта](#описание-проекта)
2. [Используемые технологии](#используемые-технологии)
3. [Установка и запуск](#установка-и-запуск)
4. [Структура проекта](#структура-проекта)
5. [Структура базы данных](#структура-базы-данных)
6. [Функциональные возможности](#функциональные-возможности)
7. [Скриншоты](#скриншоты)
8. [Пользователи](#пользователи)

---

## Описание проекта

**LaptopHub** — это полноценный интернет-магазин ноутбуков, разработанный в рамках курсового проекта. Сайт позволяет пользователям просматривать каталог ноутбуков, регистрироваться, входить в личный кабинет и оставлять заявки.

###  Основные функции
- **Просмотр каталога** — список ноутбуков с кратким описанием
- **Детальная страница товара** — полная информация, характеристики, слайдер изображений
- **Регистрация и авторизация** — система пользователей с проверкой уникальности
- **Личный кабинет** — просмотр данных пользователя, выход
- **Блог** — полезные статьи о ноутбуках
- **Страница поддержки** — контакты и помощь

---

##  Используемые технологии

| Технология | Версия | Назначение |
|:---|:---|:---|
| **PHP** | 7.4+ | Серверный язык программирования |
| **MySQL** | 5.7+ | Система управления базами данных |
| **HTML5** | — | Структура страниц |
| **CSS3** | — | Стилизация и адаптивный дизайн |
| **JavaScript** | — | Интерактивность на клиентской стороне |
| **XAMPP** | — | Локальный сервер для разработки |

---

##  Установка и запуск

###  Предварительные требования
- **XAMPP** (или любой другой веб-сервер с PHP и MySQL)
- **PHP 7.4+**
- **MySQL 5.7+**
- **Браузер (Chrome, Firefox, Edge)**

###  Шаги установки

**1. Клонируйте репозиторий**

```bash
git clone https://github.com/interiys/Website.git
cd Website
```

**2. Скопируйте проект в папку сервера**
- **XAMPP**: `C:\xampp\htdocs\Website`
- **OpenServer**: `C:\OpenServer\domains\Website`

**3. Импортируйте базу данных**
1. Откройте **phpMyAdmin** по адресу: `http://localhost/phpmyadmin`
2. Создайте новую базу данных с названием `mydb`
3. Импортируйте файлы:
   - `catalog.sql`
   - `users.sql`

**4. Настройте подключение к БД**
В файле `scripts/db.php` проверьте параметры подключения:

```php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
$port = 3306;
```

**5. Запустите сервер**
- **XAMPP**: Запустите **Apache** и **MySQL**
- **OpenServer**: Нажмите кнопку **"Запустить"**

**6. Откройте сайт в браузере**
```
http://localhost/Website/index.php
```

---

##  Структура проекта

```
Website/
│
├── 📁 frames/           # Шаблоны страниц
│   ├── head.php
│   ├── header.php
│   └── footer.php
│
├── 📁 scripts/          # PHP-скрипты
│   ├── db.php
│   ├── login.php
│   ├── register.php
│   ├── exit.php
│   ├── checkEmail.php
│   └── checkUserName.php
│
├── 📁 js/               # JavaScript-скрипты
│   ├── formScript.js
│   ├── slider.js
│   └── createMenu.js
│
├── 📁 img/              # Изображения
├── 📁 logo/             # Логотипы
│
├── 📄 index.php         # Главная страница
├── 📄 Catalog.php       # Каталог
├── 📄 product.php       # Страница товара
├── 📄 Blog.php          # Блог
├── 📄 support.php       # Поддержка
├── 📄 user.php          # Личный кабинет
├── 📄 style.css         # Стили
├── 📄 catalog.sql       # SQL-дамп товаров
├── 📄 users.sql         # SQL-дамп пользователей
└── 📖 README.md         # Описание проекта
```

---

##   Структура базы данных

### Таблица `catalog` (Товары)

| Поле | Тип | Описание |
|:---|:---|:---|
| `id` | INT (PK) | Уникальный ID товара |
| `name` | VARCHAR(255) | Название ноутбука |
| `logo` | VARCHAR(255) | Путь к основному изображению |
| `images` | VARCHAR(255) | Пути к изображениям для слайдера |
| `shortdescription` | VARCHAR(255) | Краткое описание |
| `description` | TEXT | Полное описание с HTML-разметкой |
| `type` | VARCHAR(255) | Тип товара (Laptop) |

### Таблица `users` (Пользователи)

| Поле | Тип | Описание |
|:---|:---|:---|
| `id` | INT (PK) | Уникальный ID пользователя |
| `email` | VARCHAR(255) | Email пользователя |
| `name` | VARCHAR(255) | Имя пользователя (логин) |
| `password` | VARCHAR(255) | Хеш пароля (SHA-256 + соль) |

---

##  Функциональные возможности

###  Основные функции

| Функция | Описание | Иконка |
|:---|:---|:---:|
| **Каталог товаров** | Отображение всех ноутбуков с краткими описаниями | 📋 |
| **Детальная страница** | Полная информация, характеристики, слайдер | 🔍 |
| **Регистрация** | Создание нового аккаунта с проверкой данных | 📝 |
| **Авторизация** | Вход в существующий аккаунт | 🔑 |
| **Личный кабинет** | Просмотр данных пользователя | 👤 |
| **AJAX-проверки** | Проверка email/имени при регистрации без перезагрузки | ⚡ |
| **Адаптивный дизайн** | Корректное отображение на всех устройствах | 📱 |

###  Безопасность
- **Хеширование паролей** — использование SHA-256 + соль
- **Защита от SQL-инъекций** — все запросы через `prepared statements`
- **Безопасная работа с сессиями** — авторизация через `$_SESSION`

---

##  Скриншоты

| Главная страница | Каталог |
|:---:|:---:|
| <img src="https://github.com/user-attachments/assets/71f39c69-0d45-4d24-bce0-ec59f395f37a" width="300"> | <img src="https://github.com/user-attachments/assets/1da6fd50-9f66-4d21-ba0b-8e41c51cac24" width="300"> |

| Страница товара | Авторизация |
|:---:|:---:|
| <img src="https://github.com/user-attachments/assets/3e8f22cd-59bf-4b8a-bd90-866b736bc935" width="300"> | <img src="https://github.com/user-attachments/assets/45853c46-434c-4fa6-b378-01bb65770695" width="300"> |

| Регистрация | Профиль пользователя |
|:---:|:---:|
| <img src="https://github.com/user-attachments/assets/5bdde7f9-118d-479e-bf63-ad162372268b" width="300"> | <img src="https://github.com/user-attachments/assets/dd942ad1-11c8-41cc-9133-c7c59edcc6d7" width="300"> |
---

##  Пользователи

### Тестовые пользователи для входа:

| Email | Пароль | Имя |
|:---|:---|:---|
| `123@123` | `123` | `123` |
| `123@s` | `ssss` | `ssss` |

> **Важно:** Пароли в базе данных хранятся в захешированном виде (SHA-256 + соль).

---

<a name="english-version"></a>
## 🇬🇧 English Version

###  Project Description

**LaptopHub** is a full-fledged laptop online store developed as a coursework project. The site allows users to browse the laptop catalog, register, log in, and view their profile.

###  Main Features
- ** Catalog browsing** — list of laptops with brief descriptions
- ** Product detail page** — full info, specs, image slider
- ** Registration and authorization** — user system with uniqueness check
- ** Personal account** — view user data, logout
- ** Blog** — useful articles about laptops
- ** Support page** — contacts and help

###  Technologies Used

| Technology | Version | Purpose |
|:---|:---|:---|
| **PHP** | 7.4+ | Server-side language |
| **MySQL** | 5.7+ | Database management |
| **HTML5** | — | Page structure |
| **CSS3** | — | Styling and responsiveness |
| **JavaScript** | — | Client-side interactivity |
| **XAMPP** | — | Local server |

###  Quick Start

```bash
git clone https://github.com/interiys/Website.git
cd Website
```

1. Copy to `C:\xampp\htdocs\Website`
2. Import `catalog.sql` and `users.sql` to MySQL
3. Start Apache and MySQL in XAMPP
4. Open `http://localhost/Website/index.php`

###  Test Users

| Email | Password | Name |
|:---|:---|:---|
| `123@123` | `123` | `123` |
| `123@s` | `ssss` | `ssss` |

---

## 📌 О проекте / About the Project

**Author**: The author loves ferrets ;3

<p align="center">
  <img src="https://github.com/user-attachments/assets/b02d24de-8dd5-41c5-9229-2060730c03e2" width="400" alt="ferret" />
</p>
