<?php
    session_start();
    include('../components/headermodules.php');
?>
<body>
    <?php if($_SESSION['rol'] == 'admin' || $_SESSION['rol'] == 'root'){ 
        include('../components/nav.php');
    ?>

        <main>
            <?php 

                $module = 'Mo&#769;dulo';
                $rol = null;
                
                if(isset($_GET['module'])){
                    $module = $_GET['module'];
                }

                if(isset($_GET['rol'])){
                    $rol = $_GET['rol'];
                }

                echo '<h2 class="text-center">'. $module .'</h2>';
                echo '<input id="rol" type="hidden" value="'. $rol .'">';
            ?>
            <div class="grid">
                <nav class="nav-small justify-center nav-option">
                    <div id="list" class="grid justify-center text-white" onclick="BringInformation();">
                        <p>Listado</p>
                        <svg class="justify-center" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-list-task" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5H2zM3 3H2v1h1V3z"/>
                            <path d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9z"/>
                            <path fill-rule="evenodd" d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5H2zm1 .5H2v1h1v-1z"/>
                        </svg>
                    </div>
                    <div id="filterOption" class="grid justify-center text-white">
                        <p>Buscar</p>
                        <svg class="justify-center" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </div>
                </nav>
            </div>

            <!-- Filter view -->

            <section class="content unit" id="filter">
                <div class="form">
                    <div class="input-form unit2">
                        <label class="login-text text-standar" for="">Nombre</label>
                        <input id="nameLastName" name="nameLastName" class="inputs" type="text">
                    </div>

                    <?php
                    
                        if(isset($_GET['rol']) && ($_GET['rol'] == "student" || $_GET['rol'] == "prospect")){
                            echo'
                            <div class="input-form unit2">
                                <label class="login-text text-standar" for="">Email</label>
                                <input id="email" name="email" class="inputs" type="text">
                            </div>

                            <div class="input-form unit2">
                                <label class="login-text text-standar" for="">Tele&#769;fono</label>
                                <input id="phone" name="phone" class="inputs" type="text">
                            </div>
                        ';
                        }

                        if(isset($_GET['rol']) && $_GET['rol'] == "student"){
                            echo '
                            <div class="input-form unit2">
                                <label class="login-text text-standar" for="">Carrera</label>
                                <select class="inputs" name="career" id="career">
                                    <option value="1">Ninguna</option>
                                    <option value="2">Gui&#769;a Nacional de Turismo</option>
                                    <option value="3">Tecnologi&#769;a Superior en Administracio&#769;n</option>
                                    <option value="4">Tecnologi&#769;a Superior en Contabilidad</option>
                                    <option value="5">Tecnologi&#769;a Superior en Marketing</option>
                                    <option value="6">Tecnologi&#769;a Superior en Este&#769;tica Integral</option>
                                    <option value="7">Tecnologi&#769;a Superior en Desarrollo de Software</option>
                                    <option value="8">Tecnologi&#769;a Superior en Teologi&#769;a Pastoral</option>
                                </select>
                            </div>
                            ';
                        }

                    ?>

                    <button id="btnFilter" class="btn-form items-columns unit2">Filtrar</button>
                </div>    
            </section>

            <!-- Main view -->

            <section class="content unit" id="information-list">
                <h2 class="text-center">Listado</h2>
                <div class="card-content" id="information-card"></div>
            </section>

            <!-- Form view -->

            <section class="content unit" id="form">
                <h2 class="text-center" id="form-title">Formulario</h2>
                <form class="form" action="">
                    <div class="input-form unit2">
                        <label class="login-text text-standar" for="">Nombre</label>
                        <input class="inputs" type="text" required>
                    </div>

                    <div class="input-form unit2">
                        <label class="login-text text-standar" for="">Nombre</label>
                        <input class="inputs" type="file" required>
                    </div>

                    <button class="btn-form items-columns unit2" id="btn-form">Acción formulario</button>
                </form>
            </section>

            <!-- Form view upload files -->

            <section class="content unit" id="form-project">
                <h2 class="text-center" id="form-title-project">Formulario</h2>
                <form class="form" action="../controller/uploadFile.php" method="POST" enctype="multipart/form-data">
                    <div class="input-form unit2">
                        <label class="login-text text-standar" for="">Nombre</label>
                        <input name="fileName" class="inputs" type="text" required>
                    </div>

                    <div class="input-form unit2">
                        <label class="login-text text-standar" for="">Archivo</label>
                        <input name="fileUpload" class="inputs" type="file" required>
                    </div>

                    <button class="btn-form items-columns unit2" id="btn-form-project">Acción formulario</button>
                </form>
            </section>
    
        </main>
        
        <!-- Modal -->

        <?php include('../components/modal.php') ?>

        <script src="../../public/js/functions/showOrHide.js"></script>
        <script src="../../public/js/functions/requestInformation.js"></script>
        <script src="../../public/js/functions/crudInformation.js"></script>
        <script src="../../public/js/functions/filterInformation.js"></script>
        <script src="../../public/js/functions/showModalClient.js"></script>
        <?php
            echo '
                <script>
                    BringInformation();
                </script>
            ';
        ?>
    <?php }else{ include('../components/accessdenied.php'); } ?>
</body>
</html>