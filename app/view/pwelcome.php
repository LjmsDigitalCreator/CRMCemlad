<?php 

session_start();

include('../components/headermodules.php');

?>
<body>
    <?php if($_SESSION['rol'] == 'prospect'){ ?>
        <nav class="nav">
            <div><a href=""><img class="icon-option" src="../../public/img/logo-cemlad.jpeg" alt=""></a></div>
            <div><a href=""><img class="icon-option" src="../../public/img/logo-cemlad.jpeg" alt=""></a></div>
            <div><a href=""><img class="icon-option" src="../../public/img/logo-cemlad.jpeg" alt=""></a></div>
            <div><a href=""><img class="icon-option" src="../../public/img/logo-cemlad.jpeg" alt=""></a></div>
        </nav>

        <main>

            <?php include('../components/whatsapp.php') ?>

            <section class="content unit">
                <h2 class="text-center">Cemlad le saluda</h2>
                <p class="text-justify">Cemlad quiere guiarle en su busqueda por encontrar su profesión correcta, por lo tanto, le presentamos un test vocacional que le dará una idea de las profesiones que podría ejercer. <br>
                    Si no desea hacer el test, puede seleccionar alguna de las opciones que se encuentren en la parte superior de la pantalla, las cuales le redireccionarán a otros apartados.
                </p>

                <iframe class="iframe" src="https://www.cursova.com/testvocacional" frameborder="0"></iframe>
            </section>
        </main>
    <?php }else{ include('../components/accessdenied.php'); } ?>

</body>
</html>