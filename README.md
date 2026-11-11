# Gestão de Funcionários — PHP MVC

Aplicação simples em PHP para cadastrar e consultar funcionários, organizada no padrão MVC e conectada ao MySQL.

## Recursos

- Cadastro de funcionário com nome, setor/cargo e salário.
- Consulta de registros com filtro por nome.
- Interface responsiva feita com Bootstrap 5.
- Separação entre controlador, modelo, visualizações e configuração do banco.

## Requisitos

- PHP 8.0 ou superior com a extensão `mysqli` habilitada.
- MySQL 8.0+ ou MariaDB 10.5+.
- Apache ou outro servidor web com suporte a PHP (XAMPP atende ao ambiente local).

## Instalação local com XAMPP

1. Copie a pasta do projeto para `C:\xampp\htdocs\mvc`.
2. Abra o XAMPP Control Panel e inicie Apache e MySQL.
3. Acesse o phpMyAdmin em `http://localhost/phpmyadmin`.
4. Importe `database/schema.sql` (aba **Importar**) ou execute o arquivo em um cliente MySQL.
5. Confirme os dados de conexão em `config/database.php`. Por padrão, o projeto usa `localhost`, usuário `root`, senha vazia e banco `crud`, que são os valores comuns de uma instalação local do XAMPP.
6. Abra `http://localhost/mvc/` no navegador.

> Em uma hospedagem ou instalação com credenciais próprias, defina as variáveis de ambiente `DB_HOST`, `DB_USER`, `DB_PASS` e `DB_NAME` no ambiente do PHP/Apache. A configuração prioriza essas variáveis e usa os valores locais acima apenas como fallback para desenvolvimento. Não use senha vazia em produção.

## Banco de dados

O arquivo [`database/schema.sql`](database/schema.sql) cria o banco `crud` e a tabela `funcionario` esperada pela aplicação. A estrutura é baseada nas consultas do modelo PHP:

| Campo | Tipo | Uso |
| --- | --- | --- |
| `id` | `INT` auto incremento | Identificador do registro |
| `nome` | `VARCHAR(150)` | Nome do funcionário |
| `cargo` | `VARCHAR(120)` | Setor ou cargo |
| `salario` | `DECIMAL(10,2)` | Salário em reais |

## Estrutura

```text
mvc/
├── config/                 # Conexão com o MySQL
├── controller/             # Ações do CRUD
├── database/schema.sql     # Estrutura do banco
├── model/                  # Consultas e gravação
├── view/                   # Telas da aplicação
├── assets/css/app.css      # Ajustes visuais
└── index.php               # Entrada e roteamento MVC
```

## Segurança e publicação

- Não coloque senhas reais, arquivos `.env` ou configurações locais no repositório.
- O `.gitignore` exclui `.env`, arquivos de configuração local e artefatos de editor/servidor.
- Antes de publicar, configure os dados do banco como variáveis de ambiente no servidor.
- A aplicação é um CRUD acadêmico/local; revise autenticação, validação e consultas parametrizadas antes de expô-la à internet.

## Tecnologias

PHP · MySQL · HTML · Bootstrap 5 · MVC



