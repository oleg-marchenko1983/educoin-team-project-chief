<?php
// Обнуление COOKIE 
setcookie("users_id", "", 0);
// Переход на главную страницу
header("Location: /");
