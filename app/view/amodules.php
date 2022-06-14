<?php
    session_start();
    include('../components/headermodules.php')
?>
<body>
    <?php if($_SESSION['rol'] == 'admin' || $_SESSION['rol'] == 'root'){ ?>
        <nav class="nav">
            <div id="welcome"><a href=""><img class="icon-option" src="../../public/img/logo-cemlad.jpeg" alt=""></a></div>
            <div id="student"><a href=""><img class="icon-option" src="../../public/img/logo-cemlad.jpeg" alt=""></a></div>
            <div id="prospect"><a href=""><img class="icon-option" src="../../public/img/logo-cemlad.jpeg" alt=""></a></div>
            <div id="contract"><a href=""><img class="icon-option" src="../../public/img/logo-cemlad.jpeg" alt=""></a></div>
        </nav>

        <main>
            <h2 class="text-center">Mo&#769;dulo</h2>
            <div>
                <nav class="nav nav-option">
                    <div id="list"><img class="icon-option2" src="../../public/img/logo-cemlad.jpeg" alt=""></div>
                    <div id="create"><img class="icon-option2" src="../../public/img/logo-cemlad.jpeg" alt=""></div>
                    <div id="update"><img class="icon-option2" src="../../public/img/logo-cemlad.jpeg" alt=""></div>
                    <div id="filterOption"><img class="icon-option2" src="../../public/img/logo-cemlad.jpeg" alt=""></div>
                </nav>
            </div>

            <!-- Filter view -->

            <section class="content unit" id="filter">
                <form class="form" action="">
                    <div class="input-form unit2">
                        <label class="login-text text-standar" for="">Nombre</label>
                        <input class="inputs" type="text" required>
                    </div>

                    <div class="input-form unit2">
                        <label class="login-text text-standar" for="">Nombre</label>
                        <input class="inputs" type="text" required>
                    </div>

                    <div class="input-form unit2">
                        <label class="login-text text-standar" for="">Nombre</label>
                        <input class="inputs" type="text" required>
                    </div>

                    <div class="input-form unit2">
                        <label class="login-text text-standar" for="">Nombre</label>
                        <input class="inputs" type="text" required>
                    </div>
                    <button class="btn-form items-columns unit2">Filtrar</button>
                </form>
            </section>

            <!-- Main view -->

            <section class="content unit" id="information-list">
                <h2 class="text-center">Titulo</h2>
                <div class="card-content">
                    <div class="card"></div>
                    <div class="card"></div>
                    <div class="card"></div>
                    <div class="card"></div>
                </div>
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
                        <input class="inputs" type="text" required>
                    </div>

                    <div class="input-form unit2">
                        <label class="login-text text-standar" for="">Nombre</label>
                        <input class="inputs" type="text" required>
                    </div>

                    <div class="input-form unit2">
                        <label class="login-text text-standar" for="">Nombre</label>
                        <input class="inputs" type="text" required>
                    </div>

                    <div class="input-form content-columns unit2">
                        <label class="login-text text-standar items-columns" for="">Nombre</label>
                        <textarea cols="50" rows="5" required></textarea>
                    </div>

                    <button class="btn-form items-columns unit2" id="btn-form">Acción formulario</button>
                </form>
            </section>
        </main>

        <script src="../../public/js/functions/showOrHide.js"></script>
    <?php }else{ include('../components/accessdenied.php'); } ?>
</body>
</html>