<?php


try{
    $connect = mysqli_connect("localhost","root","","school_studens");
}catch(Exception $e){
    echo "Databace connection feil:".$e->getMessage();
}