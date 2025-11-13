# 🚀 PHP + Redis Cache (via Docker)

Exemplo profissional e minimalista de integração entre **PHP 8.2**, **Redis** e **Docker Compose**, demonstrando boas práticas de código e estrutura limpa.

## 📦 Tecnologias
- PHP 8.2 (Apache)
- Redis (última versão)
- Composer (autoload PSR-4)
- Docker Compose

## 🧰 Estrutura
src/
  ├── Cache.php       # Classe de cache (Redis)
php/
  └── Dockerfile      # Ambiente PHP customizado

## ▶️ Como rodar
# Build e inicializa os containers
docker-compose up --build -d

# Instalar dependências PHP (opcional)
docker-compose exec php composer install

# Acesse no navegador
http://localhost:8080

## ✨ Resultado
🚀 Aplicação PHP + Redis
Valor armazenado: Olá do Redis via Docker!
Cache ativo e funcional!

## 🧠 Autor
Mateus Sereda

