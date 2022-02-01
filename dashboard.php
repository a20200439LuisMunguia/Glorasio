<?php
require_once('config.php');

/*/
$sqlh = "SELECT *  FROM dhthum ORDER BY id DESC limit 1";
$resulth = $conn->query($sqlh);
$arr_usersh = [];
if ($resulth->num_rows > 0) {
$arr_usersh = $resulth->fetch_all(MYSQLI_ASSOC);
}


$sqlt = "SELECT *  FROM dhttemp ORDER BY id DESC limit 1";
$resultt = $conn->query($sqlt);
$arr_userst = [];
if ($resultt->num_rows > 0) {
$arr_userst = $resultt->fetch_all(MYSQLI_ASSOC);
}
/*/

$sqlir = "SELECT count(*) as contadorPersonas FROM `infrarojo` WHERE dato = 0;";
$resultir = $conn->query($sqlir);
$arr_usersir = [];
if ($resultir->num_rows > 0) {
$arr_usersir = $resultir->fetch_all(MYSQLI_ASSOC);
}


?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="dhb.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="menuContainer"></div>

  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Integradora <br />5-TID1</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Sección I</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-box' ></i>
            <span class="links_name">Sección II</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Sección III</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Sección IV</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
      
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard Project</span>
      </div>

  <div class="container-fluid">
    <a class="navbar-brand" href="index.html">Listado de Practicas - D.M.M.P</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.html">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="unidad1.html">Unidad I</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Unidad II</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Unidad III</a>
        </li>
      </ul>
    </div>
  </div>



</nav>


        


  <section class="home-section">
    <div class="home-content">
      <div class="overview-boxes">

        <div class="box">
          <div class="right-side">
            <div class="box-topic">Análisis de Sensor Ultrasonico - Zona I</div>
            <div class="number"><!--<?php if(!empty($arr_users)) { ?>
              <?php foreach($arr_users as $user) { ?>
                <tr>
                  <td><?php echo $user['cm']; ?></td>
                </tr>
                <?php } ?>
                <?php } ?>
              -->
            </div>

            <div class="indicator">  
            Centimetros         
            </div>

            
          </div>
          <i class='bx bx-info-square cart' onclick="alert('Estoy en Zona I');"></i>
        </div>

        <div class="box">
          <div class="right-side">
            <div class="box-topic">Datos de humedad y temperatura ambiental</div>
            <div class="number">
            <!--<?php if(!empty($arr_usersh)) { ?>
              <?php foreach($arr_usersh as $userh) { ?>
                <tr>
                  <td><?php echo $userh['humedad']; ?>%</td>
                </tr>
                <?php } ?>
                <?php } ?>
               |
                <?php if(!empty($arr_userst)) { ?>
              <?php foreach($arr_userst as $usert) { ?>
                <tr>
                  <td><?php echo $usert['temp']; ?>°</td>
                </tr>
                <?php } ?>
                <?php } ?>
              -->
            </div>
            <div class="indicator">  
            Humedad - Temperatura         
            </div>
          </div>
          <i class='bx bx-info-square cart' onclick="alert('Sensor de humedad y temperatura');"></i>
        </div>

        <div class="box">
          <div class="right-side">
            <div class="box-topic">Registro de entrada</div>
            <div class="number"><?php if(!empty($arr_usersir)) { ?>
              <?php foreach($arr_usersir as $userir) { ?>
                <tr>
                  <td><?php echo $userir['contadorPersonas']; ?></td>
                </tr>
                <?php } ?>
                <?php } ?>
              </div>
            <div class="indicator">  
            Personas ingresadas        
            </div>
          </div>
          <i class='bx bx-info-square cart' onclick="alert('Estoy en Zona III');"></i>
        </div>

        <div class="box">
          <div class="right-side">
            <div class="box-topic">Análisis de Sensor - Zona IV</div>
            <div class="number">35°,25%</div>
            <div class="indicator">  
            Temperatura - Humedad         
            </div>
          </div>
          <i class='bx bx-info-square cart' onclick="alert('Estoy en Zona IV');"></i>
        </div>

    </div>
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
   let sidebarBtn = document.querySelector(".sidebarBtn");
   sidebarBtn.onclick = function() {
    sidebar.classList.toggle("active");
    if(sidebar.classList.contains("active")){
      sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
    }else
    sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
  }
</script>
<script type="text/javascript">
function actualizar(){
  location.reload(true);
}
  setInterval("actualizar()",2500);
</script>
<script>
    $(document).ready(function () {
      $('.menuContainer').load('menu.html');
    });
  </script>
</body>
</html>
