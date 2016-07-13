<?php
$sent = false;

if (isset($_POST['submit'])) {

	$to 		= "cabanada_liezyl@yahoo.com";
	$from 		= $_POST['email'];
	$subject 	= "First Class Elevator Contact Form";

	$content 	= $_POST['content'];

	$headers  	= "MIME-Version: 1.0" . "\r\n";
	$headers   .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	
	$headers   .= "From: ".$_POST['email'];


	$mail = mail($to,$subject,$content,$from);

	if ($mail) {
		$sent = true;
	}

	unset($_POST);
}

include 'includes/header.php';
include 'includes/menu.php';
?>
<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-sm-9 maincontent">
				<header class="page-header">
					<h1 class="page-title">Contact us</h1>
				</header>

				<?php
				if ($sent) {
				?>

				<div class="alert alert-success" role="alert">Your email successfully sent!</div>

				<?php
				}
				?>
				
				<p>
					We’d love to hear from you. Interested in working together? Fill out the form below with some info about your inquiry and I will get back to you as soon as I can.
				</p>
				<br>
					<form method="post" name="form_contact_us">
						<div class="row">
							<div class="col-sm-4">
								<input name="name" class="form-control" type="text" placeholder="Name" required="">
							</div>
							<div class="col-sm-4">
								<input name="email" class="form-control" type="email" placeholder="Email" required="">
							</div>
							<div class="col-sm-4">
								<input name="phone" class="form-control" type="text" placeholder="Phone">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-12">
								<textarea name="content" placeholder="Type your message here..." class="form-control" rows="9" required=""></textarea>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-12 text-right">
								<input class="btn btn-action" name="submit" type="submit" value="Send message">
							</div>
						</div>
					</form>

			</article>
			<!-- /Article -->
			
			<!-- Sidebar -->
			<aside class="col-sm-3 sidebar sidebar-right">

				<div class="widget">
					<h4>Address</h4>
					<address>
						<?php echo $address; ?>
					</address>
					<h4>Phone:</h4>
					<address>
						<?php echo $phone; ?>
					</address>
				</div>

			</aside>
			<!-- /Sidebar -->

		</div>
	</div>	<!-- /container -->

	<?php include 'includes/foot.php'; ?>
		
<?php
include 'includes/footer.php';
?>