<?php 
    include('template/header.php');
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
                     <h5 class="mb-0">User</h5>
                     <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.php">User</a></li>
                           <li class="breadcrumb-item active" aria-current="page">Employee List</li>
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
                  <div class="iq-card">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Employee List</h4>
                        </div>
                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal">
                                   Import
                        </button>
                     </div>
                     <div class="iq-card-body">
                        <div class="table-responsive">
                           <div class="row justify-content-between">
                              <div class="col-sm-12 col-md-6">
                                 <div id="user_list_datatable_info" class="dataTables_filter">
                                    <form class="mr-3 position-relative">
                                       <div class="form-group mb-0">
                                          <input type="search" class="form-control" id="exampleInputSearch" placeholder="Search" aria-controls="user-list-table">
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                           <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
                             <thead>
                                 <tr>
                                    <th>Profile</th>
                                    <th>Name</th>
                                    <th>Contact</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <tr>
                                    <td class="text-center"><img class="rounded img-fluid avatar-40" src="images/user/01.jpg" alt="profile"></td>
                                    <td>Anna Sthesia</td>
                                    <td>(760) 756 7568</td>
                                    <td>annasthesia@gmail.com</td>
                                    <td><span class="badge iq-bg-primary">Active</span></td>
                                    <td>
                                       <div class="flex align-items-center list-user-action">
                                          <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add" href="#"><i class="ri-user-add-line"></i></a>
                                          <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-pencil-line"></i></a>
                                          <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="text-center"><img class="rounded img-fluid avatar-40" src="images/user/02.jpg" alt="profile"></td>
                                    <td>Brock Lee</td>
                                    <td>+62 5689 458 658</td>
                                    <td>brocklee@gmail.com</td>
                                    <td><span class="badge iq-bg-primary">Active</span></td>
                                    <td>
                                       <div class="flex align-items-center list-user-action">
                                          <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add" href="#"><i class="ri-user-add-line"></i></a>
                                          <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-pencil-line"></i></a>
                                          <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="text-center"><img class="rounded img-fluid avatar-40" src="images/user/03.jpg" alt="profile"></td>
                                    <td>Dan Druff</td>
                                    <td>+55 6523 456 856</td>
                                    <td>dandruff@gmail.com</td>
                                    <td><span class="badge iq-bg-warning">Pending</span></td>
                                    <td>
                                       <div class="flex align-items-center list-user-action">
                                          <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add" href="#"><i class="ri-user-add-line"></i></a>
                                          <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-pencil-line"></i></a>
                                          <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="text-center"><img class="rounded img-fluid avatar-40" src="images/user/04.jpg" alt="profile"></td>
                                    <td>Hans Olo</td>
                                    <td>+91 2586 253 125</td>
                                    <td>hansolo@gmail.com</td>
                                    <td><span class="badge iq-bg-danger">Inactive</span></td>
                                    <td>
                                       <div class="flex align-items-center list-user-action">
                                          <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add" href="#"><i class="ri-user-add-line"></i></a>
                                          <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-pencil-line"></i></a>
                                          <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="text-center"><img class="rounded img-fluid avatar-40" src="images/user/05.jpg" alt="profile"></td>
                                    <td>Lynn Guini</td>
                                    <td>+27 2563 456 589</td>
                                    <td>lynnguini@gmail.com</td>
                                    <td><span class="badge iq-bg-primary">Active</span></td>
                                    <td>
                                       <div class="flex align-items-center list-user-action">
                                          <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add" href="#"><i class="ri-user-add-line"></i></a>
                                          <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-pencil-line"></i></a>
                                          <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="text-center"><img class="rounded img-fluid avatar-40" src="images/user/06.jpg" alt="profile"></td>
                                    <td>Eric Shun</td>
                                    <td>+55 25685 256 589</td>
                                    <td>ericshun@gmail.com</td>
                                    <td><span class="badge iq-bg-warning">Pending</span></td>
                                    <td>
                                       <div class="flex align-items-center list-user-action">
                                          <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add" href="#"><i class="ri-user-add-line"></i></a>
                                          <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-pencil-line"></i></a>
                                          <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="text-center"><img class="rounded img-fluid avatar-40" src="images/user/07.jpg" alt="profile"></td>
                                    <td>aaronottix</td>
                                    <td>(760) 765 2658</td>
                                    <td>budwiser@ymail.com</td>
                                    <td><span class="badge iq-bg-info">Hold</span></td>
                                    <td>
                                       <div class="flex align-items-center list-user-action">
                                          <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add" href="#"><i class="ri-user-add-line"></i></a>
                                          <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-pencil-line"></i></a>
                                          <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="text-center"><img class="rounded img-fluid avatar-40" src="images/user/08.jpg" alt="profile"></td>
                                    <td>Marge Arita</td>
                                    <td>+27 5625 456 589</td>
                                    <td>margearita@gmail.com</td>
                                    <td><span class="badge iq-bg-success">Complite</span></td>
                                    <td>
                                       <div class="flex align-items-center list-user-action">
                                          <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add" href="#"><i class="ri-user-add-line"></i></a>
                                          <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-pencil-line"></i></a>
                                          <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="text-center"><img class="rounded img-fluid avatar-40" src="images/user/09.jpg" alt="profile"></td>
                                    <td>Bill Dabear</td>
                                    <td>+55 2563 456 589</td>
                                    <td>billdabear@gmail.com</td>
                                    <td><span class="badge iq-bg-primary">active</span></td>
                                    <td>
                                       <div class="flex align-items-center list-user-action">
                                          <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add" href="#"><i class="ri-user-add-line"></i></a>
                                          <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-pencil-line"></i></a>
                                          <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                       </div>
                                    </td>
                                 </tr>
                             </tbody>
                           </table>
                        </div>
                           <div class="row justify-content-between mt-3">
                              <div id="user-list-page-info" class="col-md-6">
                                 <span>Showing 1 to 5 of 5 entries</span>
                              </div>
                              <div class="col-md-6">
                                 <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-end mb-0">
                                       <li class="page-item disabled">
                                          <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                       </li>
                                       <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                       <li class="page-item"><a class="page-link" href="#">2</a></li>
                                       <li class="page-item"><a class="page-link" href="#">3</a></li>
                                       <li class="page-item">
                                          <a class="page-link" href="#">Next</a>
                                       </li>
                                    </ul>
                                 </nav>
                              </div>
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