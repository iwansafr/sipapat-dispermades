<?php defined('BASEPATH') OR exit('No direct script access allowed');

if(!empty($desa_tanpa_perangkat))
{
	$kelompok_id = ['1'=>'perangkat desa', '2'=>'bpd','3'=>'lpmp','4'=>'pkk','5'=>'karang taruna','6'=>'rt','7'=>'rw','8'=>'kpmd','9'=>'linmas'];
	$title = ['uncomplete'=>'Data Kosong','kurang'=>'Data kurang','complete'=>'Data Cukup'];
	foreach ($desa_tanpa_perangkat as $key => $value) 
	{
		echo '<h1>'.$title[$key].'</h1>';
		foreach($value AS $vkey => $vvalue)
		{
			echo '<h2>'.$kelompok_id[$vkey].' ('.$vvalue['total'].' desa)</h2>';
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