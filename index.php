<!DOCTYPE html>
<?php include 'db.php';?>
<html>
<head>
	<title>PHP Starter Application</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="style.css" />
</head>
<body>

<img class = 'newappIcon' src='images/arriba.png' style='width: 66%;''>


<br>

<div>
<h2 style='margin-left: 18%;'>For data scientists</h2>	
<center><table  style='width: 66%; padding-top: 0 !important;'>

<?php

 $sql = "SELECT * from servicios";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
      	
      

      	?>
      <?php echo "<tr>"; ?>	
       
      <td style='width: 10%;'> <?php echo "<img class = 'newappIcon' src='".$row['imagen_servicio']."'> "    ?> </td>
      <td><h1 id = "message"><?php echo $row['nombre_servicio']?></h1>
      <p class='description'></p><?php echo $row['descripcion_servicio']?></td>

	<?php echo "</tr>"; ?>
     <?php 
    
     }
  } else {
      echo "0 results";
  }
  $conn->close();
 ?> 


	</table></center>
	
	</div>
	<br>
<div style='border: #ED7D2E 2px solid;width: 92%;margin-left: 3%;'>
<img class = 'newappIcon' src='images/abajo.png'>
</div>
<br>
<br>
	
</body>
</html>
