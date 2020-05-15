<?php foreach ($images as $image): ?>
    <a href="/photo.php?id=<?=$image['id']?>" target='_blank'>
        <img src="/images/small/<?=$image['link']?>"  alt='some_text'>
    </a>
<?php endforeach;?>

