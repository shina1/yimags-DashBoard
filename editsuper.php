<div class="col-sm-6">
                        <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Add To Stock</h4>
                                    </div>
                                        
                                    <div class="card-body">                                
                                        <div class="basic-form">
                                            <form action="addstock.php" method="post">    
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label>Number Of Bags </label>
                                                        <input type="number" name="bagno" class="form-control" placeholder="Number to Add" style="border: 1px solid blue;" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Current Price/Unit</label>
                                                        <input type="Number" name="unitsllPrice" class="form-control" placeholder="e.g #1,000" style="border: 1px solid blue;" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Total Price</label>
                                                        <input type="number" name="totsellprice" class="form-control" placeholder="Total Price." style="border: 1px solid blue;" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Date Of Entry</label>
                                                        <input type="date" name="date" class="form-control" placeholder="MM/DD/YY" style="border: 1px solid blue;" required>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <input type="hidden" name="store_id" class="form-control" value="<?php echo $streID; ?>"  style="border: 1px solid blue;">
                                                    </div>
                                                </div>
                                                <button type="submit" name="update" class="btn btn-primary">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        </div>
                </div>
                
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
                                                    <th data-breakpoints="xs">Purchase Price/Unit</th>
                                                    <!-- <th data-breakpoints="xs sm">Update</th> -->
                                                    <th data-breakpoints="xs sm md" data-title="Date of Transaction">Date of Transaction</th>
                                                    <th data-breakpoints="xs">Selling Price/Unit</th>
                                                    <th data-breakpoints="xs">Selling Price/Total</th>
                                                    <th data-breakpoints="xs sm">Number Of Bags Sold</th>
                                                    <th data-breakpoints="xs">Profit</th>
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
                                                    <td data-title="Price" data-breakpoints="xs"><?php echo $row['unitcost']; ?></td>
                                                    <!-- <td data-title="Number Sold" data-breakpoints="xs sm">20</td> -->
                                                    <td data-title="Date of transaction" data-breakpoints="xs sm md"><?php echo $row['date']; ?></td>
                                                    <td data-title="Selling Price" data-breakpoints="xs"><?php echo $row['unitsellPrice']; ?></td>
                                                    <td data-title="Selling Price" data-breakpoints="xs"><?php echo $row['totsellprice']; ?></td>
                                                    <td data-title="Number available" data-breakpoints="xs sm"><?php echo $row['noBagSold'];?></td>
                                                    <td data-title="profit" data-breakpoints="xs sm md"><?php echo $row['profit']; ?></td>
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