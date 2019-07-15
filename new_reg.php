<?php session_start();

	// $_SESSION['name']="";
	// $_SESSION['gender']="";
	// $_SESSION['category']="";
	// $_SESSION['dob']="";
	// $_SESSION['bloodgrp']="";
	// $_SESSION['class']="";
	// $_SESSION['branch']="";
	// $_SESSION['whatsappno']="";
	// $_SESSION['altno']="";
	// $_SESSION['fathername']="";
	// $_SESSION['fatheroccupation']="";
	// $_SESSION['mothername']="";
	// $_SESSION['familyincome']="";
	// $_SESSION['caddr']="";
	// $_SESSION['paddr']="";

?>

<!DOCTYPE html>
<html>
<head>
	<title>NSS Volunteer Registration</title>
	<?php include 'include/link.html';?>
	<style type="text/css">
		
		h1,h3,h2{
			text-align: center;
			font-family: serif;
		}
		
		h3{
			margin-bottom: 30px;
		}
		.container{
			margin-top: 20px;
		}
		.showit{
			visibility: hidden; 
			height: 0px;
		}
		.required:after { content:" *"; color: red;}
		/*.form-control:focus {
			border-color: #ff80ff;
			box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.075) inset, 0px 0px 8px rgba(255, 100, 255, 0.5);

			}*/
			thead th{
				font-family: sans-serif;
			}	
			table td input{
				min-width: 100px;
			}
			table td select{
				min-width: 70px;
			}

			@media only screen and (min-width: 992px) {
				.container label{
					text-align:left;

				}

				.container-fluid{
					padding-left: 25%;
					padding-right: 25%
				}
			}
			@media only screen and (max-width: 992px) {
				.container label{
					text-align:right;

				}
				.container-fluid{
					padding-left: 10%;
					padding-right: 10%
				}
				h1{
					font-size:24px;
				}
				h2{
					font-size: 20px;
				}
				h3{
					font-size: 16px;
				}
			}
			input, textarea{
				text-transform:uppercase; 
			}
		</style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	</head>
	<body>
		<div class="container-fluid">
			<div align="center">
				<img style="height: 90px; margin: auto;"src="res/images/nsslogo.png">
			</div>
			<h1>National Service Scheme</h1>
			<h2>IET-DAVV</h2>
			<h3>Volunteer Registration Form</h3>

			<form method="post" action="form_pdf.php">
				<div id="data">
					<div class="form-group row">
						
						<label for="example-text-input" class="col-md-3 col-form-label required">Full Name</label>
						<div class="col-md-9">
							<input class="form-control" type="text" value="" name="name" id="name" required>
						</div>
					</div>
					<div class="form-group row">
						
						<label for="example-text-input" class="col-md-3 col-form-label required">Gender</label>
						<div class="col-md-3">

							<select class="form-control" id="" name="gender" required>
								<option value="" disabled selected>Select Gender</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
						</div>

						<label for="example-text-input" class="col-md-3 col-form-label required">Category</label>
						<div class="col-md-3">
							<select class="form-control" id="sel1" name="category" required>
								<option value="" disabled selected>Select Category</option>
								<option value="GEN">General</option>
								<option value="OBC">OBC</option>
								<option value="SC">SC</option>
								<option value="ST">ST</option>
								<option value="MIN">Minority</option>
							</select>
						</div>
					</div>

					<div class="form-group row">
						
						<label for="example-text-input" class="col-md-3 col-form-label required">Date of Birth</label>
						<div class="col-md-3">
							<input class="form-control" type="date" value="" name="dob" id="dob" max="<?php echo date('Y-m-d');?>"required>
						</div>
						<label for="example-text-input" class="col-md-3 col-form-label required">Blood Group</label>
						<div class="col-md-3">
							<select class="form-control" id="blood_grp" name="bloodgrp" required>
								<option value="" disabled selected > Select Blood Group</option>
								<option value="O +ve">O +ve</option>
								<option value="O -ve">O -ve</option>
								<option value="AB +ve">AB +ve</option>
								<option value="AB -ve">AB -ve</option>
								<option value="A +ve">A +ve</option>
								<option value="A -ve">A -ve</option>
								<option value="B +ve">B +ve</option>
								<option value="B -ve">B -ve</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						
						<label for="example-text-input" class="col-md-3 col-form-label required">Class</label>
						<div class="col-md-3">
							<select class="form-control" name="class" required>
								<option value="" disabled selected>Select Year</option>
								<option value="1st">B.E. 1st Year</option>
								<option value="2nd">B.E. 2nd Year</option>
								<option value="3rd">B.E. 3rd Year</option>
								<option value="4th">B.E. 4th Year</option>
							</select>
						</div>
						<label for="example-text-input" class="col-md-3 col-form-label required">Branch</label>
						<div class="col-md-3">
							<select class="form-control" name="branch" required>
								<option value="" disabled selected> Select Branch</option>
								<option value="CS-A">CS-A</option>
								<option value="CS-B">CS-B</option>
								<option value="IT-A">IT-A</option>
								<option value="IT-B">IT-B</option>
								<option value="E&TC-A">E&TC-A</option>
								<option value="E&TC-B">E&TC-B</option>
								<option value="E&I">E&I</option>
								<option value="MECH">MECH</option>
								<option value="Civil">Civil</option>					
							</select>
						</div>
					</div>
					<div class="form-group row">
						
						<label for="example-text-input" class="col-md-3 col-form-label">WhatsApp No.</label>
						<div class="col-md-3">
							<input class="form-control" type="tel" name="whatsappno" pattern="[6-9][0-9]{9}" value="" placeholder="10 digit Mobile No.">
						</div>

						<label for="example-text-input" class="col-md-3 col-form-label" >Alternate Contact No.</label>
						<div class="col-md-3">
							<input class="form-control" type="tel" value="" name="altno" placeholder="10 digit Mobile No.">
						</div>
					</div>
					<div class="form-group row">
						
						<label for="example-text-input" class="col-md-3 col-form-label required">Father's Name</label>
						<div class="col-md-9">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroupPrepend">Mr.</span>
								</div>
								<input class="form-control" type="text" value="" name="fathername" required>
							</div>
						</div>
					</div>

					<div class="form-group row">
						
						<label for="example-text-input" class="col-md-3 col-form-label required">Father's Occupation</label>
						<div class="col-md-9">
							<input class="form-control" type="text" value="" name="fatheroccupation"id="name" required>
						</div>
					</div>

					<div class="form-group row">
						
						<label for="example-text-input" class="col-md-3 col-form-label required">Mother's Name</label>
						<div class="col-md-9">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroupPrepend">Mrs.</span>
								</div>
								<input class="form-control" type="text" value="" name="mothername" id="name" required>
							</div>
						</div>
					</div>
					<div class="form-group row">
						
						<label for="example-text-input" class="col-md-3 col-form-label required">Family Income</label>
						<div class="col-md-9">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroupPrepend">Rs.</span>
								</div>
								<input class="form-control" type="number" value="" name="familyincome" id="name" placeholder="Enter Annual Family Income in Rupees" min="0"required required>
							</div>
						</div>
					</div>

					<div class="form-group row">
						
						<label for="example-text-input" class="col-md-3 col-form-label required">Current Address</label>
						<div class="col-md-9">
							<textarea class="form-control" type="text" name="caddr"value="" id="name" required></textarea>
						</div>
					</div>
					<div class="form-group row">
						
						<label for="example-text-input" class="col-md-3 col-form-label">Permanent Address</label>
						<div class="col-md-9">
							<textarea class="form-control" type="text" name="paddr"value="" id="name"></textarea>
						</div>
					</div>
					<div class="form-group row">
						
						<label for="example-text-input" class="col-md-3 col-form-label">Are you NSS / NCC Volunteer?</label>
						<div class="col-md-3">
							<select class="form-control" name="is_nssV" required>
								<option value="No" selected>No</option>
								<option value="Yes" >Yes</option>
							</select>
						</div>
						<div class="col-md-3 col-form-label">NSS Joining Year</div>
						<div class="col-md-3">
							<select class="form-control" name="nssYear" required>
								<option value="2019">2019</option>
								<option value="2018">2018</option>
								<option value="2017">2017</option>
								<option value="2016">2016</option>
								<option value="2015">2015</option>
							</select>
						</div>
					</div>



<!-- 
					<div align="center">
						<button class="btn btn-primary next" id="next">Next</button>
					</div> -->
				</div>

				

				<div class="row">
					
					<div id="interests" class="col-md-12">
						<h3 style="font-family: serif; text-decoration: underline;">Activities you are intrested in :-</h3>
						<table class="table table-bordered table-responsive">
							<thead>
								<!-- <th>S.No.</th> -->
								<th>Interests activities </th>
								<th>Activity info/ name</th>
								<th>Have taken part or not</th>
								<th>Want to lead / participate</th>

							</thead>
							<tbody>
								<tr>
									<!-- <td>1.</td> -->
									<td>Game and Sports (name)</td>
									<td><input class="form-control" type="text" value="" name="t1" ></td>
									<td><select class="form-control" name="t1a" required>
										<option value="" disabled selected>Select</option>
										<option value="Yes" >Yes</option>
										<option value="No" >No</option>
									</td>
									<td>
										<select class="form-control" name="t1b" required>
											<option value="" disabled selected>Select</option>
											<option value="Yes" >Yes</option>
											<option value="No" >No</option>
										</select>
									</td>
								</tr>
								<tr>
									<!-- <td>2.</td> -->
									<td>Study tour</td>
									<td><input class="form-control" type="text" value="" name="t2" ></td>
									<td>
										<select class="form-control" name="t2a" required>
											<option value="" disabled selected>Select</option>
											<option value="Yes" >Yes</option>
											<option value="No" >No</option>
										</select>
									</td>
									<td>
										<select class="form-control" name="t2b" required>
											<option value="" disabled selected>Select</option>
											<option value="Yes" >Yes</option>
											<option value="No" >No</option>
										</select>
									</td>
								</tr>
								<tr>
									<!-- <td>3.</td> -->
									<td>Art & Craft</td>
									<td>
										<input class="form-control" type="text" value="" name="t3" >
									</td>
									<td>
										<select class="form-control" name="t3a" required>
											<option value="" disabled selected>Select</option>
											<option value="Yes" >Yes</option>
											<option value="No" >No</option>
										</select>
									</td>
									<td>
										<select class="form-control" name="t3b" required>
											<option value="" disabled selected>Select</option>
											<option value="Yes" >Yes</option>
											<option value="No" >No</option>
										</select>
									</td>
								</tr>
								<tr>
									<!-- <td>4.</td> -->
									<td>Music / singing</td>
									<td>
										<input class="form-control" type="text" value="" name="t4" >
									</td>
									<td>
										<select class="form-control" name="t4a" required>
											<option value="" disabled selected>Select</option>
											<option value="Yes" >Yes</option>
											<option value="No" >No</option>
										</select>
									</td>
									<td>
										<select class="form-control" name="t4b" required>
											<option value="" disabled selected>Select</option>
											<option value="Yes" >Yes</option>
											<option value="No" >No</option>
										</select>
									</td>
								</tr>
								<tr>
									<!-- <td>5.</td> -->
									<td>Dance / Drama</td>
									<td>
										<input class="form-control" type="text" value="" name="t5" >
									</td>
									<td>
										<select class="form-control" name="t5a" required>
											<option value="" disabled selected>Select</option>
											<option value="Yes" >Yes</option>
											<option value="No" >No</option>
										</select>
									</td>
									<td>
										<select class="form-control" name="t5b" required>
											<option value="" disabled selected>Select</option>
											<option value="Yes" >Yes</option>
											<option value="No" >No</option>
										</select>
									</td>
								</tr>
								<tr>
									<!-- <td>6.</td> -->
									<td>Writing / Debating / Story Description</td>
									<td>
										<input class="form-control" type="text" value="" name="t6" >
									</td>
									<td>
										<select class="form-control" name="t6a" required>
											<option value="" disabled selected>Select</option>
											<option value="Yes" >Yes</option>
											<option value="No" >No</option>
										</select>
									</td>
									<td>
										<select class="form-control" name="t6b" required>
											<option value="" disabled selected>Select</option>
											<option value="Yes" >Yes</option>
											<option value="No" >No</option>
										</select>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="form-group row">
					<!--  -->
					<label for="example-text-input" class="col-md-2 col-form-label">Your Hobbies</label>
					<div class="col-md-10">
						<textarea class="form-control" type="text" name="hobbies"value="" id="name"></textarea>
					</div>
				</div>

				<div class="form-group row">
					<!--  -->
					<label for="example-text-input" class="col-md-5 col-form-label">Check the activities you are intersted in </label>
					<div class="col-md-7 col-form-label">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="customCheck1">
							<label class="custom-control-label" for="customCheck1">Content Writing</label>
						</div>

						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="customCheck2">
							<label class="custom-control-label" for="customCheck2">Photography / Video Editing</label>
						</div>

						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="customCheck3">
							<label class="custom-control-label" for="customCheck3">Painting / Poster Making</label>
						</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="customCheck4">
							<label class="custom-control-label" for="customCheck4"> Web Development & Data Handling</label>
						</div>
					</div>
				</div>



				<div align="center">
					<!-- <button id="back" class="btn btn-primary">Go Back</button> -->
					<button name="submit" class="btn btn-success">Submit</button>
				</div>
				<br>

				
			</form>
		</div>
			<!-- <script type="text/javascript">
				$(document).ready(function(){
					$("#interests").toggle();
					$("#next").click(function(){
						$("#interests").toggle();
						$("#data").toggle();
					});
					$("#back").click(function(){
						$("#interests").toggle();
						$("#data").toggle();
					});
				});

			</script> -->
		</body>
		</html>