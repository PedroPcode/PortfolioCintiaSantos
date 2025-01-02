<!DOCTYPE html>
<html class="scroll-smooth" lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <title>Meu Portifolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 text-gray-200">

    <?php include(__DIR__ . '/componentes/header.php'); ?>
    <!-- HEADER -->
    <main class="flex-grow mx-auto max-w-screen-lg px-3 py-6 mb-10">
        <!-- HERO -->
        <?php include(__DIR__ . '/componentes/hero.php'); ?>

        <!-- PROJETOS -->
        <section class="space-y-3 py-6 ">
            <h2 id="projetos" class="text-2xl font-bold mb-10 text-center lg:text-center">Meus Projetos</h2>
            <?php include(__DIR__ . '/componentes/projetos.php'); ?>
        </section>

        <!-- Sobre MIM -->
        <section class="space-y-3 py-6 ">
            <h2 id="sobreMim" class="text-2xl font-bold mb-10 text-center lg:text-center">Sobre Mim</h2>
            <?php include(__DIR__ . '/componentes/sobreMim.php'); ?>
        </section>

        <section class="space-y-3 py-6 ">
            <h2 id="curriculo" class="text-2xl font-bold mb-10">Curriculo</h2>
            <?php include(__DIR__ . '/componentes/curriculo.php'); ?>
        </section>

        <section class="space-y-3 py-6 ">
            <h2 id="links" class="text-2xl font-bold mb-10">Links</h2>
            <?php include(__DIR__ . '/componentes/links.php'); ?>
        </section>
    </main>
    <footer class="h-20 mx-auto max-w-screen-lg ">
        <div class="border-t border-gray-600 pt-6 px-3 text-gray-400 text-sm text-center">
            &copy; Copyright <?=date('Y')?>. Construido por <a class="text-orange-400 hover:underline" target="_blank" href="https://www.linkedin.com/in/pedro-pimenta-85b517289/">Pedro Pimenta</a>
        </div>
    </footer>

    <script>
            // Lógica para exibir/ocultar o menu de hambúrguer
        const hamburgerBtn = document.getElementById('hamburger-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const hamburgerIcon = document.getElementById('hamburger-icon');

        let isMenuOpen = false;

        hamburgerBtn.addEventListener('click', () => {
            // Alterna a visibilidade do menu com a animação de expansão
            mobileMenu.classList.toggle('scale-y-100'); // Expande o menu
            mobileMenu.classList.toggle('scale-y-0'); // Contrai o menu

            // Alterna o ícone de hambúrguer para o ícone de "X"
            if (isMenuOpen) {
                hamburgerIcon.src = 'https://i.im.ge/2025/01/02/zK1Qi4.hamburguer.png'; // Ícone de hambúrguer
            } else {
                hamburgerIcon.src = 'https://i.im.ge/2025/01/02/zK12Vr.x-icon.png'; // Ícone de "X"
            }

            // Alterna o estado do menu (aberto/fechado)
            isMenuOpen = !isMenuOpen;
        });
    </script>
</body>
</html>