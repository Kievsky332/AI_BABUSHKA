# AI_BABUSHKA

Веб-приложение для перевода обычного текста в стилизованный "бабушкин" язык с использованием возможностей языковых моделей (LLM) через OpenRouter API.

![Static Badge](https://img.shields.io/badge/Kievsky332-AI_BABUSHKA-pink)
![GitHub top language](https://img.shields.io/github/languages/top/Kievsky332/AI_BABUSHKA)
![GitHub](https://img.shields.io/github/license/Kievsky332/AI_BABUSHKA)
![GitHub Repo stars](https://img.shields.io/github/stars/Kievsky332/AI_BABUSHKA)

---

## Описание проекта

Проект представляет собой простой веб-интерфейс, который принимает пользовательский текст, отправляет его через POST-запрос на серверную часть (PHP), где формируется специальный системный промпт для нейросети. OpenRouter API возвращает стилизованный ответ, который затем отображается на странице. Это отличный пример интеграции стороннего AI-API в классический PHP-стек.

---

## Важное примечание

> [!WARNING]
>  Для работы приложения необходим действительный API-ключ OpenRouter, который должен быть указан в серверном коде.  Сервис OpenRouter может блокировать запросы из России. Для корректной работы серверной части (PHP-скрипта) настоятельно рекомендуется размещать проект на хостинге с поддержкой VPN или проксирования запросов.

---

## Стек технологий

- **PHP** — серверная логика, обработка POST-запросов и взаимодействие с OpenRouter API
- **HTML5** — разметка формы ввода и вывода результата
- **CSS3** — стилизация интерфейса
- **JavaScript** — базовая клиентская интерактивность (отправка данных без перезагрузки страницы, если реализовано)

---

## Установка и настройка

Для запуска проекта требуется веб-сервер с поддержкой PHP (например, Apache, Nginx или встроенный сервер PHP).

1. Склонируйте репозиторий:
   ```bash
   git clone https://github.com/Kievsky332/AI_BABUSHKA.git
   ```
2. Перейдите в папку проекта:
   ```bash
   cd AI_BABUSHKA
   ```
3. Откройте файл ai.php (или соответствующий конфигурационный файл) и вставьте ваш действительный API-ключ OpenRouter.
4. Запустите локальный сервер PHP:
   ```bash
   php -S localhost:8000
   ```
5. Откройте в браузере адрес: http://localhost:8000

---
# Структура проекта
```text
AI_BABUSHKA/
 ├── index.php        # Главная страница с формой ввода текста
 ├── ai.php           # Серверный скрипт для обработки запроса и работы с OpenRouter API
 ├── style.css        # Файл стилей для оформления интерфейса
 └── LICENSE          # Лицензия проекта (MIT)
```
---

## Ссылки

- **Демо-версия (Live):** [luram.sorav.ru/Ai-bubusia](https://luram.sorav.ru/Ai-bubusia)
- **Исходный код:** [github.com/Kievsky332/AI_BABUSHKA](https://github.com/Kievsky332/AI_BABUSHKA)

---

## Поддержка и обратная связь

Если у вас есть идеи, или вы нашли баг, создайте [Issue](https://github.com/Kievsky332/AI_BABUSHKA/issues/new) в этом репозитории или свяжитесь со мной:
- **Telegram:** [@imyrj](https://t.me/imyrj)
- **Email:** admin@sorav.ru

---

<p align="center">
  <sub>© 2026 kievsky332.<br> Сделано с любовью</sub>
</p>
