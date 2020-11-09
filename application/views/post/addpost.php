<div id="layoutSidenav_content">
 <main>

<div class="container">
  <h2>Add Post</h2>
 
 <form action="<?php echo base_url().'index.php/postcontroller/savepost';?>" method="POST">
    
	
    <div class="form-group">
      <label for="pwd">Title:</label>
      <input type="text" class="form-control" id="txttitle" placeholder="Title" name="txttitle" required>
    </div>
    <div class="form-group">
      <label for="uname">Category:</label>
      <input list="category" name="category" class="form-control">
	  <datalist id="category">
	  <?php  
		foreach($list as $value){?>
	  <option value="<?=$value->cname;?>">
      <?php } ?>  
								  
	  </datalist>
    </div>
    <div class="form-group">
      <label for="uname">image:</label>
      <input type="file" class="form-control" id="img" placeholder="Post Image" name="img" required>
    </div>
    <div class="form-group">
      <label for="uname">Description:</label>
      <textarea class="form-control" id="txtdes" placeholder="Description of Post" name="txtdes" rows="4" required></textarea>
    </div>
    

	
    <button type="submit" class="btn btn-primary" name="insert" value="insert">Submit</button>
	<a class="btn btn-primary" href="<?php echo base_url('index.php/postcontroller');?>" >Back</a>
  </form>
</div>


</main>
