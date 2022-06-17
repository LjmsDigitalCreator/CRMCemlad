<?php include('../components/header.php') ?>
<body>
    <nav>
        <img class="icon" src="../../public/img/logo-cemlad.jpeg" alt="Logo del Cemlad">
    </nav>

    <main>
        <header class="header">
            <img class="slogan" src="../../public/img/logo-text.jpg" alt="Logo del Cemlad">
        </header>
        <section class="unit">
            <form class="form" action="../controller/signup.php" method="POST">
                <h2 class="text-gray title">Formulario de registro</h2>
                <div class="input-form unit2">
                    <label class="login-text text-standar" for="">Primer nombre</label>
                    <input name="name" class="inputs" type="text" required>
                </div>
                
                <div class="input-form unit2">
                    <label class="login-text text-standar" for="">Segundo nombre</label>
                    <input name="secondname" class="inputs" type="text" required>
                </div>

                <div class="input-form unit2">
                    <label class="login-text text-standar" for="">Primer apellido</label>
                    <input name="lastname" class="inputs" type="text" required>
                </div>

                <div class="input-form unit2">
                    <label class="login-text text-standar" for="">Segundo apellido</label>
                    <input name="secondlastname" class="inputs" type="text" required>
                </div>
                
                <div class="input-form unit2">
                    <label class="login-text text-standar" for="">Email</label>
                    <input name="email" class="inputs" type="email" required>
                </div>

                <div class="input-form unit2">
                    <label class="login-text text-standar" for="">Nu&#769;mero</label>
                    <input name="phone" class="inputs" type="text" required>
                </div>

                <div class="input-form unit2">
                    <label class="login-text text-standar" for="">Otro nu&#769;mero</label>
                    <input name="alterphone" class="inputs" type="text" required>
                </div>

                <div class="input-form unit2">
                    <label class="login-text text-standar" for="">Carrera</label>
                    <select class="inputs" name="career" id="">
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

                <div class="input-form unit2">
                    <label class="login-text text-standar" for="">Usuario</label>
                    <input name="user" class="inputs" type="text" required>
                </div>

                <div class="input-form unit2">
                    <label class="login-text text-standar" for="">Contraseña</label>
                    <input name="password" class="inputs" type="password" required>
                </div>

                <button class="btn-form items-columns unit3">Registrar</button>
            </form>
        </section>
        <footer class="footer2 unit3">
            <div>
                <a class="text-standar" href="../../index.php"><small>Ya tengo una cuenta</small></a>
            </div>
        </footer>
    </main>

    <?php include('../components/footer.php') ?>

</body>
</html>