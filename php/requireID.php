<?php 

if(isset($_COOKIE['id'])){
    if(!isset($_SESSION['id'])){
        session_start();
    }
};