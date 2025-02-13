# Locadora de Veículos

Bem-vindo ao sistema de Locadora de Veículos! Este sistema permite gerenciar clientes, carros, locações e custos de forma eficiente.

## Funcionalidades

- **Clientes**: Gerenciamento de registros de clientes, incluindo a adição, edição, visualização e exclusão de clientes.
- **Carros**: Gerenciamento de registros de carros, incluindo a adição, edição, visualização e exclusão de carros. As imagens dos carros são exibidas em um carrossel.
- **Locações**: Gerenciamento de registros de locações, incluindo a adição, edição, visualização e exclusão de locações.
- **Custos**: Gerenciamento de registros de custos, incluindo a adição, edição, visualização e exclusão de custos.
- **Dashboard**: Visão geral das principais funcionalidades e navegação rápida para as seções de Clientes, Carros e Locações.

## Tecnologias Utilizadas

- **Laravel**: Framework PHP utilizado para o desenvolvimento do sistema.
- **Bootstrap**: Framework CSS utilizado para o design responsivo e estilização do sistema.
- **jQuery**: Biblioteca JavaScript utilizada para manipulação do DOM e funcionalidades do Bootstrap.

## Instalação

1. Clone o repositório:
    ```bash
    git clone https://github.com/seu-usuario/locadora-veiculos.git
    cd locadora-veiculos
    ```

2. Instale as dependências do PHP:
    ```bash
    composer install
    ```

3. Instale as dependências do Node.js:
    ```bash
    npm install
    ```

4. Configure o arquivo `.env` com suas credenciais de banco de dados. Exemplo:
    ```plaintext
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=locadora_veiculos
    DB_USERNAME=seu-usuario
    DB_PASSWORD=sua-senha
    ```

5. Execute as migrações para criar as tabelas no banco de dados:
    ```bash
    php artisan migrate
    ```

6. (Opcional) Execute as seeders para popular o banco de dados com dados iniciais:
    ```bash
    php artisan db:seed
    ```

7. Compile os assets (CSS/JS):
    ```bash
    npm run dev
    ```

8. Inicie o servidor de desenvolvimento:
    ```bash
    php artisan serve
    ```

## Uso

- Acesse o sistema no navegador: [http://localhost:8000](http://localhost:8000)
- Utilize o menu de navegação para acessar as seções de Clientes, Carros, Locações e Custos.
- Adicione, edite, visualize e exclua registros conforme necessário.

## Contribuição

Contribuições são bem-vindas! Sinta-se à vontade para abrir issues e pull requests para melhorias e correções.

## Licença

Este projeto está licenciado sob a [MIT License](LICENSE).

---

### Screenshots

#### Dashboard
![Dashboard](https://via.placeholder.com/800x400?text=Dashboard)

#### Lista de Carros
![Lista de Carros](https://via.placeholder.com/800x400?text=Lista+de+Carros)

#### Detalhes do Cliente
![Detalhes do Cliente](https://via.placeholder.com/800x400?text=Detalhes+do+Cliente)

---

Feito por: Gabriel Vicente [](https://github.com/Vicente7KJ)
