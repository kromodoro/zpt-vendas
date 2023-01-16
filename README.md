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

**descompacte o arquivo 'teste.zp'**

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

Siga para a pasta 'zpt/'
```
cd zpt
```

Execute o comando composer install
```
composer install
```