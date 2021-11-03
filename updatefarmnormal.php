<div class="row">
                    <div class="col-xl-12 col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Update Farm</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="updatefarmaction.php" method="post">
                                        <div class="row">
                                        <div class="col-sm-3">
                                                <input type="number" name="weekNo" class="form-control" placeholder="Week No." style="border: 1px solid blue;">
                                            </div>
                                            <div class="col-sm-3 mt-2 mt-sm-0">
                                                <input type="text" name="size" class="form-control" placeholder="SIZE ON ARRIVAL" style="border: 1px solid blue;">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="number" name="fishNo" class="form-control" placeholder="NO. OF FISHES" style="border: 1px solid blue;">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" name="month" class="form-control" placeholder="Month" style="border: 1px solid blue;">
                                            </div>
                                            
                                        </div> <br>
                                        <div class="row">
                                       
                                            <div class="col-sm-3">
                                                <input type="text" name="day" class="form-control" placeholder="Day of The Week" style="border: 1px solid blue;">
                                            </div>
                                            <div class="col-sm-3 mt-2 mt-sm-0">
                                                <input type="text" name="feedSource" class="form-control" placeholder="SOURCE OF FEED" style="border: 1px solid blue;">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" name="breed" class="form-control" placeholder="BREED" style="border: 1px solid blue;">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" name="year" class="form-control" placeholder="Year" style="border: 1px solid blue;">
                                            </div>
                                           
                                        </div><br>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <input type="date" name="date" class="form-control" placeholder="DATE" style="border: 1px solid blue;">
                                            </div>
                                            <div class="col-sm-3 mt-2 mt-sm-0">
                                                <input type="text" name="mortality" class="form-control" placeholder="MORTALITY" style="border: 1px solid blue;">
                                            </div>
                                            <div class="col-sm-3 mt-2 mt-sm-0">
                                                <input type="hidden" name="farmNo" value="<?php echo$farmno; ?>" class="form-control" placeholder="Farm No." style="border: 1px solid blue;">
                                            </div>
                                            <div class="col-sm-3 mt-2 mt-sm-0">
                                                <input type="text" name="fishSource" class="form-control" placeholder="SOURCE OF FISH" style="border: 1px solid blue;">
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <input type="text" name="drug" class="form-control" placeholder="DRUGS/VACCINE USED" style="border: 1px solid blue;">
                                            </div>
                                            <div class="col-sm-4 mt-2 mt-sm-0">
                                                <input type="text" name="feedCuns" class="form-control" placeholder="FEED CONSUMPTION" style="border: 1px solid blue;">
                                            </div>
                                            <div class="col-sm-4 mt-2 mt-sm-0">
                                                <input type="text" name="cost" class="form-control" placeholder="COST" style="border: 1px solid blue;">
                                            </div>
                                        </div><br>
                                        <textarea class="form-control" name="text" rows="4" id="comment" placeholder="Operation/Managers Remark" style="border: 1px solid blue;"></textarea><br>
                                        <center><input type="submit" name="upload" placeholder="submit" style="width: 130px; height: 45px; background:white; border: 1px solid blue; color: blue; border-radius:30px 30px 30px 30px;" id="toastr-success-top-full-width"></center>
                                    </form>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>