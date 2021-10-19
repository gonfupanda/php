<html> 
  <head> 
  <title>Formulario de entrada del dato nombre</title> 
  </head> 
  <body>
  <?php
  if(!$_GET){	  
  ?>
<form method="GET" action=""> 
  <h1>Suscripcion electronica </h1>
  <div>
    <label>Nombre</label><input type="text" name="nombre">
     <label>apellidos</label><input type="text" name="apellidos"> 
     <label>Email</label><input type="text" name="email"> <br><br>
     <label>Domicilio</label> <input type="text" name="domicilio"> 
  </div>
  <br>
  <br>
  <div>
      <div class="row">
        <label>Interesado en los siguientes temas</label><br>
        <input type="checkbox" name="check1" value="Musica">Musica<br>
        <input type="checkbox" name="check2" value="Deporte">Deporte<br>
        <input type="checkbox" name="check3" value="Cine">Cine<br>
        <input type="checkbox" name="check4" value="Libros">Libros
      </div>
      <div>
          <label>Sexo</label><br>
          <input type="radio" name="radio1" value="Hombre">Hombre<br>
          <input type="radio" name="radio1" value="Mujer">Mujer
      </div>
  </div>
  <br><br>
  <label>Dia de la semana que le interesa recibirlo</label><br>
  <select name="dia" id="dia">
    <option value="lunes">lunes</option>
    <option value="martes">martes</option>
    <option value="miercoles">miercoles</option>
    <option value="jueves">jueves</option>
    <option value="viernes">viernes</option>
    <option value="sabado">sabado</option>
    <option value="domingo">domingo</option>
  </select>

  <br/> <br>

  <label>Su opinion:</label><br>
  <textarea id ="areatxt" name="area"></textarea>
  <br/> <br>
  
  <input type="submit" value="Enviar datos"> <input type="submit" value="Borrar Todo"> 
  </form>

  <?php
  }
  else{  
    $nombre = $_GET["nombre"];
    $apellido = $_GET["apellidos"];
    $email =$_GET["email"];
    $domicilio =$_GET["domicilio"];
    $sexo = $_GET["radio1"];
    $dia =$_GET["dia"];

    echo $nombre."</br>".$apellido."</br>".$email."</br>".$domicilio."</br>".$sexo."</br>".$dia;


  }
  ?>
</body> 
</html>
