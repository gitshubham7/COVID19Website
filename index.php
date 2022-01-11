<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php  include 'link/links.php'; ?>
	<?php  include 'css/style.php'; ?>
</head>
<body onload="fetch()" background="">

<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" target='_blank' href="https://play.google.com/store/apps/details?id=nic.goi.aarogyasetu">
	<span class="colorchange">Welcome to Our Website</span></a>
    <button class="navbar-toggler" id="button1" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sympid">symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventid">prevention</a>
      </li>

       <li class="nav-item">
        <a class="btn btn-nav" href="#contactid">self assessment</a>
      </li>

    </ul>

  </div>
</nav>

<div id="secsection">
<div class="main_header">
	<div class="row w-100 h-100" >
		 <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
		 	<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
		 		<img src="images/eksath.png" width="300" height="300">
		 	</div>
		 </div>

		 <div id="messagesec" class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
		 	<div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
		 		<h1>Let's Stay Home & Fight Together Against Cor<span class="corona_rot"> <img src="images/corona.png"> 
		 		</span>na Virus</h1>
		 	</div>
		 </div>
	</div>
</div>
</div>

<!-- **************** corona latest updates ************** -->

<section class="corona_update container-fluid">
	<div class="mb-3">
		<h3 class="text-uppercase text-center">covid-19 Live updates of World</h3>
	</div>
	
		<div class="table-responsive">	
		
				<table class="table table-bordered table-striped text-center" id="tbval">
						<tr>
							<th>Country</th>
							<th>TotalConfirmed</th>
							<th>TotalRecovered</th>
							<th>TotalDeaths</th>
							<th>NewConfirmed</th>
							<th>NewRecovered</th>
							<th>NewDeaths</th>
						</tr>
				</table>
				
		</div>
		
	</div>

</section>

<!-- ****************** about section ********** -->

<div class="container-fluid sub_section pt-5 pb-5 " id="aboutid">
	<div class="section_header text-center mb-5 mt-4">
		<h1> About COVID-19</h1>
	</div>

	<div class="row pt-5">
		<div class="col-lg-5 col-md-6 col-12 ml-5 about_res">
			<img src="images/aboutcorona.jpg" class="img-fluid">
		</div>

		<div class="col-lg-6 col-md-6 col-12">
			<h2>What is COVID-19 (Corona-Virus) </h2>
			<p>COVID-19 is the infectious disease caused by the most recently discovered coronavirus. This new virus and disease were unknown before the outbreak began in Wuhan, China, in December 2019.</p>
			<p>Coronaviruses are a large family of viruses which may cause illness in animals or humans. In humans, several coronaviruses are known to cause respiratory infections ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS) and Severe Acute Respiratory Syndrome (SARS). The most recently discovered coronavirus causes coronavirus disease COVID-19. </p>
		</div>
	</div>
</div>


<!-- /////////////// Coronavirus symptoms ////////////// -->

<div class="container-fluid  pt-5 pb-5 " id="sympid">
	<div class="section_header text-center mb-5 mt-4">
		<h1> Coronavirus symptoms</h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/cough.png" class="img-fluid " width="120" height="120" >
				<figcaption> cough</figcaption>
				</figure>
			</div>

			<div class= "col-lg-4 col-md-4 col-12 mt-5 " > 
				<figure  class="text-center">
					<img src="images/runnynose.png" class="img-fluid" width="120" height="120">
					<figcaption > runny nose </figcaption>
				</figure>
			</div>

			<div class= "col-lg-4 col-md-4 col-12 mt-5 " > 
				<figure  class="text-center">
					<img src="images/fever.png" class="img-fluid" width="120" height="120">
					<figcaption > fever </figcaption>
				</figure>
			</div>

			<div class= "col-lg-4 col-md-4 col-12 mt-5 " > 
				<figure  class="text-center">
					<img src="images/sick.png" class="img-fluid" width="120" height="120">
					<figcaption > cold </figcaption>
				</figure>
			</div>

			<div class= "col-lg-4 col-md-4 col-12 mt-5 " > 
				<figure  class="text-center" >
					<img src="images/week.png" class="img-fluid" width="120" height="120">
					<figcaption > tiredness </figcaption>
				</figure>
			</div>

			<div class= "col-lg-4 col-md-4 col-12 mt-5 " > 
				<figure  class="text-center">
					<img src="images/breath.png" class="img-fluid" width="120" height="120">
					<figcaption > difficulty breathing (severe cases) </figcaption>
				</figure>
			</div>
		</div>
	</div>

</div>


<!-- /////////////// Prevention Against Coronavirus ////////////// -->

<div class="container-fluid sub_section  pt-5 pb-5 " id="preventid">
	<div class="section_header text-center mb-5 mt-4">
		<h1> 6 Steps Prevention Against Coronavirus </h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12 ">
					<figure class="preventation_res">
					<img src="images/handwash.png" class="img-fluid" width="90" height="90">
					</figure>
					</div>

					<div class="col-lg8 col-md-8 col-12">
						<p>Wash your hands regularly for 20 seconds, with soap and water or alcohol-based hand rub</p>
					</div>
				</div>
			</div>

				<div class="col-lg-4  col-md-4  col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12 ">
						<figure class="preventation_res">
							<img src="images/mask.png" class="img-fluid" width="90" height="90">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>Cover your nose and mouth with a disposable tissue or flexed elbow when you cough or sneeze</p>
					</div>
				</div>
			</div>


			<div class="col-lg-4  col-md-4  col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12 ">
						<figure class="preventation_res">
							<img src="images/quarantine.png" class="img-fluid" width="90" height="90">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>Avoid close contact (1 meter or 3 feet) with people who are unwell</p>
					</div>
				</div>
			</div>


			<div class="col-lg-4  col-md-4  col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12 ">
						<figure class="preventation_res">
							<img src="images/home.png" class="img-fluid" width="90" height="90">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>Stay home and self-isolate from others in the household if you feel unwell</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4  col-md-4  col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12 ">
						<figure class="preventation_res">
							<img src="images/news.png" class="img-fluid" width="90" height="90">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>Stay informed by watching news & follow the recommended practices</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4  col-md-4  col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12 ">
						<figure class="preventation_res">
							<img src="images/medical.png" class="img-fluid" width="90" height="90">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>If you have fever, cough and difficulty breathing, seek medical care early</p>
					</div>
				</div>
			</div>

			</div>
		</div>
	</div>


</div>


<!-- /////////////// Contact Us ASAP ////////////// -->

<div class="container-fluid   pt-5 pb-5 " id="contactid">
	<div class="section_header text-center mb-5 mt-4">
		<h1> Self Assessment</h1>
	</div>

	<div class="container">
		<div class="row">
		<div class="col-lg-8 offset-lg-2 col-12">

		<form action="" method="POST">

 <div class="form-group">
    <label >username </label>
    <input type="text" class="form-control" name="username" placeholder="name" autocomplete="off" required>
  </div>

  <div class="form-group">
    <label >Email </label>
    <input type="email" class="form-control" name="email" placeholder="name@example.com" required autocomplete="off">
  </div>

  <div class="form-group">
    <label >mobile </label>
    <input type="number" class="form-control" name="mobile" placeholder="mobile" autocomplete="off" required>
  </div>
  
   <div class="form-group">
   <p><b>Q. Have you traveled anywhere internationally in the last 28-45 days?</b></p>
   <label >Yes</label>
       <input type="radio" name="traveling" value="YES" required>
	<label >No</label>
    <input type="radio" name="traveling" value="no" required>
	
	
  </div>

    <div class="form-group">
			    <label ><b>Select Symptoms</b></label> <br>

			 	 <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
				    <input type="checkbox" class="custom-control-input " id="customcheckbox1"    name="coronasym[]" value="cold">
				    <label class="custom-control-label" for="customcheckbox1">Cold</label>
				  </div>
				  <div class="custom-control custom-checkbox custom-control-inline text-capitalize ">
				    <input type="checkbox" class="custom-control-input  "  id="customcheckbox2" name="coronasym[]" value="fever">
				    <label class="custom-control-label" for="customcheckbox2">fever</label>
				  </div>

				   <div class="custom-control custom-checkbox custom-control-inline text-capitalize ">
				    <input type="checkbox" class="custom-control-input  " id="customcheckbox3" name="coronasym[]" value="breath">
				    <label class="custom-control-label" for="customcheckbox3">difficulty in breath</label>
				  </div>

				   <div class="custom-control custom-checkbox custom-control-inline text-capitalize ">
				    <input type="checkbox" class="custom-control-input  " id="customcheckbox4" name="coronasym[]" value="tired">
				    <label class="custom-control-label" for="customcheckbox4">feeling weak</label>
				  </div>
				</div>

   <div class="form-group">
   <p><b>Q. Which of the following apply to you?</b></p>
   <label >a. I have recently interacted or lived with someone who has tested positive for COVID -19</label>
       <input type="radio" name="extra" value="I have recently interacted or lived with someone who has tested positive for COVID -19	" required> </br>
	<label >b. I am a healthcare worker & I examined a COVID-19 confirmed case without protective gear</label>
    <input type="radio" name="extra" value="I am a healthcare worker and I examined a COVID-19 confirmed case without protective gear" required></br>
		<label >c. None of the above</label>
    <input type="radio" name="extra" value="None of the above" required>
	
	  <div class="form-group">
	    <label for="exampleFormControlTextarea1"><b>Any Comment or Suggestion </b></label>
	    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg"></textarea>
	  </div>

	  <button type="submit" class="btn btn-sub btn-primary" name="submit">Submit</button>
	  	  <button onclick="window.open('https://play.google.com/store/apps/details?id=nic.goi.aarogyasetu','_blank')" class="btn btn-full" >Aarogya setu app</button>
			</div>
		</div>
	</div>

</div>

<!-- ///////////// top cursor /////////// -->

<div class="container scrolltop float-right pr-5">
	<i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"> </i>
</div>


<!-- /////////////////// fotter ////////////// -->

<footer class="mt-5">
	<div class="footer_style text-white text-center container-fluid">
	
		<p>Pandit Deendayal Petroleum University, Raysan, Gandhinagar, Gujarat 382421 | Email: Shubham.gupta0498@gmail.com</p>
		<p>Copyright © 2022 PDPU</p>

	</div>
</footer>


<script type="text/javascript">

$('.count').counterUp({
	delay:10,
	time:3000
})

	
mybutton = document.getElementById("myBtn");
// When the user scrolls down 100px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
mybutton.style.display = "block";
} else {
mybutton.style.display = "none";
}
}
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
document.body.scrollTop = 0; // For Safari
document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}


function fetch (){
		$.get("https://api.covid19api.com/summary",
		
				function(data){
						//console.log(data['Countries'].length);
						var tbval=document.getElementById('tbval');
						
						for(var i=1;i<=(data['Countries'].length);i++){
							var x=tbval.insertRow();
							x.insertCell(0);
							
							tbval.rows[i].cells[0].innerHTML=data['Countries'][i-1]['Country'];
							tbval.rows[i].cells[0].style.background='#7a4a91';
							tbval.rows[i].cells[0].style.color='#fff';
							
							x.insertCell(1);
							tbval.rows[i].cells[1].innerHTML=data['Countries'][i-1]['TotalConfirmed'];
							tbval.rows[i].cells[1].style.background='#4bb7d8';
							
							x.insertCell(2);
							tbval.rows[i].cells[2].innerHTML=data['Countries'][i-1]['TotalRecovered'];
							tbval.rows[i].cells[2].style.background='#1FE53A';
							
							x.insertCell(3);
							tbval.rows[i].cells[3].innerHTML=data['Countries'][i-1]['TotalDeaths'];
							tbval.rows[i].cells[3].style.background='red';
							
							x.insertCell(4);
							tbval.rows[i].cells[4].innerHTML=data['Countries'][i-1]['NewConfirmed'];
							tbval.rows[i].cells[4].style.background='#4bb7d8';
							
							x.insertCell(5);
							tbval.rows[i].cells[5].innerHTML=data['Countries'][i-1]['NewRecovered'];
							tbval.rows[i].cells[5].style.background='#1FE53A';
							
							x.insertCell(6);
							tbval.rows[i].cells[6].innerHTML=data['Countries'][i-1]['NewDeaths'];
							tbval.rows[i].cells[6].style.background='red';
						}
				}
		);
}

</script>

</body>
</html>


<?php

include 'dbcon.php';

if(isset($_POST['submit'])){

	$username = $_POST['username'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$symp = $_POST['coronasym'];
	$msg = $_POST['msg'];
	$traveling=$_POST['traveling'];
	$extra=$_POST['extra'];

	$chk = "";

	foreach($symp as $chk1){
		$chk .= $chk1."," ;
	}

	$insertquery = " insert into coronacase(username, email, mobile, symp, message,traveling,extra) values('$username', '$email', '$mobile', '$chk', '$msg','$traveling','$extra') ";

	$query = mysqli_query($con, $insertquery);


	if($query){
		?>
		<script>
			alert("Your data has been Submited. We recommend that you stay at home to avoid any chance of exposure to the Novel Coronavirus. Retake the Self-Assessment Test if you develop symptoms or come in contact with a COVID-19 confirmed patient");
		</script>
		<?php
	}else{
		?>
		<script>
			alert("No inserted ");
		</script>
		<?php
	}
}


?>