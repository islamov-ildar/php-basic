<?php
require_once __DIR__ . '\..\config\main.php';
require_once ENGINE_DIR . 'base.php';

$id = htmlspecialchars(strip_tags(get('id'))); //strip_tags - очищает от тегов, чтобы в запрос не вписали вредоносный скрипт, htmlspecialchars игнорирует html теги
$type = strip_tags(get('type'));

$id = $_REQUEST['id']; //глобальный массив $_REQUEST работает с обоими типами запросов get и post
$type = $_REQUEST['type'];

var_dump($_SERVER['REQUEST_METHOD'], $_POST);

$data = [
  'news' => [
      ['FirstNews', 'lorem blabla bla 1'],
      ['SecondNews', 'lorem blabla bla 2']
  ],
  'article' =>[
      ['FirstArticle', 'article lorem blabla bla 1'],
      ['SecondArticle', 'article lorem blabla bla 2']
  ]
];

$article = $data[$type][$id];
?>
<ul>
  <?php foreach ($data as $groupName => $group): ?>
      <?php foreach ($group as $index => $item): ?>
        <li>
          <a href="/index.php?type=<?=$groupName?>&id=<?=$index?>">
            <?= $item[0]?>
          </a>
        </li>
      <?php endforeach;?>
  <?php endforeach;?>
</ul>
<h1><?= $article[0] ?></h1>
<p><?= $article[1] ?></p>

<form action="" method="post">
    <select name="type" id="">
        <option value="news">Новости</option>
        <option value="article">Статьи</option>
    </select>
    <input type="text" name="id"/>
    <input type="submit">
</form>