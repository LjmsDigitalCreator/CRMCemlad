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
                    <label class="login-text text-standar" for="user">Usuario</label>
                    <input name="user" id='user' type="text" required autocomplete="off">
                </div>

                <div class="input-form unit2">
                    <label class="login-text text-standar" for="password">Contraseña</label>
                    <input name="password" id='password' type="password" required autocomplete="off">
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

        <footer class="footer unit2">
            <div>
                <a class="text-standar" href="../CRMCemlad/app/view/signup.php"><small>Quiero registrarme</small></a>
                <a class="text-standar" href="/"><small>Continuar sin una cuenta</small></a>
            </div>
        </footer>
    </main>

</body>

</html>