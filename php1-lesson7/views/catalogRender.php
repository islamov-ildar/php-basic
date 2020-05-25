<ul>
    <?php foreach ($products as $product): ?>
            <li>
                <a href="/products.php?type=<?=$product['description']?>&id=<?=$product['id']?>">
                    <?= $product['name']?>
                </a>
            </li>
    <?php endforeach;?>
</ul>

