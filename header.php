<?php
//  session_star();
//  error_reporting(0);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- CSS for Grid -->
  <link rel="stylesheet" href="asset/css/bootstrap-grid.css">
  <link rel="stylesheet" href="asset/css/bootstrap-grid.css.map">
  <link rel="stylesheet" href="asset/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="asset/css/bootstrap-grid.min.css.map">
  <!-- CSS for Reboot  -->
  <link rel="stylesheet" href="asset/css/bootstrap-reboot.css">
  <link rel="stylesheet" href="asset/css/bootstrap-reboot.css.map">
  <link rel="stylesheet" href="asset/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="asset/css/bootstrap-reboot.min.css.map">

  <link rel="stylesheet" href="asset/css/bootstrap.css">
  <link rel="stylesheet" href="asset/css/bootstrap.css.map">
  <link rel="stylesheet" href="asset/css/bootstrap.min.css">
  <link rel="stylesheet" href="asset/css/bootstrap.min.css.map">

  

  <!-- css internal -->
  <style>
   body{
    color: #ff00ff;
   }
  </style>


</head>
<body>
<!-- untuk navbar -->
<div class="container-fluid">
  <nav class="navbar navbar-expand-lg navbar-info bg-info">
  <a class="navbar-brand" href="#">Great Website</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" >
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown" background-color:"#FFC0CB">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <?php if($_SESSION['level']=="penjual"){?>

      <li class="nav-item">
        <a class="nav-link" href="#">Diskon</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Biodata</a>
      </li>
      
      <?php }?>

      <?php if($_SESSION['level']=="penjual"){?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php 

                    echo"selamat datang ".$_SESSION['username']=$data['username']."";

                    ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="logout.php">logout</a>
                    </div>
            </li>
                <?php }else{ ?>
    
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Login
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="login.php">login</a>
                    </div>
                </li>
    
                <?php } ?>
    
                
                </ul>
            </div>
        </nav>
        <!-- close navbar -->

      

<!-- //         <li class="nav-item">
//                 <a class="nav-link" href="mahasiswa.php">Mahasiswa</a>
//             </li>


//             
//       <li class="nav-item dropdown">
//         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
//           Dropdown link
//         </a>
//         <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
//           <a class="dropdown-item" href="#">Action</a>
//           <a class="dropdown-item" href="#">Another action</a>
//           <a class="dropdown-item" href="#">Something else here</a>
//         </div>
//       </li>
//     </ul>
//   </div>
// </nav> -->
