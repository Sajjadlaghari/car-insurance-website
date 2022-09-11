<?php
  require_once ('navbar.php');
?>
<style>
	ul li
	{
		list-style-type: none;
		margin: 10px;

	}
	.crt
	{
		background-color: #286088!important;
		height: 300px;
		color: white;

	}

		.crt:hover
	{
		background-color: red!important;
		height: 300px;
		color: white;

	}
	.crt img
	{
		color: white;
		height: 100px;

	}
</style>

	<div id="carouselExampleDark" class="carousel carousel-dark slide mt-5" data-bs-ride="carousel">
	  <div class="carousel-indicators">
	    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
	    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
	    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
	     <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
	  </div>
	  <div class="carousel-inner">
	    <div class="carousel-item active" data-bs-interval="10000">
	      <img src="images/car1.jpg" class="d-block w-100" alt="..." height="500">
	      <div class="carousel-caption d-none d-md-block">
	        <h5 class="text-white">Enroll Now</h5>
	       
	      </div>
	    </div>
	    <div class="carousel-item" data-bs-interval="2000">
	      <img src="images/car5.jpg" class="d-block w-100" alt="..." height="500">
	      <div class="carousel-caption d-none d-md-block">
	        <h5 class="text-white">GET INSURANCE NOW</h5>
	        <p class="text-white"></p>
	      </div>
	    </div>
	    <div class="carousel-item">
	      <img src="images/car3.jpg" class="d-block w-100 " height="500" alt="...">
	      <div class="carousel-caption d-none d-md-block">
	        <h5 class="" style=" font-size: 35px; font-family: arial;color: black; font-weight: bold;">ENROLL NOW YOURSELF</h5>
	     
	      </div>
	    </div>
	    <div class="carousel-item">
	      <img src="images/car6.jpg" class="d-block w-100 " height="500" alt="...">
	      <div class="carousel-caption d-none d-md-block">
	        <h5 class="text-white">Enroll Now</h5>
	      
	      </div>
	    </div>
	  </div>
	  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="visually-hidden">Previous</span>
	  </button>
	  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="visually-hidden">Next</span>
	  </button>
	</div>



	        
	<!---------------------TYPES OF INSURANCE------------------- -->
	     <div class="container ourservices text-center mt-5 " id="our_services">
	         <h1 class="mb-3 p-3 " style="margin-top:20px; color: red; font-weight: bold; ">TYPES OF INSURANCE</h1>
	          <div class="row">
	          	<div class="col-md-4 col-sm-4 col-xs-12 col-lg-4">
	          		<div class="card" >
	          		  <div class="card-body crt">
	          		    <h5 class="card-title"><img src="images/insurance1.png" class="img-fluid" alt=""></h5>
	          		    <h4 class="card-subtitle " style="font-weight:bold">Comprehensive Insurance</h4>
	          		    <p class="card-text">It covers all the accident claims irrespective of who is at fault. whether you are at fault or not, your policy will pay for damages to both vehicles.</p>
	          		  </div>
	          		</div>
	          	</div>

	          	<div class="col-md-4 col-sm-4 col-xs-12 col-lg-4">
	          		<div class="card" >
	          		  <div class="card-body crt">
	          		    <h5 class="card-title"><img src="images/insurance2.png" class="img-fluid" alt=""></h5>
	          		    <h3 class="card-subtitle p-2" style="font-weight:bold">Third Party Insurance</h3>
	          		    <p class="card-text">It only covers the damages caused to the other party once you are at fault. Under the Vehicles Act 1939, this is the minimum level of cover needed for drivers in Pakistan.</p>
	          		  </div>
	          		</div>
	          	</div>

	          	<div class="col-md-4 col-sm-4 col-xs-12 col-lg-4">
	          		<div class="card" >
	          		  <div class="card-body crt">
	          		    <h5 class="card-title"><img src="images/insurance3.png"  class="img-fluid" alt=""></h5>
	          		    <h4 class="card-subtitle " style="font-weight:bold">Theft, Third-Party and Total Loss Insurance (3T)</h4>
	          		    <p class="card-text">This type of Insurance covers your car against the 3 major risks including Theft, Third Party and Total Loss of Vehicle.</p>
	          		  </div>
	          		</div>
	          	</div>
	          </div>

	             <div class="row mt-4	">
	          	<div class="col-md-4 col-sm-4 col-xs-12 col-lg-4">
	          		<div class="card" >
	          		  <div class="card-body crt">
	          		    <h5 class="card-title"><img src="images/insurance5.jpg" class="img-fluid" alt=""></h5>
	          		    <h4 class="card-subtitle " style="font-weight:bold">Accident</h4>
	          		    <p class="card-text">It covers all the accident claims irrespective of who is at fault. whether you are at fault or not, your policy will pay for damages to both vehicles.</p>
	          		  </div>
	          		</div>
	          	</div>

	          	<div class="col-md-4 col-sm-4 col-xs-12 col-lg-4">
	          		<div class="card" >
	          		  <div class="card-body crt">
	          		    <h5 class="card-title"><img src="images/insurance6.png" class="img-fluid" alt=""></h5>
	          		    <h3 class="card-subtitle p-2" style="font-weight:bold">Accident 2</h3>
	          		    <p class="card-text">When you get into a car accident, there are certain steps you may want to take in order to help make sure everyone is safe, to follow the law and to get the insurance claim process started..</p>
	          		  </div>
	          		</div>
	          	</div>

	          	<div class="col-md-4 col-sm-4 col-xs-12 col-lg-4">
	          		<div class="card" >
	          		  <div class="card-body crt">
	          		    <h5 class="card-title"><img src="images/insurance4.png"  class="img-fluid" alt=""></h5>
	          		    <h4 class="card-subtitle " style="font-weight:bold">Accident 3</h4>
	          		    <p class="card-text">When you get into a car accident, there are certain steps you may want to take in order to help make sure everyone is safe, to follow the law and to get the insurance claim process started..</p>
	          		  </div>
	          		</div>
	          	</div>
	          </div>
	     </div>


       <div class="container text-center" id="our_team">
       	 <h2 style="margin-top:25px; padding: 20px; color: red; font-weight: bold; " class="text-center">OUR AMAZING TEAM</h2>
       	 <p class="text-center">Our management team consists of a number of veteran industry professionals who have a wealth of knowledge from around the world.</p>
        <div class="row mt-4">
          <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12">
            <div class="card" >
              <img src="images/man1.png" class="card-img-top" height="250px" alt="...">
              <div class="card-body">
                <h3 class="card-title text-danger" >Elen</h3>
                        <h6 class="card-title ">CEO</h6>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                       tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                       quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                       consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                       cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                       proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
            </div>
          </div>
        
            <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12">
               <div class="card" >
                 <img src="images/man2.png" class="card-img-top" height="250px" alt="...">
                 <div class="card-body">
                  <h3 class="card-title text-danger" >Abraham</h3>
                        <h6 class="card-title ">Founder</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                 </div>
               </div>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12">
                    <div class="card">
                      <img src="images/man3.png" class="card-img-top" height="250px" alt="...">
                      <div class="card-body">
                       <h3 class="card-title text-danger" >Holoken</h3>
                        <h6 class="card-title ">Manager</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                      </div>
                    </div>
            </div>
          
        </div>
      </div>



                  <!-- CONTACT US -->

	          <div class="container mb-5 mt-5" id="who_we_are">
       			<h1 style="margin-top:25px; padding: 20px; color: red; font-weight: bold;" class="text-center">ABOUT US</h1>

	          	<div class="row shadow-lg">
	          		<div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
	          		 	<img src="images/about-us.png" width="100%" height="400px" class="">
	          		</div>

	          		<div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
	          	    <div class="card p-3">
			          	<p style="color:green;" class="p-1">
			          		newest Insurance Comparison Platform which has been skillfully developed to provide consumers with a simple to use website that delivers an exceptional customer experience.
			          		During these difficult times, we understand that consumers want to remain safe in their homes and with the current economic climate they are also looking to save money too; and the LetsCompare portal does exactly that
			          		The LetsCompare portal acts as an intermediary between insurance companies and the consumer and as more and more insurers join the platform it will give consumers a better understanding of products available to them as well as a higher degree of transparency
			          		With the new digital age is now here  LetsCompare is now giving consumers the ability to compare, understand and ultimately purchase all their insurance products under one roof whilst reducing costs to insurers
General & Medical Insurance products that are available in the marketplace and the more products available on our one-stop LetsCompare platform the better.
		          		</p>
	          		 </div>

	          		</div>
	          	</div>
	          </div>


	          <div class="container" id="contact_us">
	          	 <h1 class="mb-3 p-3 " style="margin-top:20px; color: red; font-weight: bold; text-align: center;" >CONTACT US</h1>
	          	<div class="row shadow-lg p-4	">
	          		<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6 ">
	          			<div class="row mt-2">
	          				<div class="col"><div class="card" >
	          		  <div class="card-body" style="background-color: #286088!important;color: white">
	          		    <p>Location:<br>
	          		    Office 504, Aspire 1 Building, Business Square, Gulberg Greens, Islamabad</p>
	          		  </div>
	          		</div>
	          	</div>
	          			</div>
	          				<div class="row mt-2">
	          				<div class="col"><div class="card" >
	          		  <div class="card-body" style="background-color: #286088!important;color: white;">
	          		    <p>Call:<br>
	          		     +92 68 894 6890</p>
	          		  </div>
	          		</div>
	          	</div>
	          			</div>
	          				<div class="row mt-2">
	          				<div class="col"><div class="card" >
	          		  <div class="card-body" style="background-color: #286088!important;color: white;">
	          		    <p>Email Us:L:<br>info@letscompare.pk</p>
	          		  </div>
	          		</div>
	          	</div>
	          			</div>
	          
	          		</div>
	          		<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6 ">
	          			<form id="contact-form" name="contact-form" action="mail.php" method="POST">
		          	    <input type="text" id="name" name="name" class="form-control">
		          	    <label for="name" class="">Your name</label>
		          	    <input type="text" id="email" name="email" class="form-control">
		          	    <label for="email" class="">Your email</label>
		          	
		          	    <input type="text" id="subject" name="subject" class="form-control">
		          	    <label for="subject" class="">Subject</label>
		          	    <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
		          	    <label for="message">Your message</label><br>
		          	    <button class="btn btn-primary mt-4	mb-4" style="margin-left:40%;">SEND MESSAGE</button>
		          	
	          			</form>
	          			
	          		</div>
	          	</div>
	          </div>





    
	<br>
	<br>

   <?php 
     require_once('footer.php')
    ?>
	
</body>
</html>