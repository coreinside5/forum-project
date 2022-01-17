<footer class="footer">
  <h1>FOOTER</h1>

  <div id="footer_1">
  </div>
  <div id="footer_2">
  </div>
  <div id="footer_3">
  </div>
  <?= date("F j, Y, g:i a") . "\n" ?>
  <?= getcwd() . "\n" ?>
  Get value is =>
  <?= $_GET['action'] ?>
  server document rood value is =>
  <?= $_SERVER['DOCUMENT_ROOT'] ?>
</footer>


</body>

</html>