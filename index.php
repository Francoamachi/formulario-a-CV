<?php

$nombre = '';
$fecha_nacimiento = '';
$ocupacion = '';
$telefono = '';
$email = '';
$nacionalidad = '';
$nivel_ingles = '';
$lenguajes_programacion = [];
$aptitudes = '';
$habilidades = [];
$perfil = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    $nombre = isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : 'N/A';
    $fecha_nacimiento = isset($_POST['nacimiento']) ? htmlspecialchars($_POST['nacimiento']) : 'N/A';
    $ocupacion = isset($_POST['ocupacion']) ? htmlspecialchars($_POST['ocupacion']) : 'N/A';
    $telefono = isset($_POST['telefono']) ? htmlspecialchars($_POST['telefono']) : 'N/A';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : 'N/A';
    $nacionalidad = isset($_POST['nacionalidad']) ? htmlspecialchars($_POST['nacionalidad']) : 'N/A';
    $nivel_ingles = isset($_POST['ingles']) ? htmlspecialchars($_POST['ingles']) : 'N/A';
    $lenguajes_programacion = isset($_POST['lenguajes_programacion']) ? $_POST['lenguajes_programacion'] : [];
    $aptitudes = isset($_POST['aptitudes']) ? htmlspecialchars($_POST['aptitudes']) : 'N/A';
    $habilidades = isset($_POST['habilidades']) ? $_POST['habilidades'] : [];
    $perfil = isset($_POST['perfil']) ? htmlspecialchars($_POST['perfil']) : 'N/A';
}

?>

<!DOCTYPE html>         
<html lang= "es">
<head>
  <title>Generar CV</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="formulario">
    <h1>Formulario para CV</h1>
    <form action="#" method="post" class="">
      <div class="flex-field">
        <div>
          <label for="nombre" class="field">Nombre y Apellidos</label>
          <input type="text" name="nombre" class="text-input">
        </div>
      </div>
      <div class="flex-field">
        <div>
          <label for="nacimiento"  class="field">Fecha de Nacimiento</label>
          <input type="date" name="nacimiento" class="text-input">
        </div>
      </div>

      <div class="flex-field">
        <div>
          <label for="ocupacion"  class="field">Ocupación</label>
          <input type="text" name="ocupacion" class="text-input">
        </div>
      </div>

      <div class="flex-field">
        <div>
          <label for="telefono"  class="field">Teléfono</label>
          <input type="text" name="telefono" class="text-input">
        </div>
      </div>
      
      <div class="flex-field">
        <div>
          <label for="email"  class="field">Correo electrónico</label>
          <input type="email" name="email" class="text-input">
        </div>
        
      </div>
      <div class= "flex-field">
        <div>
          <label for="nacionalidad"  class="field">Nacionalidad</label>
          <select name="nacionalidad" id="" class="text-input">
            <option value="Perú">Perú</option>
            <option value="Chile">Chile</option>
            <option value="Bolivia">Bolivia</option>
            <option value="Brasil">Brasil</option>
            <option value="Ecuador" >Ecuador</option>
            <option value="Colombia">Colombia</option>
            <option value="Argentina">Argentina</option>
            <option value="Argentina">Mexico</option>
            <option value="Argentina">Venezuela</option>
            <option value="Argentina">España</option>
          </select>
        </div>
      </div>  
      <label for="ingles" class="field">Nivel de Inglés</label>
      <input type="radio" name="ingles" id="basico" value="Básico">
      <label for="basico">Básico</label>
      <input type="radio" name="ingles" id="intermedio" value="Intermedio">
      <label for="intermedio">Intermedio</label>
      <input type="radio" name="ingles" id="avanzado" value="Avanzado">
      <label for="avanzado">Avanzado</label>
      <label for="lang-program" class="field" >Lenguajes de programación</label>
      <input type="checkbox" id="javascript" name="lenguajes_programacion[]" value="JavaScript">
      <label id="javascript">Javascript</label>
      <input type="checkbox" id="python" name="lenguajes_programacion[]" value="Python">
      <label id="python">Python</label>
      <input type="checkbox" id="php" name="lenguajes_programacion[]" value="PHP">
      <label id="php">PHP</label>
      <input type="checkbox" id="cobol" name="lenguajes_programacion[]" value="cobol">
      <label id="cobol">Cobol</label>
      <input type="checkbox" id="swift" name="lenguajes_programacion[]" value="swift">
      <label id="swift">Swift</label>
      <input type="checkbox" id="rust" name="lenguajes_programacion[]" value="rust">
      <label id="rust">Rust</label>
      <label  class="field">Aptitudes</label>
      <input list="lista_aptitudes" name="aptitudes" id="aptitudes" class="text-input">
      <datalist id="lista_aptitudes">
        <option value="Analisis critico">Analisis critico</option>
        <option value="Manejo de personas">Manejo de personas</option>
        <option value="Trabajo en Equipo">Trabajo en Equipo</option>
        <option value="Adaptabilidad">Adaptabilidad</option>
        <option value="Organización">Organización</option>
        <option value="Manejo del tiempo">Manejo del tiempo</option>
      </datalist>
      <span for="lang-program"  class="field">Habilidades</span>
      <input type="checkbox" id="vision" name="habilidades[]" value="Vision estrategica">
      <label id="vision">Vision estrategica</label>
      <input type="checkbox" id="gestion" name="habilidades[]" value="Gestion de proyectos">
      <label id="gestion">Gestion de proyectos</label>
      <input type="checkbox" id="orientacion" name="habilidades[]" value="Orientacion a resultados">
      <label id="orientacion">Orientacion a resultados</label>
      <label  class="field">Perfil</label>
      <textarea rows="10" cols="50" name="perfil"></textarea>
      <button type="submit">Enviar</button>
    </form>
  </div>
  <div class="cv">
  <header>
    <div class="image">
      <img src="./user.jpg" alt="user-img">
    </div>
    <div class="nombre">
      <h2><?php  echo $nombre; ?></h2>
      <span><?php  echo $ocupacion; ?></span>
    </div>
  </header>
  <section>
    <nav>
      <div>
        <h3>CONTACTO</h3>
        <hr />
        <p class="contacto">
          <img src="./phone.png" alt="asd" style="width: 25px;">
          <?php  echo $telefono; ?>
        </p>
        <p class="contacto">
          <img src="./correo.png" alt="asd" style="width: 22px;">
          <?php  echo $email; ?>
        </p>
        <p class="contacto">
          <img src="./mapa.png" alt="asd" style="width: 22px;">
          <?php  echo $nacionalidad; ?>
        </p>
      </div>
      <div>
        <h3>IDIOMAS</h3>
        <hr />
        <ul class="idiomas-list">
          <li>Inglés: <?php  echo $nivel_ingles; ?></li>
        </ul>
      </div>
      <div>
        <h3>APTITUDES</h3>
        <hr />
        <ul>
          <li><?php echo $aptitudes ?></li>
        </ul>
      </div>
      <div>
        <h3>HABILIDADES</h3>
        <hr />
        <ul>
        <?php 
          foreach ($habilidades as &$habilidad) {
            echo "<li>". $habilidad ."</li>";
        }
        ?>
        </ul>
      </div>
      <div>
        <h3>Lenguajes de Programación</h3>
        <hr />
        <ul>
          <?php 
            foreach ($lenguajes_programacion as &$lenguaje) {
              echo "<li>". $lenguaje ."</li>";
          }
          ?>
        </ul>
    </nav>
    <article >
      <h3>PERFIL</h3>
      <hr/>
      <p>
        <?php echo $perfil ?>
      </p>
      
    </article>
  </section>
</div>
</body>
</html>