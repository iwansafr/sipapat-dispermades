<?php defined('BASEPATH') OR exit('No direct script access allowed');

if(!empty($desa_tanpa_perangkat))
{
	$kelompok_id = ['1'=>'perangkat desa', '2'=>'bpd','3'=>'lpmd','4'=>'pkk','5'=>'karang taruna','6'=>'rt','7'=>'rw','8'=>'kpmd','9'=>'linmas'];
	$kelompok_min = ['1'=>5, '2'=>5,'3'=>5,'4'=>5,'5'=>5,'6'=>3,'7'=>2,'8'=>1,'9'=>5];
	$title = ['uncomplete'=>'Data Kosong','kurang'=>'Data kurang','complete'=>'Data Cukup'];
	foreach ($desa_tanpa_perangkat as $key => $value) 
	{
		$title_status = '';
		// echo '<h1>'.$title[$key].' '.$title_status.'</h1>';
		foreach($value AS $vkey => $vvalue)
		{
			if($key == 'kurang'){
				$title_status = 'data kurang dari '.$kelompok_min[$vkey];
			}else if($key == 'complete'){
				$title_status = 'data lebih dari/pas '.@intval($kelompok_min[$vkey]);
			}else{
				$title_status = 'data kosong';
			}
			echo '<h2>'.$kelompok_id[$vkey].' ('.$vvalue['total'].' desa) '.$title_status.'</h2>';
			switch ($key) {
				case 'uncomplete':
					?>
					<table style="font-size: 12px;" class="table table-sm table-hovered table-striped table-danger">
						<tr>
							<td>No</td>
							<td>Desa</td>
							<td>Jumlah</td>
						</tr>
						<?php
						$i = 1;
						foreach ($vvalue['data'] as $dkey => $dvalue) 
						{
							?>
							<tr>
								<td><?php echo $i ?></td>
								<td>
									<?php echo $dvalue['nama'] ?>
								</td>
								<td><?php echo $dvalue['total'] ?></td>
							</tr>
							<?php
							$i++;
						}
						?>
					</table>
					<?php
					break;
				case 'kurang':
					?>
					<table style="font-size: 12px;" class="table table-sm table-hovered table-striped table-warning">
						<tr>
							<td>No</td>
							<td>Desa</td>
							<td>Jumlah</td>
						</tr>
						<?php
						$i = 1;
						foreach ($vvalue['data'] as $dkey => $dvalue) 
						{
							?>
							<tr>
								<td><?php echo $i ?></td>
								<td>
									<?php echo $dvalue['nama'] ?>
								</td>
								<td><?php echo $dvalue['total'] ?></td>
							</tr>
							<?php
							$i++;
						}
						?>
					</table>
					<?php
					break;
				default:
					?>
					<table style="font-size: 12px;" class="table table-sm table-hovered table-striped table-success">
						<tr>
							<td>No</td>
							<td>Desa</td>
							<td>Jumlah</td>
						</tr>
						<?php
						$i = 1;
						foreach ($vvalue['data'] as $dkey => $dvalue) 
						{
							?>
							<tr>
								<td><?php echo $i ?></td>
								<td>
									<?php echo $dvalue['nama'] ?>
								</td>
								<td><?php echo $dvalue['total'] ?></td>
							</tr>
							<?php
							$i++;
						}
						?>
					</table>
					<?php
					break;
			}
			// foreach ($kelompok_id as $kidkey => $kidvalue) 
			// {
			// 	echo '<h1>'.$kidvalue.'</h1>';
			// 	pr($value[$kidkey]);
			// }
		}
	}
}