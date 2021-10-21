<html><head></head><body>
<form method="post" action="Pagina2.php">
<table style="text-align: left;" cellpadding="3" rules="rows">
<tbody>
 <tr>
 <td>Nombre Completo:</td>
 <td><input type="text" name="nombre" id="nombre" /></td>
 </tr>
 <tr>
 <tr>
 <td>Direccion:</td>
 <td><input type="text" name="direccion" id="direccion" /></td>
 </tr>
 <tr>
 <td>Correo electrónico:</td>
 <td><input type="text" name="email1" id="email1" /></td>
 </tr>
 <tr>
 <td>Contraseña:</td>
 <td><input type="text" name="contra" id="contra" /></td>
 </tr>
<tr>
 <td>Confirmar Contraseña:</td>
 <td><input type="text" name="contra1" id="contra1" /></td>
 </tr>
 <tr>
 <td>Fecha de Nacimiento:</td>
 <td><input type="date" id="fecha" name="fecha"
       value="2021-10-20"
       min="2000-01-01" max="2021-12-31"></td>
 </tr>
 <tr>
 <td>Sexo:
 <td><label><input type="radio" name="hombre" id="hombre" value="hombre" />
 Hombre</label>
 <label><input type="radio" name="mujer" id="mujer" value="mujer" />
Mujer </label><br />
 </tr>
 <tr>
 <td>Por favor elija tema de interes:</td>
 <td><input type="checkbox" id="opcion1" value="opcion1"> Ficción
     <input type="checkbox" id="opcion2" value="opcion2"> Terror<br />
     <input type="checkbox" id="opcion3" value="opcion3"> Accion
     <input type="checkbox" id="opcion4" value="opcion4"> Comedia<br />
     <input type="checkbox" id="opcion5" value="opcion5"> Suspense</td>

 </tr>
    <tr>
 <td>Selecciona tus aficiones:</td>
 <td><select name="aficion" id="aficion">
 <option selected="selected"></option>
 <option>Musica Pop - Fotografia</option>
 <option>Deporte Arire Libre</option>
 <option>Videojuegos Peliculas</option>
 <option>Otros</option>
 </select></td>
 </tr>

 <tr>
 <td class="centrado" colspan="2"><input type="submit" value="Enviar" />
 <input type="reset" value="Restablecer" /></td>
 </tr>
 </tbody>
</table>
</form>
</body></html>
