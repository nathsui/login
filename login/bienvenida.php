<?php 

session_start();

if(!isset($_SESSION['usuario'])){
    echo '
    <script>
        alert("Por favor inicia sesión");
        window.location = "login.php";
    </script>
    ';
    session_destroy();
    die();
}

?>

<?php require('./layout/header.php')?>

<div class="text-center text-light py-1 mx-5">
      <h2 class="py-5">¡Bienvenido a El Faro! <?php echo htmlspecialchars($_SESSION['usuario']); ?></p></h2>
      <p>
      ¡Bienvenido a El Faro, donde cada visita es una experiencia emocionante y cada 
      descubrimiento te lleva más cerca de la inspiración infinita!</p>
    </div>

    <?php require('./layout/aside.php')?>
    <?php require('./layout/footer.php')?>


