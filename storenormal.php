<div class="row">
                    <div class="col-xl-12 col-xxl-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                <?php 
                                $result = "SELECT * FROM `store` ORDER BY id DESC";
                                $query = mysqli_query($conn,$result);
                                ?>
                                    <div class="card-header">
                                        <h4 class="card-title">Store Table</h4>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-striped" id="footable">
                                            <thead>
                                                <tr>
                                                    <th data-breakpoints="xs">Str No.</th>
                                                    <th>Product ID</th>
                                                    <th>Brand Name</th>
                                                    <!--<th>Quantity</th>-->
                                                     <th data-breakpoints="xs sm md" data-title="Date of Transaction">Date of Transaction</th>
                                                     <th data-breakpoints="xs sm">Intital No In Store</th>
                                                    <th data-breakpoints="xs">No. Available In Store</th>
                                                    <th data-breakpoints="xs sm">Stocked By</th>
                                                    <th data-breakpoints="xs sm">Update</th>
                                                   
                                                </tr>
                                            </thead>
                                <?php 
                                while($row = mysqli_fetch_assoc($query)){

                                ?>
                                            <tbody data-expanded="true">
                                                <tr>
                                                    <td data-title="ID" data-breakpoints="xs"><?php echo $row['strNo']; ?></td>
                                                    <td data-title="strID" data-breakpoints="xs"><?Php echo $row['store_Id'];?> </td>
                                                    <td><?php echo $row['productName']; ?></td>
                                                
                                                     <td data-title="Date of transaction" data-breakpoints="xs sm md"><?php echo $row['date'];?></td>
                                                    <td data-title="profit" data-breakpoints="xs sm md"><?php echo $row['noExist']; ?></td> 
                                                    <td data-title="profit" data-breakpoints="xs sm md"><?php echo $row['totalinstore']; ?></td>
                                                    <td data-title="Seller Name" data-breakpoints="xs sm"><?php echo $row['stocker']; ?></td>
                                                    <td data-title="Number Sold" data-breakpoints="xs sm"><button type="button" class="btn btn-success mb-2  ml-2" ><a href="editstore.php?id=<?php echo $row['id']; ?>">View More</a> </button></td>
                                                   
                                                </tr>
                                            </tbody>
                                            <?php 
                                        
                                    }
                                                ?>
                                        </table>
                             
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>