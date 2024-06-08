<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style_gal.css">

</head>
<style>
body {
font-family: Arial, sans-serif;
margin: 0;
padding: 0;
background-image: url('fondo.png');
background-size: cover;
background-attachment: fixed;
background-color: rgba(0, 0, 0, 0.7);
background-blend-mode: overlay;
}

.subir{
    display: none;
}

.popup {
  font-family: 'Poppins';
  font-size: 12px;
  display: none;
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: #fff;
  padding: 20px;
  border: 1px solid #ccc;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  z-index: 9999;
  position: fixed;
}

* {
  box-sizing: border-box;
}

body {
  margin: 0;
  background-color: #08223B;
}

.header {
  text-align: center;
  padding: 32px;
}

.header h1 {
  font-size: 50px;
}

.row {
  display: flex;
  flex-wrap: wrap;
  padding: 0px 100px 100px 100px;
}

.column {
  flex: 25%;
  max-width: 25%;
  padding-top: 20px;
  padding-left: 10px;
  padding-right: 10px;
}

.img-hover-zoom {
  height: auto;
  overflow: hidden;
  border: 5px;
}

.img-hover-zoom img {
  vertical-align: middle;
  margin: 0;
  padding: 0;
  border: 0;
  transition: transform .5s ease;
}

.img-hover-zoom:hover img {
  transform: scale(1.5);
}

.description {
  font-family: 'Poppins';
  text-align: justify;
  padding-right: 7px;
  padding-left: 7px;
  padding-bottom: 20px;
  color: #ffffff;
}

.boton-subir-imagen {
  font-family: 'Poppins';
  background-color: #3D92B6;
  color: white;
  width: 120px;
  height: 40px;
  font-size: 16px;
  margin-top: 15px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.contenedor-boton {
  display: flex;
  justify-content: center;
}

@media screen and (max-width: 800px) {
  .column {
      flex: 50%;
      max-width: 50%;
  }
}

@media screen and (max-width: 500px) {
  .column {
      flex: 100%;
      max-width: 100%;
  }
}  


.popup {
  display: none;
  color: #0D3B66;
  width: 50%;
  height: auto;
  margin: 0 auto;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  padding: 30px;
  position: fixed;
}

.top {
  display: flex;
  padding-bottom: 20px;
}

.titulo {
  padding-top: 10px;
  padding-left: 10px;
  font-size: 16px;
}

.atras-button {
  width: 50px;
  height: 50px;
  background: none;
  border: none;
  position: absolute;
  top: 20px;
  left: 20px;
  cursor: pointer;
}

.atras {    
  width: 30px;
  height: 30px;
}

.contenido {
  display: flex;
}

.imagen {
  width: 400px;
  height: 300px;
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
  float: right;
  border-radius: 5px 5px 5px 5px;
}

.descripcion-titulo {
  float: left;
  padding-left: 30px;
}

.descripcion {
  width: 450px;
  height: 185px;
  margin-top: 10px;
}

.boton-wrapper {
  display: flex;
  justify-content: center;
}

button {
  background-color: #3D92B6;
  color: white;
  width: 90px;
  height: 40px;
  font-size: 16px;
  margin-top: 15px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.semiboton{
    background-color: #3D92B6;
  color: white;
  width: 90px;
  height: 40px;
  font-size: 16px;
  margin-top: 15px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.navbar {
			display: none;
			justify-content: space-around;
			padding: 1em;
			position: fixed;
			width: 100%;
			top: 20px;
			background-color: transparent;
			z-index: 10;
		}

		.navbar a:hover {
			font-weight: bold;
			text-decoration: underline;
			transition: background-color 0.3s ease;
		}

		.navbar a,
		.navbar button {
			color: white;
			text-decoration: none;
			background: none;
			border: none;
			font-size: 1em;
			cursor: pointer;
		}
		
		.salir{
			position: relative;
			top: -20px;
			right: 20px;
			width:40px;
		}

		@media (max-width: 768px) {
			.navbar {
				flex-direction: column;
				align-items: center;
			}
		}
.navbarPublic {
  display: none;
  justify-content: space-around;
  padding: 1em;
  position: fixed;
  width: 100%;
  top: 20px;
  background-color: transparent;
  z-index: 10;
}

.navbarPublic a:hover {
  font-weight: bold;
  text-decoration: underline;
  transition: background-color 0.3s ease;
}

.navbarPublic a,
.navbarPublic button {
  color: white;
  text-decoration: none;
  background: none;
  border: none;
  font-size: 1em;
  cursor: pointer;
}

@media (max-width: 768px) {
  .navbarPublic {
    flex-direction: column;
    align-items: center;
  }
}

</style>
<body>
<?php
    if ($_POST["isAdmin"] ?? 0) {
        $isAdmin = true;
    }else {
        $isAdmin = false;
    }
	// $nombre = $_POST['nombre'] ?? '';
	// $contrasena = $_POST['contrasena'] ?? '';
	echo '
	<form action="anuncios.php" id = "formEventos" method = "POST">
	<input type="hidden" value= '.$isAdmin.' name = "isAdmin">
	</form>
	';

  echo '
	<form action="main.php" id = "formMain" method = "POST">
	<input type="hidden" value= '.$isAdmin.' name = "isAdmin">
	</form>
	';

  echo '
	<form action="diagrama_torneo.php" id = "formTorneo" method = "POST">
	<input type="hidden" value= '.$isAdmin.' name = "isAdmin">
	</form>
	';

  echo '
	<form action="galeria.php" id = "formFotos" method = "POST">
	<input type="hidden" value= '.$isAdmin.' name = "isAdmin">
	</form>
	';

?>
<div class="navbar">
	<a onclick="toMain()">CALENDARIO</a>
		<a href="#">EQUIPOS</a>
		<a onclick="toTorneo()">TORNEOS</a>
		<a onclick="toEventos()">EVENTOS</a>
		<a onclick="toFotos()">FOTOS</a>
		<a href="#">ADMINISTRADORES</a>
		<a onclick="adios()"><img class="salir" alt="salir" src="salir.png"></a>
	</div>
		<div class="navbarPublic">
    		<a onclick="toMain()">INICIO</a>
			<a href="#">EQUIPOS</a>
			<a onclick="toTorneo()">TORNEOS</a>
			<a onclick="toEventos()">EVENTOS</a>
			<a onclick="toFotos()">FOTOS</a>
			<a href="inicio.php">INICIAR SESIÓN</a>
	</div>

<br>
<br>
<br>
<br>
<button class="subir" onclick="mostrarPopup()">Subir imagen</button>
    <div class="row">

        <div class="column" id="col0">
        </div>

        <div class="column" id="col1">
        </div>

        <div class="column" id="col2">
        </div>

        <div class="column" id="col3">
        </div>
    </div>

    <?php
    include 'database.php';
    $pdo = Database::connect();
    $sql = "SELECT imagen, descrip FROM reto_galeria
    UNION ALL
    SELECT imagen, header FROM reto_eventos;";
    $stmt = $pdo->query($sql);
    $row_count = $stmt->rowCount();
    $arr = array();
    // print_r($stmt);
    foreach ($stmt as $row) {
        $arr[] = [$row['imagen'], $row['descrip']];
    }
    ?>
    <script>
		var isAdmin = "<?php echo $isAdmin; ?>";
        if (isAdmin) {
		document.querySelector(".navbar").style.display = "flex";
        document.querySelector(".subir").style.display = "block";
	}else{
		document.querySelector(".navbarPublic").style.display = "flex";
		}

    function toEventos() {
    document.querySelector("#formEventos").submit();
	}

  	function toTorneo() {
		document.querySelector("#formTorneo").submit();
	}

	function toMain() {
		document.querySelector("#formMain").submit();
	}

    function toFotos() {
		document.querySelector("#formFotos").submit();
    }

    function adios() {
    alert("Cerrando sesión");
    console.log("hola");
    document.querySelector("#formFotos").innerHTML = '<input type="hidden" value= 0 name = "isAdmin">';
    document.querySelector("#formFotos").submit();
    }



		function mostrarPopup() {
		// Obtener referencia al popup
		var popup = document.querySelector(".popup");
		// Mostrar el popup
		popup.style.display = "block";
	}



    console.log('hola, si encontraste esto es pq andas d fisgón');
    const col0 = document.querySelector('#col0');
    const col2 = document.querySelector('#col2');
    const col3 = document.querySelector('#col3');
    const col4 = document.querySelector('#col4');
    
    const arrays = [col0, col1, col2, col3];
    const imagesArray = <?php echo json_encode($arr); ?>;
    imagesArray.forEach((item, i) => {
        var whole = document.createElement('div');
        whole.setAttribute('class', 'todo');
        var container = document.createElement('div');
        container.setAttribute('class', 'img-hover-zoom')
        const imag = document.createElement('img');
        imag.setAttribute('src', 'uploads/' + imagesArray[i][0]);
        imag.setAttribute('width', '100%');
        container.appendChild(imag);

        const desc = document.createElement('div');
        desc.textContent = imagesArray[i][1];
        desc.setAttribute('class', 'description');

        var aca = document.querySelector('#col'+i%4);
        whole.appendChild(container);
        whole.appendChild(desc);
        aca.appendChild(whole);
    });

    function previewImage() {
        var preview = document.querySelector('#preview');
            var file = document.querySelector('input[type=file]').files[0];
            var reader = new FileReader();

            reader.onloadend = function () {
                preview.src = reader.result;
            }

            if (file) {
                reader.readAsDataURL(file);
            } else {
                preview.src = "";
            }

    }

    function atras() {
        document.querySelector(".popup").style.display = "none";
    }
        </script>
    


<div class="popup">
    <div class="top">
      <div class="atras" onclick="atras()">
        <button class="atras-button">
          <img class="atras" src="https://static.vecteezy.com/system/resources/previews/000/589/654/non_2x/vector-back-icon.jpg" alt="Atrás">
        </button>
      </div>
      <div class="titulo">
      <form action="subirgaleria.php" method="post" enctype="multipart/form-data">        
        <h2>Agregar foto</h2>
        <input type="file" id="imagen" name="imagen" onchange="previewImage()" required ><br><br>
        </div>
    </div>

    <div class="contenido">
    <img id="preview" src="preview.png" alt="Image Preview">
      <div class="descripcion-titulo">
        <h2>Descripción:</h2>
        <textarea class="descripcion" name="descripcion"></textarea>
        <div class="boton-wrapper">
          <input type="submit" value="guardar" class="semiboton"></input>
        </form>
        </div>    
      </div>
    </div>
  </div>



</body>
</html> 