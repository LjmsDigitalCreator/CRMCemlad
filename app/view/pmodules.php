<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cemlad CRM</title>
    <link rel="stylesheet" href="../../public/css/style/normalize.css">
    <link rel="stylesheet" href="../../public/css/style/general.css">
    <link rel="stylesheet" href="../../public/css/layout/layout-standar.css">
    <link rel="stylesheet" href="../../public/css/layout/general-layout.css">
</head>
<body>
    <?php if($_SESSION['rol'] == 'prospect'){ ?>
        <nav class="nav">
            <div></div>
            <div><a href=""><img class="icon-option" src="../../public/img/logo-cemlad.jpeg" alt=""></a></div>
            <div><a href=""><img class="icon-option" src="../../public/img/logo-cemlad.jpeg" alt=""></a></div>
            <div></div>
        </nav>

        <main>

            <div class="whatsapp">
                <a class="text-center text-white" href="https://wa.me/+593979546842?text=Quisiera tener asesoría.">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                    </svg>
                </a>
            </div>
            
            <h2 class="text-center">Mo&#769;dulo</h2>
            <div class="grid" id="navigator">
                <nav class="nav nav-small nav-option justify-center">
                    <div></div>
                    <div class="text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-coin" viewBox="0 0 16 16">
                            <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9H5.5zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518l.087.02z"/>
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11zm0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/>
                        </svg>
                    </div>
                    <div class="text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </div>
                    <div></div>
                </nav>
            </div>

            <!-- Filter view -->

            <section class="content unit"  id="filter">
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

            <section class="content unit" id="information-view">
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

            <section class="content unit" id="form">
                <h2 class="text-center">Carrera</h2>
                <div class="card"></div>
                <button class="btn-form items-columns unit2">Contactar</button>
            </section>
        </main>

        <script src="../../public/js/functions/showOrHide.js"></script>
    <?php }else{ include('../components/accessdenied.php'); } ?>
</body>
</html>