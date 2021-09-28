<?php
require_once("db.php");

if($connection == false){   //проверка на наличие ошибок при подключении
    echo "Error!";
    echo mysqli_connect_errno();
    exit;
}

$query = mysqli_query($connection, "SELECT * FROM $dbarticles ORDER BY id DESC ");  //выбираем что вывести из таблицы

while($article = mysqli_fetch_assoc($query)){
	echo '<div class="news-block">';
    echo '<div class="news-block-date">';
    echo $article['date'].'<br>';
    echo '</div>';
    echo '<h3 class="news-block-heading">';
    echo $article['title'].'<br>';
    echo '</h3>';
	echo '<a href=page.php?id='.$article['id'].'class="news-block-button">Подробнее</a>';
	echo '</div>';
}
?>


