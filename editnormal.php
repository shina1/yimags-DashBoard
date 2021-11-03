
                
                <div class="row">
                    <div class="col-xl-12 col-xxl-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Store Table</h4>
                                    </div>
                                    <div class="card-body">
                                        <table id="example" class="display" style="min-width: 845px">
                                        <?php
                                        $result = "SELECT * FROM `store_profile` where `strid` = $streID";
                                        $query = mysqli_query($conn,$result);
                                      
                                      // now i session the informations from that table to this page.
                                        
                                        ?>
                                            <thead>
                                                <tr>
                                                    <th data-breakpoints="xs">Str No.</th>
                                                    <th>Brand Name</th>
                                                    <!-- <th>Total Number In Store</th> -->
                                                    <!-- <th data-breakpoints="xs">Purchase Price/Unit</th> -->
                                                    <!-- <th data-breakpoints="xs sm">Update</th> -->
                                                    <th data-breakpoints="xs sm md" data-title="Date of Transaction">Date of Transaction</th>
                                                    <th data-breakpoints="xs">Selling Price/Unit</th>
                                                    <th data-breakpoints="xs">Selling Price/Total</th>
                                                    <th data-breakpoints="xs sm">Number Of Bags Sold</th>
                                                    <!-- <th data-breakpoints="xs">Profit</th> -->
                                                    <th data-breakpoints="xs sm">Seller's Name</th>
                                                    <th data-breakpoints="xs">Customer's Name</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            while($row = mysqli_fetch_assoc($query))
                                            {
                                            ?>
                                            <tbody data-expanded="true">
                                                <tr>
                                                    <td data-title="ID" data-breakpoints="xs"><?php echo $strNum; ?></td>
                                                    <td><?php echo $prodNm; ?></td>
                                                    <!-- <td>100</td> -->
                                                    <!-- <td data-title="Number Sold" data-breakpoints="xs sm">20</td> -->
                                                    <td data-title="Date of transaction" data-breakpoints="xs sm md"><?php echo $row['date']; ?></td>
                                                    <td data-title="Selling Price" data-breakpoints="xs"><?php echo $row['unitsellPrice']; ?></td>
                                                    <td data-title="Selling Price" data-breakpoints="xs"><?php echo $row['totsellprice']; ?></td>
                                                    <td data-title="Number available" data-breakpoints="xs sm"><?php echo $row['noBagSold'];?></td>
                                                    <td data-title="Seller Name" data-breakpoints="xs sm"><?php echo $row['sellerName']; ?></td>
                                                    <td data-title="Buyer Name" data-breakpoints="xs sm md"><?php echo $row['buyerName']; ?></td>
                                                </tr>
                                                
                                            <?php
                                        }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>