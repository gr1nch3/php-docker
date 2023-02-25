# php-docker


<summary><h2> Overview </h2></summary>

Php-docker is a project that aims to facilitate the development of php projects using docker.


<summary><h2> Start Project </h2></summary>

First clone the project:

```
git clone https://github.com/gr1nch3/php-docker.git
```

Compose the project:


```
docker-compose -f local_compose.yml build
```

Add your project to the sites folder and run the project:

```
docker-compose -f local_compose.yml up -d
```

<summary><h2> Tools </h2></summary>

-   [Docker](https://www.docker.com/)
-   [PHP](https://www.php.net/)


<summary><h2> :open_file_folder: Folder Structure </h2></summary>

```
.
├── compose
│   └── Dockerfile
├── sites
│   └── index.php
├── .gitignore
├── Makefile
├── local_compose.yml
└── README.md

```


<details open>
<summary><h2> Author </h2></summary>

-   [@gr1nch3](https://github.com/gr1nch3)

</details>

---
