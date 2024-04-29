<?php 
   include('template/header.php');
 ?>

<style>
    #pdf-viewer {
      width: 100%;
      height: 100%;
    }
  </style>

  
         <!-- TOP Nav Bar END -->
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-12">
                    <!-- <div>
                    <button id="prev" class="btn btn-sm btn-primary">Previous</button>
                    <button id="next" class="btn btn-sm btn-secondary">Next</button>
                    &nbsp; &nbsp;
                    <span>Page: <span id="page_num"></span> / <span id="page_count"></span></span>
                    </div> -->
						<div class="iq-card book-detail">
							<div class="iq-card-body p-0" id="pdf-viewer">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
      <!-- Wrapper END -->


  
</body>
</html>

     
  <?php 
   include('template/footer.php');
 ?>   