<body bgcolor="D2EBF7">

        <?php
        if (!isset($_POST['control'])) {
        ?>

                <style>
                        div.alin {
                                text-align: center;
                                font-size: 20px;
                        }
                </style>
                <title>PHP Exercise</title>
                <div class="alin">
                        <fieldset>
                                <legend>
                                        <h3> Area de un triangulo con Formulario</h3>
                                </legend>

                                <form action='form.php' method='POST'>
                                        <input type="hidden" name="control" value="123456">
                                        Ingrese la base: <input type='text' name='base'> <br>
                                        Ingrese el altura: <input type='text' name='altura'> <br>
                                        <input type='submit' value="Enviar">

                                </form>
                        </fieldset>
                </div>

        <?php
        } else {
                $BASE = $_POST['base'];
                $ALTURA = $_POST['altura'];
                $AREA = ($BASE * $ALTURA) / 2;
                echo "<fieldset><h3><center> Resultado: </center></h3>";
                echo "<p><center> Area:", $AREA, "</center></p>";
                echo "<a href= 'form.php'><center> Nuevo calculo </center></a></fielset>";
        }

        ?>
</body>