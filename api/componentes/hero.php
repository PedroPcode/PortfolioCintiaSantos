<?php
$items = [
    ['href' => 'https://www.linkedin.com/in/cintia-aparecida-dos-santos-a88922288/', 'src' => 'https://i.im.ge/2025/01/02/zK1uv1.linkedin.png', 'alt' => 'LinkedIn logo'],
];
?>

<section class="flex gap-x-3 flex-wrap lg:flex-nowrap">

    <!-- Titulo e Descrição -->
    <div class="w-full lg:w-2/3 text-center lg:text-left">
        <h1 class="text-3xl font-bold lg:text-center">
            Seja bem-vindo(a) ao meu portífolio de <br>
            <span class="text-orange-400">UX/UI Design</span>.
        </h1>

        <p class="text-xl leading-6 mt-6">
            Sou UX/UI Design, estou em busca de novas oportunidades para aplicar minhas habilidades adquiridas, incluindo pesquisa com usuários, desenvolvimento de personas, definição de estratégias de usabilidade e criação de protótipos em diferentes fidelidades (baixa, média e alta). Estou motivado a contribuir com soluções inovadoras.
        </p>

        <ul class="flex gap-x-3 mt-3 justify-center lg:justify-start">
            <?php foreach ($items as $item): ?>
                <li>
                    <a href="<?= $item['href'] ?>" target="_blank">
                        <img class="h-6 hover:animate-bounce" src="<?=$item['src']?>" alt="<?=$item['alt']?>" />
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <!-- Imagem (Logo) - Movendo para a direita em telas maiores e centralizada em telas menores -->
    <div class="w-full lg:w-1/3 flex items-center justify-center lg:justify-end mt-6 lg:mt-0">
        <div>
            <img class="h-60 w-60 max-w-full rounded-full border-4 border-orange-500 hover:animate-pulse" src="https://i.im.ge/2025/01/02/zK1O2f.logo.jpeg" alt="Imagem de perfil">
        </div>
    </div>
</section>
