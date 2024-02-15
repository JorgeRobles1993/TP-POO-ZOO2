<?php

$dbConnexion = new PDO('mysql:host=127.0.0.1;dbname=TP-POO-ZOO;charset=utf8',
                            'root',
                            '',
                            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,]
                        );

 ?>