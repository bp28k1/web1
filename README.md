# Bevezetés
Ez a GitHub repository tartalmazza a WEB-programozás I. (NJE/GAMF: GINFBAL-WEBPROG1-1) tantárgyhoz készült beadandó webalkalazás forráskódját, illetve a használatához szükséges egyéb fájlokat.
- Megjegyzés: Minden szenzitív adat (pl. jelszavak) maszkolásra kerültek a forráskódban.

## Hasznos információ a használathoz
### Frontend
A Frontend által használt fájlok.
- Megjegyzés: SQL jelszó módosítása a következő fájlban: ./includes/config.inc.php

```
└── web
    ├── images
    │   ├── fooldal.jpg
    │   ├── kapcsolat.jpg
    │   ├── logo_black.png
    │   ├── logo.png
    │   └── starship.jpg
    ├── includes
    │   └── config.inc.php
    ├── index.php
    ├── js
    │   └── validate_message.js
    ├── logicals
    │   ├── belep.php
    │   ├── kilepes.php
    │   ├── message.php
    │   ├── regisztral.php
    │   ├── upload.php
    │   └── uzenetek.php
    ├── styles
    │   ├── stilus.css
    │   └── uzenetek.css
    ├── templates
    │   ├── index.tpl.php
    │   └── pages
    │       ├── 404.tpl.php
    │       ├── belepes.tpl.php
    │       ├── belep.tpl.php
    │       ├── cimlap.tpl.php
    │       ├── galeria.tpl.php
    │       ├── kapcsolat.tpl.php
    │       ├── kilepes.tpl.php
    │       ├── message.tpl.php
    │       ├── regisztral.tpl.php
    │       ├── starship.tpl.php
    │       ├── upload.tpl.php
    │       └── uzenetek.tpl.php
    ├── uploads
    │   ├── 6437bdf95dcf5.jpg
    │   ├── 6437be4b225f5.jpg
    │   ├── 643be4dba8d4c.jpg
    │   ├── alap1.jpg
    │   ├── alap2.jpg
    │   └── alap3.jpg
    └── videos
        └── fooldal.mp4
```

### Backend
A Backend által használt fájlok.

```
├── init.sql
```

### Docker
A Docker által használt fájlok.
- Megjegyzés: SQL jelszó módosítása a következő fájlban: ./docker-compose.yml

```
├── docker-compose.yml
├── Dockerfile
```

#### Hasznos Docker parancsok

```
#Build and up/down docker containers
docker compose up -d
docker compose down

#Connect to Docker container
docker exec -it nje-web1-db bash
docker exec -it nje-web1-db mysql -u root -pPassword
 
#Docker available images
docker images

#Check running containers
docker ps

#Stop and delete container/image
docker stop container_name
docker rm container_name
docker rmi -f container_name
docker system prune
```