<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home | User</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-item.css" rel="stylesheet">
    <link href="css/my.css" rel="stylesheet">

 <meta name="viewport" content="width=device-width, initial-scale=1"> 

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript">
        
        function fetch()
        {
            var get = document.getElementById("get").value;
            document.getElementById("put").value =get; 
        }


        $('#ex1').slider({
    formatter: function(value) {
        return 'Current value: ' + value;
    }
});

// Without JQuery
var slider = new Slider('#ex1', {
    formatter: function(value) {
        return 'Current value: ' + value;
    }
});

$("#ex6").slider();
$("#ex6").on("slide", function(slideEvt) {
    $("#ex6SliderVal").text(slideEvt.value);
});

// Without JQuery
var slider = new Slider("#ex6");
slider.on("slide", function(slideEvt) {
    $("#ex6SliderVal").text(slideEvt.value);
});


    </script>


</head>

<body>

   

    <!-- Page Content -->
<div class="container">
	
	 
	
 <!-- Navigation -->
    <nav class="navbar navbar-inverse " role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    
                    <li>
                        <a href="#">Demo 1</a>
                    </li>

                    <li>
                        <a href="#">Demo 2</a>
                    </li>

                    <li>
                        <a href="#">Demo 3</a>
                    </li>

                    <li>
                        <a href="#">Demo 4</a>
                    </li>

                    <li>
                        <a href="#">Demo 5</a>
                    </li>



                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	
	
        <div class="row">

            <div class="col-md-3">
                
                <div class="list-group">
				<div class="list-group-item active">Dashboard</div>
                    <a href="login.php" class="list-group-item ">Login</a> 
                    <a href="registration.php" class="list-group-item ">Registration</a> 
                    <a href="#" class="list-group-item ">Demo 3</a> 
                    <a href="#" class="list-group-item ">Demo 4</a> 
                    <a href="#" class="list-group-item ">Demo 5</a> 
                </div>
				
				
			</div>

            <div class="col-md-9">

