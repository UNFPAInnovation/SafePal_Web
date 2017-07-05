<?php

//load and connect to MySQL database stuff
//require("config.inc.php");

/**
 * [Init Request class]
 * @param  {[Requests]} ReportsHandler [description]
 * @return {[array]}                [description]
 */
require_once('ReportsHandler/Requests.php');
Requests::register_autoloader();

/**
 * [Get token method]
 * @constructor
 */
function GetToken(){
  $token = Requests::get('https://api-safepal.herokuapp.com/api/v1/auth/newtoken', array('userid' => 'C7rPaEAN9NpPGR8e9wz9bzw', 'content-type: application/json'));
  $result = get_object_vars(json_decode($token->body));

  if (!empty($result) && $result['token']) {
    return $result['token'];
  }

  return null;
}

/**
 * [PostReport Post report to api]
 * @param       {[array]} $report [associative array of the report/case]
 * @constructor
 */
function PostReport($report){
  $response = Requests::post('https://api-safepal.herokuapp.com/index.php/api/v1/reports/addreport', array('userid' => 'C7rPaEAN9NpPGR8e9wz9bzw', 'content-type: application/json'), $report);

  $result = get_object_vars(json_decode($response->body));

  return $result;
}


//check if $_REQUEST super-global is null or empty
if (!empty($_REQUEST)) {

  //get token
  $token = GetToken();

	//get token code
	/*$curl1 = curl_init();

curl_setopt_array($curl1, array(
  CURLOPT_URL => "https://api-safepal.herokuapp.com/api/v1/auth/newtoken",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_FOLLOWLOCATION => TRUE,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "content-type: application/json",
    "userid: C7rPaEAN9NpPGR8e9wz9bzw"
  ),
));
$json = '';
$response1 = curl_exec($curl1);
$err1 = curl_error($curl1);

curl_close($curl1);

if ($err1) {
  echo "cURL Error #:" . $err;
} else {
  $json = $response1;
}

    $array = json_decode($json, true);
	$token = $array['token'];
	//end get token code



    //Post fields query
        $age  =  ((date('Y-m-d'))-($_REQUEST['age']));
        $latitude = $_REQUEST['latitude'];
        $longitude = $_REQUEST['longitude'];
        $reporter = $_REQUEST['reporter'];
        $report_source = $_REQUEST['report_source'];
        $type = $_REQUEST['type'];

        $location = $_REQUEST['location'];
        $gender = $_REQUEST['gender'];
        $details = $_REQUEST['details'];
        $reportDate = date('Y-m-d');
        //$reporter_relation = $_REQUEST['reporter_relation'];


$curl = curl_init();

// curl_setopt($curl, CURLOPT_FOLLOWLOCATION, TRUE);
// curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api-safepal.herokuapp.com/index.php/api/v1/reports/addreport",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_FOLLOWLOCATION => TRUE,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\r\n              \"token\" : \"$token\",\r\n              \"gender\" : \"$gender\",\r\n              \"age\" : \"$age\",\r\n                            \"reportDate\" : \"$reportDate\",\r\n              \"type\" : \"$type\",\r\n              \"location\" : \"$location\",\r\n              \"details\" : \"$details\",\r\n              \"reporter\" : \"$reporter\",\r\n              \"latitude\" : $latitude,\r\n              \"longitude\" : $longitude,\r\n              \"report_source\" : \"$report_source\"\r\n}\r\n",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "content-type: application/json",
    "userid: C7rPaEAN9NpPGR8e9wz9bzw"
  ),
));

$json2='';

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl); */


//results array
$results = array();

if (!empty($token)) {
    //construct report data

  //handle age for self report
  $age = ((date('Y-m-d'))-($_REQUEST['age']));

  if ($age == (date('Y-m-d'))) {
    switch ($_REQUEST['age']) {
      case 'Below 10':
        $age = 9;
        break;

      case 'Between 10 - 24':
        $age = 17;
        break;

      case 'above 24':
        $age = 25;
        break;

      default:
         $age = ((date('Y-m-d'))-($_REQUEST['age']));
        break;
    }
  }

    $data = array(
      'age' => $age,
      'latitude' => $_REQUEST['latitude'],
      'longitude' => $_REQUEST['longitude'],
      'reporter' => $_REQUEST['reporter'],
      'report_source' => $_REQUEST['report_source'],
      'type' => $_REQUEST['type'],
      'location' => $_REQUEST['report_source'],
      'gender' => $_REQUEST['gender'],
      'details' => $_REQUEST['details'],
      'reportDate' => date('Y-m-d'),
      'token' => $token
    );

    //post case/report
    $results = PostReport($data);
  }

if (empty($results) || $results['status'] != 'success') {
  echo "<h1 align='center'> Oops! Something went wrong while posting your report. Please try again</h1>";
} else {

  $array2 = $results;
  if (sizeof($array2['csos']) < 1) {
    echo "<h4 align='center'>No CSOs are available in 5km but we've referred your case. Your case number is: ".$array2['casenumber'];
    echo "<br/> Use it to get assistance. <br/> Thank you for using SafePal.</h4>";
  }


  //print_r($array2);
   //echo $json2;
//header('location: csos.php');

  ?>
  <html lang="en">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Safepal">
    <link rel="shortcut icon" href="images/favicon.html">

    <title>Cso List</title>

    <!--Core CSS -->
    <link href="bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!--dynamic table-->
    <link href="js/advanced-datatable/css/demo_page.css" rel="stylesheet" />
    <link href="js/advanced-datatable/css/demo_table.css" rel="stylesheet" />
    <link rel="stylesheet" href="js/data-tables/DT_bootstrap.css" />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<section id="container" >
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">

    <a href="" class="logo">
        <img src="images/logo.png" alt="">
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->


</header>
<!--header end-->
    <aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->            <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a href="">
                    <i class="fa fa-dashboard"></i>
                    <span>Home</span>
                </a>
            </li>
                 <li>
                <a href="selfreport.html">
                    <i class="fa fa-edit"></i>
                    <span>Report for Myself</span>
                </a>
            </li>

                 <li>
                <a href="palreport.html">
                    <i class="fa fa-group"></i>
                    <span>Report for friend</span>
                </a>
            </li>
        </ul></div>
<!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
        <!-- page start-->

        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Service Providers Nearest to you
                     </header>
                    <div class="panel-body">
                    <div class="adv-table">

  <?php echo "Case Number : <span class='label-success'>".$array2['casenumber']."</span><br/>"; ?>

  <table  class="display table table-bordered table-striped" id="dynamic-table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Location</th>
                        <th>Working hours</th>
                        <th class="hidden-phone">Contact</th>
                    </tr>
                    </thead>
                    <tbody>
  <tr>

    <td align="center"><?php echo $array2["csos"][0]["cso_name"]; ?></td>
    <td align="center"><?php echo $array2["csos"][0]["cso_location"]; ?></td>
    <td align="center"><?php echo $array2["csos"][0]["cso_working_hours"]; ?></td>
    <td align="center"><?php echo $array2["csos"][0]["cso_phone_number"]; ?></td>
	 </tr>

 <tr>

    <td align="center"><?php echo $array2["csos"][1]["cso_name"]; ?></td>
    <td align="center"><?php echo $array2["csos"][1]["cso_location"]; ?></td>
    <td align="center"><?php echo $array2["csos"][1]["cso_working_hours"]; ?></td>
    <td align="center"><?php echo $array2["csos"][1]["cso_phone_number"]; ?></td>
	 </tr>

 <tr>

    <td align="center"><?php echo $array2["csos"][2]["cso_name"]; ?></td>
    <td align="center"><?php echo $array2["csos"][2]["cso_location"]; ?></td>
    <td align="center"><?php echo $array2["csos"][2]["cso_working_hours"]; ?></td>
    <td align="center"><?php echo $array2["csos"][2]["cso_phone_number"]; ?></td>
	 </tr>





											 </tbody>
                    </table>

					 </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- page end-->
        </section>
    </section>
    <!--main content end-->
<!--right sidebar start-->
<div class="right-sidebar">
<div class="search-row">
    <input type="text" placeholder="Search" class="form-control">
</div>

    </div>
<!--right sidebar end-->

</section>

<!-- Placed js at the end of the document so the pages load faster -->

<!--Core js-->
<script src="js/jquery.js"></script>
<script src="bs3/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--Easy Pie Chart-->
<script src="js/easypiechart/jquery.easypiechart.js"></script>
<!--Sparkline Chart-->
<script src="js/sparkline/jquery.sparkline.js"></script>
<!--jQuery Flot Chart-->
<script src="js/flot-chart/jquery.flot.js"></script>
<script src="js/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="js/flot-chart/jquery.flot.resize.js"></script>
<script src="js/flot-chart/jquery.flot.pie.resize.js"></script>

<!--dynamic table-->
<script type="text/javascript" language="javascript" src="js/advanced-datatable/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="js/data-tables/DT_bootstrap.js"></script>
<!--common script init for all pages-->
<script src="js/scripts.js"></script>

<!--dynamic table initialization -->
<script src="js/dynamic_table_init.js"></script>



</body>
</html>
											<?php


}


} else {
?>

<h1>Add Card</h1>
		<form action="addreport.php" method="post">
		    age:<br />
		    <input type="text" name="age" placeholder="age" />
		    <br /><br />
		     reporter_lat:<br />
		    <input type="text" name="latitude" placeholder=" lat" />
		    <br /><br />
		    reporter_long:<br />
		    <input type="text" name="longitude" placeholder="reporter_long" />
		    <br /><br />
			reported_by:<br />
		    <input type="text" name="reporter" placeholder="self or friend" />
		    <br /><br />
            source:<br />
		    <input type="text" name="report_source" placeholder="source" />
		    <br /><br />
            incident_type:<br />
		    <input type="text" name="type" placeholder="incident_type" />
		    <br /><br />
            incident_location:<br />
		    <input type="text" name="location" placeholder="eg school or home" />
		    <br /><br />
            survivor_gender:<br />
		    <input type="text" name="gender" placeholder="survivor_gender" />
		    <br /><br />
            incident_description:<br />
		    <input type="text" name="details" placeholder="incident_description" />
		    <br /><br />

		    <input type="submit" value="Add report" />
		</form>
	<?php
}

?>
