<?php defined('BASEPATH') OR exit('No direct script access allowed');
if(!empty($home['pembangunan_slider']))
{
  ?>
  <div id="pembangunan_slider" class="carousel slide" data-ride="carousel" style="font-size: 12px;">
    <ol class="carousel-indicators">
      <?php
      $i = 0;
      foreach ($home['pembangunan_slider'] as $key => $value)
      {
        echo '<li data-target="#pembangunan_slider" data-slide-to="'.$i.'" ></li>';
        $i++;
      }
      ?>
    </ol>
    <div class="carousel-inner">
      <?php
      $i = 1;
      foreach ($home['pembangunan_slider'] as $key => $value)
      {
        $class = ($i == 1) ? 'active' : '';
        ?>
        <div class="carousel-item <?php echo $class ?>">
        	<?php
        	$data = $value;
					if(!empty($data))
					{
						?>
						<div class="panel panel-default card card-default">
							<div class="panel-heading card-header">
								Detail Pembangunan <?php echo $data['item'] ?>
							</div>
							<div class="panel-body card-body">
								<div class="row">
									<div class="col-md-12">
										<?php if ($data['jenis']=='fisik'): ?>
											<?php $gambar = [0,40,50,80,100]; ?>
											<div class="row">
												<?php foreach ($gambar as $gkey => $gvalue): ?>
													<?php if (!empty($data['doc_'.$gvalue])): ?>
														<div class="col-md-4">
															<table class="table table-hover table-striped">
																<thead>
																	<tr>
																		<th>gambar <?php echo $gvalue ?>%</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>
																			<img src="<?php echo $data['doc_'.$gvalue]; ?>" class="img img-responsive" style="object-fit: cover;width: 100%;height:200px;">
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
													<?php endif ?>
												<?php endforeach ?>
											</div>
										<?php else: ?>
											<div class="row">
												<div class="col-md-7">
													<table class="table table-hover table-striped">
														<!-- <thead>
															<tr>
																<th>Dokumentasi</th>
															</tr>
														</thead> -->
														<tbody>
															<tr>
																<td>
																	<img src="<?php echo $data['doc'] ?>" class="img img-responsive" style="object-fit: cover;width: 100%; height: 250px;">
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										<?php endif ?>
										<div class="col-xs-12">
											<table class="table table-striped table-hover table-sm">
												<tbody>
													<tr>
														<td style="width:50%;">Item</td>
														<td style="width:2%;">:</td>
														<td><?php echo $data['item'] ?></td>
													</tr>
													<tr>
														<td style="width=50%;">Jenis</td>
														<td style="width:2%;">:</td>
														<td><?php echo $data['jenis'] ?></td>
													</tr>
													<tr>
														<td style="width=50%;">Bidang</td>
														<td style="width:2%;">:</td>
														<td><?php echo $data['bidang'] ?></td>
													</tr>
													<tr>
														<td style="width=50%;">Sumber Dana</td>
														<td style="width:2%;">:</td>
														<td><?php echo $data['sumber_dana'] ?></td>
													</tr>
													<?php if (!empty($data['sumber_dana_alt'])): ?>
														<tr>
															<td style="width=50%;">Sumber Dana Kedua</td>
															<td style="width:2%;">:</td>
															<td><?php echo $data['sumber_dana_alt'] ?></td>
														</tr>
													<?php endif ?>
													<?php if ($data['jenis'] == 0): ?>
														<?php 
														if(!empty($data['peserta']))
														{
															?>
															<tr>
																<td style="width=50%;">Peserta</td>
																<td style="width:2%;">:</td>
																<td>
																	<?php echo implode(' | ',$data['peserta']) ?>
																</td>
															</tr>
															<tr>
																<td style="width=50%;">Jumlah Peserta</td>
																<td style="width:2%;">:</td>
																<td><?php echo $data['jml_peserta'] ?></td>
															</tr>
															<?php
														}?>
														<tr>
															<td style="width=50%;">Tahap Kegiatan</td>
															<td style="width:2%;">:</td>
															<td><?php echo $data['tahap'] ?></td>
														</tr>
													<?php else: ?>
														<tr>
															<td style="width=50%;">pengerjaan</td>
															<td style="width:2%;">:</td>
															<td><?php echo content_date($data['from_date']) ?> <br>sampai<br> <?php echo content_date($data['to_date']) ?></td>
														</tr>
													<?php endif ?>
													<tr>
														<td style="width=50%;">Th Anggaran</td>
														<td style="width:2%;">:</td>
														<td><?php echo $data['th_anggaran'];?></td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="col-xs-12">
											<?php 
											$volume = $data['vol'];
											if (!empty($volume))
											{
												$volume = explode("\n", $volume);
												?>
												<h3>Volume</h3>
												<table class="table table-striped table-hover table-sm">
													<tbody>
														<?php 
														$i = 1;
														foreach ($volume as $key => $value) 
														{
															$vol_val = explode(':', $value);
															?>
															<tr>
																<?php $j=0; ?>
																<?php foreach ($vol_val as $lvkey => $lvvalue): ?>
																	<td <?php echo empty($j) ? 'style="width:50%;"' : ''; ?>><?php echo $lvvalue ?></td>
																	<?php if ($j==0): ?>
																		<td style="width:2%;">:</td>
																	<?php endif ?>
																	<?php $j++; ?>
																<?php endforeach ?>
															</tr>
															<?php
															$i++;
														}
														?>
													</tbody>
												</table>
												<?php
											}
											?>
										</div>
										<div class="col-xs-12">
											<?php 
											$lokasi = $data['lokasi'];
											if (!empty($lokasi))
											{
												$koordinat = $data['koordinat'];
												$koordinat = explode(",", $koordinat);
												$lokasi .= "\nDesa : ".@$desa['nama']."\nKecamatan : ".@$desa['kecamatan'];
												$lokasi .= "\n".@$koordinat[0]."\n".@$koordinat[1];
												$lokasi = explode("\n", $lokasi);
												?>
												<h3>lokasi</h3>
												<table class="table table-striped table-hover table-sm">
													<tbody>
														<?php 
														$i = 1;
														foreach ($lokasi as $key => $value) 
														{
															$lok_val = explode(':', $value);
															?>
															<tr>
																<?php $j =0; ?>
																<?php foreach ($lok_val as $lvkey => $lvvalue): ?>
																	<td <?php echo empty($j) ? 'style="width:50%;"' : ''; ?>><?php echo $lvvalue ?></td>
																	<?php if ($j==0): ?>
																		<td style="width:2%;">:</td>
																	<?php endif ?>
																	<?php $j++; ?>
																<?php endforeach ?>
															</tr>
															<?php
															$i++;
														}
														?>
													</tbody>
												</table>
												<?php
											}
											?>
										</div>
									</div>
								</div>
							</div>
							<div class="panel-footer card-footer" style="text-align: right;">
								<a style="font-size: 9px;" href="https://www.dinsua.co.id">dinusa</a>
							</div>
						</div>
						<?php
					}
					?>
          <div class="carousel-caption">
            <a href="<?php echo $data['desa']['website'] ?>" class="white"><h4>DESA <?php echo $data['desa']['nama'] ?></h4></a>
            <p class="sm-title white d-none d-md-block">PERANGKAT <?php echo @$data['nama'] ?> | <?php echo content_date($data['created']) ?> | <?php echo @$category['title'] ?></p>
          </div>
        </div>
        <?php
        $i++;
      }
      ?>
    </div>
    <a class="carousel-control-prev" href="#pembangunan_slider" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#pembangunan_slider" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <?php
}