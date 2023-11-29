<?php
include"./conexao.php";

if(!isset($_SESSION["logado"])){
    header("Location: ./");
}