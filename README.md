# Inception Project Setup

This README provides instructions on setting up the Inception project. Please follow the steps below to get started.

## 1. Clone the Repository

```bash
git clone https://github.com/Yono1112/Inception.git
```

## 2. Change Directory
```bash
cd Inception
```

## 3. Copy Environment File
```bash
cp srcs/.env.example srcs/.env
```

## 4. Edit Environment Variables
```bash
vim srcs/.env
```

## 5. Update Hosts File(※sudo privileges are required)
```bash
sudo vim /etc/hosts
```
Add the following line to the hosts file:
```bash
127.0.0.1 yuohno.fr.42
```
(Please note that sudo privileges are required for this step. If you don't have sudo privileges, you can comment out the domain code in srcs/requirements/wordpress/init-wp.sh and srcs/requirements/nginx/conf/default.conf.)

## 6. Build the Project(※sudo privileges are required)
```bash
make
```
(If you don't have sudo privileges, you can comment out the sudo command in the Makefile and the volume configuration in the docker-compose.yml file.)

## 7. Access wordpress site
Once the containers are successfully up and running, you can access the WordPress site in your host's web browser at either of the following URLs:
   - [https://yuohno.42.fr](https://yuohno.42.fr)
   - or
   - [https://localhost:443](https://localhost:443)
