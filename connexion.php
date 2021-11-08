<?php

function connexion(){
    return new PDO('mysql:host=localhost:3306;dbname=dic2_projet;charset=utf8','root','',[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
}