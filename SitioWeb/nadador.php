<html>
    <head>
        <title>Swimnovate, Informática Deportiva</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>

    <img style="border:1px solid black;" src="images/foto.png" width="94px" height="121" alt="foto" align="left"/>

    <table cellpadding="2" rules="groups" frame="box" width="800px">

        <thead>
            <tr>
                <th colspan="3" align="left" ><font style="color:dimgrey">Patricio Sepúlveda Heise</font> </th>
            </tr>
        </thead>

        <tbody style="background:lightgray">
            <!--Ejemplo -->
            <tr> <td> e-mail: </td> <td> ...@ing.uchile.cl </td> <td></td></tr>
            <tr> <td> Inscrito en DR: </td> <td> ... </td> <td></td></tr>
            <tr> <td> Participa en Rama: </td> <td> ... </td> <td></td></tr>
            <tr> <td> Edad:   </td> <td> ... </td> <td></td></tr>
            <tr> <td> Estatura: </td> <td> ... </td> <td></td></tr>
            <tr> <td> Peso</td> <td> ... </td> <td></td></tr>
        </tbody>

    </table>

    <br />

    <table border="1" cellpadding="2" rules="all"  frame="box" width="1600px">

        <thead>
            <tr>
                <th colspan="19" align="left" ><font style="color:dimgrey">Información Entrenamientos</font> </th>
            </tr>
        </thead>

        <tbody style="font-size:11pt; color:steelblue">
            <!--Ejemplo -->
            <tr>
                <th> Fecha </th> <!-- DD/MM/AAAA -->
                <th> Hora </th> <!-- HH/MM -->
                <th> Metros Piscina </th> <!-- ##(m) (cantidad de metros)-->
                <th> Duración </th> <!-- Duración entrenamiento -->
                <th> Largos </th> <!-- Largos nadados -->
                <th> Metros Totales </th> <!-- Metros piscina * Largos -->
                <th> Serie </th> <!-- El entrenamiento se divide en series (cada vez que se comienza a medir en el reloj) -->
                <th> Metros Serie </th> <!-- #### -->
                <th> Duración Serie </th> <!-- HH/MM/SS -->
                <th> Tiempo Descanso </th> <!-- HH/MM/SS (Duración entrenamiento menos suma de duración series) -->
                <th> Calorías </th> <!-- #### -->
                <th> Brazadas </th> <!-- Promedio por vuelta -->
                <th> Largo Brazada </th>
                <th> Brazadas por min. </th>
                <th> Velocidad </th> <!-- Segundos que demora en recorrer 100m -->
                <th> Eficiencia </th> <!-- Índice calculado a partir de distancia por brazada y tiempo por brazada (menos es mejor) -->
                <th> Estilo </th>
                <th> Evaluación </th> <!-- Excelente, Bueno, Suficiente, Malo -->
                <th> Comentarios </th> <!-- Dormí mal, estaba enfermo, tomé más agua, etc -->
            </tr>

            <tr>
                <?
                    $color = 1;

                    for($i=1; $i<=20; $i++){
                        
                        if($color == 1)
                            echo "<tr style=\"background:steelblue; color:black\"> \n";
                        else
                            echo "<tr style=\"background:skyblue; color:black\"> \n";
                        
                        for($j=1; $j<=19; $j++)
                                echo "<td> datos $i $j </td> \n";
                        
                        echo "</tr> \n";

                        if($color == 1)
                            $color = 2;
                        else
                            $color = 1;
                    }
                ?>
            </tr>
        </tbody>

        <tfoot>
            <tr>
                <td colspan="19" align="center">
                    <form><INPUT style="font-size:10pt; color:steelblue" TYPE="BUTTON" VALUE="Cargar Datos Reloj" ONCLICK="window.location.href='index.html'"></form>
                </td>
            </tr>
        </tfoot>
    </table>
    <br />

    <table border="1" cellpadding="2" rules="groups"  frame="box" width="1600px">
        <thead>
            <tr>
                <th align="left"><font style="color:dimgrey">Estadísticas</font> </th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td align="center">
                    <img style="border:1px solid black;" src="images/graficoVolumen.png" alt="graficoVol"/>
                </td>
            </tr>
            
            <tr>
                <td align="center">
                    <img style="border:1px solid black;" src="images/graficoTecnica.png" alt="graficoVol"/>
                </td>
            </tr>
        </tbody>


    </table>

</html>