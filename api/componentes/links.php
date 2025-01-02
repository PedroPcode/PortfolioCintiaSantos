<?php
$items = [
    ['href' => 'https://www.linkedin.com/in/cintia-aparecida-dos-santos-a88922288/', 
    'src' => 'https://i.im.ge/2025/01/02/zK1uv1.linkedin.png', 
    'alt' => 'Link Linkedin', 
    'name' => 'Linkedin'
    ],

    ['href' => 'mailto:cintiaparecidadosantos2004@gmail.com', 
    'src' => 'https://i.im.ge/2025/01/02/zK1l7p.email.png', 
    'alt' => 'Link Email', 
    'name' => 'cintiaparecidadosantos2004@gmail.com'
    ],
    
];

?>

<div class="flex flex-col gap-4 hover:underline">

        <?php foreach ($items as $item): ?>

            <div class="flex items-center gap-2">       

            <img class="h-5" src="<?=$item['src'] ?> ">
            <a target="_blank" href="<?=$item['href'] ?> "><?=$item['name']?></a>

            </div>  

        <?php endforeach; ?>  

                    
        </div>


        <!-- <div class="flex gap-1 hover:underline">
            <img class="h-5" src="img/email.png" alt="">
            <a target="_blank" href="mailto:cintiaparecidadosantos2004@gmail.com">cintiaparecidadosantos2004@gmail.com</a>
        </div> -->