<?php 
if(isset($_POST['submit'])){
    $to = "jaevanaustin.aldover@benilde.edu.ph"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['fn'];
    $last_name = $_POST['ln'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>ContactMe</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--NAVBAR Links-->

		<link href="https://fonts.googleapis.com/css?family=Gochi+Hand" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../contact/demo.css" />
		<link href="https://fonts.googleapis.com/css?family=Caveat+Brush|Gloria+Hallelujah|Indie+Flower" rel="stylesheet">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	</head>
	<body style="background-color:#1e2021;">
		<div class="container">
			<header class="codrops-header">
				<nav class="dummy-links">
					<a class="dummy-links__link port_nav" href="../homepage.php">Home</a>
					<a class="dummy-links__link port_nav" href="../about/index.php">About Me</a>
					<a class="dummy-links__link port_nav" href="../portfolio/index.php">Portfolio</a>
					<a class="dummy-links__link port_nav" href="../gallery/index.php">Gallery</a>
				</nav>
			</header>
			<div class="col-lg-12">
				<form action="thanks.php" method="POST" class="form-horizontal">
					<div class="col-lg-12">
						<br>
						<br>
						<br>
						<br>
						<div class="well col-lg-7">
							<h1 class="text-center">Send me a Feedback</h1>
							<div class="form-group">
								<label class="col-lg-4 control-label">
								From
								</label>
								<div class="col-lg-8">
								<input name="email" type="email"
									class="form-control" required />
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-4 control-label">
								First Name
								</label>
								<div class="col-lg-8">
								<input name="fn" type="text"
									class="form-control" required />
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-4 control-label">
								Last Name
								</label>
								<div class="col-lg-8">
								<input name="ln" type="text"
									class="form-control" required />
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-4 control-label">
								From:
								</label>
								<div class="col-lg-8">
									<textarea name="message" rows="5" column="50"></textarea>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-offset-4 col-lg-8">
									<button name="submit"
									class="btn btn-success">
									Register
									</button>
								</div>
							</div>
						</div>
						<div class="well col-lg-push-1 col-lg-4">
							<h2 class="text-center">Connect With Me</h2>
							<div class="text-center">
								<a href="https://www.facebook.com/jaevanaldover" class="fa fa-facebook-square btn btn-default" style="color: #3b5998;"></a>
								<a href="https://twitter.com/JVAldover" class="fa fa-twitter btn btn-default" style="color: #00aced;"></a>
								<a href="https://plus.google.com/u/0/109545353592177700150" class="fa fa-google-plus btn btn-default" style="color: #d34836;"></a>
								<a href="https://github.com/jaevanaustinaldover" class="fa fa-github btn btn-default" style="color: black;"></a>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script type="text/javascript">
			
			$( function() {
				
				$( '#cd-dropdown' ).dropdown( {
					gutter : 5,
					delay : 100,
					random : true
				} );

			});

		</script>
		<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
	</body>
</html>