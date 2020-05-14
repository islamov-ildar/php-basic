<?php

require_once __DIR__ . '\..\config\main.php';
require_once ENGINE_DIR . 'render.php';
require_once ENGINE_DIR . 'gallery.php';
require_once ENGINE_DIR . 'files.php';
require_once ENGINE_DIR . 'base.php';
require_once VENDOR_DIR . 'funcImgResize.php';

$menu = [
    "Главная",
    "Каталог",
    "Корзина",
];




if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $fileName = new SplFileInfo($_FILES['my_file']['name']);
        $fileExtension = $fileName -> getExtension();
        if(($fileExtension == "jpg" || $fileExtension == "png" || $fileExtension == "gif") && $_FILES['my_file']['size']/10**6 < 2){
            if(!file_exists(IMAGES_DIR)) {
            mkdir(IMAGES_DIR);
        }
            $fileName = IMAGES_DIR . $_FILES['my_file']['name'];
            if(uploadFile($fileName, 'my_file')){
                img_resize($fileName, IMAGES_DIR_SMALL . $_FILES['my_file']['name'], 200, 150);
            };
        }
        redirect('/');
}


$form_title = "Загрузка файлов";

$images = getGalleryFiles(IMAGES_DIR);

/*$imagesDir = IMAGES_DIR; - перенос в отдельную библиотеку gallery.php
$images = array_filter(
    scandir($imagesDir),
    function($item) use ($imagesDir) {
        return !is_dir($imagesDir . $item);
    }
);*/

include VIEWS_DIR . "upload_form.php";

echo renderMenu($menu);

include ENGINE_DIR . "galleryRender.php";
//echo galleryRender($images);


?>




