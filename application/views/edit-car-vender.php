<?php 
include('header.php'); 
?>

<style>
	article, aside, figure, footer, header, hgroup, 
	menu, nav, section { display: block; }
</style>
<script type="text/javascript">
	$(document).on('change','.upload',function(){
		files = this.files;
		size = files[0].size;


		if( size > 1000000){
			alert('Please upload an image less than 1mb');
			return false;
		}
		readURL(this);
		return true;
	});

	$(document).ready(function(){

		$("#add_car").submit(function(){

			brand = $("input[name=brand]").val();
			model = $("input[name=model]").val();
			milage = $("input[name=milage]").val();
			price_day = $("input[name=price_day]").val();
			price_hr = $("input[name=price_hr]").val();
			fuel = $("input[name=fuel]").val();
			max_passanger = $("input[name=max_passanger]").val();
			max_luggage = $("input[name=max_luggage]").val();
			sub_loc = $("input[name=sub_loc]").val();


			if(brand == ""){

				alert("Please Enter Brand");

				return false;

			}else if(model == ""){

				alert("Please Enter Model");

				return false;

			}
			else if(milage == ""){

				alert("Please Enter Milage");

				return false;
			}
			else if(price_day == ""){

				alert("Please Enter Price Per Day");

				return false;
			}
			else if(price_hr == ""){

				alert("Please Enter Price Per Hour");

				return false;
			}
			else if(fuel == ""){

				alert("Please Enter Fuel");

				return false;
			}
			else if(max_passanger == ""){

				alert("Please Enter Max Passengers");

				return false;
			}
			else if(max_luggage == ""){

				alert("Please Enter Plate No.");

				return false;
			}
			else if(sub_loc == ""){

				alert("Please Enter Sub Loction");

				return false;
			}

		}) ; 


	});

</script> 
<div class="container-fluid back-img cell-screen " style="background-image: url(<?php echo $assets ?>images/bg1.jpg); margin-top: -30px; ">

	<div class="row">
		<div class="col-md-12 col-lg-12 col-sm-12 col-xl-12" style="height:40px;"></div>
	</div>
	<form id="add_car" method="post" action="<?php echo base_url(); ?>venders/edit_cars_form/" enctype="multipart/form-data">

		<input type="hidden" name="id" value="<?php echo $data[0]['id'];?>">
		<input type="hidden" name="car_image" value="<?php echo $data[0]['car_image'];?>">

		<div class="container back-div">

			<div class= "container vendor" style= "margin-left:-13px">
				<div class= "col-md-12 col-sm-12 col-lg-12 col-xs-12">
					<h1 class= "white">Vendor Form </h1>
					<p class= "white">Fill the form below to get instant access </p>
				</div>
				<?php 
				if(@$_GET['msg'] == 1)
				{
					?>	
					<div class="row">
						<div class="col-md-12 col-lg-12 col-sm-12 col-xl-12" style="height: 40px; color: red; margin-left: 30%;">You've successfully edited a car !</div>
					</div>
					<?php 
				}
				?>
			</div>
			<div class="row">
				<div class="col-md-12 col-lg-12 col-sm-12 col-xl-12" style="height:60px;"></div>
			</div>
			<div class="row">
				<div class="col-md-1"></div>
				
				<div class="col-md-5 form1">
					<fieldset class="well the-fieldset1 car-details"  style="height: 500px;">
						<legend class="the-legend1">Car Details</legend>
						<input type="text" name="brand" class="form-control inputs inputs-left" id="name" placeholder="Brand(eg:Proton)" style="height:70px; width:172px;" value="<?php echo $data[0]['brand'];?>">
						<input type="text" name="company" class="form-control inputs inputs-left" id="name" placeholder="Company" style="height:70px; width:172px; display: none;"  value="<?php echo $data[0]['company'];?>">
						<select name="type" class="form-control inputs inputs-left " id="name" style="height:70px; width:172px;">
							<option value="">Car Types</option>
							<option value="Compact">Compact</option>
							<option value="SUV">SUV</option>
							<option value="Van">Van</option>
						</select>
						<input type="color" name="color" value="Car color" class="form-control inputs inputs-left" id="fcolor" style="height:70px;  width:172px; display: none;">
						<input type="text" name="model"  class="form-control inputs inputs-left" id="f_name"  value="<?php echo $data[0]['model'];?>" placeholder="Model(eg:Saga)" style="height:70px;  width:172px;">
						<select name="gear_box" class="form-control inputs inputs-left" id="name" style="height:70px; width:172px;">
							<option value="volvo">Gear Box</option>
							<option value="Auto">Auto</option>
							<option value="Manual">Manual</option>

						</select>
						<input type="text" class="form-control inputs inputs-left"  name="milage"  value="<?php echo $data[0]['milage'];?>" id="cnic" placeholder="Mileage in Km" style="height:70px; width:172px;">
						<input type="text" class="form-control inputs inputs-left" name="price_day"  value="<?php echo $data[0]['price_day'];?>" id="cnic" placeholder="Price/day(RM)" style="height:70px; width:172px;">
						<input type="text" class="form-control inputs inputs-left" name="price_hr"   value="<?php echo $data[0]['price_hr'];?>"id="price_type" placeholder="Price/hr(RM)" style="height:70px; width:172px;">


						<input type="text" class="form-control inputs inputs-left" value="<?php echo $data[0]['addmoreprice'];?>" name="addmoreprice"  id="addmoreprice" placeholder="Add Extra Dues" style="height:70px; width:172px; display: none;">

						<input type="text" class="form-control inputs inputs-left"  value="<?php echo $data[0]['fuel'];?>" name="fuel" id="cnic" placeholder="Fuel Fee" style="height:70px; width:172px;">

						<select name="conditions" class="form-control inputs inputs-left" id="name" style="height:70px; width:172px;">
							<option value="">Condition</option>
							<option value="Excellent">Excellent</option>
							<option value="Good">Good</option>
							<option value="Normal">Normal</option>
							<option value="Average">Average</option>
						</select>
						<select name="doors" class="form-control inputs inputs-left" id="name" style="height:70px; width:172px; display: none;">
							<option value="volvo">Doors</option>
							<option value="2">2</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
						<input type="text" class="form-control inputs inputs-left"  name="max_passanger" id="cnic" placeholder="Max Passangers" style="height:70px; width:172px;">
						<input type="text" class="form-control inputs inputs-left"   value="<?php echo $data[0]['max_luggage'];?>"  name="max_luggage" id="cnic" placeholder="Plate No." style="height:70px; width:172px;">



						<select name="location" class="form-control inputs inputs-left loction" id="loction" style="height:70px; width:172px;">
							<option value="Kota Kinabalu">Kota Kinabalu</option>
							<option value="Labuan">Labuan</option>

						</select>

						<input type="text" class="sub_loc form-control inputs inputs-left"  name="sub_loc" value="<?php echo $data[0]['sub_loc'];?>" id="sub_loc" placeholder="Sub-location(eg:UMS)" style="height:70px; width:220px;">


						<div style="height:360px; width:100px;"></div>
						<div class="set-upld-img" style="top: 28%;right: -78%;position: absolute;">
							<div style="
							width: 226px;
							margin-right: 13px;
							top: 0%;
							right: 0%;
							border: groove;
							height: 153px;
							margin-bottom: 17px;
							background-color: #ffffff;
							">
							<?php 
							$src = "http://www.aa.co.nz/themes/aa/images/interface/NoImagePlaceholder.png";
							if($data[0]['car_image'] != "")
							{
								$src= str_replace("/index.php/","/",base_url()). "media/images/cars/".$data[0]['car_image']; 
							}
							?>
							<img id="blah" src="<?php echo $src;  ?>" alt="Upload Cars Image" style="width: 100%; height: 100%" />
						</div>

						<span class="btn btn-primary btn-file" style="background-color:  #373737; padding: 6px 141px;">
							<input type="file" onchange="" class="upload" name="car_image"> Upload Car Image

						</span>

					</div>

				</div>
				<div class="col-md-1"></div>
				<!-- <div class="col-md-5 form1 " style="display: none; ">
					<fieldset class="well the-fieldset2 additional-information" style="height: 240px;">
						<legend class="the-legend2">Additional information</legend>
						<div class="check">
							<input type="checkbox"  name="abs_" style="border:2px solid white;display:block;background:transparent; width:20px; height:20px; float:left"/>
							<label style="padding-left:20px; font-size:16px">ABS</label></div>
							<div class="check">
								<input type="checkbox"  name="air_bags" style="border:2px solid white;display:block;background:transparent; width:20px; height:20px; float:left"/>
								<label style="padding-left:20px; font-size:16px">Air Bags</label></div>
								<div class="check">
									<input type="checkbox"  name="air_conditions" style="border:2px solid white;display:block;background:transparent; width:20px; height:20px; float:left"/>
									<label style="padding-left:20px; font-size:16px">Air Conditioning</label></div>
									<div class="check">
										<input type="checkbox"  name="audio_system" style="border:2px solid white;display:block;background:transparent; width:20px; height:20px; float:left"/>
										<label style="padding-left:20px; font-size:16px">Audio System</label></div>
										<div class="check">
											<input type="checkbox" name="central_lock"  style="border:2px solid white;display:block;background:transparent; width:20px; height:20px; float:left"/>
											<label style="padding-left:20px; font-size:16px">Central Locking</label></div>
											<div class="check">
												<input type="checkbox"  name="cruise_control" style="border:2px solid white;display:block;background:transparent; width:20px; height:20px; float:left"/>
												<label style="padding-left:20px; font-size:16px">Crust Control</label></div>
												<div class="check">
													<input type="checkbox"  name="electric_window" style="border:2px solid white;display:block;background:transparent; width:20px; height:20px; float:left"/>
													<label style="padding-left:20px; font-size:16px">Electric Windows</label></div>
													<div class="check">
														<input type="checkbox"  name="power_steering" style="border:2px solid white;display:block;background:transparent; width:20px; height:20px; float:left"/>
														<label style="padding-left:20px; font-size:16px">Power Steering</label></div>


													</div>-->

												</div> 
												<div class="row" style="text-align: center; float: left; margin-left: 25%;" >
													<input type="hidden" name="addcar_vender" value="1" />
													<button type="submit" class="btn btn-success btn-lg">Submit</button>	
												</div></div>
											</form>
										</div>

										<footer>
										</footer> 
										<script>
											function readURL(input) {
												if (input.files && input.files[0]) {
													var reader = new FileReader();

													reader.onload = function (e) {
														$('#blah')
														.attr('src', e.target.result)
														.width(226)
														.height(153);
													};
													reader.readAsDataURL(input.files[0]);
												}
											}
										</script>  
									</body>
									</html>