<footer class="footer">
  <?= date("F j, Y, g:i a") . "\n" ?>
  <?= getcwd() . "\n" ?>
  Get value is =>
  <?= $_GET['action'] ?>
  server document root value is =>
  <?= $_SERVER['DOCUMENT_ROOT'] ?>
  <div>
    <?= getRealIP() ?>
  </div>
  <div>
    Post IS :
    <?php print_r($_POST) ?>
    Server :
    <?php //print_r($_SERVER) 
    ?>
    GET :
    <?php print_r($_GET) ?>
    SESSION :
    <?php print_r($_SESSION) ?>
  </div>
</footer>
</body>

</html>