<?php 

session_start();
include('../components/headermodules.php')

?>
<body>
    <?php if($_SESSION['rol'] == 'admin' || $_SESSION['rol'] == 'root'){ 
        include('../components/nav.php');
    ?>
        

        <main>
            <section class="content unit">
                <h2 class="text-center">BIENVENIDA</h2>
                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, beatae nisi. Modi cum, aspernatur laudantium, distinctio possimus sapiente deserunt ea ab, libero nulla quasi voluptate. Necessitatibus modi quod quasi! Repudiandae.</p>
            </section>
        </main>
    <?php }else{ include('../components/accessdenied.php'); } ?>

</body>
</html>