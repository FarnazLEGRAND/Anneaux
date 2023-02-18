<?php

//"اگر آرایه سشن خانه یوزرنیم مقدار نگرفت (هیزست نشد!)"

if (!isset($_SESSION['username'])){
    header("location:Accueil.php");
}
