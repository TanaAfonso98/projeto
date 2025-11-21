<?php
require_once 'includes/config.php';
$page_title = 'Produtos';
$current_page = 'produto';

$produtos = [
    [
        'nome' => 'Óleo de Palma 1L',
        'preco' => '2.500 Kz',
        'desc' => 'Extraído artesanalmente, 100% natural, sem conservantes.',
        'img' => 'ana2.jpg',
        'categoria' => 'Óleo'
    ],
    [
        'nome' => 'Óleo de Palma 5L',
        'preco' => '11.000 Kz',
        'desc' => 'Ideal para restaurantes e revenda. Embalagem econômica.',
        'img' => 'ana1.jpg',
        'categoria' => 'Óleo'
    ],
    [
        'nome' => 'Sabão Artesanal 100g',
        'preco' => '800 Kz',
        'desc' => 'Feito com óleo de palma puro. Suave e biodegradável.',
        'img' => 'sabao.jpg',
        'categoria' => 'Sabão'
    ],
    [
        'nome' => 'Embalagem Personalizada',
        'preco' => 'Sob Consulta',
        'desc' => 'Design exclusivo para sua marca. Quantidade mínima: 100 un.',
        'img' => 'embalagem.jpg',
        'categoria' => 'Embalagem'
    ]
];
?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>

<main>
  <section class="produtos">
    <h2>Nossos Produtos</h2>
    <p>Qualidade artesanal, sustentabilidade e tradição em cada item.</p>

    <div class="filter-buttons">
      <button data-filter="all" class="active">Todos</button>
      <button data-filter="Óleo">Óleo de Palma</button>
      <button data-filter="Sabão">Sabão</button>
      <button data-filter="Embalagem">Embalagens</button>
    </div>

    <div class="produtos-grid" id="produtos-grid">
      <?php foreach ($produtos as $p): ?>
        <div class="produto-item" data-categoria="<?= $p['categoria'] ?>">
          <div class="produto-imagem">
            <img src="assets/img/<?= $p['img'] ?>" alt="<?= htmlspecialchars($p['nome']) ?>">
            <div class="produto-categoria">
              <i class="fas fa-tag"></i> <?= $p['categoria'] ?>
            </div>
          </div>
          <div class="card-content">
            <h3><?= htmlspecialchars($p['nome']) ?></h3>
            <div class="preco"><?= $p['preco'] ?></div>
            <p><?= htmlspecialchars($p['desc']) ?></p>
            <button class="btn-whatsapp" onclick="whatsapp('<?= urlencode($p['nome']) ?>')">
              <i class="fab fa-whatsapp"></i> Pedir Orçamento
            </button>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
</main>

<script>
function whatsapp(produto) {
  const texto = Olá! Gostaria de um orçamento para: *${produto}*;
  window.open(https://wa.me/244944394278?text=${texto}, '_blank');
}

// Filtro
document.querySelectorAll('.filter-buttons button').forEach(btn => {
  btn.addEventListener('click', () => {
    document.querySelectorAll('.filter-buttons button').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    
    const filter = btn.getAttribute('data-filter');
    document.querySelectorAll('.produto-item').forEach(item => {
      const cat = item.getAttribute('data-categoria');
      item.style.display = (filter === 'all' || cat === filter) ? 'flex' : 'none';
    });
  });
});
</script>

<?php include 'includes/footer.php'; ?>