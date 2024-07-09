<?php
$conn = new mysqli('localhost','root','','music_player');
if(!$conn){
    die("Database Connection Failed. Error: ".$conn->error);
}
