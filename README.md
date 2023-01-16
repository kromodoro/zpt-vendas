# zpt-vendas

__Visite a pasta [Escopo](https://github.com/kromodoro/zpt-vendas/tree/main/Escopo) para entender o processo de desenvolvimento do projeto__

## INSTALAÇÃO

Abra o terminal e clone este repositório com o seguinte comando
```
git clone https://github.com/kromodoro/zpt-vendas.git
```
Após siga para a pasta 'zpt-vendas'
```
cd zpt-vendas/zpt
```

Execute o comando composer install
```
composer install
```

Após suba o servidor local
```
php artisan serve
```

# BANCO DE DADOS

Os dados do banco devem ser definidos no arquivo **.env**

Ex:
```
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=default
DB_USERNAME=root
DB_PASSWORD=root
```

Caso queira iniciar um banco de dados limpo, basta executar as migrations
```
php artisan migrate
```