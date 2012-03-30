<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="es" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>Exportar: swimovatedb - Adminer</title>
<link rel="stylesheet" type="text/css" href="?file=default.css&amp;version=3.3.4">
<script type="text/javascript">
var areYouSure = 'Volver a enviar POST data?';
var noResponse = 'No response from server.';
</script>
<script type="text/javascript" src="?file=functions.js&amp;version=3.3.4"></script>
<link rel="shortcut icon" type="image/x-icon" href="?file=favicon.ico&amp;version=3.3.4" id="favicon">

<body class="ltr nojs" onclick="return bodyClick(event, 'swimovatedb&#039;, &#039;');" onkeydown="bodyKeydown(event);" onload="bodyLoad('5.5');">
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, ' js');
</script>

<div id="loader"><img src="?file=loader.gif&amp;version=3.3.4" alt=""></div>
<div id="content">
<p id="breadcrumb"><a href=".">MySQL</a> &raquo; <a href='?username=root' accesskey='1' title='Alt+Shift+1'>Servidor</a> &raquo; <a href="?username=root&amp;db=swimovatedb">swimovatedb</a> &raquo; Exportar
<h2>Exportar: swimovatedb</h2>

<form action="" method="post">
<table cellspacing="0">
<tr><th>Salida<td><label><input type='radio' name='output' value='text' checked>mostrar</label><label><input type='radio' name='output' value='file'>archivo</label><label><input type='radio' name='output' value='gz'>gzip</label>
<tr><th>Formato<td><label><input type='radio' name='format' value='sql' checked>SQL</label><label><input type='radio' name='format' value='csv'>CSV,</label><label><input type='radio' name='format' value='csv;'>CSV;</label><label><input type='radio' name='format' value='tsv'>TSV</label>
<tr><th>Base de datos<td><select name='db_style'><option selected><option>USE<option>DROP+CREATE<option>CREATE<option>CREATE+ALTER</select><label for='checkbox-1'><input type='checkbox' name='routines' value='1' id='checkbox-1'>Procedimientos</label><label for='checkbox-2'><input type='checkbox' name='events' value='1' id='checkbox-2'>Eventos</label><tr><th>Tablas<td><select name='table_style'><option><option selected>DROP+CREATE<option>CREATE<option>CREATE+ALTER</select><label for='checkbox-3'><input type='checkbox' name='auto_increment' value='1' id='checkbox-3'>Incremento automático</label><label for='checkbox-4'><input type='checkbox' name='triggers' value='1' checked id='checkbox-4'>Triggers</label><tr><th>Datos<td><select name='data_style'><option><option>TRUNCATE+INSERT<option selected>INSERT<option>INSERT+UPDATE</select></table>
<p><input type="submit" value="Exportar">

<table cellspacing="0">
<thead><tr><th style='text-align: left;'><label><input type='checkbox' id='check-tables' onclick='formCheck(this, /^tables\[/);'>Tablas</label><th style='text-align: right;'><label>Datos<input type='checkbox' id='check-data' onclick='formCheck(this, /^data\[/);'></label></thead>
<tr><td><label for='checkbox-5'><input type='checkbox' name='tables[]' value='entrenador' onclick="formUncheck(&#039;check-tables&#039;);" id='checkbox-5'>entrenador</label><td align='right'><label>0<input type='checkbox' name='data[]' value='entrenador' onclick="formUncheck(&#039;check-data&#039;);" id='checkbox-6'></label>
<tr><td><label for='checkbox-7'><input type='checkbox' name='tables[]' value='grupo' onclick="formUncheck(&#039;check-tables&#039;);" id='checkbox-7'>grupo</label><td align='right'><label>0<input type='checkbox' name='data[]' value='grupo' onclick="formUncheck(&#039;check-data&#039;);" id='checkbox-8'></label>
<tr><td><label for='checkbox-9'><input type='checkbox' name='tables[]' value='nadador' onclick="formUncheck(&#039;check-tables&#039;);" id='checkbox-9'>nadador</label><td align='right'><label>0<input type='checkbox' name='data[]' value='nadador' onclick="formUncheck(&#039;check-data&#039;);" id='checkbox-10'></label>
<tr><td><label for='checkbox-11'><input type='checkbox' name='tables[]' value='serie' checked onclick="formUncheck(&#039;check-tables&#039;);" id='checkbox-11'>serie</label><td align='right'><label>0<input type='checkbox' name='data[]' value='serie' checked onclick="formUncheck(&#039;check-data&#039;);" id='checkbox-12'></label>
</table>
</form>
</div>

<form action=''>
<div id='lang'><input type="hidden" name="username" value="root"><input type="hidden" name="db" value="swimovatedb"><input type="hidden" name="dump" value="serie">Idioma: <select name='lang' onchange="var loc = location.search.replace(/[?&amp;]lang=[^&amp;]*/, &#039;&#039;); location.search = loc + (loc ? &#039;&amp;&#039; : &#039;&#039;) + &#039;lang=&#039; + this.value;"><option value="en">English<option value="cs">Čeština<option value="sk">Slovenčina<option value="nl">Nederlands<option value="es" selected>Español<option value="de">Deutsch<option value="fr">Français<option value="it">Italiano<option value="et">Eesti<option value="hu">Magyar<option value="pl">Polski<option value="ca">Català<option value="pt">Português<option value="sl">Slovenski<option value="lt">Lietuvių<option value="tr">Türkçe<option value="ro">Limba Română<option value="ru">Русский язык<option value="zh">简体中文<option value="zh-tw">繁體中文<option value="ja">日本語<option value="ta">த‌மிழ்<option value="ar">العربية<option value="fa">فارسی</select> <input type='submit' value='Usar' class='hidden'>
</div>
</form>
<div id="menu">
<h1>
<a href='http://www.adminer.org/' id='h1'>Adminer</a> <span class="version">3.3.4</span>
<a href="http://www.adminer.org/#download" id="version"></a>
</h1>
<form action="" method="post">
<p class="logout">
<a href='?username=root&amp;db=swimovatedb&amp;sql='>Comando SQL</a>
<a href='?username=root&amp;db=swimovatedb&amp;dump=' id='dump' class='active'>Export</a>
<input type="submit" name="logout" value="Logout" onclick="eventStop(event);">
<input type="hidden" name="token" value="591468">
</p>
</form>
<form action="">
<p>
<input type="hidden" name="username" value="root"><select name='db' onchange="this.form.submit();"><option value="">(base de datos)<option>information_schema<option>mysql<option>performance_schema<option selected>swimovatedb<option>test</select><input type="submit" value="Usar" class='hidden' onclick="eventStop(event);">
<p><a href="?username=root&amp;db=swimovatedb&amp;create=">Nueva tabla</a>
<p id='tables'>
<a href="?username=root&amp;db=swimovatedb&amp;select=entrenador">registros</a> <a href="?username=root&amp;db=swimovatedb&amp;table=entrenador" title='Mostrar estructura'>entrenador</a><br>
<a href="?username=root&amp;db=swimovatedb&amp;select=grupo">registros</a> <a href="?username=root&amp;db=swimovatedb&amp;table=grupo" title='Mostrar estructura'>grupo</a><br>
<a href="?username=root&amp;db=swimovatedb&amp;select=nadador">registros</a> <a href="?username=root&amp;db=swimovatedb&amp;table=nadador" title='Mostrar estructura'>nadador</a><br>
<a href="?username=root&amp;db=swimovatedb&amp;select=serie">registros</a> <a href="?username=root&amp;db=swimovatedb&amp;table=serie" title='Mostrar estructura'>serie</a><br>
<script type='text/javascript'>
var jushLinks = { sql: [ '?username=root&db=swimovatedb&table=$&', /\b(entrenador|grupo|nadador|serie)\b/g ] };
jushLinks.bac = jushLinks.sql;
jushLinks.bra = jushLinks.sql;
jushLinks.sqlite_quo = jushLinks.sql;
jushLinks.mssql_bra = jushLinks.sql;
</script>
<input type="hidden" name="dump" value=""></p></form>
</div>
