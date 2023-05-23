## Exercicio de logica-Novos Titãs
# COMO RODAR
# passo a passo
 1.instale o Docker na sua máquina local: `https://www.docker.com/`

2.dentro do diretorio raiz abra o terminal e execute o comando `docker compose up`

<<<<<<< HEAD
3.Finalmente, entre no seu navegador e digite : 
`http://localhost:8181`


=======
3.No arquivo docker-compose.yml, inclua :

```yml 
version: '3.9'
services:
    php-apache:
        image: php:8.2.4-apache-buster
        ports:
            - 8181:80
        volumes: 
         - ./:/var/www/html 
```
P.S: Certifique-se de estar usando a identação certa nesse comando.

4.dentro do diretorio raiz abra o terminal e execute o comando docker compose up

5.Finalmente, entre no seu navegador e digite : http://localhost:8181
>>>>>>> fb24c2b (Exercicio 2-Backend: Modificando o readme)
