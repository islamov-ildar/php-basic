<?php
require_once __DIR__ . '\..\config\main.php';
require_once ENGINE_DIR . 'db.php';
require_once ENGINE_DIR . 'base.php';

function getProductsFiles() {
    $sql = "SELECT * FROM products";
    return queryAll($sql);
}
function saveFeedbackInDb($id, $feedback) {
    $sqlInsert = "UPDATE products SET feedback='{$feedback}' WHERE id = '{$id}'" ;
    return execute($sqlInsert);
}

$products = getProductsFiles();

include VIEWS_DIR . 'catalogRender.php';
$description = get('type');
$id = get('id');
$feedback = post('feedback');

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    saveFeedbackInDb($id, $feedback);
}
/*function getFeedbackFromDb($id) {
    $sql = "SELECT feedback FROM products WHERE id = '{$id}'";
    return execute($sql);
}
$getFeedbackFromDB = getFeedbackFromDb($id);
var_dump($getFeedbackFromDB);*/ //хотел сделать вывод имеющихся отзывов на страницу, почему-то функция не возвращает строку с отзывом.
?>
<h2><?=$description?></h2>
<h3><?=$feedback?></h3>

<h4>Оставить отзыв</h4>
<form action="" method="post">
    <input type="text" name="feedback">
    <input type="submit">
</form>

//	подумать, как лучше всего хранить изображения товаров. - думаю надо связать таблицы gallerydatabase и products из БД shop по общему ключу, общий ключ задать отдельным столбцом