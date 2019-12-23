<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="css/fontAwesome.css">
      

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Logistica MC</title>
  </head>
  <body>

<div class="container" >
   <div class="row" style="margin-top:3%">
   <div class="col-md-6 col-sm-12" id="logo"> <a href="index.html" ><img src="img/truelogo.png" alt="" style="width:38%;" ></a></div>
   <div class="col-md-6 col-sm-12" id ="volver"><a href="http://localhost/2091_ziggy/cotizador.html"><p style="color:black">Volver al cotizador</p></a></div>
 </div>
</div>



   
    
   
 
<div class="container" style="margin-top:15%;text-align:center">
  
    <p style="font-size:200%;text-align:center">

  <?php 
  if($_POST['kilometro']==0)
  {echo "Ingresa un valor distinto de 0";}
  else{
 
    $kilometro=$_POST['kilometro']*90;
    $peso=$_POST['peso']*0.98;
    $mix=$kilometro+$peso;
   
  

if
  ($_POST['peso']>250) {
   echo "El costo aproximado del viaje es de ".round($mix)." ARS";
  }
  else{
    echo "El costo aproximado del viaje es de ".round($kilometro)." ARS";
   }


}


  ?>



</p>
 
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>