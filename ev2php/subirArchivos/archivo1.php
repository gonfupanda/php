<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />  <title>Insert title here</title>
</head>
<body>
<H2>Seleccionar un archivo para enviar al servidor</H2>
<form action="archivo2.php" method="post" enctype="multipart/form-data">
Seleccione el archivo:
<input type="file" name="foto"><br />
<input type="submit" value="Enviar">
<!--se puede incluir una etiqueta de tipo hidden con el nombre ‘max_file_size’ //para indicar (value) la cantidad maxima de bytes que se pueden subir
<INPUT type='hidden' name='max_file_size' value='2500000'> -->
</form>
 

</body>
</html>