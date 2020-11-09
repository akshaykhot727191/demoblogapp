
       
            
            <div id="layoutSidenav_content">
                <main>
                    <div class="row">
						<div class="col-sm-9">			
													</div>
						<div class="col-sm-3">
							<a href="<?php echo base_url().'index.php/postcontroller/addpost'; ?> " class="btn btn-info" role="button">Add Post</a>
						</div>
					</div><br>
					<div class="container">
						<div class="table-responsive">  
						<table id="stu_data" class="table table-striped table-bordered">  
							<thead>
							  <tr>
								<th>Index</th>
								<th>Title</th>
								<th>Category</th>
								<th>Photo</th>
								<th>Action</th>
							  </tr>
							</thead>
							<?php  $i=1; 
							foreach($list as $value){?>
							  <tr>
								<td><?=$i?></td>
								<?php $r=$value->postid?>
								<td><?=$value->title;?></td>
								<td><?=$value->category;?></td>
								<?php $R=$value->image;?>
								<td><img src="<?php echo base_url(); ?>assets/photo/<?=$R?>" width="100" height="100"></td>
								
								
								<td>
									  
									  <a href="<?php echo base_url('index.php/postcontroller/deletepost/'.$r);?>" onclick="return confirm('Sure to delete?');">Delete</a>
									  / <a  href="<?php echo base_url('index.php/postcontroller/select/'.$r);?>">Update Post</a>
									  / <a  href="<?php echo base_url('index.php/postcontroller/view/'.$r);?>">View Post</a>
									
								</td>
							  </tr>  
							 <?php 
							 $i++;
							 }?>
					    </div>
					</div>
 
                </main>
       
