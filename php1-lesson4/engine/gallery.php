<?php
require_once ENGINE_DIR . "db.php";

function getGalleryFiles() {
    $sql = "SELECT * FROM galleryDataBase ORDER BY views DESC";
    return queryAll($sql);
}

function saveImageInDb(string $name, string $link, float $imageSizeInMb) {
    $sqlInsert = "INSERT INTO galleryDataBase (name, link, imageSizeInMb) VALUE ('{$name}', '{$link}', '{$imageSizeInMb}')"; //запись данных в таблицу users
    return execute($sqlInsert);
}

function getImage(int $id){
    $sql = "SELECT * FROM galleryDataBase WHERE id = {$id}";
    return queryOne($sql);
}

function incViews($id) {
    $sql = "UPDATE galleryDataBase SET views = views + 1 WHERE id = {$id}";
    return execute($sql);
}