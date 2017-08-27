
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Destination Prediction</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
    	<link href="css/bootstrap.min.css" rel="stylesheet">
    	<link href="css/simple-sidebar.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,‌​100italic,300,300ita‌​lic,400italic,500,50‌​0italic,700,700itali‌​c,900italic,900' rel='style' type='text/css'>
        
</head>

	<body  class="back">
	
    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Destination Predictor
                    </a>
                </li>
                
                <li>
                    <a href="us.html">More info</a>
                </li>
                <li>
                    <a href="sign.php"><p title="Click here for creating new LOGIN">Sign up</p></a>
                </li>
            </ul>
            <div class="login_box">
            <br></br><br></br><br></br><br></br><br></br>
      		<center><p style="color:grey">Login</p><center>
      		<form action="valid.php" method="post" enctype="multipart/form-data">
        	<input class="login" style="" type="text" value="username" name="user" />
      	 	<input type="password" value="password"  name="pass" />
       		<input value="Log in" class="button" type="submit" />
     		</form>
    </div>
        </div>
        <!-- /#sidebar-wrapper -->
        <div id="page-content-wrapper">
        <div class="container-fluid">
		<div class="demo">
		<center>
 		<form method="post" action="evaluate.php"  id="index">
 		<center>
        <div style="color: #424242;font-size: 32px;font-family: 'Roboto Black', sans-serif;">
   		<p>Input Details</p>
		</div>
		</center>
    	<center><p><span class="error">* Required fields.</span></p> </center>
			<table border="0" align="center" >
		 		<tr>
				<td>Full Name</td>
				<td><input type="text" size="15" name="name" required>
				<span class="error">*</span>
				</td>
				</tr>

				<tr>
				<td>Age </td><td><input type="text" name="age" size="15" required>
				<span class="error">*</span>
				</td>
				</tr>
				<tr>
				<td>Would you like to have Adventure?</td>
				<td>
				<select name="adventure" form="index" required>
				    <option selected disabled >Choose here..</option>
					<option  value=1>CERTAINLY NOT</option>
					<option  value=2>POSSIBLY NO</option>
					<option  value=3>CANNOT SAY</option>
					<option  value=4>POSSIBLY YES</option>
					<option value=5>CERTAINLY YES</option>

				 </select>

				<span class="error">*</span>
				</td>
				</tr>
				<tr>
				<td>Month:</td>
				<td>
				<select name="month" form="index" id="month">
					<option  selected value=1>January</option>
					<option  value=1>February</option>
					<option  value=2>March</option>
					<option  value=2>April</option>
					<option value=2>May</option>
					<option value=2>June</option>
					<option value=2>July</option>
					<option value=3>September</option>
					<option value=3>October</option>
					<option value=3>November</option>
					<option value=1>December</option>

				 </select>
				 </td>
				 </tr>
				 
				 <tr>
				 <td>Would you like to have fun?</td>
				 <td>
				 <select name="fun" form="index" required>
				 <option selected disabled >Choose here..</option>
					<option  value=1>CERTAINLY NOT</option>
					<option  value=2>POSSIBLY NO</option>
					<option  value=3>CANNOT SAY</option>
					<option  value=4>POSSIBLY YES</option>
					<option value=5>CERTAINLY YES</option>

				 </select>
				 <span class="error">*</span>
				 </td>
				 </tr>
				 <tr>
				<td><br></br></td>
				</tr>
				 
				 <tr><td align="right"><input type="reset" class="button1" name="reset"></td>
				<td align="left"><input type="submit" class="button" name="submit" value="Submit"></td></tr>
				<tr><a href="#menu-toggle" class="btn btn-default" id="menu-toggle">TOOGLE</a><br></br><tr>
			</table>
		</form>
		</center>
		</div>
		
		
		</div>
		<script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
    </body>

</html>
