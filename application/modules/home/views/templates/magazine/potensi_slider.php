<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<?php if (!empty($home['potensi_slider'])): ?>
	<div class="fslider flex-thumb-grid grid-6" data-animation="fade" data-arrows="true" data-thumbs="true">
		<div class="flexslider">
			<div class="slider-wrap">
				<?php 
				foreach ($home['potensi_slider'] as $key => $value): ?>
					<?php $data = $value;?>
					<!-- <div class="slide" data-thumb="<?php echo $data['doc'] ?>"> -->
					<div class="slide" data-thumb="">
						<a href="#">
							<?php
		        	if(!empty($data))
							{
								$produk_desa = ['Tidak Ada','Ada'];
								?>
								<div class="panel panel-default card card-default">
									<div class="panel-heading card-header">
										Detail Potensi Desa Item <?php echo $data['item'] ?>
									</div>
									<div class="panel-body card-body">
										<div class="row">
											<div class="col-md-6 pt-3" style="padding-left: 0;padding-right: 0;">
												<table class="table table-striped table-sm table-hover">
													<tr>
														<td>Item</td>
														<td>:</td>
														<td><?php echo $data['item'] ?></td>
													</tr>
													<tr>
														<td>kategori</td>
														<td>:</td>
														<td><?php echo $data['kategori']; ?></td>
													</tr>
													<tr>
														<td>produk desa</td>
														<td>:</td>
														<td><?php echo $data['produk_desa'] ?></td>
													</tr>
													<tr>
														<td>Satuan</td>
														<td>:</td>
														<td><?php echo $data['satuan'] ?></td>
													</tr>
													<tr>
														<td>volume</td>
														<td>:</td>
														<td><?php echo number_format($data['volume'],0,',','.'); ?></td>
													</tr>
													<tr>
														<td>waktu</td>
														<td>:</td>
														<td><?php echo $data['waktu'];?></td>
													</tr>
													<?php if (!empty($data['from_month']) && !empty($data['to_month'])): ?>
														<tr>
															<td>Periode</td>
															<td>:</td>
															<td><?php echo $data['from_month'].' - '.$data['to_month'];?></td>
														</tr>
													<?php endif ?>
												</table>
											</div>
											<div class="col-md-6 pt-3" style="padding-left: 0;padding-right: 0;">
												<div class="col-md-12" style="padding-left: 0;padding-right: 0;">
													<img src="<?php echo $data['doc'] ?>" class="img img-responsive" style="object-fit: cover;width: 100%; height: 200px;">
												</div>
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
										<a href="#"><h3><?php echo $data['item'] ?></h3></a>
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