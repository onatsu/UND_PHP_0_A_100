# UND-training-PHP

Repositorio base para el curso de PHP.

Este proyecto incluye una configuración mínima para trabajar con PHP, PHPUnit y Docker, siguiendo buenas prácticas de desarrollo y preparación para testing.

---

## 🛠 Requisitos

- [Docker](https://www.docker.com/)
- [Make](https://www.gnu.org/software/make/) (en Mac viene por defecto)
- Un editor de texto o IDE (VS Code o PhpStorm recomendados)

---

## ▶️ Primeros pasos

```bash
# Clona el repositorio
git clone https://github.com/onatsu/UND_PHP_0_A_100.git
cd UND-training-PHP

# Levanta los servicios
make start

# Instala las dependencias PHP e inicia el proyecto
make init

# ejecutar los test
make test