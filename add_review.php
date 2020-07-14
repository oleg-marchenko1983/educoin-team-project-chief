<?php
include 'configs/db.php';

/*======================================
Отправка отзывов пользователю
======================================*/
if(
	isset($_POST["review"]) && isset($_POST["user_id"]) 
	&& $_POST["review"] != "" && $_POST["user_id"] != "" ) {
	// Вставить в таблицу "feedback" отзыв
	$sql = "INSERT INTO feedback (user_id, feedback_date, description) VALUES ('" . $_POST["user_id"] . "', CURRENT_DATE(), '" . $_POST["review"] . "' )";
   // Подключение с базой данных и проверка строки
	mysqli_query($connect, $sql);
}
// Записываем в переменую id usera
$user_cookie = $_POST["user_id"];
// Подключаем страничку с функционалом отзвов
include 'feedback.php';
