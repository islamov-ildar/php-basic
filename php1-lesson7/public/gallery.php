<?php

require_once __DIR__ . '\..\config\main.php';
require_once ENGINE_DIR . 'gallery.php';
require_once ENGINE_DIR . 'files.php';
require_once ENGINE_DIR . 'base.php';
require_once ENGINE_DIR . 'db.php';
require_once VENDOR_DIR . 'funcImgResize.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $fileName = new SplFileInfo($_FILES['my_file']['name']);
        $fileExtension = $fileName -> getExtension();
        if(($fileExtension == "jpg" || $fileExtension == "png" || $fileExtension == "gif") && $_FILES['my_file']['size']/10**6 < 2){
            if(!file_exists(IMAGES_DIR)) {
            mkdir(IMAGES_DIR);
        }
            $originalName = $_FILES['my_file']['name'];
            $fileName = IMAGES_DIR . $originalName;
            if(uploadFile($fileName, 'my_file')){
                img_resize($fileName, IMAGES_DIR_SMALL . $originalName, 200, 150);
                $imageSizeInMb = round($_FILES['my_file']['size']/10**6, 2);
                saveImageInDb($originalName, $originalName, $imageSizeInMb);
                //TODO Здесь создание новой записи в galleryDataBase
            };
        }
        redirect('/gallery.php');
}

$form_title = "Загрузка файлов";
$images = getGalleryFiles();
$menu = [
    "Главная",
    "Каталог",
    "Корзина",
];

include VIEWS_DIR . "upload_form.php";
include VIEWS_DIR . "render.php";
include ENGINE_DIR . "galleryRender.php";
?>




