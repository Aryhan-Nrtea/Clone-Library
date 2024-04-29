<?php

include("../Assets/Config/config.php");

        // Fetch search query from Ajax
        $query = $_POST['query'];

        // Prepare the SQL query
        if($query !== ""){
      //   $sql = "SELECT 
      //   uploads.id, uploads.file_image, uploads.file_path, uploads.file_name, uploads.author, uploads.category, COUNT(tbl_views_data.book_id) AS view_count 
      //   FROM uploads 
      //   JOIN tbl_views_data  
      //   WHERE uploads.file_name LIKE '%$query%' 
      //   OR uploads.author LIKE '%$query%' 
      //   OR uploads.category LIKE '%$query%'";

     $sql = "SELECT 
            uploads.id, uploads.file_image, uploads.file_path, uploads.file_name, uploads.author, uploads.category, 
            (SELECT COUNT(tbl_views_data.book_id) FROM tbl_views_data WHERE tbl_views_data.book_id = uploads.id) AS view_count 
            FROM uploads 
            WHERE uploads.file_name LIKE '%$query%' 
            OR uploads.author LIKE '%$query%' 
            OR uploads.category LIKE '%$query%'";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // Display search results
        while($row = $result->fetch_assoc()) {

            echo ' <div class="col-sm-6 col-md-4 col-lg-3" > 
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height browse-bookcontent">
            <div class="iq-card-body p-0">
               <div class="d-flex align-items-center">
                  <div class="col-6 p-0 position-relative image-overlap-shadow">
                     <a href="javascript:void();"><img class="img-fluid rounded w-90" src="'. $row["file_image"].'" alt=""></a>
                     <div class="view-book">
                        <a href="book_viewer.php?file='. urlencode($row['file_path']).' && book_id='. $row['id'].'" class="btn btn-sm btn-white">Read Book</a>
                     </div>
                  </div>
                  <div class="col-6">
                     <div class="mb-2">
                        <h6 class="mb-1">'. $row["file_name"].'</h6>
                        <p class="font-size-13 line-height mb-1">'. $row["author"].'</p>
                        <p class="font-size-13 line-height mb-1">'. $row["category"].'</p>
                     </div>
                     <div class="mb-3"><br>
                     <h6 class="mb-1">Views:'. $row["view_count"].'</h6>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> </div>
      </div>';
           
        }
            }else{
                echo "<center>
                            <p class='font-size-15 line-height'>NO Data Found!</p>
                    </center>";
            }
                } else {
        // No results found
        $fetchQuery = "SELECT uploads.id, uploads.file_image, uploads.file_path, uploads.file_name, uploads.category, COUNT(tbl_views_data.book_id) AS view_count 
        FROM uploads 
        LEFT JOIN tbl_views_data ON uploads.id = tbl_views_data.book_id 
        GROUP BY uploads.id";
        $result = $conn->query($fetchQuery);

        if ($result->num_rows > 0) {
        // Display search results
        while($row = $result->fetch_assoc()) {
            echo '<div class="col-sm-6 col-md-4 col-lg-3" ><div class="iq-card iq-card-block iq-card-stretch iq-card-height browse-bookcontent">
            <div class="iq-card-body p-0">
               <div class="d-flex align-items-center">
                  <div class="col-6 p-0 position-relative image-overlap-shadow">
                     <a href="javascript:void();"><img class="img-fluid rounded w-90" src="'. $row["file_image"].'" alt=""></a>
                     <div class="view-book">
                        <a href="book_viewer.php?file='. urlencode($row['file_path']).' && book_id='. $row['id'].'" class="btn btn-sm btn-white">Read Book</a>
                     </div>
                  </div>
                  <div class="col-6">
                     <div class="mb-2">
                        <h6 class="mb-1">'. $row["file_name"].'</h6>
                        <p class="font-size-13 line-height mb-1">'. $row["author"].'</p>
                        <p class="font-size-13 line-height mb-1">'. $row["category"].'</p>
                     </div>
                     <div class="mb-3"><br>
                     <h6 class="mb-1">Views:'. $row["view_count"].'</h6>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> ';
        }
    }
}

?>
