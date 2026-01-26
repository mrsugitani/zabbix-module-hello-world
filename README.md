# zabbix-module-hello-world
<img width="1134" height="456" alt="Screenshot 2026-01-22 at 1 26 23 AM" src="https://github.com/user-attachments/assets/b641b51c-7503-498b-9a7f-0293442185d4" />

## Project Overview
This repository provides a minimal “Hello World” example for Zabbix modules.

The example code included here is written in PHP and is used purely for
demonstration and web-based presentation purposes.

Native Zabbix server modules themselves are implemented in C, as they are
loaded directly into the Zabbix server process via the official module API.

The goal of this project is to show the basic structure and concept of a
Zabbix module, rather than to provide a full production-ready implementation.

Tested with ZABBIX 7.4.

---

## Features

### MVC Implementation
Uses the Zabbix standard Module framework with dedicated **Actions** and **Views**.
* **Action:** Handles the logic and security checks.
* **View:** Manages the presentation layer (HTML/CSS).

### Responsive Layout
Includes a custom-styled view with proper padding and background styling for better visibility.
* Designed to match the Zabbix native look and feel.
* Ensures readability across different screen sizes.

## Deployment
Make a directory of repositories on /usr/share/zabbix/ui/modules.
