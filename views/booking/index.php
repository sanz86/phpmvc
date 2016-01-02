<?php include 'views/head.php';?>


    <!-- About -->
    <section id="booking" class="about">
    <!-- Modal -->
		<div class="modal fade" id="mybookingIdModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-body">
		       <form name ="bookingid" class="form-horizontal" method="post" action="">
                    <fieldset>
                        
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="book" name="book" type="text" placeholder="Enter Booking Id" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
		      </div>
		    </div>
		  </div>
		</div>
		
		
<script>
$("#bookingid").submit(function() {
	alert(1);
  var action = $("#book").val();
  $("#bookingid").attr("action", "<?php echo URL; ?>booking/id/" +action );
});
</script>
		

    <br />
        <div class="container">
            <div class="row">
                <div class="col-lg-2 text-center">
                    <a  data-toggle="modal" data-target="#mybookingIdModal">By Booking Id</a> 
                   <?php 
                Session::init();
                if(Session::get('loggedIn')) {
                	?>
                	
                	
                      | <a href="<?php echo URL; ?>booking/all">All</a> | 

                        <a href="<?php echo URL; ?>booking/cancelled">Cancelled</a> 
                   </div>
                	
              <?php } ?>
                    
                </div>
            </div>
                <!-- /.row -->

            <div class="row">
            
            
                    <div class="col-lg-12">
                         <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <h3>Booking Details</h3>
                                    </div>

                                </div>
                            </div>   
                            <div class="clearfix"></div>                     

                            <div class="col-lg-12">
                            <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Booking Id</th>
                                        <th>Name</th>
                                        <th>Contacts</th>
                                        <th>Source</th>
                                        <th>Destination</th>
                                        <th>Date and Time</th>
                                        <th>#Person</th>
                                        <th>Message</th>
                                        <th>Cancel</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php if(isset($this->booking)) {
                                
                                	foreach($this->booking as $book) {?>
                                    <tr>
                                    
                                         <td><?php echo $book->booking_id; ?></td>
                                        <td><?php echo $book->name; ?></td>
                                        <td>
	                                        Email: <?php echo $book->email; ?> <br />
	                                        Phone No: <?php echo $book->phone_number; ?>
                                        </td>
                                        <td><?php echo $book->source_point; ?></td>
                                        <td><?php echo $book->destination_point; ?></td>
                                        <td>
	                                        Date: <?php echo $book->date_of_travel; ?> <br />
	                                        Time: <?php echo $book->time_of_travel; ?>
                                        </td>
                                        <td>
	                                        Adult: <?php echo $book->number_of_adult_passenger; ?> <br />
	                                        Children: <?php echo $book->number_of_child_passenger; ?>
                                        </td>
                                        <td><?php echo $book->message; ?></td>
                                        <td>
                                        <?php if(isset($this->cancel)) {
                                        if($this->cancel){?>
                                        <a href="#">Cancel</a>
                                        <?php }} else {?>
                                        <a href="<?php echo URL; ?>booking/cancel/<?php echo $book->booking_id; ?>">Cancel</a>
                                        <?php } ?>
                                        </td>
                                    </tr>
                                    <?php }}?>
                                  
                                </tbody>
                            </table>
                            </div>
                        </div>
                            <div class="clearfix"></div>
                           
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
           
        </div>
        <!-- /.container -->

    

    <!-- Services -->
     
        
        <!-- Button trigger modal -->


    </section>
    

    <?php include 'views/foot.php';?>