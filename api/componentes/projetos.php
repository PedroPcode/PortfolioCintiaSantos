<?php
$projetos = [
  [
    "titulo" => "MMA's Academy",
    "finalizado" => true,
    "ano" => "21/11/2024",
    "pendente" => "Em desenvolvimento",
    "descricao" => "A 'MMA's Academy' é um projeto de design de site desenvolvido durante o curso de Web Design do Senac. ",
    "stack" => ["Figma", "UI/UX", "Product Design", "UX Research", "UX Design"],
    "img" => "https://i.im.ge/2025/01/02/zK1i6J.projeto-MMA.png",
    "link" => "https://lightning-playroom-63b.notion.site/MMA-s-Academy-15ad14ec703b80ab86e0c81d50afc059" // Link do projeto
  ],  
  [
    "titulo" => "Ajudaê",
    "finalizado" => true,
    "ano" => "07/12/2024",
    "pendente" => "Em desenvolvimento",
    "descricao" => "O Ajudaê é um site confiável e de fácil acesso que nasceu da minha paixão por criar soluções que realmente impactam a vida das pessoas.",
    "stack" => ["Figma", "UI/UX", "Product Design", "UX Research", "UX Design"],
    "img" => "https://i.im.ge/2025/01/02/zK1hSa.projeto-Ajudae.png",
    "link" => "https://lightning-playroom-63b.notion.site/Ajuda-15bd14ec703b80e3a096f22e7992ae50" // Link do projeto
  ], 

  
   
];


?>

<?php foreach ($projetos as $projeto) : ?>

<a target="_blank" class="p-3" href="<?=$projeto['link']?>"> <!-- Link dinâmico -->
  <div class="bg-slate-800 rounded-lg p-3 flex flex-col lg:flex-row justify-center items-center space-x-3 space-y-3 lg:space-y-0 transition ease-in-out delay-90 hover:-translate-y-1 hover:scale-105 hover:bg-orange-400 duration-300 max-w-3xl mx-auto">

    <!-- Imagem -->
    <div class="w-2/3 lg:w-1/4 flex items-center justify-center">
      <img src="<?=$projeto['img']?>" class="h-28 rounded-md shadow-lg shadow-slate-900" />
    </div>

    <!-- Conteúdo -->
    <div class="w-full lg:w-2/3 space-y-3 text-center lg:text-center">
      <!-- Título e Ano/Pendente -->
      <div class="flex flex-col items-center lg:items-center w-full">
      <h3 class="font-semibold text-lg text-center w-full -ml-1">            
  <?=$projeto['titulo']?> 
</h3>
        
        <!-- Ano ou Pendente -->
        <div class="mt-2 text-xs text-gray-400 opacity-50 italic">
          <?php if($projeto['finalizado']): ?>
            (Finalizado em <?=$projeto['ano']?>✔)
          <?php else: ?>
            (<?=$projeto['pendente']?>❌)
          <?php endif; ?>
        </div>
      </div>

      <!-- Descrição do projeto -->
      <div>
        <p class="p-4 leading-6 text-sm">
          <?=substr($projeto['descricao'], 0, 120)?> <span class="hover:text-gray-950">CLIQUE PARA VER MAIS</span>
        </p>
      </div>

      <!-- Stack (linguagens usadas) -->
      <div class="lg:mt-4 flex flex-wrap gap-2 justify-center lg:justify-center w-full">
        <?php 
        $colors = ['fuchsia', 'lime', 'yellow', 'rose', 'sky', 'amber', 'teal', 'purple'];
        foreach ($projeto['stack'] as $posicao => $language): ?>
          <span class="bg-<?=$colors[$posicao]?>-400 text-<?=$colors[$posicao]?>-900 rounded-md px-2 py-1 font-semibold text-xs">
            <?=$language ?>
          </span>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</a>

<?php endforeach; ?>



