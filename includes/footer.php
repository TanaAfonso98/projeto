<footer>
  <div class="footer-container">
    <div>
      <p><i class="fas fa-map-marker-alt"></i> <?= htmlspecialchars($site['address']) ?></p>
      <p><i class="fas fa-phone"></i> <a href="tel:<?= preg_replace('/\D/', '', $site['phone']) ?>"><?= htmlspecialchars($site['phone']) ?></a></p>
      <p><i class="fas fa-envelope"></i> <a href="mailto:<?= htmlspecialchars($site['email']) ?>"><?= htmlspecialchars($site['email']) ?></a></p>
    </div>
    <div>
      <p>&copy; <?= $site['year'] ?> <?= htmlspecialchars($site['title']) ?>. Todos os direitos reservados.</p>
    </div>
  </div>
</footer>

<script>
  // Animação suave de entrada
  document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll('section').forEach((el, i) => {
      el.style.animationDelay = ${i * 0.2}s;
    });
  });
</script>
</body>
</html>