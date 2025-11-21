<?php
require_once 'includes/config.php';
$page_title = 'Sobre Nós';
$current_page = 'sobre';
?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>

<main>
  <section class="sobre">
    <h2>Sobre a Calebe & Makiese</h2>
    <div class="sobre-content">
      <div class="sobre-texto">
        <p>
          Fundada em Luanda, a <strong>Calebe & Makiese Emprendimentos</strong> nasceu do desejo de valorizar a 
          <strong>tradição angolana</strong> e promover a <strong>sustentabilidade</strong> através de produtos 
          naturais e artesanais.
        </p>
        <p>
          Nosso carro-chefe é o <strong>óleo de palma puro</strong>, extraído de forma responsável, 
          sem conservantes químicos, mantendo toda a qualidade e sabor original.
        </p>
        <p>
          Além do óleo, produzimos <strong>sabão artesanal</strong> e oferecemos <strong>embalagens personalizadas</strong> 
          para revendedores, fortalecendo marcas locais com identidade visual única.
        </p>

        <div class="valores">
          <div class="valor">
            <i class="fas fa-leaf"></i>
            <h4>Sustentabilidade</h4>
            <p>Processos ecológicos e respeito à natureza.</p>
          </div>
          <div class="valor">
            <i class="fas fa-handshake"></i>
            <h4>Tradição</h4>
            <p>Técnicas passadas por gerações.</p>
          </div>
          <div class="valor">
            <i class="fas fa-gem"></i>
            <h4>Qualidade</h4>
            <p>Padrão elevado em cada produto.</p>
          </div>
        </div>
      </div>

      <div class="sobre-imagem">
        <img src="assets/img/sobre.jpg" alt="Produção artesanal" onerror="this.src='assets/img/dende.jpg'">
      </div>
    </div>
  </section>

  <!-- Missão, Visão, Valores -->
  <section class="missao">
    <div class="missao-grid">
      <div class="missao-item">
        <h3>Missão</h3>
        <p>Levar produtos naturais e de qualidade às famílias angolanas, valorizando o trabalho local.</p>
      </div>
      <div class="missao-item">
        <h3>Visão</h3>
        <p>Ser referência em produção sustentável de óleo de palma e derivados em Angola.</p>
      </div>
      <div class="missao-item">
        <h3>Valores</h3>
        <p>Integridade, sustentabilidade, inovação e compromisso com a comunidade.</p>
      </div>
    </div>
  </section>
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