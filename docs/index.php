<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tablas de Multiplicar</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script> 

    <script type="text/javascript">
        $(document).ready(function(){           
            $("tr:even").css("background","RGB(229, 232, 232)");
            $("tr:odd").css("background","lightgray");
            $("tr").mouseover(function(){
                $(this).css("background","LightGoldenRodYellow");
            });
            $("tr").mouseout(function(){
                $("tr:even").css("background","RGB(229, 232, 232)");
                $("tr:odd").css("background","lightgray");
            });
        });
    </script> 

    
  </head>
  <body>
    <div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h3 class="text-center">
					Resuelve las Multiplicaciones.
                </h3>
                <center>
                <h5>
                <span>Aciertos:</span><span id="aciertos"></span>                
                <span>Errores:</span><span id="errores"></span>
                <span style="background-color: yellow;">Ganado $ </span><span id="ganado" style="background-color: yellow;"></span>
                </h5>
                </center>
                <br>

                <center>
                <table border="1" width="70%">
                <?php 
                for ($i=0; $i < 50; $i++) { 
                ?>    
                <tr>
                   <td class="num1"><script>numero1();</script></td>
                   <td>X</td>
                   <td class="num2"><script>numero2();</script></td>
                   <td>=</td>
                   <td class="res" maxsize="15" id="<?php echo "Ren".$i;?>"><input type="number" id="<?php echo "Res".$i;?>" maxlength="10" onblur="checa(<?php echo $i;?>)"></td>
                   <td style="visibility: hidden;" id="<?php echo "Resu".$i;?>"><script>resultado(<?php echo $i;?>);</script></td>
                </tr>    
                <?php
                }
                ?>
                </table>
                </center>                                
			</div>
		</div>
	</div>

  </body>
</html>