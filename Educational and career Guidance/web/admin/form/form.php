<?php
	
if(isset($_POST['Name']) && isset($_POST['Last-name']) && isset($_POST['Email']) && isset($_POST['Phone']) && isset($_POST['Address']) && isset($_POST['City']) && isset($_POST['State']) && isset($_POST['Code']) && isset($_POST['Country']) && isset($_POST['Travel']) && isset($_POST['Return']) && isset($_POST['Adult']) && isset($_POST['Kids']) && isset($_POST['Tour'])&& isset($_POST['Book']) && isset($_POST['Message'])){




	$name=$_POST['Name'];
	$lastname=$_POST['Last-name'];
	$email=$_POST['Email'];
	$phone=$_POST['Phone'];
	$address=$_POST['Address'];
	$city=$_POST['City'];
	$state=$_POST['State'];
	$code=$_POST['Code'];
	$country=$_POST['Country'];
	$travel=$_POST['Travel'];
	$return=$_POST['Return'];
	$adult=$_POST['Adult'];
	$kids=$_POST['Kids'];
	$tour=$_POST['Tour'];
	$book=$_POST['Book'];
	$message=$_POST['Message'];
	
	$conn=mysqli_connect("localhost","root","","pharmacare");
	


$query=mysqli_query($conn, "INSERT INTO formm (name, lastname, email, phone, address, city, state, code, country, travel, returnn, adult, kids, tour, book, msg) VALUES('$name','$lastname','$email','$phone','$address','$city','$state','$code','$country','$travel','$return','$adult','$kids','$tour','$book','$message')");
	if($query)
	{
	header("Location:../../index.html"); 
	}
	else
	{
	}
	
	mysqli_close($conn);	
	}

	else {echo "";}
	
	?>
	
	
<!DOCTYPE html>
<html lang="en">

<head>
	<title></title>
	<!-- Meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Heaven Booking Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
	/>
	<script type="application/x-javascript">
		addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
	</script>
	<!-- Meta tags -->
	<!--stylesheets-->
	<link href="css/style.css" rel='stylesheet' type='text/css' media="all">
	<!--//style sheet end here-->

	<link href="//fonts.googleapis.com/css?family=Barlow:300,400,500,600" rel="stylesheet">
</head>

<body>
	<h1 class="header-w3ls">
		Appointment Form</h1>
	<!--login form-->
	<div class="hotel-bothside">
		
			<form class="form-detail" action="form.php" method="post" id="myform">
			<div class="mid-cls">
				<div class="hotel-left-w3ls">
					<h2>Personal Details</h2>

					<div class="main">
						<div class="form-left-to-w3l">

							<input type="text" name="Name"class="name" id="name" placeholder="Name" required>
							<div class="clear"></div>
						</div>
						<div class="form-right-to-w3ls">

							<input type="text" name="Last-name" class="lastname" id="lastname" placeholder="Last Name" required>
							<div class="clear"></div>
						</div>

					</div>
					<div class="main">

						<div class="form-left-to-w3l">

							<input type="email" name="Email" class="email" id="email" placeholder="Email" required>
						</div>
						<div class="form-right-to-w3ls ">


							<input type="text" name="Phone" class="phone" id="phone" placeholder="Phone Number" required>
						</div>
					</div>
					<div class="form-add-to-w3ls add">

						<input type="text" name="Address" class="address" id="address" placeholder="Address" required>
						<div class="clear"></div>
					</div>


					<div class="main">
						<div class="form-left-to-w3l">

							<input type="text" name="City" class="city" id="city" placeholder="City" required>
							<div class="clear"></div>
						</div>
						<div class="form-right-to-w3ls">
							<input type="text" name="State" class="state" id="state" placeholder="State" required>
							<div class="clear"></div>
						</div>
					</div>
					<div class="main">
						<div class="form-left-to-w3l">


	<input type="text"  name="Code" class="code" id="code" placeholder="Country Code" required>
							<div class="clear"></div>
						</div>
						<div class="form-right-to-w3ls">

							<select class="form-control country-buttom" name= "Country" >
												<option>Select Country</option>					
													
<option value="America">America</option>
<option value="Abu Dhabi">Abu Dhabi</option>

<option value="Afghanistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="Andorra">Andorra</option>

<option value="Argentina">Argentina</option>

<option value="Australia">Australia</option>
<option value="Austria">Austria</option>

<option value="Azerbaijan">Azerbaijan</option>

<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>

<option value="Belgium">Belgium</option>
<option value="Brazil">Brazil</option>
<option value="Canada">Canada</option>
<option value="China">China</option>
<option value="Dubai">Dubai</option>
<option value="Egypt">Egypt</option>
<option value="France">France</option>
<option value="Germany">Germany</option>

<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>

<option value="Japan">Japan</option>

<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Korea">Korea</option>
<option value="Kuwait">Kuwait</option>

<option value="Malaysia">Malaysia</option>

<option value="Nepal">Nepal</option>
<option value="New Zealand">New Zealand</option>
<option value="Nigeria">Nigeria</option>
<option value="Norway">Norway</option>


<option value="Oman">Oman</option>

<option value="Pakistan">Pakistan</option>
<option value="Philippines">Philippines</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>

<option value="Qatar">Qatar</option>

<option value="Russia">Russia</option>

<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Serbia">Serbia</option>
<option value="South Africa">South Africa</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syria">Syria</option>

<option value="Tajikistan">Tajikistan</option>
<option value="Thailand">Thailand</option>
<option value="The United Arab Emirates">The United Arab Emirates</option>
<option value="The United Kingdom">The United Kingdom</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>



<option value="Uzbekistan">Uzbekistan</option>


<option value="Yemen">Yemen</option>

<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
											
											
											
											
						
											
											
												</select>
						</div>
					</div>

					<div class="clear"></div>

				</div>
				<div class="hotel-right-w3ls">

					<h2> Appointment Details</h2>
					<div class="main">
						<div class="form-left-to-w3l">
<input type="date" name="Travel" id="date" placeholder="Arrival-Date" required>

						</div>
						<div class="form-right-to-w3ls">
<input type="date" name="Return" id="return" placeholder="Departure-Date" required>

						</div>
					</div>
					<div class="main">
						<div class="form-right-to-w3ls">

							<select class="form-control buttom" name="Adult">
							    
												<option>No of Patient</option>
												    
												    <option value="0">0</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
				
												</select>
						</div>
						<div class="form-right-to-w3ls">

							<select class="form-control buttom" name="Kids">
												
												<option>Emergency </option>
												
												    	<option value="0">0</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
				
												</select>
						</div>
					</div>
					<div class="main">
						<div class="form-right-to-w3ls">

							<select class="form-control buttom" name="Tour" >
							    
							    <option>Select Field</option>
							
													<option value="Orthopadic Surgeon">Orthopadic Surgeon</option>
													<option value="EYE Specialist">EYE Specialist</option>
													<option value="Emergency">Emergency</option>
													<option value="Cardiologist">Cardiologist</option>
													<option value="Specialist">Specialist</option>
										</select>
										
						</div>
						<div class="form-right-to-w3ls">

							<select class="form-control buttom" name="Book">
							    
							    <option>Appointment</option>
												
													<option value="Confirm">Confirm</option>
													<option value="Not Confirm">Not Confirm</option>
													
				
												</select>
						</div>
					</div>
					<div class="form-control-w3l">
        	<textarea name="Message" class="message" id="phone" placeholder="Message" required> </textarea>
					</div>
					<div class="clear"></div>
					<div class="btnn">
						<input type="submit" name="register" class="register" value="Register Badge">
					</div>
				</div>
			</div>
		</form>
	</div>

	<div class="copy">
		s
	</div>
	
</body>

</html>