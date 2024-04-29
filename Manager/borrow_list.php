<?php 
   include('template/header.php');


 ?>


         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Borrow List</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal">
                                    Borrowers Form
                              </button>&nbsp;

                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="table-responsive">
                                <!-- Search inputs -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="text" id="searchByName" placeholder="Search by Borrower Name" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" id="searchByDate" placeholder="Search by Date Borrowed" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <select id="searchByStatus" class="form-control">
                                            <option value="">Search by Status</option>
                                            <option value="Not Return">Not Return</option>
                                            <option value="Returned">Returned</option>
                                        </select>
                                    </div>
                                </div>
                                <br/>
                              <table class="data-tables table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                       <th width="5%">#</th>
                                        <th width="30%">Borrowers Name</th>
                                        <th width="10%">Date Borrowed</th>
                                        <th width="10%">Status</th>
                                        <th width="20%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 
                                    <tr>
                                       <td>1</td>
                                        <td>Lhage Kang Gahlit</td>
                                        <td>Sept,20,2023</td>
                                        <td>Not Return</td>
                                         <td>
                                            <button type="button" class="btn btn-sm btn-warning">Print</button>
                                            <button type="button" class="btn btn-sm btn-primary">update</button>
                                            <button type="button" class="btn btn-sm btn-info">View</button>
                                        </td>
                                    </tr>
                                    <tr>
                                       <td>2</td>
                                        <td>Wharai Musters</td>
                                        <td>july,13,2023</td>
                                        <td>Not Return</td>
                                         <td>
                                            <button type="button" class="btn btn-sm btn-warning">Print</button>
                                            <button type="button" class="btn btn-sm btn-primary">update</button>
                                            <button type="button" class="btn btn-sm btn-info">View</button>
                                        </td>
                                    </tr>
                                     <tr>
                                       <td>3</td>
                                        <td>Dhughnute Hundlykapstoness</td>
                                        <td>june,13,2023</td>
                                        <td>Not Return</td>
                                         <td>
                                            <button type="button" class="btn btn-sm btn-warning">Print</button>
                                            <button type="button" class="btn btn-sm btn-primary">update</button>
                                            <button type="button" class="btn btn-sm btn-info">View</button>
                                        </td>
                                    </tr> 
                                     <tr>
                                       <td>3</td>
                                        <td>Dhughnute Hundlykapstoness</td>
                                        <td>june,13,2023</td>
                                        <td>Not Return</td>
                                         <td>
                                            <button type="button" class="btn btn-sm btn-warning">Print</button>
                                            <button type="button" class="btn btn-sm btn-primary">update</button>
                                            <button type="button" class="btn btn-sm btn-info">View</button>
                                        </td>
                                    </tr> 
                                     <tr>
                                       <td>3</td>
                                        <td>Dhughnute Hundlykapstoness</td>
                                        <td>june,13,2023</td>
                                        <td>Not Return</td>
                                         <td>
                                            <button type="button" class="btn btn-sm btn-warning">Print</button>
                                            <button type="button" class="btn btn-sm btn-primary">update</button>
                                            <button type="button" class="btn btn-sm btn-info">View</button>
                                        </td>
                                    </tr>                                       
                                </tbody>
                            </table>
                               <!-- Pagination -->
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <ul id="pagination" class="pagination justify-content-center"></ul>
                                    </div>
                                </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
       
    <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
           <div class="modal-content">
                 <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Borrowers Form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                 </div>
                 <div class="modal-body">
                   <form method="POST">
                    <label for="colFormLabelSm">Borrowers Name</label>
                    <input class=" form-control form-control-sm" type="text" id="user"  name="bname" required>
                    <label for="colFormLabelSm">Date</label>
                    <input class=" form-control form-control-sm" type="text" id="pass"  name="bdate" required>
                    <label for="colFormLabelSm">Book details</label>
                    <input class=" form-control form-control-sm" type="password" id="pass"  name="bdetails" required>
                    
                 </div>
                 <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <button type="submit"  class="btn btn-primary">Submit</button>
                      </form>
                 </div>
           </div>
        </div>
      </div>
     
      <!-- Wrapper END -->
       <script>
        // Your existing table and data initialization code here

        // Get the input elements for search
        const searchByNameInput = document.getElementById("searchByName");
        const searchByDateInput = document.getElementById("searchByDate");
        const searchByStatusSelect = document.getElementById("searchByStatus");

        // Get the table body and pagination element
        const tableBody = document.querySelector("tbody");
        const pagination = document.getElementById("pagination");

        // Add event listeners to the search inputs and select
        searchByNameInput.addEventListener("input", performSearch);
        searchByDateInput.addEventListener("input", performSearch);
        searchByStatusSelect.addEventListener("change", performSearch);

        // Function to filter and update the table based on search parameters
        function performSearch() {
            const nameQuery = searchByNameInput.value.toLowerCase();
            const dateQuery = searchByDateInput.value.toLowerCase();
            const statusQuery = searchByStatusSelect.value.toLowerCase();

            const filteredData = data.filter(row => {
                const nameMatch = row[1].toLowerCase().includes(nameQuery);
                const dateMatch = row[2].toLowerCase().includes(dateQuery);
                const statusMatch = row[3].toLowerCase().includes(statusQuery);

                return nameMatch && dateMatch && statusMatch;
            });

            displayTable(filteredData);
        }

        // Pagination functionality
        function displayTable(data) {
            // Clear the current table
            tableBody.innerHTML = "";

            // Pagination settings
            const itemsPerPage = 5;
            const totalPages = Math.ceil(data.length / itemsPerPage);
            let currentPage = 1;

            // Function to display a specific page
            function displayPage(pageNumber) {
                const start = (pageNumber - 1) * itemsPerPage;
                const end = start + itemsPerPage;
                const pageData = data.slice(start, end);

                pageData.forEach(rowData => {
                    const row = document.createElement("tr");
                    rowData.forEach(cellData => {
                        const cell = document.createElement("td");
                        cell.textContent = cellData;
                        row.appendChild(cell);
                    });
                    tableBody.appendChild(row);
                });
            }

            // Initial display
            displayPage(currentPage);

            // Update pagination links
            pagination.innerHTML = "";
            for (let i = 1; i <= totalPages; i++) {
                const pageLink = document.createElement("li");
                pageLink.innerHTML = `<a href="javascript:void(0);" onclick="displayPage(${i})">${i}</a>`;
                pagination.appendChild(pageLink);
            }
        }
    </script>
     
      <!-- Footer -->
     <?php 
   include('template/footer.php');
 ?>  




 
