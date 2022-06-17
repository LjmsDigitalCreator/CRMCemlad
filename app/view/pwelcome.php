<?php 

session_start();

include('../components/headermodules.php');

?>
<body>
    <?php include('../components/nav.php');

        echo'
            <input id="idUser" type="hidden" value="'.$_SESSION['id'].'">
        ';
    ?>

        <main>

            <div class="bg-test">
                <div class="bar-t">
                    <h2 class="text-center">Test</h2>
                </div>
            </div>

            <?php include('../components/whatsapp.php') ?>

            <section class="content unit">
                <h2 class="text-center text-blue">Cemlad le saluda</h2>
                <p class="text-center text-standar">Cemlad quiere guiarle en su busqueda por encontrar su profesión correcta, por lo tanto, le presentamos un test vocacional que le dará una idea de las profesiones que podría ejercer. <br>
                    Si no desea hacer el test, puede seleccionar alguna de las opciones que se encuentren en la parte superior de la pantalla, las cuales le redireccionarán a otros apartados.
                </p>

                <h2 class="text-center text-blue unit2">Test</h2>

                <div class="bg-blue-light grid border unitb2 unit">
                
                <?php

                    $questions = array(
                        "¿Con que materia se sentía más cómodo en su educación secundaria?",
                        "¿Es una persona dispuesta a cooperar con los demás y participar en actividades sociales?",
                        "¿Gusta de las actividades que requieren esfuerzo físico?",
                        "¿Mejora su conocimiento y calidad de estudio cuando lo hace solo?",
                        "¿Gusta de compartir su conocimiento con sus compañeros o conocidos?",
                        "¿Qué tan rápido se adapta a los cambios?",
                        "¿Qué tan seguido suele reflexionar sobre la realidad nacional de su país?",
                        "¿Qué tan eficiente se considera al momento de organizar sus actividades?",
                        "Es una persona que acepte sugerencias con facilidad",
                        "¿Es capaz de retroalimentarse de las situaciones que se presentan en su vida?",
                        "¿Son de su agrado los trabajo donde necesita libertad creativa para desempeñarlos?",
                        "¿Qué tan cómodo se siente siguiendo instrucciones?",
                        "¿Es capaz de controlar sus emociones en situaciones de mucho estrés?",
                        "¿Se siente ofendido cuando en un debate refutan su punto de vista?",
                        "Es capaz de aumentar su productividad siguiendo estrategias proactivas que lo ayuden a mejorar",
                        "Cuida mucho de la estética de sus presentaciones y material de estudio",
                        "Es capaz de adaptarse a un ritmo de trabajo donde sea de vital importancia trabajar en equipo",
                        "Dedica tiempo a la lectura",
                        "Si en algún punto debato con alguien, lo que suele suceder es",
                        "¿Se considera una persona ambiciosa?"
                    );

                    $answer = array(
                        array("Biologia", "Matematica", "Educacion Fisica", "Computacion", "Dibujo Tecnico"),
                        array("No me gusta en lo absoluto", "Me atrae un poco", "Neutral", "Me interesa un poco", "Me gusta bastante"),
                        array("No me gusta en lo absoluto", "Me atrae un poco", "Neutral", "Me interesa un poco", "Me gusta bastante"),
                        array("Totalmente en desacuerdo", "Un poco en desacuerdo", "Neutral", "Ligeramente de acuerdo", "Totalmente de acuerdo"),
                        array("Totalmente en desacuerdo", "Un poco en desacuerdo", "Neutral", "Ligeramente de acuerdo", "Totalmente de acuerdo"),
                        array("No me gustan los cambios", "Me toma un poco de tiempo, pero soy capaz de adaptarme", "No me desagradan, pero tampoco me gustan", "Me adapto a la mayoria de ellos", "Me adapto facilmente"),
                        array("Nunca lo hago", "Es poco frecuente", "De vez en cuando", "Casi siempre", "Siempre"),
                        array("Nada eficiente", "Poco eficiente", "Ni eficiente pero tampoco incompetente", "Medianamente eficiente", "Altamente eficiente"),
                        array("Nunca las acepto", "Rara ocasion lo hago", "Ocasionalmente", "Frecuentemente", "Siempre estoy dispuesto a aceptar"),
                        array("Nunca lo hago", "Es poco frecuente", "De vez en cuando", "Casi siempre", "Siempre"),
                        array("No son de mi agrado", "Son de mi agrado", "No siempre son de mi agrado", "Ocasionalmente son de mi agrado", "Siempre son de mi agrado"),
                        array("Nada comodo", "Poco comodo", "Ni comodo, ni agobiado", "Ligeramente comodo", "Muy comodo"),
                        array("Si", "No", "Me controlo, pero me siento incomodo haciendolo", "Reprimo todo lo que siento en ese momento", "Se me dificulta, pero consigo sobrellevarlo"),
                        array("Para nada", "Ocasionalmente", "Solo si lo hacen con una opinion sin argumentos validos", "Siento que solo son opiniones y no me lo tomo personal", "Si, me siento atacado"),
                        array("No, es muy dificil", "Si, pero suele ser un poco dificil adaptarme", "Si, pero no me siento muy comodo", "Si, me siento comodo", "Nunca lo he intentado"),
                        array("Si, me ayuda a mejorar mi organizacion", "No, lo considero un detalle innecesario", "A veces lo hago y otras veces no", "Nunca lo hago", "Nunca lo he intentado"),
                        array("No me gusta trabajar en equipo", "Si, pero se me dificulta al inicio", "No me interesa trabajar en equipo", "Si, pero es muy dificil interponer mis ideas", "Es sencillo para mi trabajar en equipo"),
                        array("Por hobbie", "Por pasion", "Por ganas de aprender algo nuevo", "Para desestresarme y distraerme", "No me gusta leer"),
                        array("Me ayuda a cambiar mi perspectiva para mejorar como persona", "La otra persona me intenta interponer sus ideas", "Pienso en como ganar el debate", "Encuentro un punto en comun entre los puntos de vista", "No me interesan los debates"),
                        array("Si, mucho", "No, para nada", "Solo cuando algo me importa", "Si, pero no suele durar mucho dicha ambicion", "Nunca he sentido ambicion por algo")
                    );

                    $letters = array('a', 'b', 'c', 'd', 'e');

                    for($i = 0; $i < count($questions); $i++){
                        echo '
                            <div class="grid padding">
                                <h3 class="text-center text-standar">
                                    Pregunta '. ($i + 1) .'
                                    <br>
                                    <br>
                                    '. $questions[$i] .'
                                </h3>
                                <div class="text-center option-test justify-center">
                        ';
                        for($j = 0; $j < 5; $j++){
                            echo '
                                <label id="answer'. $j .'question'. $i .'" class="text-center text-standar unit" for="">'. $letters[$j] .'.- '. $answer[$i][$j] .'</label>
                                <input class="noShadows2 unit" type="radio" name="group'. $i .'">
                            ';
                        }   
                        
                        echo '
                                </div>
                            </div>
                        ';
                    }
                ?>

                <button id="btnTest" class="btnNeutral justify-center unit2 unitb2">Enviar</button>
                    
                </div>

                <!--<iframe class="iframe" src="https://www.cursova.com/testvocacional" frameborder="0"></iframe>-->
            </section>
        </main>

        <?php include('app/components/footer.php') ?>
        
        <!-- Modal -->
    
        <?php include('../components/modal.php') ?>

        <script src="../../public/js/functions/requestInformation.js"></script>
        <script src="../../public/js/functions/crudInformation.js"></script>
        <script src="../../public/js/functions/showModalClient.js"></script>
        <script src="../../public/js/functions/test.js"></script>
    
</body>
</html>