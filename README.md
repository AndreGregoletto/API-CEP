# API de Consulta de CEP

## 💡 Descrição do Projeto
Foi desenvolvido uma **API em PHP** que consome dados de CEP de uma API externa e retorna essas informações para o frontend.

A aplicação foi construída utilizando o **Laravel 11** e **PHP 8.3**, garantindo uma implementação moderna e eficiente.

## 📜 Requisitos
- PHP 8.3 ou superior
- Laravel 11
- Composer

## 🛠️ Funcionalidades
- **Consumo de API externa**: Utiliza a API do [ViaCEP](https://viacep.com.br/) para consultar dados de um CEP.
- **Resposta estruturada**: Retorna os dados do CEP para o frontend em formato JSON.
- **Facilidade de integração**: API fácil de integrar com qualquer sistema frontend.

## 🔧 Como Rodar o Projeto

1. **Clone o repositório**:
    ```bash
    git clone https://github.com/AndreGregoletto/API-CEP.git
    ```

2. **Instale as dependências**:
    ```bash
    composer install
    ```

3. **Configure as variáveis de ambiente**:
    - Copie o arquivo `.env.example` para `.env`:
    ```bash
    cp .env.example .env
    ```

4. **Gere a chave da aplicação**:
    ```bash
    php artisan key:generate
    ```

5. **Rodando o servidor localmente**:
    ```bash
    php artisan serve
    ```

6. **Acesse a API**:
    Acesse via post `http://127.0.0.1:8000/api/cepSearch` para testar a consulta ao CEP. Com o cep via body.

7. **Acesse a Aplicação**:
    Acesse `http://127.0.0.1:8000/cep` para testar a consulta ao CEP.

## 🛠️ Tecnologias Utilizadas
- **Laravel 11**: Framework PHP para construção de APIs modernas e escaláveis.
- **PHP 8.3**: Versão mais recente do PHP, garantindo performance e segurança.
- **GuzzleHTTP**: Para realizar requisições HTTP à API do ViaCEP.


## 🤝 Agradecimentos
Obrigado por considerar este teste! Estou à disposição para discutir quaisquer pontos do código ou melhorias.
