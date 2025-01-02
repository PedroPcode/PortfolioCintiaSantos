<?php 
$items = [
    [ 
        'href' => '../document/curriculoCintiaSantos.pdf', 
        'download' => 'curriculoCintiaSantos.pdf', 
        'src' => 'https://i.im.ge/2025/01/02/zK1rCP.curriculo.png', 
        'alt' => 'Link Curriculo', 
        'name' => 'Curriculo' 
    ],
];

?>

<div class="flex flex-col hover:underline">
    <?php foreach ($items as $item): ?>
        <div class="flex items-center gap-2">
            <img class="h-5" src="<?=$item['src']?>" alt="<?=$item['alt']?>">
            <a href="<?=$item['href']?>" download="<?=$item['download']?>"><?=$item['name']?></a>
        </div>
    <?php endforeach; ?>
</div>
