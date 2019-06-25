<?php defined('BASEPATH') OR exit('No direct script access allowed');

if(!empty($home['perangkat_slider']))
{
  ?>
  <div id="perangkat_slider" class="carousel slide" data-ride="carousel" style="font-size: 12px;">
    <ol class="carousel-indicators">
      <?php
      $i = 0;
      foreach ($home['perangkat_slider'] as $key => $value)
      {
        echo '<li data-target="#perangkat_slider" data-slide-to="'.$i.'" ></li>';
        $i++;
      }
      ?>
    </ol>
    <div class="carousel-inner">
      <?php
      $i = 1;
      foreach ($home['perangkat_slider'] as $key => $value)
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
								PROFIL <?php echo $data['nama']; ?>
							</div>
							<div class="panel-body card-body">
								<div class="row">
									<div class="col-md-3 col-xs-5 pt-3" style="padding: 0;">
										<img src="<?php echo $data['foto'];?>" alt="" style="width: 100%;object-fit: cover; height: 200px;" class="img-responsive image-thumbnail image">
									</div>
									<div class="col-md-4 col-xs-7 pt-3" style="padding: 0;">
										<table class="table table-sm table-responsive <?php echo $class ?>">
											<tr>
												<td>NIK</td>
												<td>:</td>
												<td><?php echo strtoupper($data['nik']); ?></td>
											</tr>
											<tr>
												<td>Nama</td>
												<td>:</td>
												<td><?php echo strtoupper($data['nama']); ?></td>
											</tr>
											<tr>
												<td>Tempat Lahir</td>
												<td>:</td>
												<td><?php echo strtoupper($data['tempat_lahir']); ?></td>
											</tr>
											<tr>
												<td>Tgl Lahir</td>
												<td>:</td>
												<td><?php echo strtoupper($data['tgl_lahir']); ?></td>
											</tr>
											<tr>
												<td>Jenis Kelamin</td>
												<td>:</td>
												<td><?php echo strtoupper($data['kelamin']); ?></td>
											</tr>
											<tr>
												<td>Agama</td>
												<td>:</td>
												<td><?php echo strtoupper($data['agama']); ?></td>
											</tr>
											<tr>
												<td>Status Perkawinan</td>
												<td>:</td>
												<td><?php echo strtoupper($data['status_perkawinan']); ?></td>
											</tr>
										</table>
									</div>
									<div class="col-md-4 pt-3" style="padding: 0;">
										<table class="table table-sm table-responsive <?php echo $class ?>">
											<tr>
												<td>Pendidikan Terakhir</td>
												<td>:</td>
												<td><?php echo $data['pendidikan_terakhir'] ?></td>
											</tr>
											<?php 
											if(!empty($data['jabatan']))
											{
												?>
												<tr>
													<td>Jabatan</td>
													<td>:</td>
													<td><?php echo $data['jabatan']; ?></td>
												</tr>
												<?php
											}
											?>
											<tr>
												<td>Tgl Pelantikan</td>
												<td>:</td>
												<td><?php echo strtoupper($data['tgl_pelantikan']); ?></td>
											</tr>
											<tr>
												<td>Pelantik</td>
												<td>:</td>
												<td><?php echo strtoupper($data['pelantik']); ?></td>
											</tr>
											<tr>
												<td><?php echo strtoupper('gaji'); ?></td>
												<td>:</td>
												<td><?php echo strtoupper($data['penghasilan']); ?></td>
											</tr>
										</table>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-6 pt-3" style="padding: 0;">
										<?php 
										$riwayat_pendidikan = $data['riwayat_pendidikan'];
										if (!empty($riwayat_pendidikan))
										{
											$riwayat_pendidikan = explode("\n", $riwayat_pendidikan);
											?>
											<h3>Riwayat Pendidikan</h3>
											<table class="table table-sm table-responsive <?php echo $class ?>">
												<tr>
													<th>No</th>
													<th>Jenjang</th>
												</tr>
												<?php 
												$i = 1;
												foreach ($riwayat_pendidikan as $key => $value) 
												{
													?>
													<tr>
														<td><?php echo strtoupper($i); ?></td>
														<td><?php echo strtoupper($value); ?></td>
													</tr>
													<?php
													$i++;
												}
												?>
												
											</table>
											<?php
										}
										?>
									</div>
									<div class="col-xs-6 pt-3" style="padding: 0;">
										<?php 
										$riwayat_diklat = $data['riwayat_diklat'];
										if (!empty($riwayat_diklat))
										{
											$riwayat_diklat = explode("\n", $riwayat_diklat);
											?>
											<h3>Riwayat Diklat</h3>
											<table class="table table-sm table-responsive <?php echo $class ?>">
												<thead>
													<tr>
														<th>No</th>
														<th>Diklat</th>
													</tr>
												</thead>
												<tbody>
													<?php 
													$i = 1;
													foreach ($riwayat_diklat as $key => $value) 
													{
														?>
														<tr>
															<td><?php echo strtoupper($i); ?></td>
															<td><?php echo strtoupper($value); ?></td>
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
							<div class="panel-footer card-footer">
								
							</div>
						</div>
						<?php
					}
					?>
          <div class="carousel-caption">
            <a href="<?php echo $data['desa']['website'] ?>" class="white"><h4>DESA <?php echo $data['desa']['nama'] ?></h4></a>
            <p class="sm-title white d-none d-md-block">PERANGKAT <?php echo $data['nama'] ?> | <?php echo content_date($data['created']) ?> | <?php echo @$category['title'] ?></p>
          </div>
        </div>
        <?php
        $i++;
      }
      ?>
    </div>
    <a class="carousel-control-prev" href="#perangkat_slider" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#perangkat_slider" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <?php
}