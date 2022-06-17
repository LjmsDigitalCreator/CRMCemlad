<?php

session_start();
include('../components/headermodules.php');

?>
<body>
    <?php if($_SESSION['rol'] == 'student'){ 
        include('../components/nav.php');
    ?>

        <main>

            <div class="bg-test">
                <div class="bar-t">
                    <h2 class='text-center'>Bienvenidos</h2>
                </div>
            </div>

            <?php include('../components/whatsapp.php') ?>

            <section class="content unit">
                <p class="text-justify">
                    Con ayuda de este aplicativo, podra&#769;s subir tus proyectos para poder verlos posteriormente. Podra&#769;s descargarlos y subir nuevos proyectos en los formatos .zip, .rar, .doc, .docx, .pdf.
                </p>
            </section>
        </main>
    
    <?php include('../components/footer.php') ?>

    <?php }else{ include('../components/accessdenied.php'); } ?>

</body>
</html>