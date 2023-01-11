## E-commerce Study Project

The purpose of this project is to improve my development skills.   

---

### Technologies
- Docker (with docker compose)
- PHP 8.2
- Composer
- Nginx
---

### About this project

The backend and frontend will be handled separately, backend will be an API
to provide data for the frontend to consume. This way, futures frontend changes (technology and framework) will be made more easily.

The Slim micro framework will be used to construct the backend API, it will be my first project using it.

The webserver uses self-signed certificates an operates only with HTTPS, the steps to create will be described bellow.

---

### How to run this project

1 - To create a self-signed certificate I used **mkcert**, available at https://github.com/FiloSottile/mkcert  
After install, my certificate was created with the command: 
```sh
mkcert ecommerce.com
```
Now you have to edit the /etc/hosts file and add an entry like bellow. 
```sh
127.0.0.1 www.ecommerce.com 
```

2 - After clone this project, move the certificate files to folder .docker/nginx/certs

3 - Build docker image:
```sh
docker build .docker/ -t ecommerce-development 
```

4 - Create containers:
```sh
docker-compose up -d
```

5 - Access backend directory and install packages:
```sh
cd backend && composer install
```

6 - Do the same for frontend directory:
```sh
cd frontend && composer install
```

7 - That's it, now access ecommerce.com from your browser!  

---

If you wish to contributte or suggest improvments, fell free to contact me.

**Developed by**  
Luis Claudio Bueno  
_luisbuenodev@gmail.com_  
_github.com/lucusco_  
_linkedin.com/in/luisclaudiombueno_
