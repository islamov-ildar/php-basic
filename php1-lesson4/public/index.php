<?php

require_once __DIR__ . '\..\config\main.php';
require_once ENGINE_DIR . 'render.php';

$menu = [
    "Главная",
    "Каталог",
    "Корзина",
];

echo renderMenu($menu);


if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_FILES['my_file'])) {
        $fileName = new SplFileInfo($_FILES['my_file']['name']);
        $fileExtension = $fileName -> getExtension();
        echo $_FILES['my_file']['size']/10**6 . 'MB' ;
        if(($fileExtension == "jpg" || $fileExtension == "png" || $fileExtension == "gif") && $_FILES['my_file']['size']/10**6 < 2){
            if(!file_exists(IMAGES_DIR)) {
            mkdir(IMAGES_DIR);
        }
            move_uploaded_file(
                $_FILES['my_file']['tmp_name'],
                IMAGES_DIR . $_FILES['my_file']['name']
            );
        }
    }
}


$form_title = "Загрузка файлов";
include VIEWS_DIR . "upload_form.php";

include ENGINE_DIR . "galleryRender.php";

echo galleryRender($images);
?>




