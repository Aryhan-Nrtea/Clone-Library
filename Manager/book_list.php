<?php 
    include('template/header.php');
?>

<script>
$(document).ready(function(){
   $('#search').keyup(function(){
      var query = $(this).val();
         $.ajax({
            url: 'search.php',
            method: 'POST',
            data: {query:query},
            success: function(data){
               $('#search-results').html(data);
            }
         });
   });
});
</script>
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
                           <li class="breadcrumb-item"><a href="index-2.html">Library</a></li>
                           <li class="breadcrumb-item active" aria-current="page">Book</li>
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
         <!-- TOP Nav Bar END -->
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                 
                  <div class="col-lg-12">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between align-items-center position-relative">
                           <div class="iq-header-title">
                              <h4 class="card-title mb-0">Browse Books</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                           <input type="search" class="form-control form-control-md" id="search" placeholder="Search by title, author, or category" style="width:250px;">  
                           </div>
                           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal">
                                   Add New books
                              </button>
                        </div> 
                        <div class="iq-card-body">  
                           <div class="row" id="search-results">
                              <?php
                                     $fetchQuery = "SELECT *  FROM tbl_bookdetails";
                                    $result = $conn->query($fetchQuery);
                                    // $sql = "SELECT * FROM uploads";
                                    //       $result = $conn->query($sql);

                                          if ($result->num_rows > 0) {
                                            // Output data of each row
                                            while($row = $result->fetch_assoc()) {

                               ?>
                              <div class="col-sm-6 col-md-4 col-lg-3">
                                 <div class="iq-card iq-card-block iq-card-stretch iq-card-height browse-bookcontent">
                                    <div class="iq-card-body p-0">
                                       <div class="d-flex align-items-center">
                                          <div class="col-6 p-0 position-relative image-overlap-shadow">
                                             <a href="javascript:void();"><img class="img-fluid rounded w-90" src="<?php echo $row["bk_image"] ;?>" alt=""></a>
                                             <div class="view-book">
                                                <a href="book_details.php?id=<?php echo $row['bk_id'] ?>"  class="btn btn-sm btn-white">View</a>
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="mb-2">
                                             <h6 class="mb-1"><a href="#" data-toggle="tooltip" title="<?php echo $row["bk_title"]; ?>"><?php echo $row["bk_title"]; ?></a></h6>
                                                <p class="font-size-13 line-height mb-0"><?php echo $row["bk_authors"]; ?></p>
                                                <p class="font-size-13 line-height mb-0"><?php echo $row["bk_category"]; ?></p>
                                                
                                             </div>
                                             <div class="mb-3"><br>
                                                <p class="font-size-13 line-height mb-0"></p>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              
                           <?php
                           }
                           } else {
                              echo "
                                       <p class='font-size-15 line-height'>NO Data Found!</p>
                                 ";
                           }
                            ?>
                           
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Wrapper END -->
<?php

// Establish database connection

// Handle file upload
if(isset($_POST["upload"])) {

  $target_dir = "../Uploads/";
  $image_file = basename($_FILES["imageToUpload"]["name"]);
  $target_image_file = $target_dir . $image_file;
  $uploadOk = 1;

  // Check if file already exists
  if (file_exists($target_image_file)) {
    echo "<script> 
              Swal.fire('Warning', 'File already exists', 'warning')
              .then(function() 
              { window.location = 'book_list.php'; });
          </script>";
    $uploadOk = 0;
  }

  // Check file formats
  $imageFileType = strtolower(pathinfo($target_image_file, PATHINFO_EXTENSION));
  if($imageFileType != "jpeg" && $imageFileType != "jpg" && $imageFileType != "png"){
    echo "<script> 
              Swal.fire('Warning', 'Only JPEG, and PNG files are allowed.', 'warning')
              .then(function() 
              { window.location = 'book_list.php'; });
          </script>";
    $uploadOk = 0;
  }

  // Upload file and insert data into database
  if ($uploadOk == 1) {
    if (move_uploaded_file($_FILES["imageToUpload"]["tmp_name"], $target_image_file)) {
      $title = $_POST["title"];
      $authors = $_POST["authors"];
      $description = $_POST["desc"];
      $edition = $_POST["edition"];
      $publisher = $_POST["publisher"];
      $numCopies = $_POST["noCopy"];
      $placePub = $_POST["pop"];
      $datePub = $_POST["dop"];
      $isbn = $_POST["isbn"];
      $copyRight = $_POST["copyright"];
      $pages = $_POST["noPages"];
      $category = $_POST["category"];
      $subCategory = $_POST["subCategory"];
      $image_path = $target_image_file;
      
      $sql = "INSERT INTO tbl_bookdetails (bk_title, bk_authors, bk_description, bk_edition, bk_publisher, bk_numCopies, bk_placePub, bk_isbn, bk_copyRight, bk_pages, bk_category, bk_subCat, bk_image) VALUES ('$title', '$authors', '$description', '$edition', '$publisher', '$numCopies', '$placePub', '$isbn', '$copyRight', '$pages', '$category', '$subCategory', '$image_path')";

      if ($conn->query($sql) === TRUE) {
        echo "<script> 
                 Swal.fire('Success', 'Book successfully added', 'success')
                 .then(function() 
                 { window.location = 'book_list.php'; });
             </script>";
      } else {
        echo " <script> 
                    Swal.fire('Error', 'Error in data', 'error')
                    .then(function() 
                    { window.location = 'book_list.php'; });
                </script>";
      }
    } else {
      echo " <script> 
                 Swal.fire('Error', 'Error in uploading', 'error')
                 .then(function() 
                 { window.location = 'book_list.php'; });
             </script>";
    }
  }
}

// Close database connection
$conn->close();
?>

<!--  modal form  for uplaoding books-->
      <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
           <div class="modal-content">
                 <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New Book Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                 </div>
                 <div class="modal-body">
                   <form method="POST" enctype="multipart/form-data">
                     <div class="form-group">
                        <label for="exampleFormControlFile1">Image File</label>
                        <input type="file" name="imageToUpload" class="form-control-file" id="exampleFormControlFile1">
                     </div>
                     <div class="form-row">
                        <div class="form-group col-md-6">
                           <label >Book Title</label>
                           <input type="text" name="title" class="form-control mb-0" required>
                        </div>
                         <div class="form-group col-md-6">
                           <label >Authors</label>
                           <input type="text" name="authors" class="form-control mb-0" required>
                        </div>
                     </div>
                     <div class="form-row">
                        <div class="form-group col-md-3">
                           <label >Edition</label>
                           <input type="text" name="edition" class="form-control mb-0" required>
                        </div>
                        <div class="form-group col-md-3">
                           <label >Publisher</label>
                           <input type="text" name="publisher" class="form-control mb-0" required>
                        </div>
                        <div class="form-group col-md-3">
                           <label >Place of Publication</label>
                           <input type="text" name="pop" class="form-control mb-0" required>
                        </div>
                        <div class="form-group col-md-3">
                           <label >Date of Publication</label>
                           <input type="date" name="dop" class="form-control mb-0" required>
                        </div>
                     </div>
                     <div class="form-row">
                        <div class="form-group col-md-3">
                           <label >ISBN</label>
                           <input type="text" name="isbn" class="form-control mb-0" required>
                        </div>
                        <div class="form-group col-md-3">
                           <label >Copyright</label>
                           <input type="date" name="copyright" class="form-control mb-0" required>
                        </div>
                        <div class="form-group col-md-3">
                           <label >Number of Pages</label>
                           <input type="number" name="noPages" class="form-control mb-0" required>
                        </div>
                         <div class="form-group col-md-3">
                           <label >Number of Copies</label>
                           <input type="number" name="noCopy" class="form-control mb-0" required>
                        </div>
                     </div>
                     <div class="form-row">
                     <div class="form-group col-md-6">
                        <label >Description</label>
                        <input type="textarea" name="desc" class="form-control mb-0" >
                     </div>
                     <div class="form-group col-md-3">
                        <label >Category</label>
                        <select class="form-control mb-0" required>
                           <option>Select Category</option>
                           <option>English</option>
                           <option>Math</option>
                        </select>
                     </div>
                     <div class="form-group col-md-3">
                        <label >Sub Category</label>
                        <select class="form-control mb-0" required>
                           <option>Select SubCategory</option>
                           <option>Literature</option>
                           <option>Calculus</option>
                        </select>
                     </div>
                  </div>
                   
                 </div>
                 <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <button type="submit" name="upload"  class="btn btn-primary">Save</button>
                      </form>
                 </div>
           </div>
        </div>
      </div>




      <script>
         $(document).ready(function() {
            // AJAX request when category selection changes
            $('#category').on('change', function() {
               var category = $(this).val();
               $.ajax({
                     url: 'fetch_books.php', // PHP file to handle the AJAX request
                     method: 'POST',
                     data: { category: category }, // Send selected category to the server
                     success: function(response) {
                        $('#book-list').html(response); // Display fetched book data
                     }
               });
            });
         });
      </script>
  <?php 
   include('template/footer.php');
 ?>   