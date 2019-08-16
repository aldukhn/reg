<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration | PHP</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div>
	<?php
	
	?>	
</div>

<div>
	<form action="registration.php" method="post">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-3">
					<h1>Registration</h1>
					<p>Fill up the form with correct values.</p>
					<hr class="mb-3">
					<label for="name"><b>Full Name</b></label>
					<input class="form-control" id="name" type="text" name="name" required>

					<label for="dob"><b>date Of bairth</b></label>
					<input class="form-control" id="dob"  type="date" name="dob" required>

					<label for="email"><b>Email Address</b></label>
					<input class="form-control" id="email"  type="email" name="email" required>

					<label for="phone"><b>Phone Number</b></label>
					<input class="form-control" id="phone"  type="text" name="phone" required>

					<label for="imageurl"><b>image url</b></label>
					<input class="form-control" id="imageurl"  type="text" name="imageurl" required>

					<label for="acadmicyear"><b>acadamic year</b></label>
					<input class="form-control" id="acadmicyear"  type="text" name="acadmicyear" required>

					<label for="cource"><b>cource</b></label>
					<input class="form-control" id="cource"  type="text" name="cource" required>

					<label for="pass"><b>Password</b></label>
					<input class="form-control" id="pass"  type="password" name="pass" required>
					<hr class="mb-3">
					<input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up">
				</div>
			</div>
		</div>
	</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){
			var valid = this.form.checkValidity();
			if(valid){
			var name 	= $('#name').val();
			var dob	= $('#dob').val();
			var email 		= $('#email').val();
			var phone = $('#phone').val();
			var imageurl 	= $('#imageurl').val();
			var acadmicyear 	= $('#acadmicyear').val();
			var cource 	= $('#cource').val();
			var pass 	= $('#pass').val();
			
				e.preventDefault();	
				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {name: name,dob: dob,email: email,phone: phone,imageurl: imageurl,acadmicyear: acadmicyear,cource: cource,pass: pass},
					success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'
								})
							
					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
					}
				});
				
			}else{
				
			}
			
		});		
		
	});
	
</script>
</body>
</html>