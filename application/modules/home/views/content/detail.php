<?php
if(!empty($content))
{
	ob_start();
	?>
	<div class="row">
		<div class="col-md-12">
			<p>
				<?php
				if(!empty($content['cat']))
				{
					echo 'category : ';
					foreach ($content['cat'] as $tkey => $tvalue) 
					{
						echo '<a href="'.content_cat_link($tvalue['slug']).'"><span class="badge badge-primary">'.$tvalue['slug'].'</span></a>';
						echo ' ';
					}
				}
				?>
			</p>
		</div>
	</div>
	<center>
		<h3><?php echo $content['title'] ?></h3>
		<figure class="figure">
			<?php 
			if(!empty($content['image']) || !empty($content['image_link']))
			{
				?>
				<img class="img-responsive image" src="<?php echo image_module('content', $content)?>" style="max-width: 100%; height: auto;">
				<figcaption class="figure-caption text-center"><?php echo $content['title'] ?></figcaption>
				<?php 
			}
			$data = $content['images'];
			if(!empty($data))
			{
				$data = json_decode($data);
				$i = 1;
				foreach ($data as $key => $value) 
				{
					$title = 'image for '.$content['title'];
					?>
					<img src="<?php echo image_module('content', 'gallery'.'/'.$content['id'].'/'.$value);?>"  data-toggle="modal" data-target="#img-<?php echo $i;?>" class="img-responsive" style="object-fit: cover;height: 50px;">
					<!-- Modal -->
					<div class="modal fade" id="img-<?php echo $i;?>" tabindex="-1" role="dialog" aria-labelledby="img-<?php echo $i;?>" aria-hidden="true">
					  <div class="modal-dialog modal-lg" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="img-<?php echo $i;?>"><?php echo $title; ?></h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					    		<img src="<?php echo image_module('content', 'gallery'.'/'.$content['id'].'/'.$value);?>" class="img-responsive" style="width:100%;">    
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					      </div>
					    </div>
					  </div>
					</div>								
					<?php
					$i++;
				}
			}
			?>
		</figure>
	</center>
	<?php
	echo $content['content'];
	?>
	<div class="row">
		<div class="col-md-12">
			<p>
				<?php
				if(!empty($content['tag']))
				{
					echo 'tag : ';
					foreach ($content['tag'] as $tkey => $tvalue) 
					{
						echo '<a href="'.content_tag_link($tvalue['title']).'"><span class="badge badge-primary">'.$tvalue['title'].'</span></a>';
						echo ' ';
					}
				}
				?>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<p>
				<i class="fa fa-user"></i>
				<span class="font-italic" style="font-family: 'Crete Round', serif;font-size: 14px;">author : <?php echo $content['author']; ?></span>
			</p>
		</div>
		<div class="col-sm-6">
			<p class="pull-right">
				<i class="fa fa-calendar"></i>
				<span class="font-italic" style="font-family: 'Crete Round', serif;font-size: 14px;">created : <?php echo content_date($content['created']); ?></span>
			</p>
		</div>
	</div>
	<?php
	$ob_content = ob_get_contents();
	ob_end_clean();
	echo $ob_content;
	?>

	<div class="row">
		<div class="col-md-6">
		</div>
		<div class="col-md-6 no-left text-right">
			<div class="btn-group">
				<a class="btn btn-light btn-sm" id="icon_pdf" target="_blank" href="<?php echo base_url('home/content/clear_detail/'.$content['slug'].'.html') ?>">
					<i class="fa fa-file-pdf-o" title="Konversi ke pdf"></i>
				</a>
				<a class="btn btn-light btn-sm" id="icon_mail" href="mailto:someone@example.com?subject=<?php echo base_url() ?>&body=<?php echo htmlentities($ob_content) ?>" target="_top">
					<i class="fa fa-envelope" title="tell friend"></i>
				</a>
				<a class="btn btn-light btn-sm" id="icon_print" target="_blank" href="<?php echo base_url('home/content/clear_detail/'.$content['slug'].'.html') ?>">
					<i class="fa fa-print" title="Print Preview"></i>
				</a>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>	
	<br>
	<?php
}