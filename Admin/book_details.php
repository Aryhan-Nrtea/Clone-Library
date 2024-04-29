<?php 
    include('template/header.php');

    // Function to generate QR codes
function generateQRCode($data, $page) {
    // Include the library
    include 'phpqrcode/qrlib.php';

    // QR code data (you can customize this data)
    $text = "Page $page: $data";

    // QR code filename (e.g., page1.png, page2.png, etc.)
    $filename = "page$page.png";

    // Generate the QR code
    QRcode::png($text, $filename);
}
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
                              <span class="text-primary text-uppercase">Library Management System</span>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="navbar-breadcrumb">
                     <h5 class="mb-0">Library</h5>
                     <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index-2.html">Book</a></li>
                           <li class="breadcrumb-item active" aria-current="page">Book details</li>
                        </ul>
                     </nav>
                  </div>
                   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                  <i class="ri-menu-3-line"></i>
                  </button>
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
                  <div class="col-sm-12">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between align-items-center">
                           <h4 class="card-title mb-0">Books Details</h4>
                        </div>
                           <?php 
                           			if(isset($_GET["id"])){
									    $id = $_GET['id'];
									    $sql_query="SELECT *FROM tbl_bookdetails where bk_id = $id ";
									    $result=mysqli_query($conn,$sql_query);
									    $row = mysqli_fetch_assoc($result) 
						     
						         ?>
                        <div class="iq-card-body pb-0">
                           <div class="description-contens align-items-top row">
                              <div class="col-md-6">
                                 <div class="iq-card-transparent iq-card-block iq-card-stretch iq-card-height">
                                    <div class="iq-card-body p-0">
                                       <div class="row align-items-center">
                                          <div class="col-9">
                                             <ul id="description-slider" class="list-inline p-0 m-0  d-flex align-items-center">
                                                <li>
                                                   <img src="<?php echo $row["bk_image"];?>" class="img-fluid w-100 rounded" alt="">
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="iq-card-transparent iq-card-block iq-card-stretch iq-card-height">
                                    <div class="iq-card-body p-0">
                                       <h3 class="mb-3"><?php echo $row["bk_title"]; ?></h3>
                                        <div class="text-primary mb-0">Author/s: <span class="text-body"><?php echo $row["bk_authors"]; ?></span></div>
                                       <div class="price d-flex align-items-center font-weight-500 mb-2">
                                          <span class="font-size-20 pr-2">ISBN:</span>
                                          <span class="font-size-24 text-dark"><?php echo $row["bk_isbn"]; ?></span>
                                       </div>
                                       <span class="text-dark mb-4 pb-4 iq-border-bottom d-block"><?php echo $row["bk_description"]; ?></span>
                                       <div class="text-primary mb-0">Edition: <span class="text-body"><?php echo $row["bk_edition"]; ?></span></div>
                                       <div class="text-primary mb-0">Publisher: <span class="text-body"><?php echo $row["bk_publisher"]; ?></span></div>
                                       <div class="text-primary mb-0">Copyright: <span class="text-body"><?php echo $row["bk_copyRight"]; ?></span></div>
                                       <div class="text-primary mb-0">Number of Copies: <span class="text-body"><?php echo $row["bk_numCopies"]; ?></span></div>
                                       <div class="mb-4 d-flex align-items-center">                                       
                                          <a href="#" class="btn btn-primary view-more mr-2">Generate Qrcodes</a>
                                          <a href="#" class="btn btn-primary view-more mr-2">View QrCodes</a>
                                          <a href="book_list.php" class="btn btn-primary view-more mr-2">Back to Books</a>
                                       </div>
                                       
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="iq-card-body pb-0">
    <div class="description-contens align-items-top row">
        <!-- ... Existing code ... -->
        <div class="mb-4 d-flex align-items-center">
            <?php
            // Assuming $row["bk_numPages"] is the number of pages for the book
            for ($page = 1; $page <= $row["bk_numPages"]; $page++) {
                generateQRCode($row["bk_title"], $page);
                echo '<img src="page' . $page . '.png" alt="QR Code for Page ' . $page . '">';
            }
            ?>
        </div>
    </div>
</div>

                         <?php 
                              }?>
                          
                     </div>
                  </div>
                </div>
             </div>
         </div>

  <?php 
   include('template/footer.php');
 ?> 