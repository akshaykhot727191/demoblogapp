
       
            
            <div id="layoutSidenav_content">
                <main>
                    <div class="row">
						<div class="col-sm-9"> </div>
						<div class="col-sm-3">
							<a href="#" onclick="return confirm('Can Not Use'); " class="btn btn-info" role="button">Add Category</a>
						</div>
					</div><br>
					<div class="container">
						<div class="table-responsive">  
						<table id="stu_data" class="table table-striped table-bordered">  
							<thead>
							  <tr>
								
								<th>Category ID</th>
								<th>Category Name</th>
								<th>Action</th>
							  </tr>
							</thead>
							<?php  $i=1; 
							foreach($list as $value){?>
							  <tr>
								<td><?=$i?></td>
								
								<td><?=$value->cname;?></td>
								<?php $r=$value->id?>
								
								<td>
									  
									  <a href="#" onclick="return confirm('Can Not Use');">Delete</a>
									  / <a  href="<?php echo base_url('index.php/guest/view/'.$r);?>">View Post</a>
									
								</td>
							  </tr>  
							 <?php 
							 $i++;
							 }?>  
							
					    </div>
					</div>
 
                </main>
       
