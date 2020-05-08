<?php
/**
 * Created by PhpStorm.
 * User: ildar
 * Date: 07.05.2020
 * Time: 10:42
 */

$images = scandir(IMAGES_DIR);

function galleryRender($images) {
    $result = "<div class='gallery'>";
    foreach ($images as $image) {

        if($image !== '..' && $image !== '.' ){
            $route = 'images/'. $image;
            $result .= "<a href=$route target='_blank'>";
            $result .= "<img src=$route width='100' alt='some_text'>";
            $result .= "</a>";
        }
    }
    $result .= "</div>";
    return $result;
}
