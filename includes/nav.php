<nav>
  <div class="nav-container">
    <a href="index.php" <?= $current_page == 'home' ? 'class="active"' : '' ?>>Início</a>
    <a href="produto.php" <?= $current_page == 'produto' ? 'class="active"' : '' ?>>Produtos</a>
    <a href="contato.php" <?= $current_page == 'contato' ? 'class="active"' : '' ?>>Contato</a>
    <a href="sobre.php" <?= $current_page == 'sobre' ? 'class="active"' : '' ?>>Sobre</a>
  </div>
</nav>