<?php
if(isset($_COOKIE['iduser']) && isset($_COOKIE['token'])){
    template("dashboard", "index.php");
}
else{
    template("home", "index.php");
}