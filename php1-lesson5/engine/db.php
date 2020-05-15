<?php
function getConnection() {
    $dbConfig = include_once CONFIG_DIR . 'db.php';
    static $connToGalleryDataBase = null; //переменная объявлена через static чтобы при новом выполнении функции значение переменной не обнулялось
    if(is_null($connToGalleryDataBase)) {
        $connToGalleryDataBase = mysqli_connect(
            $dbConfig['host'],
            $dbConfig['login'],
            $dbConfig['password'],
            $dbConfig['db_name'],
            $dbConfig['port'],
        );
    }
    return $connToGalleryDataBase;
}

function execute(string $sql) {
    return mysqli_query(getConnection(), $sql);
}

function queryAll($sql) {
    return mysqli_fetch_all(execute($sql), MYSQLI_ASSOC);
}

function queryOne($sql) {
    return queryAll($sql)[0];
}

function closeConnection() {
    return mysqli_close(getConnection());
}