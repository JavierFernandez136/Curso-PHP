<?php 
/*
Crear un script PHP que inserte 4 registros en la tabla 
que creaste en el ejercicio anterior.
*/
require_once 'includes/connect.php';
$sql = "CREATE TABLE IF NOT EXISTS users(
    user_id int(255) auto_increment not null,
    name varchar(50),
    surname varchar(255),
    bio text,
    email      varchar(255),
    password    varchar(255),
    role        varchar(20),
    image   varchar(255),
    CONSTRAINT pk_users PRIMARY KEY (user_id)
);";

$create_usuarios_table=mysqli_query($db,$sql);

$sql="INSERT INTO users VALUES (NULL,'Javier','Fernandez','Web Developer','javi_fernandez_96@hotmail.com','".sha1("password")."', '1',NULL)";
$insert_user=mysqli_query($db,$sql);

$sql="INSERT INTO users VALUES (NULL,'Pepe','Fernandez','Web Developer 2','pepe_fernandez_96@hotmail.com','".sha1("password")."', '1',NULL)";
$insert_user2=mysqli_query($db,$sql);

$sql="INSERT INTO users VALUES (NULL,'Ariel','Fernandez','Web Developer 3','turbio_fernandez_96@hotmail.com','".sha1("password")."', '1',NULL)";
$insert_user3=mysqli_query($db,$sql);

$sql="INSERT INTO users VALUES (NULL,'Boxi','Fernandez','Web Developer 4','pela_fernandez_96@hotmail.com','".sha1("password")."', '1',NULL)";
$insert_user4=mysqli_query($db,$sql);

$sql="INSERT INTO users VALUES (NULL,'Edu','Fernandez','Web Developer 5','edu_fernandez_96@hotmail.com','".sha1("password")."', '1',NULL)";
$insert_user5=mysqli_query($db,$sql);



if($create_usuarios_table){
    echo "La tabla users se ha creado correctamente";
};


?>