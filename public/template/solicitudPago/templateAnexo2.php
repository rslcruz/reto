<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Relación de Gastos Anexo 2</title>
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
  			text-align: center;
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
					ANEXO 2
				</th>
			</tr>
		</table>

	</div>

	<br><br>

	<div style="text-align: center;font-size:11.0pt">
		RELACIÓN DE GASTOS
	</div>

	<br> <br>

	<div style="text-align:justify;font-size:11.0pt;margin-left:25px;margin-right:25px">
		E N T R E G O a la Dirección de Contabilidad, la comprobación del Gasto No. ______ por la cantidad de <?= '$'.number_format($total, 2, '.', ',').' ('.strtoupper($importeLetras).')' ?>
		por concepto de <b> <?=$concepto?> </b> afectando presupuestalmente las siguientes partidas de egresos:
	</div>

	<br> <br> <br>
	
	<div class="centrado">
		<table width="500" style="font-size:10.0pt;border:1px solid black;border-collapse:collapse;align-self:center;padding-left:80px">
			<tr>
				<td width="50" style="padding-top:5px ;padding-bottom:5px "class="tabla">
					N° FACTURA
				</td>
				<td width="300" style="padding-top:5px ;padding-bottom:5px "class="tabla">
					CONCEPTO DEL GASTO
				</td>
				<td	width="130" style="padding-top:5px ;padding-bottom:5px "class="tabla">
					TOTAL POR CONCEPTO
				</td>
			</tr>

            <?

					foreach ($arrayConceptosPartidaE as $key => $value) {
						// var_dump($value->idPartidaEspecifica);
						echo '<tr>
							<td width="50" class="contenido">
								'.$value->codigoPartidaEspecifica.'
							</td>
							<td width="300" class="contenido">
								'.$value->descripcionPartidaEspecifica.'
							</td>
							<td	width="130" class="contenido">
								'.'$'.number_format($value->total, 2, '.', ',').'
							</td>
						</tr>';
					}
                // $i=1;
                // foreach ($conceptos as $key => $value) {
                //         echo '<tr>
                //         <td width="50" class="contenido">
                //            '.$i.'-.
                //         </td>
                //         <td width="300" class="contenido">
                //            '.$value['descripcion'].'
                //         </td>
                //         <td	width="130" class="contenido">
                //            '.'$'.number_format($value['total'], 2, '.', ',').'
                //         </td>
                //     </tr>';
                //     $i++;
                // }

            
            
            ?>

			
		</table>
	</div>

	<br> <br> <br> <br>

	<div style="text-align:right;font-size:11.0pt;margin-left:25px;margin-right:25px">
		Total comprobado $<?=number_format($total, 2, '.', ',')?>
	</div>

	<br> <br> <br>

	<div class="centrado">
		<table width="700" style="font-size:10.0pt;">
			<tr>
				<td width="350" style="padding-top:5px;padding-bottom:5px "class="firmas">
					Vo. Bo.
				</td>

				<td width="350" style="padding-top:5px ;padding-bottom:5px "class="firmas">
					&nbsp;
				</td>
			</tr>

			<tr>
				<td width="350" style="padding-top:5px ;padding-bottom:5px "class="firmas">
					TITULAR DEL AREA
				</td>

				<td width="350" style="padding-top:5px ;padding-bottom:5px "class="firmas">
				SOLICITANTE DEL GASTO
				</td>
			</tr>

			<tr>
				<td width="350" style="padding-top:50px"class="firmas">
					_________________________________
				</td>

				<td width="350" style="padding-top:50px"class="firmas">
					_________________________________
				</td>
			</tr>
			<tr>
				<td width="350" style="padding-top:10px"class="firmas">
				<?=strtoupper($firmantes[1][0])?>

				</td>

				<td width="350" style="padding-top:10px"class="firmas">
				<?=strtoupper($firmantes[0][0])?>
					<!-- (NOMBRE Y FIRMA) -->
				</td>
			</tr>
		</table>
	</div>
	<br> <br> <br>
	<div style="text-align:right;font-size:11.0pt;margin-left:25px;margin-right:25px">
		<!-- Cuernavaca, Morelos a  de  del . -->
		<?php 
			// setlocale(LC_ALL, "es_ES", 'Spanish_Spain', 'Spanish'); 
			// echo iconv('ISO-8859-2', 'UTF-8', strftime("%A, %d de %B de %Y", strtotime($row['date'])));
		 ?>
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
				<?if($codigo!=""){?>
              		<qrcode value="<?=$firmas_qr?>" ec="H" style="width: 25mm; background-color: white; color: black;"></qrcode>
			  	<?}?>
            </td>

		</tr>

            <tr>
				<td style="font-size: 10px;">
					<?if($codigo!=""){?>
						<a href="<?=$firmas_qr?>" target="_blank"><?=$firmas_qr?></a>
					<?}?>

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
