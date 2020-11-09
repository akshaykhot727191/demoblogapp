<div id="layoutSidenav_content">
 <main>

<div class="container">
  <h2>Add Category</h2>
 
 <form action="<?php echo base_url().'index.php/categorycontroller/savecategory';?>" method="POST">
   
    <div class="form-group">
      <label for="uname">Category Name:</label>
      <input type="text" class="form-control" id="txtcategory" placeholder="Category" name="txtcategory" required>
    </div>
   	
    <button type="submit" class="btn btn-primary" name="insert" value="insert">Submit</button>
	<a class="btn btn-primary" href="<?php echo base_url('index.php/categorycontroller/');?>" >Back</a>
  </form>
</div>


</main>
