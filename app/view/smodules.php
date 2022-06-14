<?php include('../components/headermodules.php') ?>
<body>
    <nav class="nav">
        <div></div>
        <div><a href=""><img class="icon-option" src="../../public/img/logo-cemlad.jpeg" alt=""></a></div>
        <div><a href=""><img class="icon-option" src="../../public/img/logo-cemlad.jpeg" alt=""></a></div>
        <div></div>
    </nav>

    <main>

    <?php include('../components/whatsapp.php') ?>
        
        <h2 class="text-center">Mo&#769;dulo</h2>
        <div class="grid">
            <nav class="nav nav-option justify-center">
                <h2 class="items-columns text-white">Materias</h2>
                <div><img class="icon-option2" src="../../public/img/logo-cemlad.jpeg" alt=""></div>
                <div><img class="icon-option2" src="../../public/img/logo-cemlad.jpeg" alt=""></div>
                <div><img class="icon-option2" src="../../public/img/logo-cemlad.jpeg" alt=""></div>
                <div><img class="icon-option2" src="../../public/img/logo-cemlad.jpeg" alt=""></div>
            </nav>
        </div>

        <!-- Filter view -->

        <section class="content unit">
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

        <section class="content unit">
            <h2 class="text-center">Titulo</h2>
            <div class="card-content">
                <div class="card"></div>
                <div class="card"></div>
                <div class="card"></div>
                <div class="card"></div>
                <div></div>
            </div>
        </section>

        <!-- Form view -->

        <section class="content unit">
            <h2 class="text-center">Carrera</h2>
            <div class="card"></div>
            <button class="btn-form items-columns unit2">Contactar</button>
        </section>
    </main>

</body>
</html>