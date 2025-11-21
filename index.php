<?php
require_once 'includes/config.php';
$page_title = 'Início';
$current_page = 'home';
?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>

<main>
  <!-- Galeria -->
  <section class="galeria">
    <h2>Nossa Galeria</h2>
    <p>A <strong>Calebe e Makiese emprendimentos</strong> é uma empresa especializada na produção de oleo de palma artesanal, mantendo a tradição na modernização.
    Conheça alguns dos nossos produtos artesanais e sustentáveis</p>
    <div class="galeria-grid">
      <div class="galeria-item">
        <img src="assets/img/ana2.jpg" alt="Óleo de Palma">
        <div class="galeria-overlay"><h3>Óleo de Palma Puro</h3></div>
      </div>
      <div class="galeria-item">
        <img src="assets/img/sabao.jpg" alt="Sabão Artesanal">
        <div class="galeria-overlay"><h3>Sabão Natural</h3></div>
      </div>
      <div class="galeria-item">
        <img src="assets/img/embalagem.jpg" alt="Embalagens">
        <div class="galeria-overlay"><h3>Embalagens Personalizadas</h3></div>
      </div>
      <div class="galeria-item">
        <img src="assets/img/dende.jpg" alt="Dendê">
        <div class="galeria-overlay"><h3>Dendê de Qualidade</h3></div>
      </div>
    </div>
  </section>

  <!-- Produtos em Destaque -->
  <section class="produtos">
    <h2>Produtos em Destaque</h2>
    <div class="produtos-grid">
      <div class="card">
        <h3><i class="fas fa-flask"></i> Óleo de Palma Sem Conservante</h3>
        <p>Extraído com qualidade superior, ideal para uso culinário e industrial. 100% natural.</p>
      </div>
      <div class="card">
        <h3><i class="fas fa-hand-sparkles"></i> Sabão Artesanal</h3>
        <p>Feito com base de óleo de palma, suave para a pele e ecologicamente correto.</p>
      </div>
      <div class="card">
        <h3><i class="fas fa-box"></i> Embalagens Personalizadas</h3>
        <p>Design exclusivo para revendedores e distribuidores. Qualidade e identidade visual.</p>
      </div>
    </div>
  </section>

  <!-- Contato -->
  <section class="contato">
    <h2>Fale Conosco</h2>
    <p><i class="fas fa-phone"></i> <a href="tel:<?= preg_replace('/\D/', '', $site['phone']) ?>"><?= $site['phone'] ?></a></p>
    <p><i class="fas fa-envelope"></i> <a href="mailto:<?= $site['email'] ?>"><?= $site['email'] ?></a></p>
  </section>

  <!-- Equipe -->
  <section class="equipe">
  <h2>Nossa Equipe</h2>
  <div class="equipe-grid">
    <div class="membro">
      <img src="assets/img/tana.JPG" alt="Tana Afonso">
      <div class="membro-info">
        <h4>Tana Afonso</h4>
        <p>Desenvolvedor</p>
      </div>
    </div>
    <div class="membro">
      <img src="assets/img/tana2.JPG" alt="Nguala">
      <div class="membro-info">
        <h4>Nguala</h4>
        <p>Analista de Software</p>
      </div>
    </div>
    <div class="membro">
      <img src="assets/img/benedita.JPG" alt="Benedita">
      <div class="membro-info">
        <h4>Benilde</h4>
        <p>Gestora</p>
      </div>
    </div>
  </div>
</section>
</main>

<?php include 'includes/footer.php'; ?>
