<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Encuesta</title>
    <style>
    #num1{
    	width:100%;       
        margin-left: 50px;
        padding: 30px;
     	background-color: yellow;
    }
    
     #num2{
        width:100%;       
        margin-left: 50px;
        padding: 30px;
     	background-color: cyan;
     }
     div{
        margin:auto;
        text-align: center;
     }
    </style>
</head>
<body>
	<div id="header">
		<img src="logo_univa.jpg" alt="" style="width:1024px;height:250px;">
	</div>

    <?php
        echo "Me rei: ".$_POST['em1']."<br>";
        echo "Me Aburri: ".$_POST['em2']."<br>";
        echo "Me senti solo: ".$_POST['em3']."<br>";
    ?>
	<h1 id="num1">Cuestionario para primer semestre, Medicina</h1>
	<h1 id="num2"> Fin del cuestionario Conociéndote mejor</h1>
	     <div>
            <h1> Gracias por tu tiempo!!  </h1>
         </div>
         
	</form>
</body>
</html>