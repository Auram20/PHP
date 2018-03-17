<?php
require_once 'MyPDO.class.php';

// TO DO : à modifier
// host=votre serveur (localhost si travail en local)
MyPDO::setConfiguration('mysql:host=localhost;port=8888;dbname=imac-movies;charset=utf8', 'root', 'root');
