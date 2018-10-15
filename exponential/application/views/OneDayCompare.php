<?php

if(isset($_GET["name"])){
   $getValue = $_GET["name"];
}
else{
   $getValue = $sesser;
}
$enco = base64_decode($getValue);
$cryptSTD = base64_encode($getValue.' The quick brown fox jumps over the lazy dog');
$convey = strstr($enco, 'The quick brown fox jumps over the lazy dog', true);
$senssorId = (int)$getValue;
$addOne = (int)$senssorId + 1;
$date = str_replace(":","-",$fiDate);
$subtractT = (int)$senssorId -1;

function getNameOfMonth($monthsName){
//set the date to be converted
$date = '2016-08-07';
//convert date to month name
$month_name =  ucfirst(strftime("%B", strtotime($monthsName)));
switch ($month_name) {
case "January":
return "Enero";
break;
case "February":
return "Febrero";
break;
case "March":
return "Marzo";
break;
case "April":
return "Abril";
break;
case "May":
return "Mayo";
break;
case "June":
return "Junio";
break;
case "July":
return "Julio";
break;
case "August":
return "Agosto";
break;
case "September":
return "Septiembre";
break;
case "October":
return "Octubre";
break;
case "November":
return "Noviembre";
break;
case "December":
return "Diciembre";
break;
default:
  // header("Location: http://xponential.tech");
}


}

// echo '15 ABOVE '.$senssorId;
function firstNameForCabinets($MsenssorId){

    switch ($MsenssorId) {
      case 1:
      return "Gabinete 1";
      break;
      case 2:
      return "Gabinete 1";
      break;
      case 3:
      return "Gabinete 2";
      break;
      case 4:
      return "Gabinete 2 ";
      break;
      case 5:
      return "Gabinete 3";
      break;
      case 6:
      return "Gabinete 3";
      break;
      case 7:
      return "Gabinete 4";
      break;
      case 8:
      return "Gabinete 4 ";
      break;
      case 9:
      return "Gabinete 5 ";
      break;
      case 10:
      return "Gabinete 5 ";
      break;
      case 11:
      return "Sensores Exteriores";
      break;
      case 12:
      return "Sensores Exteriores";
      break;

    default:
      // header("Location: http://xponential.tech");
    }
  }


// echo '1  COMPARE '.$senssorId;


function nameForCabinets($MsenssorId){
  switch ($MsenssorId) {
  case 1:
  return "Gabinete 1 Posición Arriba";
  break;
  case 2:
  return "Gabinete 1 Posición Abajo";
  break;
  case 3:
  return "Gabinete 2 Posición Arriba";
  break;
  case 4:
  return "Gabinete 2 Posición Abajo";
  break;
  case 5:
  return "Gabinete 3 Posición Arriba";
  break;
  case 6:
  return "Gabinete 3 Posición Abajo";
  break;
  case 7:
  return "Gabinete 4 Posición Arriba";
  break;
  case 8:
  return "Gabinete 4 Posición Abajo";
  break;
  case 9:
  return "Gabinete 5 Posición Arriba";
  break;
  case 10:
  return "Gabinete 5 Posición Abajo";
  break;
  case 11:
  return "Sensor Exterior Posición Izquierda";
  break;
  case 12:
  return "Sensor Exterior Posición Derecha";
  break;
  default:
    // header("Location: http://xponential.tech");
  }
}


function getTime($setTheGetter){
	$justTime = date("H:i:s", strtotime($setTheGetter));
	return $justTime;
}


function getDay($setTheGetter){
	$justDate = date('Y-m-d', strtotime($setTheGetter));
	return $justDate;
}

function uniqueValues($setTheGetter){
  $result = array_unique($setTheGetter);
  return implode($result);

}


function checkStatusUp($MsenssorId){
      $nameof = firstNameForCabinets($MsenssorId);
      if($nameof == "Sensores Exteriores"){
        return "Izquierda";
      }else{
        return "Arriba";
      }
}

function checkStatusDown($MsenssorId){
      $nameof = firstNameForCabinets($MsenssorId);
      if($nameof == "Sensores Exteriores"){
        return "Derecho";
      }else{
        return "Abajo";
      }
}

echo  '<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> '.nameForCabinets($senssorId).' </title>';
?>
	<link rel="stylesheet" type="text/css" href="../assets/css/main/bootstrap.css" />
	<link rel="stylesheet" href="../assets/private/private/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" href="../assets/private/private/datatables/dataTables.bootstrap4.css">
	<link rel="stylesheet" href="../assets/private/css/sb-admin.css">
	<link rel="stylesheet" href="../assets/css/main/datetimepicker.css">
	<script src="../assets/private/private/jquery/jquery.min.js"></script>
	<script src="../assets/js/main/datetimepicker.js"></script>
	<script src="../assets/js/dates.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
	  <link rel="stylesheet" href="../assets/css/main/screensize.css">
</head>
<?php
//GLOBAL ARRAYS
$one= array();
$backgroundColorOne= array();
$borderColorOne= array();
$sensorName= "";
$lableOne= array();
$dataOneTemperature= array();
$dataOneHumidity= array();
$htmTableth = array();
$dateOne="";

$two= array();
$backgroundColorTwo= array();
$borderColorTwo= array();
$sensorNameTwo = "";
$lableTwo= array();
$dataTwoTemperature= array();
$dataTwoHumidity= array();
$dateTwo="";


//END OF GLOBAL ARRAYS
// $senssorId = $_GET["name"];
// $addOne = $senssorId + 1;
// $subtractT = $senssorId -1;

//FUNCTIONS
function getStatusTemperature($transform){
 if ($transform <= 5) {
	   return '<button type="button" class="btn btn-danger">CRITICO</button>';
 } elseif ($transform >= 6 && $transform <= 10) {
		return '<button type="button" class="btn btn-warning">PREVENTIVO</button>';
 }elseif ($transform >= 11 && $transform <= 20) {
		 return '<button type="button" class="btn btn-success">NORMAL</button>';
 }elseif ($transform >= 21 && $transform <= 25) {
		 return '<button type="button" class="btn btn-warning">PREVENTIVO</button>';
 }elseif ($transform >= 26) {
		 return '<button type="button" class="btn btn-danger">CRITICO</button>';
 }else{
		 return '<button type="button" class="btn btn-warning">ERROR</button>';
 }
}

function getStatusHumidity($transform){
 if ($transform <= 30) {
	 return '<button type="button" class="btn btn-danger">CRITICO</button>';
 } elseif ($transform >= 31 && $transform <= 45) {
	  return '<button type="button" class="btn btn-warning">PREVENTIVO</button>';
 }elseif ($transform >= 46 && $transform <= 60) {
		 return '<button type="button" class="btn btn-success">NORMAL</button>';
 }elseif ($transform >= 61 && $transform <= 80) {
		 return '<button type="button" class="btn btn-warning">PREVENTIVO</button>';
 }elseif ($transform >= 81) {
		 return '<button type="button" class="btn btn-danger">CRITICO</button>';
 }else{
		 return '<button type="button" class="btn btn-warning">ERROR</button>';
 }
}


function backgroundColorTemperature($transform){
	if ($transform <= 15) {
			return "'rgba(54, 162, 235, 0.2)',";
	} elseif ($transform >= 16 && $transform <= 30) {
			return "'rgba(75, 192, 192, 0.2)',";
	}elseif ($transform >= 31) {
			return "'rgba(244, 76, 111, 0.2)',";
	}else{
			return "'rgba(255, 159, 64, 0.2)',";
	}
}


function borderColorTemperature($transform){
 if ($transform <= 15) {
		 return "'rgba(54, 162, 235, 1)',";
 } elseif ($transform >= 16 && $transform <= 30) {
		 return "'rgba(75, 192, 192, 1)',";
 }elseif ($transform >= 31) {
		 return "'rgba(231, 24, 68, 1)',";
 }else{
		 return "'rgba(255, 159, 64, 1)',";
 }
}


function backgroundColorHumidity($transform){
	if ($transform <= 15) {
			return "'rgba(54, 162, 235, 0.2)',";
	} elseif ($transform >= 16 && $transform <= 30) {
			return "'rgba(75, 192, 192, 0.2)',";
	}elseif ($transform >= 31) {
			return "'rgba(244, 76, 111, 0.2)',";
	}else{
			return "'rgba(255, 159, 64, 0.2)',";
	}
}


function borderColorrHumidity($transform){
 if ($transform <= 15) {
		 return "'rgba(54, 162, 235, 1)',";
 } elseif ($transform >= 16 && $transform <= 30) {
		 return "'rgba(75, 192, 192, 1)',";
 }elseif ($transform >= 31) {
		 return "'rgba(231, 24, 68, 1)',";
 }else{
		 return "'rgba(255, 159, 64, 1)',";
 }
}

function removeLastCaracter($asd){
	$fastOne = substr(implode(" ",$asd), 0, -1);
	return $fastOne;
}
//END FUNCTIONS

?>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="http://www.su-techbian.com/exponential">
          <img src="../assets/img/xponential/logo.png" alt="Mountain View"></a>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav navbar-right">
              <li class="liLikeA"> CUADROS ESTADISTICOS DE SENSORES </li>
	        <li><a href="#about">SENSORES POR GABINETE</a></li>

	      </ul>
	    </div>
	  </div>
	</nav>

  <!-- Container (Portfolio Section) id="portfolio" -->
  <div  id="std" class="container">
      <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
              <div id="one" class="item active">
                <img src="../assets/img/xponential/slider/one.png"  style="width:100%;" alt="Mountain View">

                <div class="carousel-caption">
                        <h3> </h3>
                        <p> </p>
                      </div>
                  </div>
              <div  id="two" class="item">
                <img src="../assets/img/xponential/slider/two.png"  style="width:100%;" alt="Mountain View">
                <div class="carousel-caption">
            <h3> </h3>
            <p> </p>
          </div>
              </div>
              <div id="three" class="item">
                <img src="../assets/img/xponential/slider/three.png"  style="width:100%;" alt="Mountain View">

                <div class="carousel-caption">
                        <h3> </h3>
                        <p> </p>
                      </div>
              </div>
          </div>

          <!-- Left and right controls -->
          <!-- Left and right controls -->
     <a class="left carousel-control" href="#myCarousel" data-slide="prev">
       <span class="glyphicon glyphicon-chevron-left"></span>
       <span class="sr-only">Previous</span>
     </a>
     <a class="right carousel-control" href="#myCarousel" data-slide="next">
       <span class="glyphicon glyphicon-chevron-right"></span>
       <span class="sr-only">Next</span>
          </a>
      </div>
  </div>

<div  id="menuSide" class="navbar">
  <span class="gabineteStyle">

      <h3><?php echo firstNameForCabinets($senssorId); ?> </h3>
      <div class="conCat">
    </div></span>

  <div id="main">
    <span   onclick="openNav()">
DATOS DETALLADOS GABINETE
    <span   >&#9776; </span></span>
  </div>
</div>

<?php

//CODE SUPRIMECLIENTEL

//COMPARATIVE
										foreach ($data as $key => $value) {

													switch ($senssorId) {
								          case 1:

													if($value->Sensores_id == 1){

													$lableOne[] = '"'.getTime($value->Fecha).'",';
                          $dateOne = getNameOfMonth($value->Fecha);
													$sensorName = $value->Sensores_id;
                          $dataOneTemperature[] = $value->Temperatura.',';
													$dataOneHumidity[] = $value->Humedad.',';
													$dataTwoTemperature[] = ',';
													$dataTwoHumidity[] = ',';

													$htmTableth [] = "<tr>
															<td>".nameForCabinets($value->Sensores_id)."</td>
															<td>".$value->Fecha."</td>
															<td>".$value->Temperatura."</td>
															 <td>".$value->Humedad."</td>
															<td>".getStatusTemperature($value->Temperatura)."</td>
															<td>".getStatusHumidity($value->Humedad)."</td>";

													$one[] = '<tr>
																<td><form method="post" action="../chart/dayInfoAddDays">
																<input type="hidden" name="name" value="'.base64_encode($value->Sensores_id.' The quick brown fox jumps over the lazy dog').'"/>
																<input type="hidden" name="date" value="'.getDay($value->Fecha).'"/>
																<input type="hidden" name="type" value="temperature"/>
																<input class="btn btn-link" type="submit" value="'.getDay($value->Fecha).'" /> </form></td>';

												}elseif ($value->Sensores_id  == 2) {

													$lableOne[] = '"'.getTime($value->Fecha).'",';
                          $dateTwo = getNameOfMonth($value->Fecha);
													$sensorNameTwo = $value->Sensores_id;
													$dataOneTemperature[] = ',';
													$dataOneHumidity[] = ',';
													$dataTwoTemperature[] = $value->Temperatura.',';
													$dataTwoHumidity[] = $value->Humedad.',';

													$htmTableth [] = "<tr>
															<td>".nameForCabinets($value->Sensores_id)."</td>
															<td>".$value->Fecha."</td>
															<td>".$value->Temperatura."</td>
															 <td>".$value->Humedad."</td>
															<td>".getStatusTemperature($value->Temperatura)."</td>
															<td>".getStatusHumidity($value->Humedad)."</td>";

															$two[] = '<tr>
																<td><form method="post" action="../chart/dayInfoAddDays">
																<input type="hidden" name="name" value="'.base64_encode($value->Sensores_id.' The quick brown fox jumps over the lazy dog').'"/>
																<input type="hidden" name="date" value="'.getDay($value->Fecha).'"/>
																<input type="hidden" name="type" value="temperature"/>
																<input class="btn btn-link" type="submit" value="'.getDay($value->Fecha).'" /> </form></td>';

													}

													break;

								          case 2:
                          if($value->Sensores_id == 1){

													$lableOne[] = '"'.getTime($value->Fecha).'",';
                          $dateOne = getNameOfMonth($value->Fecha);
													$sensorName = $value->Sensores_id;
                          $dataOneTemperature[] = $value->Temperatura.',';
													$dataOneHumidity[] = $value->Humedad.',';
													$dataTwoTemperature[] = ',';
													$dataTwoHumidity[] = ',';

													$htmTableth [] = "<tr>
															<td>".nameForCabinets($value->Sensores_id)."</td>
															<td>".$value->Fecha."</td>
															<td>".$value->Temperatura."</td>
															 <td>".$value->Humedad."</td>
															<td>".getStatusTemperature($value->Temperatura)."</td>
															<td>".getStatusHumidity($value->Humedad)."</td>";

													$one[] = '<tr>
																<td><form method="post" action="../chart/dayInfoAddDays">
																<input type="hidden" name="name" value="'.base64_encode($value->Sensores_id.' The quick brown fox jumps over the lazy dog').'"/>
																<input type="hidden" name="date" value="'.getDay($value->Fecha).'"/>
																<input type="hidden" name="type" value="temperature"/>
																<input class="btn btn-link" type="submit" value="'.getDay($value->Fecha).'" /> </form></td>';

												}elseif ($value->Sensores_id  == 2) {

													$lableOne[] = '"'.getTime($value->Fecha).'",';
                          $dateTwo = getNameOfMonth($value->Fecha);
													$sensorNameTwo = $value->Sensores_id;
													$dataOneTemperature[] = ',';
													$dataOneHumidity[] = ',';
													$dataTwoTemperature[] = $value->Temperatura.',';
													$dataTwoHumidity[] = $value->Humedad.',';

													$htmTableth [] = "<tr>
															<td>".nameForCabinets($value->Sensores_id)."</td>
															<td>".$value->Fecha."</td>
															<td>".$value->Temperatura."</td>
															 <td>".$value->Humedad."</td>
															<td>".getStatusTemperature($value->Temperatura)."</td>
															<td>".getStatusHumidity($value->Humedad)."</td>";

															$two[] = '<tr>
																<td><form method="post" action="../chart/dayInfoAddDays">
																<input type="hidden" name="name" value="'.base64_encode($value->Sensores_id.' The quick brown fox jumps over the lazy dog').'"/>
																<input type="hidden" name="date" value="'.getDay($value->Fecha).'"/>
																<input type="hidden" name="type" value="temperature"/>
																<input class="btn btn-link" type="submit" value="'.getDay($value->Fecha).'" /> </form></td>';

													}
													break;
													case 3:
                          if($value->Sensores_id == 3){

                          $lableOne[] = '"'.getTime($value->Fecha).'",';
                          $dateOne = getNameOfMonth($value->Fecha);
                          													$sensorName = $value->Sensores_id;
                                                    $dataOneTemperature[] = $value->Temperatura.',';
                          													$dataOneHumidity[] = $value->Humedad.',';
                          													$dataTwoTemperature[] = ',';
                          													$dataTwoHumidity[] = ',';

                          													$htmTableth [] = "<tr>
                          															<td>".nameForCabinets($value->Sensores_id)."</td>
                          															<td>".$value->Fecha."</td>
                          															<td>".$value->Temperatura."</td>
                          															 <td>".$value->Humedad."</td>
                          															<td>".getStatusTemperature($value->Temperatura)."</td>
                          															<td>".getStatusHumidity($value->Humedad)."</td>";

                          													$one[] = '<tr>
                          																<td><form method="post" action="../chart/dayInfoAddDays">
                          																<input type="hidden" name="name" value="'.base64_encode($value->Sensores_id.' The quick brown fox jumps over the lazy dog').'"/>
                          																<input type="hidden" name="date" value="'.getDay($value->Fecha).'"/>
                          																<input type="hidden" name="type" value="temperature"/>
                          																<input class="btn btn-link" type="submit" value="'.getDay($value->Fecha).'" /> </form></td>';

                          												}elseif ($value->Sensores_id  == 4) {

                          													$lableOne[] = '"'.getTime($value->Fecha).'",';
                                                    $dateTwo = getNameOfMonth($value->Fecha);
                          													$sensorNameTwo = $value->Sensores_id;
                          													$dataOneTemperature[] = ',';
                          													$dataOneHumidity[] = ',';
                          													$dataTwoTemperature[] = $value->Temperatura.',';
                          													$dataTwoHumidity[] = $value->Humedad.',';

                          													$htmTableth [] = "<tr>
                          															<td>".nameForCabinets($value->Sensores_id)."</td>
                          															<td>".$value->Fecha."</td>
                          															<td>".$value->Temperatura."</td>
                          															 <td>".$value->Humedad."</td>
                          															<td>".getStatusTemperature($value->Temperatura)."</td>
                          															<td>".getStatusHumidity($value->Humedad)."</td>";

                          															$two[] = '<tr>
                          																<td><form method="post" action="../chart/dayInfoAddDays">
                          																<input type="hidden" name="name" value="'.base64_encode($value->Sensores_id.' The quick brown fox jumps over the lazy dog').'"/>
                          																<input type="hidden" name="date" value="'.getDay($value->Fecha).'"/>
                          																<input type="hidden" name="type" value="temperature"/>
                          																<input class="btn btn-link" type="submit" value="'.getDay($value->Fecha).'" /> </form></td>';

                          													}
													break;
								          case 4:
                          if($value->Sensores_id == 3){

													$lableOne[] = '"'.getTime($value->Fecha).'",';
                          $dateOne = getNameOfMonth($value->Fecha);
													$sensorName = $value->Sensores_id;
                          $dataOneTemperature[] = $value->Temperatura.',';
													$dataOneHumidity[] = $value->Humedad.',';
													$dataTwoTemperature[] = ',';
													$dataTwoHumidity[] = ',';

													$htmTableth [] = "<tr>
															<td>".nameForCabinets($value->Sensores_id)."</td>
															<td>".$value->Fecha."</td>
															<td>".$value->Temperatura."</td>
															 <td>".$value->Humedad."</td>
															<td>".getStatusTemperature($value->Temperatura)."</td>
															<td>".getStatusHumidity($value->Humedad)."</td>";

													$one[] = '<tr>
																<td><form method="post" action="../chart/dayInfoAddDays">
																<input type="hidden" name="name" value="'.base64_encode($value->Sensores_id.' The quick brown fox jumps over the lazy dog').'"/>
																<input type="hidden" name="date" value="'.getDay($value->Fecha).'"/>
																<input type="hidden" name="type" value="temperature"/>
																<input class="btn btn-link" type="submit" value="'.getDay($value->Fecha).'" /> </form></td>';

												}elseif ($value->Sensores_id  == 4) {

													$lableOne[] = '"'.getTime($value->Fecha).'",';
                          $dateTwo = getNameOfMonth($value->Fecha);
													$sensorNameTwo = $value->Sensores_id;
													$dataOneTemperature[] = ',';
													$dataOneHumidity[] = ',';
													$dataTwoTemperature[] = $value->Temperatura.',';
													$dataTwoHumidity[] = $value->Humedad.',';

													$htmTableth [] = "<tr>
															<td>".nameForCabinets($value->Sensores_id)."</td>
															<td>".$value->Fecha."</td>
															<td>".$value->Temperatura."</td>
															 <td>".$value->Humedad."</td>
															<td>".getStatusTemperature($value->Temperatura)."</td>
															<td>".getStatusHumidity($value->Humedad)."</td>";

															$two[] = '<tr>
																<td><form method="post" action="../chart/dayInfoAddDays">
																<input type="hidden" name="name" value="'.base64_encode($value->Sensores_id.' The quick brown fox jumps over the lazy dog').'"/>
																<input type="hidden" name="date" value="'.getDay($value->Fecha).'"/>
																<input type="hidden" name="type" value="temperature"/>
																<input class="btn btn-link" type="submit" value="'.getDay($value->Fecha).'" /> </form></td>';

													}

													break;
													case 5:
                          if($value->Sensores_id == 5){

													$lableOne[] = '"'.getTime($value->Fecha).'",';
                          $dateOne = getNameOfMonth($value->Fecha);
													$sensorName = $value->Sensores_id;
                          $dataOneTemperature[] = $value->Temperatura.',';
													$dataOneHumidity[] = $value->Humedad.',';
													$dataTwoTemperature[] = ',';
													$dataTwoHumidity[] = ',';

													$htmTableth [] = "<tr>
															<td>".nameForCabinets($value->Sensores_id)."</td>
															<td>".$value->Fecha."</td>
															<td>".$value->Temperatura."</td>
															 <td>".$value->Humedad."</td>
															<td>".getStatusTemperature($value->Temperatura)."</td>
															<td>".getStatusHumidity($value->Humedad)."</td>";

													$one[] = '<tr>
																<td><form method="post" action="../chart/dayInfoAddDays">
																<input type="hidden" name="name" value="'.base64_encode($value->Sensores_id.' The quick brown fox jumps over the lazy dog').'"/>
																<input type="hidden" name="date" value="'.getDay($value->Fecha).'"/>
																<input type="hidden" name="type" value="temperature"/>
																<input class="btn btn-link" type="submit" value="'.getDay($value->Fecha).'" /> </form></td>';

												}elseif ($value->Sensores_id  == 6) {

													$lableOne[] = '"'.getTime($value->Fecha).'",';
                          $dateTwo = getNameOfMonth($value->Fecha);
													$sensorNameTwo = $value->Sensores_id;
													$dataOneTemperature[] = ',';
													$dataOneHumidity[] = ',';
													$dataTwoTemperature[] = $value->Temperatura.',';
													$dataTwoHumidity[] = $value->Humedad.',';

													$htmTableth [] = "<tr>
															<td>".nameForCabinets($value->Sensores_id)."</td>
															<td>".$value->Fecha."</td>
															<td>".$value->Temperatura."</td>
															 <td>".$value->Humedad."</td>
															<td>".getStatusTemperature($value->Temperatura)."</td>
															<td>".getStatusHumidity($value->Humedad)."</td>";

															$two[] = '<tr>
																<td><form method="post" action="../chart/dayInfoAddDays">
																<input type="hidden" name="name" value="'.base64_encode($value->Sensores_id.' The quick brown fox jumps over the lazy dog').'"/>
																<input type="hidden" name="date" value="'.getDay($value->Fecha).'"/>
																<input type="hidden" name="type" value="temperature"/>
																<input class="btn btn-link" type="submit" value="'.getDay($value->Fecha).'" /> </form></td>';

													}
                          break;
								          case 6:
                          if($value->Sensores_id == 5){

													$lableOne[] = '"'.getTime($value->Fecha).'",';
                          $dateOne = getNameOfMonth($value->Fecha);
													$sensorName = $value->Sensores_id;
                          $dataOneTemperature[] = $value->Temperatura.',';
													$dataOneHumidity[] = $value->Humedad.',';
													$dataTwoTemperature[] = ',';
													$dataTwoHumidity[] = ',';

													$htmTableth [] = "<tr>
															<td>".nameForCabinets($value->Sensores_id)."</td>
															<td>".$value->Fecha."</td>
															<td>".$value->Temperatura."</td>
															 <td>".$value->Humedad."</td>
															<td>".getStatusTemperature($value->Temperatura)."</td>
															<td>".getStatusHumidity($value->Humedad)."</td>";

													$one[] = '<tr>
																<td><form method="post" action="../chart/dayInfoAddDays">
																<input type="hidden" name="name" value="'.base64_encode($value->Sensores_id.' The quick brown fox jumps over the lazy dog').'"/>
																<input type="hidden" name="date" value="'.getDay($value->Fecha).'"/>
																<input type="hidden" name="type" value="temperature"/>
																<input class="btn btn-link" type="submit" value="'.getDay($value->Fecha).'" /> </form></td>';

												}elseif ($value->Sensores_id  == 6) {

													$lableOne[] = '"'.getTime($value->Fecha).'",';
                          $dateTwo = getNameOfMonth($value->Fecha);
													$sensorNameTwo = $value->Sensores_id;
													$dataOneTemperature[] = ',';
													$dataOneHumidity[] = ',';
													$dataTwoTemperature[] = $value->Temperatura.',';
													$dataTwoHumidity[] = $value->Humedad.',';

													$htmTableth [] = "<tr>
															<td>".nameForCabinets($value->Sensores_id)."</td>
															<td>".$value->Fecha."</td>
															<td>".$value->Temperatura."</td>
															 <td>".$value->Humedad."</td>
															<td>".getStatusTemperature($value->Temperatura)."</td>
															<td>".getStatusHumidity($value->Humedad)."</td>";

															$two[] = '<tr>
																<td><form method="post" action="../chart/dayInfoAddDays">
																<input type="hidden" name="name" value="'.base64_encode($value->Sensores_id.' The quick brown fox jumps over the lazy dog').'"/>
																<input type="hidden" name="date" value="'.getDay($value->Fecha).'"/>
																<input type="hidden" name="type" value="temperature"/>
																<input class="btn btn-link" type="submit" value="'.getDay($value->Fecha).'" /> </form></td>';

													}

                          break;
                          case 7:
                          if($value->Sensores_id == 7){

													$lableOne[] = '"'.getTime($value->Fecha).'",';
                          $dateOne = getNameOfMonth($value->Fecha);
													$sensorName = $value->Sensores_id;
                          $dataOneTemperature[] = $value->Temperatura.',';
													$dataOneHumidity[] = $value->Humedad.',';
													$dataTwoTemperature[] = ',';
													$dataTwoHumidity[] = ',';

													$htmTableth [] = "<tr>
															<td>".nameForCabinets($value->Sensores_id)."</td>
															<td>".$value->Fecha."</td>
															<td>".$value->Temperatura."</td>
															 <td>".$value->Humedad."</td>
															<td>".getStatusTemperature($value->Temperatura)."</td>
															<td>".getStatusHumidity($value->Humedad)."</td>";

													$one[] = '<tr>
																<td><form method="post" action="../chart/dayInfoAddDays">
																<input type="hidden" name="name" value="'.base64_encode($value->Sensores_id.' The quick brown fox jumps over the lazy dog').'"/>
																<input type="hidden" name="date" value="'.getDay($value->Fecha).'"/>
																<input type="hidden" name="type" value="temperature"/>
																<input class="btn btn-link" type="submit" value="'.getDay($value->Fecha).'" /> </form></td>';

												}elseif ($value->Sensores_id  == 8) {

													$lableOne[] = '"'.getTime($value->Fecha).'",';
                          $dateTwo = getNameOfMonth($value->Fecha);
													$sensorNameTwo = $value->Sensores_id;
													$dataOneTemperature[] = ',';
													$dataOneHumidity[] = ',';
													$dataTwoTemperature[] = $value->Temperatura.',';
													$dataTwoHumidity[] = $value->Humedad.',';

													$htmTableth [] = "<tr>
															<td>".nameForCabinets($value->Sensores_id)."</td>
															<td>".$value->Fecha."</td>
															<td>".$value->Temperatura."</td>
															 <td>".$value->Humedad."</td>
															<td>".getStatusTemperature($value->Temperatura)."</td>
															<td>".getStatusHumidity($value->Humedad)."</td>";

															$two[] = '<tr>
																<td><form method="post" action="../chart/dayInfoAddDays">
																<input type="hidden" name="name" value="'.base64_encode($value->Sensores_id.' The quick brown fox jumps over the lazy dog').'"/>
																<input type="hidden" name="date" value="'.getDay($value->Fecha).'"/>
																<input type="hidden" name="type" value="temperature"/>
																<input class="btn btn-link" type="submit" value="'.getDay($value->Fecha).'" /> </form></td>';

													}
                          break;
                          case 8:
                          if($value->Sensores_id == 7){

													$lableOne[] = '"'.getTime($value->Fecha).'",';
                          $dateOne = getNameOfMonth($value->Fecha);
													$sensorName = $value->Sensores_id;
                          $dataOneTemperature[] = $value->Temperatura.',';
													$dataOneHumidity[] = $value->Humedad.',';
													$dataTwoTemperature[] = ',';
													$dataTwoHumidity[] = ',';

													$htmTableth [] = "<tr>
															<td>".nameForCabinets($value->Sensores_id)."</td>
															<td>".$value->Fecha."</td>
															<td>".$value->Temperatura."</td>
															 <td>".$value->Humedad."</td>
															<td>".getStatusTemperature($value->Temperatura)."</td>
															<td>".getStatusHumidity($value->Humedad)."</td>";

													$one[] = '<tr>
																<td><form method="post" action="../chart/dayInfoAddDays">
																<input type="hidden" name="name" value="'.base64_encode($value->Sensores_id.' The quick brown fox jumps over the lazy dog').'"/>
																<input type="hidden" name="date" value="'.getDay($value->Fecha).'"/>
																<input type="hidden" name="type" value="temperature"/>
																<input class="btn btn-link" type="submit" value="'.getDay($value->Fecha).'" /> </form></td>';

												}elseif ($value->Sensores_id  == 8) {

													$lableOne[] = '"'.getTime($value->Fecha).'",';
                          $dateTwo = getNameOfMonth($value->Fecha);
													$sensorNameTwo = $value->Sensores_id;
													$dataOneTemperature[] = ',';
													$dataOneHumidity[] = ',';
													$dataTwoTemperature[] = $value->Temperatura.',';
													$dataTwoHumidity[] = $value->Humedad.',';

													$htmTableth [] = "<tr>
															<td>".nameForCabinets($value->Sensores_id)."</td>
															<td>".$value->Fecha."</td>
															<td>".$value->Temperatura."</td>
															 <td>".$value->Humedad."</td>
															<td>".getStatusTemperature($value->Temperatura)."</td>
															<td>".getStatusHumidity($value->Humedad)."</td>";

															$two[] = '<tr>
																<td><form method="post" action="../chart/dayInfoAddDays">
																<input type="hidden" name="name" value="'.base64_encode($value->Sensores_id.' The quick brown fox jumps over the lazy dog').'"/>
																<input type="hidden" name="date" value="'.getDay($value->Fecha).'"/>
																<input type="hidden" name="type" value="temperature"/>
																<input class="btn btn-link" type="submit" value="'.getDay($value->Fecha).'" /> </form></td>';

													}
                          break;
                          case 9:
                          if($value->Sensores_id == 9){

													$lableOne[] = '"'.getTime($value->Fecha).'",';
                          $dateOne = getNameOfMonth($value->Fecha);
													$sensorName = $value->Sensores_id;
                          $dataOneTemperature[] = $value->Temperatura.',';
													$dataOneHumidity[] = $value->Humedad.',';
													$dataTwoTemperature[] = ',';
													$dataTwoHumidity[] = ',';

													$htmTableth [] = "<tr>
															<td>".nameForCabinets($value->Sensores_id)."</td>
															<td>".$value->Fecha."</td>
															<td>".$value->Temperatura."</td>
															 <td>".$value->Humedad."</td>
															<td>".getStatusTemperature($value->Temperatura)."</td>
															<td>".getStatusHumidity($value->Humedad)."</td>";

													$one[] = '<tr>
																<td><form method="post" action="../chart/dayInfoAddDays">
																<input type="hidden" name="name" value="'.base64_encode($value->Sensores_id.' The quick brown fox jumps over the lazy dog').'"/>
																<input type="hidden" name="date" value="'.getDay($value->Fecha).'"/>
																<input type="hidden" name="type" value="temperature"/>
																<input class="btn btn-link" type="submit" value="'.getDay($value->Fecha).'" /> </form></td>';

												}elseif ($value->Sensores_id  == 10) {

													$lableOne[] = '"'.getTime($value->Fecha).'",';
                          $dateTwo = getNameOfMonth($value->Fecha);
													$sensorNameTwo = $value->Sensores_id;
													$dataOneTemperature[] = ',';
													$dataOneHumidity[] = ',';
													$dataTwoTemperature[] = $value->Temperatura.',';
													$dataTwoHumidity[] = $value->Humedad.',';

													$htmTableth [] = "<tr>
															<td>".nameForCabinets($value->Sensores_id)."</td>
															<td>".$value->Fecha."</td>
															<td>".$value->Temperatura."</td>
															 <td>".$value->Humedad."</td>
															<td>".getStatusTemperature($value->Temperatura)."</td>
															<td>".getStatusHumidity($value->Humedad)."</td>";

															$two[] = '<tr>
																<td><form method="post" action="../chart/dayInfoAddDays">
																<input type="hidden" name="name" value="'.base64_encode($value->Sensores_id.' The quick brown fox jumps over the lazy dog').'"/>
																<input type="hidden" name="date" value="'.getDay($value->Fecha).'"/>
																<input type="hidden" name="type" value="temperature"/>
																<input class="btn btn-link" type="submit" value="'.getDay($value->Fecha).'" /> </form></td>';

													}
                          break;
                          case 10:
                          if($value->Sensores_id == 9){

													$lableOne[] = '"'.getTime($value->Fecha).'",';
                          $dateOne = getNameOfMonth($value->Fecha);
													$sensorName = $value->Sensores_id;
                          $dataOneTemperature[] = $value->Temperatura.',';
													$dataOneHumidity[] = $value->Humedad.',';
													$dataTwoTemperature[] = ',';
													$dataTwoHumidity[] = ',';

													$htmTableth [] = "<tr>
															<td>".nameForCabinets($value->Sensores_id)."</td>
															<td>".$value->Fecha."</td>
															<td>".$value->Temperatura."</td>
															 <td>".$value->Humedad."</td>
															<td>".getStatusTemperature($value->Temperatura)."</td>
															<td>".getStatusHumidity($value->Humedad)."</td>";

													$one[] = '<tr>
																<td><form method="post" action="../chart/dayInfoAddDays">
																<input type="hidden" name="name" value="'.base64_encode($value->Sensores_id.' The quick brown fox jumps over the lazy dog').'"/>
																<input type="hidden" name="date" value="'.getDay($value->Fecha).'"/>
																<input type="hidden" name="type" value="temperature"/>
																<input class="btn btn-link" type="submit" value="'.getDay($value->Fecha).'" /> </form></td>';

												}elseif ($value->Sensores_id  == 10) {

													$lableOne[] = '"'.getTime($value->Fecha).'",';
                          $dateTwo = getNameOfMonth($value->Fecha);
													$sensorNameTwo = $value->Sensores_id;
													$dataOneTemperature[] = ',';
													$dataOneHumidity[] = ',';
													$dataTwoTemperature[] = $value->Temperatura.',';
													$dataTwoHumidity[] = $value->Humedad.',';

													$htmTableth [] = "<tr>
															<td>".nameForCabinets($value->Sensores_id)."</td>
															<td>".$value->Fecha."</td>
															<td>".$value->Temperatura."</td>
															 <td>".$value->Humedad."</td>
															<td>".getStatusTemperature($value->Temperatura)."</td>
															<td>".getStatusHumidity($value->Humedad)."</td>";

															$two[] = '<tr>
																<td><form method="post" action="../chart/dayInfoAddDays">
																<input type="hidden" name="name" value="'.base64_encode($value->Sensores_id.' The quick brown fox jumps over the lazy dog').'"/>
																<input type="hidden" name="date" value="'.getDay($value->Fecha).'"/>
																<input type="hidden" name="type" value="temperature"/>
																<input class="btn btn-link" type="submit" value="'.getDay($value->Fecha).'" /> </form></td>';

													}
                          break;
                          case 11:
                          if($value->Sensores_id == 11){

                         $lableOne[] = '"'.getTime($value->Fecha).'",';
                         $dateOne = getNameOfMonth($value->Fecha);
                         $sensorName = $value->Sensores_id;
                         $dataOneTemperature[] = $value->Temperatura.',';
                         $dataOneHumidity[] = $value->Humedad.',';
                         $dataTwoTemperature[] = ',';
                         $dataTwoHumidity[] = ',';

                         $htmTableth [] = "<tr>
                             <td>".nameForCabinets($value->Sensores_id)."</td>
                             <td>".$value->Fecha."</td>
                             <td>".$value->Temperatura."</td>
                              <td>".$value->Humedad."</td>
                             <td>".getStatusTemperature($value->Temperatura)."</td>
                             <td>".getStatusHumidity($value->Humedad)."</td>";

                         $one[] = '<tr>
                               <td><form method="post" action="../chart/dayInfoAddDays">
                               <input type="hidden" name="name" value="'.base64_encode($value->Sensores_id.' The quick brown fox jumps over the lazy dog').'"/>
                               <input type="hidden" name="date" value="'.getDay($value->Fecha).'"/>
                               <input type="hidden" name="type" value="temperature"/>
                               <input class="btn btn-link" type="submit" value="'.getDay($value->Fecha).'" /> </form></td>';

                       }elseif ($value->Sensores_id  == 12) {

                         $lableOne[] = '"'.getTime($value->Fecha).'",';
                         $dateTwo = getNameOfMonth($value->Fecha);
                         $sensorNameTwo = $value->Sensores_id;
                         $dataOneTemperature[] = ',';
                         $dataOneHumidity[] = ',';
                         $dataTwoTemperature[] = $value->Temperatura.',';
                         $dataTwoHumidity[] = $value->Humedad.',';

                         $htmTableth [] = "<tr>
                             <td>".nameForCabinets($value->Sensores_id)."</td>
                             <td>".$value->Fecha."</td>
                             <td>".$value->Temperatura."</td>
                              <td>".$value->Humedad."</td>
                             <td>".getStatusTemperature($value->Temperatura)."</td>
                             <td>".getStatusHumidity($value->Humedad)."</td>";

                             $two[] = '<tr>
                               <td><form method="post" action="../chart/dayInfoAddDays">
                               <input type="hidden" name="name" value="'.base64_encode($value->Sensores_id.' The quick brown fox jumps over the lazy dog').'"/>
                               <input type="hidden" name="date" value="'.getDay($value->Fecha).'"/>
                               <input type="hidden" name="type" value="temperature"/>
                               <input class="btn btn-link" type="submit" value="'.getDay($value->Fecha).'" /> </form></td>';

                         }
                          break;
                          case 12:
                          if($value->Sensores_id == 11){

                         $lableOne[] = '"'.getTime($value->Fecha).'",';
                         $dateOne = getNameOfMonth($value->Fecha);
                         $sensorName = $value->Sensores_id;
                         $dataOneTemperature[] = $value->Temperatura.',';
                         $dataOneHumidity[] = $value->Humedad.',';
                         $dataTwoTemperature[] = ',';
                         $dataTwoHumidity[] = ',';

                         $htmTableth [] = "<tr>
                             <td>".nameForCabinets($value->Sensores_id)."</td>
                             <td>".$value->Fecha."</td>
                             <td>".$value->Temperatura."</td>
                              <td>".$value->Humedad."</td>
                             <td>".getStatusTemperature($value->Temperatura)."</td>
                             <td>".getStatusHumidity($value->Humedad)."</td>";

                         $one[] = '<tr>
                               <td><form method="post" action="../chart/dayInfoAddDays">
                               <input type="hidden" name="name" value="'.base64_encode($value->Sensores_id.' The quick brown fox jumps over the lazy dog').'"/>
                               <input type="hidden" name="date" value="'.getDay($value->Fecha).'"/>
                               <input type="hidden" name="type" value="temperature"/>
                               <input class="btn btn-link" type="submit" value="'.getDay($value->Fecha).'" /> </form></td>';

                       }elseif ($value->Sensores_id  == 12) {

                         $lableOne[] = '"'.getTime($value->Fecha).'",';
                         $dateTwo = getNameOfMonth($value->Fecha);
                         $sensorNameTwo = $value->Sensores_id;
                         $dataOneTemperature[] = ',';
                         $dataOneHumidity[] = ',';
                         $dataTwoTemperature[] = $value->Temperatura.',';
                         $dataTwoHumidity[] = $value->Humedad.',';

                         $htmTableth [] = "<tr>
                             <td>".nameForCabinets($value->Sensores_id)."</td>
                             <td>".$value->Fecha."</td>
                             <td>".$value->Temperatura."</td>
                              <td>".$value->Humedad."</td>
                             <td>".getStatusTemperature($value->Temperatura)."</td>
                             <td>".getStatusHumidity($value->Humedad)."</td>";

                             $two[] = '<tr>
                               <td><form method="post" action="../chart/dayInfoAddDays">
                               <input type="hidden" name="name" value="'.base64_encode($value->Sensores_id.' The quick brown fox jumps over the lazy dog').'"/>
                               <input type="hidden" name="date" value="'.getDay($value->Fecha).'"/>
                               <input type="hidden" name="type" value="temperature"/>
                               <input class="btn btn-link" type="submit" value="'.getDay($value->Fecha).'" /> </form></td>';

                         }
                          break;
                          default:
                            // header("Location: http://xponential.tech");
                           break;
												}


																			}


//END OF COMPARATIVE


//END OF CODE SUPRIMECLIENTEL

//TABLE
echo  '
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<br></br><br></br>
	<div class="table-responsive">
  <table class="table">
	<thead class="styleBlueForSideMenu">
		<tr>

			<th>DETALLES DEL DIARIOS</th>
		</tr>
	</thead>
	<tbody>
	'.implode(" ", $one).'
	</tr>
		 </tbody>
	 </table>
	 </div>

</div>

<br></br>
<br>
<div class="col-sm-4 sendToMiddle" >
<h1>'.$date.'</h1>
</div>
</br>

<div class="row">
<div class="col-sm-12 ">

<div class="asd" >
    <img src="../assets/img/xponential/lights.png" style="width: 50%; height: 22%; margin-bottom: 155px; margin-left: 10px; margin-top: 10px;">
 </div>


<div class="col-sm-8 centeredGrapght" >

<div class="col-sm-4 menuPossitionCentered">
	<form method="post" action="../chart/dayInfoAddDays">
	<input type="hidden" name="name" value="'.$cryptSTD.'"/>
	<input type="hidden" name="date" value="'.$date.'"/>
	<input type="hidden" name="possition" value="Above"/>
	<input id="uno" class="btn btn-default" type="submit" value="'.checkStatusUp($senssorId).'" />
	</form>

	<form method="post" action="../chart/dayInfoAddDays">
	<input type="hidden" name="name" value="'.$cryptSTD.'"/>
	<input type="hidden" name="date" value="'.$date.'"/>
	<input type="hidden" name="possition" value="Below"/>
	<input id="dos" class="btn btn-default" type="submit" value="'.checkStatusDown($senssorId).'" />
	</form>

	<form method="post" action="../chart/dayInfoAddDays">
	<input type="hidden" name="name" value="'.$cryptSTD.'"/>
	<input type="hidden" name="date" value="'.$date.'"/>
	<input type="hidden" name="possition" value="Compare"/>
	<input id="compare" class="btn btn-default" type="submit" value="Comparar" />
	</form>
</div>
	<canvas id="myChart" width="60" height="40" class="chartjs-render-monitor" style="display: block; width: 333px; height: 333px;"></canvas>


</div>
</div>
<br></br><br></br>
<div class="row">
<div class="col-sm-8 centeredGrapght" >
<!--center>Humidity</center-->
<canvas id="humidity" width="60" height="40" class="chartjs-render-monitor" style="display: block; width: 333px; height: 333px;"></canvas>
</div>
</div>
<br></br><br></br>



</div>
</div>
	<br></br>
				<div class="card mb-3">
						<div class="card-header">
								<i class="fa fa-table"></i>
								<form method="post" action="../chart/showchart">
								<div class="col-sm-12 col-md-9">

								<label class="control-label col-sm-4" for="price">From:
									<input type="text" name="yearOne" id="startDate" class="form-control form-control-sm" placeholder="" aria-controls="example">
								</label>



								<label class="control-label col-sm-4" for="price">To:
									<input type="text" name="yearTwo" id="stopDate" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label>

								</div>
								<input class="btn btn-primary" type="submit" value="Search" />
							</div>
							</form>

						<div class="card-body">
								<div class="table-responsive">
										<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
												<thead>
												<tr>
                        <th>Id de Sensor</th>
                        <th>Fecha</th>
                        <th>Temperatura</th>
                        <th>Humedad</th>
                        <th>Estado de Temperature </th>
                        <th>Estado de Humedad </th>
												</tr>
												</thead>
												<tfoot>
												<tr>
                        <th>Id de Sensor</th>
                        <th>Fecha</th>
                        <th>Temperatura</th>
                        <th>Humedad</th>
                        <th>Estado de Temperature </th>
                        <th>Estado de Humedad </th>
												</tr>
												</tfoot>

												<tbody>


												</tr>';

//END OF TABLE


echo implode(" ", $htmTableth);




                        echo '</tbody>

                    </table>
                </div>
            </div>
            <div class="card-footer small text-muted">Updated

								'.  date('Y-m-d  h:i a').'
						 </div>
        </div>

        <footer class="container-fluid ">
          Todos los derechos reservados <a href="http://www.su-techbian.com" title="Visit http://www.su-techbian.com">@Xponential</a>
          <div class="firmesa " style="float:right; margin-right:5px;">
          Bajo el aval de
          <img src="../assets/img/xponential/FIRMESA.png" style="width: 50%; height: 17%;  ">
        </div>
        </footer>
				<script src="../assets/private/private/bootstrap/js/bootstrap.bundle.min.js"></script>
				<script src="../assets/private/private/datatables/jquery.dataTables.min.js"></script>
				<script src="../assets/private/private/datatables/dataTables.bootstrap4.js"></script>
				<script src="../assets/private/js/reports/sb-admin-datatables.js"></script>';
				echo '<script type="text/javascript">';
				echo "var canvas = document.getElementById('myChart');";
				echo "var humidity = document.getElementById('humidity');";
				echo "window.chartColors = {
          red: 'rgb(223, 77, 71)',
          orange: 'rgb(255, 159, 64)',
          yellow: 'rgb(243, 156, 59)',
          green: 'rgb(152, 198, 108 )',
          blue: 'rgb(54, 162, 235)',
          purple: 'rgb(153, 102, 255)',
          grey: 'rgb(201, 203, 207)',
          black: 'rgb(0, 0, 0)'
				};";

					echo "var myLineChart = new Chart(canvas,
						{
								type: 'line',
								data: {";
										echo 'labels: ['.removeLastCaracter($lableOne).'],';
										echo 'datasets: [';
										echo '{';
														echo "label: ' ".nameForCabinets($sensorName)." ',
														fill: false,";
														echo "backgroundColor: window.chartColors.black,
														borderColor: window.chartColors.black,
                            borderDash: [0, 1],
                            pointRadius: 5,
                            pointHoverRadius: 5,";
														echo 'data: ['.removeLastCaracter($dataOneTemperature).'],';
											echo '  },
						{';
														echo "label: ' ".nameForCabinets($sensorNameTwo)."',
														fill: false,
														backgroundColor: window.chartColors.blue,
														borderColor: window.chartColors.blue,
                            borderDash: [0, 1],
                            pointRadius: 5,
                            pointHoverRadius: 5,";
														echo 'data: ['.removeLastCaracter($dataTwoTemperature).'],';
												echo "}
										]
								},
								options: {
										responsive: true,
										title: {
												display: true,
												text: 'Temperatura'
										},
										backgroundRules: [{
												backgroundColor: window.chartColors.red,
												yAxisSegement: 5
										}, {
												backgroundColor: window.chartColors.yellow,
												yAxisSegement: 10
										}, {
												backgroundColor: window.chartColors.green,
												yAxisSegement: 20
										}, {
												backgroundColor: window.chartColors.yellow,
												yAxisSegement: 25
										}, {
												backgroundColor: window.chartColors.red,
												yAxisSegement: Infinity
										}],
										scales: {
                      xAxes: [{
                              display: true,
                              scaleLabel: {
                                  display: true,
                                  labelString: '".$dateOne."'
                              }
                          }],
												yAxes: [{
														ticks: {
                              beginAtZero: true,
                              stepSize: 5,
  														max: 100
														}
												}]
										}
								},
								plugins: [{
										beforeDraw: function (chart) {
												var ctx = chart.chart.ctx;
												var ruleIndex = 0;
												var rules = chart.chart.options.backgroundRules;";
												echo 'var yaxis = chart.chart.scales["y-axis-0"];
												var xaxis = chart.chart.scales["x-axis-0"];
												var partPercentage = 1 / (yaxis.ticksAsNumbers.length - 1);
												for (var i = yaxis.ticksAsNumbers.length - 1; i > 0; i--) {
														if (yaxis.ticksAsNumbers[i] < rules[ruleIndex].yAxisSegement) {
																ctx.fillStyle = rules[ruleIndex].backgroundColor;
																ctx.fillRect(xaxis.left, yaxis.top + ((i - 1) * (yaxis.height * partPercentage)), xaxis.width, yaxis.height * partPercentage);
														} else {
																ruleIndex++;
																i++;
														}
												}
										}
								}]
						});';

//another image
echo "var myLineChart = new Chart(humidity,
						{
								type: 'line',
								data: {";
										echo 'labels: ['.removeLastCaracter($lableOne).'],';
										echo 'datasets: [ ';
										echo '{';
														echo "label: ' ".nameForCabinets($sensorName)." ',
														fill: false,";
														echo "backgroundColor: window.chartColors.black,
														borderColor: window.chartColors.black,
                            borderDash: [0, 1],
                            pointRadius: 5,
                            pointHoverRadius: 5,";
														echo 'data: ['.removeLastCaracter($dataOneHumidity).'],';
											echo '  },
						{';
														echo "label: ' ".nameForCabinets($sensorNameTwo)." ',
														fill: false,
														backgroundColor: window.chartColors.blue,
														borderColor: window.chartColors.blue,
                            borderDash: [0, 1],
                            pointRadius: 5,
                            pointHoverRadius: 5,";
														echo 'data: ['.removeLastCaracter($dataTwoHumidity).'],';
												echo "}
										]
								},
								options: {
										responsive: true,
										title: {
												display: true,
												text: 'Humedad'
										},
										backgroundRules: [{
												backgroundColor: window.chartColors.red,
												yAxisSegement: 30
										}, {
												backgroundColor: window.chartColors.yellow,
												yAxisSegement: 45
										}, {
												backgroundColor: window.chartColors.green,
												yAxisSegement: 60
										}, {
												backgroundColor: window.chartColors.yellow,
												yAxisSegement: 80
										}, {
												backgroundColor: window.chartColors.red,
												yAxisSegement: Infinity
										}],
										scales: {
                      xAxes: [{
                              display: true,
                              scaleLabel: {
                                  display: true,
                                  labelString: '".$dateOne."'
                              }
                          }],
												yAxes: [{
														ticks: {
															beginAtZero: true,
															steps: 2,
															stepValue: 2,
															max: 100
														}
												}]
										}
								},
								plugins: [{
										beforeDraw: function (chart) {
												var ctx = chart.chart.ctx;
												var ruleIndex = 0;
												var rules = chart.chart.options.backgroundRules;";
												echo 'var yaxis = chart.chart.scales["y-axis-0"];
												var xaxis = chart.chart.scales["x-axis-0"];
												var partPercentage = 1 / (yaxis.ticksAsNumbers.length - 1);
												for (var i = yaxis.ticksAsNumbers.length - 1; i > 0; i--) {
														if (yaxis.ticksAsNumbers[i] < rules[ruleIndex].yAxisSegement) {
																ctx.fillStyle = rules[ruleIndex].backgroundColor;
																ctx.fillRect(xaxis.left, yaxis.top + ((i - 1) * (yaxis.height * partPercentage)), xaxis.width, yaxis.height * partPercentage);
														} else {
																ruleIndex++;
																i++;
														}
												}
										}
								}]
						});


						function openNav() {
						    document.getElementById("mySidenav").style.width = "750px";
						    document.getElementById("main").style.marginRight = "750px";
						    document.body.style.backgroundColor = "rgba(117,113,114,0.4)";
						}

						function closeNav() {
						    document.getElementById("mySidenav").style.width = "0";
						    document.getElementById("main").style.marginRight= "0";
						    document.body.style.backgroundColor = "white";
						}
						';


				echo'</script>';
?>

</body>



</html>
