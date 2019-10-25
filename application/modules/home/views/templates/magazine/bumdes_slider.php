<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<?php if (!empty($home['bumdes_slider'])): ?>
	<div class="fslider flex-thumb-grid grid-6" data-animation="fade" data-arrows="true" data-thumbs="true">
		<div class="flexslider">
			<div class="slider-wrap">
				<?php 
				foreach ($home['bumdes_slider'] as $key => $value): ?>
					<?php $data = $value;?>
					<div class="slide" data-thumb="<?php echo image_module() ?>">
						<a href="#">
							<?php
		        	if(!empty($data))
							{
								?>
								<div class="panel panel-default card card-default">
									<div class="panel-heading card-header">
										Detail Bumdes <?php echo $data['nama'] ?>
									</div>
									<div class="panel-body card-body">
										<div class="row">
											<div class="col-md-12 pt-3" style="padding-left: 0;padding-right: 0;">
												<table class="table table-striped table-sm table-hover">
													<tr>
														<td>Item</td>
														<td>:</td>
														<td><?php echo $data['nama'] ?></td>
													</tr>
													<tr>
														<td>tgl berdiri</td>
														<td>:</td>
														<td><?php echo $data['tgl_berdiri'] ?></td>
													</tr>
													<tr>
														<td>no perdes</td>
														<td>:</td>
														<td><?php echo $data['no_perdes'] ?></td>
													</tr>
													<tr>
														<td>no perkades</td>
														<td>:</td>
														<td><?php echo $data['no_perkades'] ?></td>
													</tr>
													<tr>
														<td>no badan hukum</td>
														<td>:</td>
														<td><?php echo $data['no_bdn_hkm'] ?></td>
													</tr>
													<tr>
														<td>alamat</td>
														<td>:</td>
														<td><?php echo $data['alamat'] ?></td>
													</tr>
												</table>
											</div>
										</div>
									</div>
									<div class="panel-footer card-footer" style="text-align: right;">
										<a style="font-size: 9px;" href="https://www.dinsua.co.id">dinusa</a>
									</div>
								</div>
								<?php
							}?>
							<div class="overlay">
								<div class="text-overlay">
									<div class="text-overlay-title">
										<a href="#"><h3><?php echo $data['nama'] ?></h3></a>
									</div>
									<div class="text-overlay-meta">
										<span><?php echo @$data['desa']['nama'] ?></span>
									</div>
								</div>
							</div>
						</a>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
<?php endif ?>