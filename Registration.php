<?php 
include("conn.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>index page</title>
	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    	<!-- Bootstrap CSS -->
    	<link rel="stylesheet" href="css/bootstrap.min.css">
    	<style>
    		.header{
    			width: auto;
    			height:auto;
    			background-color: purple;
    			
    		}
    		.footer{
    			
    			width:auto;
    			height: auto;
    			background-color: limegreen;

    		}
    		.bodyarea{
    			
    		
    			margin-left: 300px;
    			width:1000px;
    			height:550px;
    			background-color: lightpink;
    		}
    		.loginarea{
    			
    			margin-left: 260px;
    			width: 400px;
    			height:300px;
    		}
    		.form2{
    			margin-top: 70px;
    		}
    		.formmargin{
    			margin-left: 30px;
    		}
                             body{
    background-color:#aabbcc;
  }
    	</style>
</head>
		<body>
			<div class="header">
                <br>
				<h2 style="text-align: center; color: white;">Blood Bank Managenment system</h2>
                <br>
			</div>
			<div class="container">
				<div class="jumbotron">
            <form class="form-horizontal" role="form" class="formmargin" action="" method="post">
                <h2 style="text-align: center; color: red; font-size: 35px;">Admin Registration</h2>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">First Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="firstName" placeholder="First Name" class="form-control" autofocus name="name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastName" class="col-sm-3 control-label">Address</label>
                    <div class="col-sm-9">
                        <input type="varchar" id="lastName" placeholder="fill your address" class="form-control" autofocus name="address">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email* </label>
                    <div class="col-sm-9">
                        <input type="email" id="email" placeholder="Email" class="form-control" name= "email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password*</label>
                    <div class="col-sm-9">
                        <input type="password" id="password" placeholder="Password" class="form-control" name="password">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Date of Birth*</label>
                    <div class="col-sm-9">
                        <input type="date" id="birthDate" class="form-control" name="dob">
                    </div>
                </div>
                <div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">Phone number </label>
                    <div class="col-sm-9">
                        <input type="phoneNumber" id="phoneNumber" placeholder="Phone number" class="form-control" name="mobile">
                        <span class="help-block">Your phone number won't be disclosed anywhere </span>
                    </div>
                </div>
                <div class="form-group">
                        <label for="Height" class="col-sm-3 control-label">Qualification* </label>
                    <div class="col-sm-9">
                        <input type="varchar" id="height" placeholder="Please write your qualification" class="form-control" name="qualification">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-3">Gender</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="femaleRadio" value="Female" name="gender">Female
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="maleRadio" value="Male" name="gender">Male
                                </label>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <span class="help-block">*Required fields</span>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary btn-block" name="register" value="Register">
            </form> <!-- /form -->
            <?php
            if(isset($_POST['register']))
		{
				$Name  		= 	$_POST['name'];
				$Address    =	$_POST['address'];
				$Email 		=	$_POST['email'];
				$Password 	=	$_POST['password'];
				$Dob 		= 	$_POST['dob'];
				$Mobile  	=	$_POST['mobile'];
				$Qualification =	$_POST['qualification'];
				$Gender  	=	$_POST['gender'];

				
				if($Name!="" && $Address!="" && $Email!="" && $Password!="" && $Dob!="" && $Mobile!="" && $Qualification!="" && $Gender!="")
				{
					$query = "INSERT INTO admin (name, adress, email,password,dob,mobile,qualification,gender)
					VALUES ('$Name', '$Address', '$Email','$Password','$Dob','$Mobile','$Qualification','$Gender')";
					$data=mysqli_query($conn,$query);
					
						if($data)
						{

						?>
						<script>window.alert('Now you are register!..')</script>
						<?php
							
						}
				}
						else{
							?>
							<script>window.alert('Please fill the all boxes!..')</script>
						
						<?php
						}
		}
            ?>
        </div> <!-- /jumbotron -->
        </div> <!-- ./container -->
					<div class="footer">
					<br>
                    <h4 style="text-align: center; color: red;">Copyright@akash.com</h4>
                    <h3 style="text-align: center; color: green;">WhatsApp No: 7756898070</h3>
            <h3 style="text-align: center; ">Facebook Id: facebook.@1234naman</h3>
                <h3 style="text-align: center;color: white;">Email Id: akpakash&gmail.com</h3>
                <br>
			 	</div>
			
			<script src="jquery/jjquery-3.5.1.min.js"></script>
    	 	<script src="js/bootstrap.min.js"> </script>
		</body>

</html>
