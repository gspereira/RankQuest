<?php

$servidor='localhost';
$usuario = 'root';
$senha = '';
$db = 'rankquest';

$mysqli = new mysqli ($servidor,$usuario,$senha,$db);
$mysqli->query('SET character_set_connection=utf8');
$mysqli->query('SET character_set_client=utf8');
$mysqli->query('SET character_set_results=utf8');



?>


