<?php
require_once 'includes/config.php';
$page_title = 'Contato';
$current_page = 'contato';

// Processa o formulário
$status = '';
if ($_POST) {
    $nome = trim($_POST['nome'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $mensagem = trim($_POST['mensagem'] ?? '');

    if ($nome && $email && $mensagem) {
        // Simulação de envio (pode integrar com PHPMailer depois)
        $to = $site['email'];
        $subject = "Nova mensagem de contato - $nome";
        $body = "Nome: $nome\nEmail: $email\n\nMensagem:\n$mensagem";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            $status = "<p class='success'>Mensagem enviada com sucesso!</p>";
        } else {
            $status = "<p class='error'>Erro ao enviar. Tente novamente.</p>";
        }
    } else {
        $status = "<p class='error'>Preencha todos os campos.</p>";
    }
}
?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>

<main>
  <section class="contato">
    <h2>Fale Conosco</h2>
    <p>Estamos prontos para atender você. Preencha o formulário abaixo!</p>

    <?php if ($status) echo $status; ?>

    <form method="POST" class="contact-form">
      <div class="form-group">
        <label for="nome">Nome Completo</label>
        <input type="text" id="nome" name="nome" required placeholder="Seu nome">
      </div>

      <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" required placeholder="seu@email.com">
      </div>

      <div class="form-group">
        <label for="mensagem">Mensagem</label>
        <textarea id="mensagem" name="mensagem" rows="6" required placeholder="Escreva sua mensagem..."></textarea>
      </div>

      <button type="submit" class="btn-primary">
        <i class="fas fa-paper-plane"></i> Enviar Mensagem
      </button>
    </form>

    <div class="contact-info">
      <p><i class="fas fa-phone"></i> <a href="tel:<?= preg_replace('/\D/', '', $site['phone']) ?>"><?= $site['phone'] ?></a></p>
      <p><i class="fas fa-envelope"></i> <a href="mailto:<?= $site['email'] ?>"><?= $site['email'] ?></a></p>
      <p><i class="fas fa-map-marker-alt"></i> <?= $site['address'] ?></p>
    </div>
  </section>
</main>

<?php include 'includes/footer.php'; ?>