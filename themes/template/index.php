<?php
if(isset($_COOKIE['iduser']) && isset($_COOKIE['token'])){
    template("dashboard", "index.php");
}
else{
    if(isset($_GET['account'])){
        template("home", "index.php");
    }
    else{
        template("home", "default.php");
    }
}