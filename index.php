<?php session_destroy(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cemlad CRM</title>
    <link rel="stylesheet" href="../CRMCemlad/public/css/style/normalize.css">
    <link rel="stylesheet" href="../CRMCemlad/public/css/style/general.css">
    <link rel="stylesheet" href="../CRMCemlad/public/css/style/index.css">
    <link rel="stylesheet" href="../CRMCemlad/public/css/layout/index-layout.css">
    <link rel="stylesheet" href="../CRMCemlad/public/css/layout/general-layout.css">
</head>

<body>
    <nav>
        <img class="icon" src="../CRMCemlad/public/img/logo-cemlad.jpeg" alt="Logo del Cemlad">
    </nav>

    <main>
        <header class="header">
            <img class="slogan" src="../CRMCemlad/public/img/logo-text.jpg" alt="Logo del Cemlad">
            <h2 class="text-blue text-center">Historias llenas de <br> E&#769;XITO</h2>
        </header>
        <section class="unit2">
            <form class="form" action="app/controller/login.php" method="POST">
                <h2 class="text-gray">Formulario de ingreso</h2>
                <div class="input-form">
                    <label class="login-text text-standar" for="user">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                        </svg>
                        Usuario
                    </label>
                    <input name="user" id='user' type="text" placeholder="Usuario" required autocomplete="off">
                </div>

                <div class="input-form unit2">
                    <label class="login-text text-standar" for="password">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
                            <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z"/>
                        </svg>
                        Contraseña
                    </label>
                    <input name="password" id='password' type="password" placeholder="Contraseña" required autocomplete="off">
                </div>

                <button class="btn-form unit3" type="submit">Ingresar</button>
            </form>


        </section>

        <?php
        if (isset($_GET['failed'])) {
            if ($_GET['failed'] == 1) {
        ?>
                <div class="grid">
                    <div class="error-card justify-center unit2">
                        <p class="text-center text-white">Usuario o clave incorrectos</p>
                    </div>
                </div>
        <?php
            }
        }

        ?>

        <footer class="footer2 unit2">
            <div>
                <a class="text-standar" href="../CRMCemlad/app/view/signup.php"><small>Quiero registrarme</small></a>
                <a class="text-standar" href="../CRMCemlad/app/view/pwelcome.php"><small>Continuar sin una cuenta</small></a>
            </div>
        </footer>

        <?php include('app/components/footer.php') ?>
    </main>

</body>

</html>