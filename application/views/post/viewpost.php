
       
            
            <div id="layoutSidenav_content">
                <main>
                   	<div class="container">
						<br>
						<?php foreach($query->result() as $value){
							?>
							<h1><?=$value->title;?></h1><br>
							<?php $R=$value->image;?>
							<img src="<?php echo base_url(); ?>assets/photo/<?=$R?>" width="300" height="200"><br><br>
							<h6><?=$value->dese;?></h6><br>
						<?php }
						?>
					</div>
 
                </main>
       
