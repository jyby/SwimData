<html>
    <head>
        <title>Swimnovate, Informática Deportiva - Registro de Nadador</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    
    <body>
        <h1 align="center" style="font-size: 30px">Registro de Nadador</h1><br />
            
        <form action="registrar.php" method="post">

        <font style="font-family: Arial; font-size: 14pt">
            
        <table cellspacing="5" align="center" border="0">

            <tr>
                <th colspan="3" align="left" style="background:steelblue; color:black"<font style="font-family: Arial; font-size: 14pt">Datos de usuario:</font></th>
            </tr>
            
            <tr>
                <td>Nombre completo</td> <td><input type="text" style="font-family: Arial; font-size: 12pt" name="nombre" size="50" maxlength="40"></td>
            </tr>

            <tr>
                <td>e-mail FCFM</td> <!-- El correo de los nadadores debe ser de la FCFM para asegurar que pertenece a la facultad --><td>
                                         <input type="text" style="font-family: Arial; font-size: 12pt" name="user_email" size="10" maxlength="10"> @
                                         <select name="dom_email" style="font-family: Arial; font-size: 12pt">
                                             <option value="ing.uchile.cl">ing.uchile.cl</option>
                                             <option value="dcc.uchile.cl">dcc.uchile.cl</option>
                                             <!-- Agregar el resto de posibilidades -->
                                         </select>
                                     </td>
            </tr>

            <tr>
                <td>DR Natación: </td>
                <td>
                    <select name="dr" style="font-family: Arial; font-size: 12pt">
                        <option value="DR Natación I sección 1">DR Natación I sección 1</option>
                        <option value="DR Natación I sección 2">DR Natación I sección 2</option>
                        <option value="DR Natación II sección 1">DR Natación II sección 2</option>
                        <option value="DR Natación II sección 2">DR Natación II sección 2</option>
                        <option value="DR Práctica Deportiva Selección">DR Práctica Deportiva Selección</option>
                        <option value="ningún DR">Ninguno</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Participa en rama de natación </td>
                <td>
                    <input type="radio" style="font-family: Arial; font-size: 12pt" name="rama_nat" value="si" tabindex="21"> Si
                    <input type="radio" style="font-family: Arial; font-size: 12pt" name="rama_nat" value="no" tabindex="21" checked> No
                </td>
            </tr>

            <tr>
                <td>Password </td> <td><input type="password" style="font-family: Arial; font-size: 12pt" name="password" size="50" maxlength="40"></td>
            </tr>

            <tr>
                <td>Confirmación Password </td> <td><input type="password" style="font-family: Arial; font-size: 12pt" name="conf_password" size="50" maxlength="40"></td>
            </tr>

            <tr>
                <th colspan="3" align="left" style="background:steelblue; color:black"><font style="font-family: Arial; font-size: 12pt">Información adicional:</font></th>
            </tr>

            <tr>
                <td>Edad</td> <td><input type="text" style="font-family: Arial; font-size: 12pt" name="edad" size="50" maxlength="40"></td>
            </tr>

            <tr>
                <td>Estatura </td> <td><input type="text" style="font-family: Arial; font-size: 12pt" name="estatura" size="50" maxlength="40"></td>
            </tr>

            <tr>
                <td>Peso </td> <td><input type="text" style="font-family: Arial; font-size: 12pt" name="peso" size="50" maxlength="40"></td>
            </tr>

            <td colspan="2" align="center"><input type="submit" style="font-family: Arial; font-size: 12pt" value="Registrar"></td>
            
         </table>
         </font>

         </form>

</html>



