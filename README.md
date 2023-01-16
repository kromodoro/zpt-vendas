# zpt-vendas

## INSTALAÇÃO

Abra o terminal e clone este repositório com o seguinte comando
```
git clone https://github.com/kromodoro/zpt-vendas.git
```
Após siga para a pasta 'zpt-vendas'
```
cd zpt-vendas/
```

# descompacte o arquivo 'teste.zip'

Acesse a pasta 'teste/laradock'
```
cd teste/laradock
```

Execute o docker compose
```
docker compose up -d nginx mysql phpmyadmin

OU

docker-compose up -d nginx mysql phpmyadmin
```

Assim que iniciar os containers acesse o 'workspace'
```
docker compose exec workspace bash
```

Após acessar o container siga para a pasta 'zpt/'
```
cd zpt
```

Execute o comando composer install
```
composer install
```

# BANCO DE DADOS

Caso queira iniciar um banco de dados limpo, basta executar as migrations
```
php artisan migrate
```

Se preferir um banco de dados ja populado, o arquivo 'default.sql' pode ser importado pelo 'phpmyadmin'

> OBS: as configurações do banco de dados estão em zpt/.env caso queira usar uma opção personalizada
