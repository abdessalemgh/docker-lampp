# docker-lampp
This docker is made for projects with magento2
It can be used with any other php7.0 project, this image could replace your xwamp(Lampp) envirennement


#Requirments:

	-Docker
	-Docker compose

#configuration

	-MYSQL_DATABASE=database_name
	-MYSQL_ROOT_PASSWORD=My_password  //Set phpmyadmin and MySql server root password

#setup

	-RUN 'docker-compose up -D'

#use

	-localhost:80 to use server(Apache2)
	-localhost:8080===> To use phpmyadmin
		-user:root
		-password:root (could be changed from the docker-composer;yaml file MYSQL_ROOT_PASSWORD)
	-localhost/test.php: This file is for testing php connection with database (mysql sever)
		-PS: If you change the password or mysql server port please change it in test.php
	



