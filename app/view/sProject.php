<?php

session_start();
include('../components/headermodules.php');

?>
<body>
    <?php if($_SESSION['rol'] == 'student'){ 
        include('../components/nav.php');
    ?>

        <main>

            <div class="bg-project">
                <div class="bar-t">
                    <h2 class='text-center'>Proyectos</h2>
                </div>
            </div>

            <?php include('../components/whatsapp.php') ?>

            <!-- Form view upload files -->

            <section class="content unit" id="form-project">
                <h2 class="text-center" id="form-title-project">Formulario</h2>
                <form class="form" action="../controller/uploadFile.php" method="POST" enctype="multipart/form-data">
                    <div class="input-form unit2">
                        <label class="login-text text-standar" for="">Nombre</label>
                        <input name="fileName" class="inputs" type="text" required>
                    </div>

                    <input type="text" hidden value="project" name="type">
                    <div class="input-form unit2">
                        <label class="login-text text-standar" for="">Archivo</label>
                        <input name="fileUpload" class="inputs" type="file" required>
                    </div>

                    <button class="btn-form items-columns unit2" id="btn-form-project">Registrar proyecto</button>
                </form>
            </section>

        </main>

    <?php include('../components/footer.php') ?>

    <?php }else{ include('../components/accessdenied.php'); } ?>

</body>
</html>