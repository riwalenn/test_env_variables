# test_env_variables

## Versions
- php 8.1
- Symfony 6.0

## Instructions
- mettre en commentaire le DATABASE_URL dans le .env, .env.local, etc...
- dumper : composer dump-env dev
- générer les clés privées et publiques en dev et en prod
- pour générer les clés composer a besoin de paragonie/sodium_compat
- générer les clés : php bin/console secrets:generate-keys --env=prod (pour la production)
- créer un mot de passe secret : APP_RUNTIME_ENV=prod php/bin console secrets:set DATABASE_PASSWORD
- taper la valeur
- configurer les informations de la base de donnée dans le dossier config > package puis fichier doctrine.yaml
- exemple :
 ```yaml
doctrine:
      dbal:
        # url: '%env(resolve:DATABASE_URL)%'
        dbname: db_name (nom de votre bdd)
        host: 127.0.0.1
        port: 3306
        user: db_user (nom de l'utilisateur)
        password: '%env(DATABASE_PASSWORD)%'
        charset: utf8mb4
        server_version: '5.7'
        driver: pdo_mysql
```
