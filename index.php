<!DOCTYPE html>
<?php include 'db.php';?>
<html>
<head>
	<title>PHP Starter Application</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="style.css" />
</head>
<body>
<br>
<br>
<div style='border: #ED7D2E 2px solid;width: 95%;margin-left: 2%;'>
<img class = 'newappIcon' src='images/arriba.png' style='width: 66%;''>
</div>

<br>

<div style='border: #ED7D2E 2px solid;width: 95%;margin-left: 2%;'>
<h2 style='margin-left: 18%;'>For data scientists</h2>	
<h2 style="margin-left: 58%;position: absolute;margin-top: -3%;">For IT professinal</h2>
<table  style='width: 65%;padding-top: 0 !important;position: absolute;'>

<?php

 $sql = "SELECT * from servicios";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {?>
      
      <?php if($row['codigo_servicio'] == '0001'|| $row['codigo_servicio'] == '0002' || $row['codigo_servicio'] == '0003'){   ?>
      
      <?php echo "<tr>"; ?>	
       
      <td style='width: 10%;'> <?php echo "<img class = 'newappIcon' src='".$row['imagen_servicio']."'> "    ?> </td>
      <td><h1 id = "message"><?php echo $row['nombre_servicio']?></h1>
      <p class='description'></p><?php echo $row['descripcion_servicio']?></td>

	<?php echo "</tr>"; ?>
     <?php
     
     if($row['codigo_servicio'] == '0003'){
     echo "</table >";
     
     }
     }
   ?>  
     
     
           <?php if($row['codigo_servicio'] == '0004'|| $row['codigo_servicio'] == '0005' || $row['codigo_servicio'] == '0006'){   ?>
           
           
           <?php
     
     if($row['codigo_servicio'] == '0004'){
     echo "<table style='margin-left: 51%;margin-top: -130px;'>";
     }
   ?> 
           
      
      <?php echo "<tr>"; ?>	
       
      <td style='width: 10%;'> <?php echo "<img class = 'newappIcon' src='".$row['imagen_servicio']."'> "    ?> </td>
      <td><h1 id = "message"><?php echo $row['nombre_servicio']?></h1>
      <p class='description'></p><?php echo $row['descripcion_servicio']?></td>

	<?php echo "</tr>"; ?>
     <?php
     
     if($row['codigo_servicio'] == '0006'){
     echo "</table>";
     break;
     }
     }
   ?>  
     
     
     
     
     
     
  <?php  
     }
  } else {
      echo "0 results";
  }
  
  ?>
  
  
  
 <?php $conn->close();
 ?> 


	
	
	</div>
	<br>
<div style='border: #ED7D2E 2px solid;width: 95%;margin-left: 2%;'>
<img class = 'newappIcon' src='images/abajo.png'>
</div>
<br>
<br>
	
</body>
</html>
