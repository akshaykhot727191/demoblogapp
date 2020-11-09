<div id="layoutSidenav_content">
 <main>

<div class="container">
  <h2>Update Post</h2>
   <?php foreach($query->result() as $value){
    
	
	  ?>
 <form action="<?php echo base_url().'index.php/postcontroller/update';?>" method="POST">
    
	<input type="hidden" class="form-control" id="txttitle" placeholder="Title" name="txtid" value="<?=$value->postid;?>" required>
    <div class="form-group">
      <label for="pwd">Title:</label>
      <input type="text" class="form-control" id="txttitle" placeholder="Title" name="txttitle" value="<?=$value->title;?>" required>
    </div>
    <div class="form-group">
      <label for="uname">Category:</label>
      <input type="text" class="form-control" id="txtcategory" placeholder="Title" name="category" value="<?=$value->category;?>" readonly>
    </div>
    <div class="form-group">
      <label for="uname">image:</label>
      <input type="file" class="form-control" id="img" placeholder="Post Image" name="img" value="<?=$value->image;?>" required>
    </div>
    <div class="form-group">
      <label for="uname">Description:</label>
      <textarea class="form-control" id="txtdes" placeholder="Description of Post" name="txtdes" rows="4" required><?=$value->dese;?></textarea>
    </div>
    

	
    <button type="submit" class="btn btn-primary" name="insert" value="insert">Submit</button>
	<a class="btn btn-primary" href="<?php echo base_url('index.php/postcontroller');?>" >Back</a>
	<?php }?>
  </form>
</div>


</main>
