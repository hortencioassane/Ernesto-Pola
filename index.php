
<?php

@include 'config.php';

?>



<!DOCTYPE html>
<html>
<head>
	



<title> 
  ERNESTO POLA
</title>

<link rel="icon" href="icons/log.jpg" type="imagem/x-icon">


<link rel="stylesheet" href="sidebar.css">



<meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.
gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" 
rel="stylesheet">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta name="viewport" content="width=device=widht, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css'>
	<style>
		body {
			margin: 0;
			background-color: #FFE7DC;
			background-image: url(imagem/40.jpg);
		}

		.mb-0{

			position: relative;

  
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  font-weight: 1000;


		}

		.card-body{

background-image: url(imagem/40.jpg);

		}


	
	</style>



<link rel="stylesheet" href="css/style.css">

</head>




<body>






<?php include 'header.php';?>







	<div class="container py-3">
		<div class="row">
			<div class="col-md-12"> 
				<div class="row justify-content-center">
					<div class="col-md-6">
						<div class="card card-outline-secondary">
							<div class="card-header">
								<h3 class="mb-0">KEEP IN TOUCH</h3>
							</div>
							<div class="card-body">
								<form autocomplete="off" class="form" role="form" method="post" action="sendmail.php">
									<div class="form-group row">
										<label class="col-lg-3 col-form-label form-control-label">Full Name</label>
										<div class="col-lg-9">
											<input class="form-control" type="text" value="" placeholder="Enter Full name" name="full_name" required>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-lg-3 col-form-label form-control-label">Phone Number</label>
										<div class="col-lg-9">
											<input class="form-control" type="text" value="" placeholder="Enter Mobile Number" name="mobile_number" required>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-lg-3 col-form-label form-control-label">Email</label>
										<div class="col-lg-9">
											<input class="form-control" type="email" value=""  placeholder="Enter Email" name="email" required>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-lg-3 col-form-label form-control-label">Message</label>
										<div class="col-lg-9">
											<textarea class="form-control"  placeholder="Write your message" name="message" required></textarea>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-lg-3 col-form-label form-control-label"></label>
										<div class="col-lg-9">
											<input class="btn btn-primary" type="submit" name="btnsubmit" value="Send">
										</div>
									</div>

								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



      

      <script src="js/script.js"></script>





</body>
</html>