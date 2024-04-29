
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>EVSU-CC LMS</title>

    <!-- Bootstrap -->
    <link href="Assets/css2/bootstrap.min.css" rel="stylesheet">
    <link href="Assets/css2/custom.css" rel="stylesheet">
    
    <!-- fonts -->
   <!--  <link href='http://fonts.googleapis.com/css?family=Nixie+One' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet"> -->

      <style>
        /* Add pastel colors to boxes */
        .ticketBox {
           /* Pastel yellow */
           box-shadow: 5px 5px 10px #888888; /* Sky blue */
        }

        /* Add pastel color to active tab */
        .nav-tabs > li.active > a,
        .nav-tabs > li.active > a:focus,
        .nav-tabs > li.active > a:hover {
            background-color: #87CEEB; /* Sky blue */
        }


        /* Apply a background color with transparency */
        .ticketBox1,
        .ticketBox2,
        .ticketBox3 {
            background-color: rgba(0, 0, 255, 0.2); /* Adjust the last value (0.2) for transparency */
            padding: 20px;
            border-radius: 10px;
            margin: 10px;
        }

        /* Different shades of blue for text */
        .ticket-name {
            color: #0074cc; /* Darker blue */
        }

        /* Hover effect for the ticket boxes */
        .ticketBox1:hover,
        .ticketBox2:hover,
        .ticketBox3:hover {
            background-color: rgba(0, 0, 255, 0.5); /* Adjust the last value (0.5) for hover transparency */
        }

        /* Center text vertically and horizontally in the boxes */
    

        /* Remove default link styles */
        a {
            text-decoration: none;
        }

        .image1{
          width:45px ;
          height: auto;
          margin-left: 50px;
        }
        .image2{
          width:65px ;
          height: auto;
          margin-left: 50px;
        }
    </style>
  </head>
  <body>
  	
    <!-- <div class="loader">
       <div>
        <img src="images/icons/preloader.gif" />
       </div>
    </div> -->
    
    <div class="container-fluid">
		<div class="row">
        	<div class="col-sm-5 left-wrapper">
            	<div class="event-banner-wrapper">
                	<div class="logo">
                        <h1>LibraMind</h1>
                    </div>
                
                	<h2>
                    EVSU-CC<br>Library
                    <span>September 2023</span>
                    </h2>
                    <p></p>
                </div>
            </div>
            <div class="col-sm-7 right-wrapper">
            	<div class="event-ticket-wrapper">
                    
                    <div class="event-tab">
                
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#Portal" aria-controls="Portal" role="tab" data-toggle="tab">Portal</a></li>
                    <li role="presentation"><a href="#About" aria-controls="About" role="tab" data-toggle="tab">Philosopy of the Library</a></li>
                   
                    
                    <!-- <li role="presentation"><a href="#termCondition" aria-controls="termCondition" role="tab" data-toggle="tab">Message Us</a></li> -->
                  </ul>
                
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="Portal">
                    	<div class="row">
                        	<div class="col-md-4">
                            	<div class="ticketBox" data-ticket-price="">
                                	<div class=""></div>
                                    <div class="row">
                                      <a href="Login/student_login.php">
           			                       	<div class="col-xs-4">
                          							   <div class="ticket-name">
                                            Student
                                            </div>
                                            
                          						  </div>
                                        <div class="col-xs-2">
                                                <img class="image1" src="Assets/images2/student.jpg" alt="Student Image"  >
                                        </div>
                                    </div> 
                                    </a>                 
                                </div>
                            </div>
                            <div class="col-md-4">
                              <div class="ticketBox" data-ticket-price="">
                                  <div class=""></div>
                                    <div class="row">
                                      <div class="col-xs-4">
                                        <a href="Login/employee_login.php">
                                         <div class="ticket-name">
                                          Employee
                                          </div>
                                        </a>
                                      </div>
                                      <div class="col-xs-2">
                                                <img  class="image1" src="Assets/images2/employee.jpg" alt="Student Image" >
                                        </div>
                                    </div>                  
                                </div>
                            </div>
                             <div class="col-md-4">
                              <div class="ticketBox" data-ticket-price="">
                                  <div class=""></div>
                                    
                                    <div class="row">
                                      <div class="col-xs-4">
                                        <a href="Attendance/attendance.php">
                                         <div class="ticket-name">
                                          Attendance
                                          <span><br></span>
                                          </div>
                                      </div>
                                    <div class="col-xs-2">
                                          <img  class="image2" src="Assets/images2/qr.jpg" alt="QRcode Image" >
                                      </div>
                                    </div>                  
                                </div>
                            </div>

                            <div class="col-md-6">
                            	<div class="ticketBox" data-ticket-price="5000">
                                	<div class=""></div>
                                    
                                    <div class="row">
 			                       	        <div class="col-xs-6">
            							               <div class="ticket-name">About Us</div>
            						              </div>
                                    
                                    <div class="col-xs-6">
            						              </div>
                                    </div>
                                	
                                    
                                    <div class="ticket-description">
                                    	<p><strong>Location:</strong>
                                        <br>EVSU Library
                                        <br>Academic Building
                                        <br>Eastern Visayas State University Carigara Campus
                                        <br>Barugohay Norte Carigara, Leyte
                                      </p>
                                    </div>

                                    <div class="ticket-description">
                                      <p><strong>Availability:</strong>
                                        <br>Monday - Friday
                                        <br>8:00 AM - 5:00 PM
                                      </p>
                                    </div>
                                            
                                </div>
                            </div>
                            <div class="col-md-6">
                              <div class="ticketBox" data-ticket-price="5000">
                                  <div class="inactiveStatus"></div>
                                    
                                    <div class="row">
                                      <div class="col-xs-6">
                                         <div class="ticket-name">About LibraMind</div>
                                      </div>
                                    
                                    <div class="col-xs-6">
                                      </div>
                                    </div>
                                  
                                    
                                    <div class="ticket-description">
                                      <p><strong>TagLine:</strong>
                                        <br>Optimizing EVSUCC Library System:
                                        <br>Leveraging data analytics
                                        <br>for enhance user experience
                                        <br>and resource management
                                      </p>
                                    </div>

                                    <div class="ticket-description">
                                      <p>
                                        <br>LibraMind @ All Right Reserved 2023
                                        <br>Developed by IT_PowerPuffGirls
                                      </p>
                                    </div>
                                            
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="About">
                    	<h4> The Philosophy of the EVSU Library is articulated in its mission and objectives stated as follows:</h4><br>
                        <!-- <iframe src="https://www.google.com/maps/d/embed?mid=1UMEBYRnM0KZhrhqikVv3YigwUd0" width="640" height="300"></iframe> -->
                    </div>
              
                  </div>
                
                </div>
                       
                </div>
            </div>
        </div>
    </div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="Assets/js2/bootstrap.min.js"></script>
    <script src="Assets/js2/allscript.js"></script>
  </body>
</html>
