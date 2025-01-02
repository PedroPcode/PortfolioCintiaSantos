<?php
$items = [
    ['href' => '#projetos', 'texto' => 'Projetos'],
    ['href' => '#sobreMim', 'texto' => 'Sobre mim'],
    ['href' => '#curriculo', 'texto' => 'Curriculo'],
    ['href' => '#links', 'texto' => 'Links'],
];
?>

<header class="mx-auto max-w-screen-lg px-3 py-6 flex items-center justify-between">
    <!-- Nome -->
    <div class="font-bold text-xl text-orange-400">
        Oii, meu nome é <span class="text-orange-400">Cintia</span>
    </div>

    <!-- Menu Desktop -->
    <div class="hidden lg:flex">
        <ul class="flex gap-x-6 font-medium">
            <?php foreach ($items as $item): ?>
                <li>
                    <a href="<?= $item['href'] ?>" class="hover:text-orange-400 transition ease-in-out delay-90 duration-300">
                        <?= $item['texto'] ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <!-- Ícone Hambúrguer (Visível em telas pequenas) -->
    <div class="lg:hidden flex items-center">
        <button id="hamburger-btn">
            <img src="https://i.im.ge/2025/01/02/zK1Qi4.hamburguer.png" alt="Hamburguer Menu" class="w-8 h-8 transition-transform duration-300 " id="hamburger-icon">
        </button>
    </div>
</header>

<!-- Menu Mobile (visível apenas quando o hambúrguer for clicado) -->
<div id="mobile-menu" class="lg:hidden transform scale-y-0 origin-top flex-col items-center absolute top-20 left-0 w-full bg-slate-800 text-white py-6 transition-all duration-500">
    <ul class="flex flex-col items-center justify-center gap-6 font-medium w-full">
        <?php foreach ($items as $item): ?>
            <li>
                <a href="<?= $item['href'] ?>" class="hover:text-orange-400 transition ease-in-out delay-90 duration-300">
                    <?= $item['texto'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

<script src="./js/script.js"></script>
