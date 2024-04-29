<?php 


   include('template/header.php');


    $sql ="SELECT COUNT(id) as total2  FROM uploads";
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);
    $total_vouch2 = $row['total2'];

 ?>
         <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
               <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <div class="iq-menu-bt d-flex align-items-center">
                     <div class="wrapper-menu">
                        <div class="main-circle"><i class="las la-bars"></i></div>
                     </div>
                     <div class="iq-navbar-logo d-flex justify-content-between">
                        <a href="index-2.html" class="header-logo">
                           <!-- <img src="images/logo.png" class="img-fluid rounded-normal" alt=""> -->
                           <div class="logo-title">
                              <span class="text-primary text-uppercase"></span>
                           </div>
                        </a>
                     </div>
                  </div>
                <div class="navbar-breadcrumb">
                     <h5 class="mb-0">Dashboard</h5>
                     <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                           <li class="breadcrumb-item active" aria-current="page">Home</li>
                        </ul>
                     </nav>
                  </div>
                  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                  <i class="ri-menu-3-line"></i>
                  </button> -->
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav ml-auto navbar-list">
                        <li class="line-height pt-3">
                           
                              <!-- <img src="../images/user/1.jpg" class="img-fluid rounded-circle mr-3" alt="user"> -->
                              <div class="caption">
                                 <h6 class="mb-1 line-height">Welcome <?php echo $role; ?></h6>
                              </div>
                           
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
         </div>
           <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-6 col-lg-3">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body">
                           <div class="d-flex align-items-center">
                              <div class="rounded-circle iq-card-icon bg-primary"><i class="ri-user-line"></i></div>
                              <div class="text-left ml-3">                                 
                                 <h2 class="mb-0"><span class="counter">5000</span></h2>
                                 <h5 class="">Users</h5>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body">
                           <div class="d-flex align-items-center">
                              <div class="rounded-circle iq-card-icon bg-danger"><i class="ri-book-line"></i></div>
                              <div class="text-left ml-3">                                 
                                 <h2 class="mb-0"><span class="counter">4.8</span></h2>
                                 <h5 class="">Books</h5>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body">
                           <div class="d-flex align-items-center">
                              <div class="rounded-circle iq-card-icon bg-warning"><i class="ri-shopping-cart-2-line"></i></div>
                              <div class="text-left ml-3">                                 
                                 <h2 class="mb-0"><span class="counter">1.2</span></h2>
                                 <h5 class="">Revenue</h5>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body">
                           <div class="d-flex align-items-center">
                              <div class="rounded-circle iq-card-icon bg-info"><i class="ri-radar-line"></i></div>
                              <div class="text-left ml-3">                                 
                                 <h2 class="mb-0"><span class="counter">690</span></h2>
                                 <h5 class="">Borrower</h5>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between align-items-center">
                           <div class="iq-header-title">
                              <h4 class="card-title mb-0">Daily Sales</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div id="iq-sale-chart"></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between align-items-center">
                           <div class="iq-header-title">
                              <h4 class="card-title mb-0">Summary</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <ul class="list-inline p-0 mb-0">
                              <li>
                                 <div class="iq-details mb-2">
                                    <span class="title">Income</span>
                                    <div class="percentage float-right text-primary">95 <span>%</span></div>
                                    <div class="iq-progress-bar-linear d-inline-block w-100">
                                       <div class="iq-progress-bar iq-bg-primary">
                                          <span class="bg-primary" data-percent="90"></span>
                                       </div>
                                    </div>
                                 </div>                                       
                              </li>
                              <li>
                                 <div class="iq-details mb-2">
                                    <span class="title">Profit</span>
                                    <div class="percentage float-right text-warning">72 <span>%</span></div>
                                    <div class="iq-progress-bar-linear d-inline-block w-100">
                                       <div class="iq-progress-bar iq-bg-warning">
                                          <span class="bg-warning" data-percent="75"></span>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                <div class="iq-details mb-2">
                                    <span class="title">Expenses</span>
                                    <div class="percentage float-right text-info">75 <span>%</span></div>
                                    <div class="iq-progress-bar-linear d-inline-block w-100">
                                       <div class="iq-progress-bar iq-bg-info">
                                          <span class="bg-info" data-percent="65"></span>
                                       </div>
                                    </div>
                                 </div> 
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                           <div class="iq-card-body">
                              <h4 class="text-uppercase text-black mb-0">Session(Now)</h4>
                              <div class="d-flex justify-content-between align-items-center">
                                 <div class="font-size-80 text-black">12</div>
                                 <div class="text-left">
                                    <p class="m-0 text-uppercase font-size-12">1 Hours Ago</p>
                                    <div class="mb-1 text-black">1500<span class="text-danger"><i class="ri-arrow-down-s-fill"></i>3.25%</span></div>
                                    <p class="m-0 text-uppercase font-size-12">1 Day Ago</p>
                                    <div class="mb-1 text-black">1890<span class="text-success"><i class="ri-arrow-down-s-fill"></i>1.00%</span></div>
                                    <p class="m-0 text-uppercase font-size-12">1 Week Ago</p>
                                    <div class="text-black">1260<span class="text-danger"><i class="ri-arrow-down-s-fill"></i>9.87%</span></div>
                                 </div>
                              </div>
                              <div id="wave-chart-7"></div>
                           </div>
                        </div>
                  </div>
               </div>
            </div>
         </div>
      </div>



 <?php 
   include('template/footer.php');

 ?>