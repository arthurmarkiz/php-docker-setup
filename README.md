# ⭐ Setups for use PHP with Docker ⭐

Just copy and paste into your favorite code editor and start your project as quickly and efficiently as possible.

<br/>

## 💻 Tech Stack
![php](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![nginx](https://img.shields.io/badge/Nginx-009639?style=for-the-badge&logo=nginx&logoColor=white)
![mysql](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)
![tailwind](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)
![docker](https://img.shields.io/badge/Docker-2CA5E0?style=for-the-badge&logo=docker&logoColor=white)

*There will be more in the future...*

<br/>

## ❗ Requirements

Install **Docker Desktop** to get everything in just one installation.
- [Docker Desktop](https://docs.docker.com/get-docker/)

<br/>

## 👨‍💻 Cloning the Repository

```bash
git clone https://github.com/arthurmarkiz/php-docker-setup.git
cd php-docker-setup
```

<br/><br/>

## ⚙ How to run

1. Go to the setup directory of your choice.

**e.g**
```bash
cd LEMP-PMA-Tailwind
```

<br/>

2. Install the dependencies.
```bash
cd src
npm install
```

<br/>

3. Build **Tailwind** and continue monitoring changes.
```bash
npm run watch
```

<br/>

4. **Open another terminal window, within the project root directory.** Start the Docker Container.
```bash
cd docker
docker-compose up -d --build
```

<br/><br/>

## 💬 Infos
- The server will be available on port 80.
- The PhpMyAdmin will be available on port 81.
```
localhost:80
localhost:81
```

### Access *root* and *user* in PhpMyAdmin
- **User:** root | **Password:** root
- **User:** user | **Password:** password
