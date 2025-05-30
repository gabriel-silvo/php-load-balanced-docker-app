# PHP + Nginx + MySQL Load Balanced App

Este projeto demonstra uma arquitetura simples de microsserviços com **Docker e Docker Compose**, composta por múltiplas instâncias PHP, um banco de dados MySQL e um servidor Nginx configurado como balanceador de carga.

## Serviços implementados

- **Balanceamento de carga** com Nginx, distribuindo as requisições entre 3 containers PHP distintos.
- **Ambiente orquestrado com Docker Compose**, facilitando o deploy completo com um único comando.
- **Persistência de dados** com MySQL + script `banco.sql` para criação automática da tabela.
- **Criação da página `list.php`**, que lista todos os registros inseridos no banco.
- **README.md profissional**, explicando como rodar, tecnologias usadas, estrutura e propósito do projeto.
- **Uso de variáveis de ambiente**, centralizando configurações sensíveis como senha do banco de dados (via `docker-compose.yml`).

## 🔧 Componentes principais

- `mysql-db`: Banco de dados com script de inicialização.
- `php-app-1/2/3`: Instâncias independentes do PHP inserindo registros aleatórios no banco.
- `nginx-lb`: Servidor Nginx redirecionando requisições para as instâncias PHP.
- `index.php`: Insere um registro a cada acesso.
- `list.php`: Exibe todos os registros salvos no banco.


## 🚀 Tecnologias

- PHP 8.2 + Apache
- MySQL 5.7
- Nginx (Load Balancer)
- Docker & Docker Compose

## 🔧 Como rodar

1. Clone o repositório:

   ```bash
   git clone https://github.com/denilsonbonatti/toshiro-shibakita
   cd toshiro-shibakita
