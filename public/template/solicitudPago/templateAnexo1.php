<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Gastos por comprobar Anexo 1</title>
</head>

<body>

	<style>
		
		body{
			font-family: 'Arial', sans-serif;
		}

		.tabla{
		  padding: 0px;
		  border-collapse:collapse ;
		  border-top:1px solid black;
		  border-left:1px solid black;
		  border-right:1px solid black;
		  border-bottom:1px solid black;
		  text-align:center ;
		  background: #E3E3E3;
		}
		.contenido{
		  padding: 0px;
		  border-collapse:collapse ;
		  border-top:1px solid black;
		  border-left:1px solid black;
		  border-right:1px solid black;
		  border-bottom:1px solid black;
		  padding-left: 5px;
		  padding-right: 5px;
		  padding-top: 3px;
		  padding-bottom: 5px;
		  text-align:left;
		}

		.logo_uaem{
			position:absolute;
			padding-top:20px;
		}

		#encabezado{
			position: fixed;
		}

		#encabezado .page:after { 
			content: counter(page, upper-roman); 
		}

		.centrado{
			
  			justify-content: center;
		}

	</style>

	<div id="encabezado">

		<div class="logo_uaem">
			<img alt="logo_uaem" src='public/images/logo_uaem1.png' style="width:40%;height:auto">
		</div>

		<table width="100%" align="right">
			<tr>
				<th width="100%" style="font-size:10.0pt;color:#0070C0" align="right">
					COORDINACIÓN GENERAL DE PLANEACIÓN Y ADMINISTRACIÓN
				</th>
			</tr>

			<tr>
				<td width="100%" align="right">
					<img alt="linea_uaem" style="width:80%;height:auto" src='public/images/linea.png'>
				</td>
			</tr>
		</table>

		<table width="100%" style="padding-top:-5px " align="right">
			<tr>
				<td width="100%" style="font-size:10.0pt;color:#0070C0" align="right">
					Dirección General de Administración
				</td>
			</tr>

			<tr>
				<td width="100%" style="font-size:10.0pt;color:#0070C0;margin-top:-3px " align="right">
					Dirección de Contabilidad
				</td>
			</tr>
			<tr>
				<th width="100%" style="font-size:12.0pt;color:#0070C0;padding-top:8px;padding-right:25px" align="right">
					ANEXO 1
				</th>
			</tr>
		</table>

	</div>

	<br><br>

	<div style="text-align: center;font-size:11.0pt">
		GASTOS POR COMPROBAR
	</div>

	<br> <br>

	<div style="text-align:justify;font-size:11.0pt;margin-left:25px;margin-right:25px">
		R E C I B I de la Universidad Autónoma del Estado de Morelos, la cantidad de <?= '$'.number_format($total, 2, '.', ',').' ('.strtoupper($importeLetras).')' ?> por concepto de GASTOS POR
		COMPROBAR, los cuales se desglosan a continuación:
	</div>

	<br> <br> <br>
	
	<div class="centrado">
		<table width="500" style="font-size:10.0pt;border:1px solid black;border-collapse:collapse;align-self:center;padding-left:80px">
			<tr>
				<td width="50" style="padding-top:5px ;padding-bottom:5px "class="tabla">
					No.
				</td>
				<td width="300" style="padding-top:5px ;padding-bottom:5px "class="tabla">
					CONCEPTO DEL GASTO
				</td>
				<td	width="130" style="padding-top:5px ;padding-bottom:5px "class="tabla">
					TOTAL POR CONCEPTO
				</td>
			</tr>

            <?
                $i=1;
                foreach ($conceptos as $key => $value) {
                        echo '<tr>
                        <td width="50" class="contenido">
                           '.$i.'-.
                        </td>
                        <td width="300" class="contenido">
                           '.$value['descripcion'].'
                        </td>
                        <td	width="130" class="contenido">
                           '.'$'.number_format($value['total'], 2, '.', ',').'
                        </td>
                    </tr>';
                    $i++;
                }

            
            
            ?>

			
		</table>
	</div>

	<br> <br> <br> <br>

	<div style="text-align:justify;font-size:11.0pt;margin-left:25px;margin-right:25px">
		Con el presente, acepto el adeudo por la cantidad señalada en el mismo y me comprometo a presentar en un término de 20 días naturales
		contados a partir de la fecha de recepción del dinero, la comprobación del mismo en el entendido de que al no cumplir en tiempo y forma,
		se procederá a su descuento vía nomina.
	</div>

	<br> <br> <br>

	<div style="font-size:11.0pt;text-align:center">
		A T E N T A M E N T E <br> <br> <br> <br> <br>
		<?=strtoupper($firmantes[0][0])?>

	</div>

	
	<?php 
    if ($datos_firma['firmasAnexo']!='-'){ 
      $i=1;
	  echo ' <div style="page-break-after:always; clear:both"></div>';
      ?>
      <table style="margin-top: 20px;width: 720px;">
      <?php 
      foreach ($datos_firma as $firma) { 
             date_default_timezone_set("America/Mexico_City"); 
             $firma["firma"] = implode('<i></i>',str_split($firma["firma"]));?>
             <tr>
             <td style="vertical-align: text-bottom;"><div style="text-align: justify;font-size: 10px;"><?php echo '<b>'.$firma["nombre"].' | '.date("d/m/Y H:i:s",strtotime($firma["hora"]["date"]))." | ".$firma["tipoFirma"].'</b><br/>'.$firma["firma"]; ?></div></td>
           </tr>
      <?
      $i++;
      }
	  ?>
            <tr><td class="">
              <qrcode value="<?=$firmas_qr?>" ec="H" style="width: 25mm; background-color: white; color: black;"></qrcode>
            </td>

		</tr>

            <tr><td style="font-size: 10px;"><a href="<?=$firmas_qr?>" target="_blank"><?=$firmas_qr?></a>

	  			<br>
				  		<!-- <td style="vertical-align:top">             -->
<p style="text-align: justify;font-size: 9px;font-weight:bold;padding-left:100px;padding-right:100px;"><?=$codigoTexto?></p>
<p style="text-align: center;font-size: 9px;color:blue;font-weight:bold;"><?=$codigo?></p>
<!-- </td> -->
		</td>
		    
		
			</tr>
      </table>
    <?php }
   ?>
	

	
				
</body>

</html>
