<?php

$conn = mysqli_connect('127.0.0.1', 'root', "",'shop', '3307'); //установка соединения с БД - очень дорогая по времени и ресурсам операция

/*$sql = "INSERT INTO users (login, password) //запись данных в таблицу users
        VALUE ('admin', 'admin'), ('pupkin', 'qwerty')";*/

$sql = "SELECT * FROM users"; //Выгрузка всех данных из таблицы users

if(!$res = mysqli_query($conn, $sql)) {
    var_dump(mysqli_error($conn));
};

//var_dump($res);

/*while($row = mysqli_fetch_row($res)) {
    var_dump($row);
}*/

/*while($row = mysqli_fetch_assoc($res)) { //возвращает ассоциативный массив - намного удобнее для восприятия
    var_dump($row);
}*/

$data = mysqli_fetch_all($res, MYSQLI_ASSOC); //вернет массив ассоциативных массивов
//var_dump($data);

if($id = (int) mysqli_real_escape_string($conn, $_GET['id'])){ //для пресечения SQL инъекций применяется приведение типов, либо экранирование
    $sql1 = "SELECT id, login as name, password FROM users WHERE id = {$id}";
    $res1 = mysqli_query($conn, $sql1);
    $data1 = mysqli_fetch_all($res1, MYSQLI_ASSOC); //вернет массив ассоциативных массивов
    var_dump($data1);
}

mysqli_close($conn); // Закрытие содинения с БД
?>

<form action="">
    <input type="text" name="id"/>
    <input type="submit"/>
</form>
