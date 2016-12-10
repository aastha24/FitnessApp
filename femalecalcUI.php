<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Female Calculator</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="red" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="index.html" class="simple-text">
                    FitGo
                </a>
            </div>

            <ul class="nav">
                 <li class="active">
                    <a href="peopleUI.html">
                        <i class="pe-7s-graph"></i> 
			    <p>Meal Planner</p>
                    </a>
                </li>
                <li class="active">
                    <a href="calculatorTemplateUI.html">
                        <i class="pe-7s-calculator"></i>
                        <p>Male Calculator</p>
                    </a>
                </li>
                <li class="active">
                    <a href="femalecalcUI.html">
                        <i class="pe-7s-calculator"></i>
                        <p>Female Calculator</p>
                    </a>
                </li>
		<li class="active">
                    <a href="profile_UI.php">
                        <i class="pe-7s-user"></i>
                        <p>Profile</p>
                    </a>
                </li>

            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Calculate your Macros</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="index.html">
                               Home
                            </a>
                        </li>


                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
<form onsubmit="return false" onchange="BMR.value=((655+(4.35*weight.valueAsNumber)+(4.7*height.valueAsNumber)-(4.7*age.valueAsNumber))*activity.value).toFixed(0); protein.value = (proteinMult.value*(weight.valueAsNumber-((bodyfat.valueAsNumber/100)*weight.valueAsNumber))).toFixed(0);
fat.value = (fatMult.value*(weight.valueAsNumber-((bodyfat.valueAsNumber/100)*weight.valueAsNumber))).toFixed(0);
carbs.value=((parseFloat(goal.value)+parseFloat(BMR.value)-protein.value*4-fat.value*9)/4).toFixed(0); calories.value=(carbs.value*4+fat.value*9+protein.value*4).toFixed(0);
">


  <legend>Female Macro Calculator</legend>

  <p><label for="height">Your height (inches):</label>
  <input type="number" min="0" id="height" value=0 name="height"></p>

  <p><label for="weight">Your weight (pounds):</label>
  <input type="number" min="0" id="weight" value=0 name="weight"></p>

  <p><label for="age">Your age:</label>
  <input type="number" min="0" id="age" value=0 name="age"></p>

  <p><label for="bodyfat">Your Body Fat %:</label>
  <input type="number" min="0" id="bodyfat" value=0 name="bodyfat"></p>

  <p><label for="proteinMult">Protein Multiplier:</label>
  <input type="radio" id="proteinMult" value=1 name="proteinMult">1g
  <input type="radio" id="proteinMult" value=1.5 name="proteinMult">1.5g</p>

  <p><label for="fatMult">Fat Multiplier:</label>
  <input type="radio" id="fatMult" value=.35 name="fatMult">.35g
  <input type="radio" id="fatMult" value=.5 name="fatMult">.5g</p>

   <p><label for="goal">Goal:</label>
  <p><input type="radio" id="goal" value=-500 name="goal">Lose 1 pound/week</p>
  <p><input type="radio" id="goal" value=-250 name="goal">Lose .5 pound/week</p>
  <p><input type="radio" id="goal" value=0 name="goal">Maintain</p>
  <p><input type="radio" id="goal" value=250 name="goal">Gain .5 pound/week</p>
 <p><input type="radio" id="goal" value=500 name="goal">Gain 1 pound/week</p>

   <p><label for="activity">Level of Activity:</label>
  <p><input type="radio" id="activity" value=1.2 name="activity">Little or No exercise</p>
  <p><input type="radio" id="activity" value=1.375 name="activity">Light exercise/sports 1-3 days/week</p>
  <p><input type="radio" id="activity" value=1.55 name="activity">Moderate exercise/sports 3-5 days/week</p>
  <p><input type="radio" id="activity" value=1.725 name="activity">Hard exercise/sports 6-7 days/week</p>
 <p><input type="radio" id="activity" value=1.9 name="activity">Very Hard exercise/sports 2x a day</p>


  <p>BMR: <strong><output style="display:inline" name="BMR" for="weight height age activity">0</output></strong></p>

  <p>Protein: <strong><output style="display:inline" name="protein" for="proteinMult bodyfat weight">0</output></strong></p>

  <p>Fat: <strong><output style="display:inline" name="fat" for="fatMult bodyfat weight">0</output></strong></p>

  <p>Carbs: <strong><output style="display:inline" name="carbs" for="BMR fat protein goal">0</output></strong></p>

  <p>Calories: <strong><output style="display:inline" name="calories" for="carbs fat protein">0</output></strong></p>


</form>

</body>

                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                License
                            </a>
                        </li>

                    </ul>
                </nav>
                <p class="copyright pull-right">
                     &copy; 2016, made by FitGo Team.
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome to your calculator!"

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>

</html>