<?php defined('BASEPATH') OR exit('No direct script access allowed');

if(!empty($desa_tanpa_potensi))
{
	$kelompok_id = ['potensi'];
	$kelompok_min = [1];
	$title = ['uncomplete'=>'Data Kosong','kurang'=>'Data kurang','complete'=>'Data Cukup'];
	foreach ($desa_tanpa_potensi as $key => $value) 
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
					foreach ($vvalue['data'] as $dkey => $dvalue) 
					{
						?>
						<span class="badge badge-danger"><?php echo $dvalue['nama'].' ('.$dvalue['total'].')'; ?></span>
						<?php
					}
					break;
				case 'kurang':
					foreach ($vvalue['data'] as $dkey => $dvalue) 
					{
						?>
						<span class="badge badge-warning"><?php echo $dvalue['nama'].' ('.$dvalue['total'].')'; ?></span>
						<?php
					}
					break;
				default:
					foreach ($vvalue['data'] as $dkey => $dvalue) 
					{
						?>
						<span class="badge badge-success"><?php echo $dvalue['nama'].' ('.$dvalue['total'].')'; ?></span>
						<?php
					}
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