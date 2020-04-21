<?php defined('BASEPATH') OR exit('No direct script access allowed');

if(!empty($home['potensi_slider']))
{
  ?>
  <div id="potensi_slider" class="carousel slide" data-ride="carousel" style="font-size: 12px;">
    <ol class="carousel-indicators">
      <?php
      $i = 0;
      foreach ($home['potensi_slider'] as $key => $value)
      {
        echo '<li data-target="#potensi_slider" data-slide-to="'.$i.'" ></li>';
        $i++;
      }
      ?>
    </ol>
    <div class="carousel-inner">
      <?php
      $i = 1;
      foreach ($home['potensi_slider'] as $key => $value)
      {
        $class = ($i == 1) ? 'active' : '';
        ?>
        <div class="carousel-item <?php echo $class ?>">
        	<?php
        	$data = $value;
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
								<a style="font-size: 9px;" href="https://www.mandesa.co.id">mandesa</a>
							</div>
						</div>
						<?php
					}
					?>
          <div class="carousel-caption">
            <a href="<?php echo $value['desa']['website'] ?>" class="white"><h4>DESA <?php echo $value['desa']['nama'] ?></h4></a>
            <p class="sm-title white d-none d-md-block">POTENSI <?php echo $value['item'] ?> | <?php echo content_date($value['created']) ?> | <?php echo @$category['title'] ?></p>
          </div>
        </div>
        <?php
        $i++;
      }
      ?>

    </div>
    <a class="carousel-control-prev" href="#potensi_slider" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#potensi_slider" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <?php
}