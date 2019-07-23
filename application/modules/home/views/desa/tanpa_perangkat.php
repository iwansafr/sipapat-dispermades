<?php defined('BASEPATH') OR exit('No direct script access allowed');

if(!empty($desa_tanpa_perangkat))
{
	echo '<h5>DESA YANG DATA PERANGKAT KURANG DARI 5 ('.@intval($desa_tanpa_perangkat['uncomplete']['total']).')</h5>';
	foreach ($desa_tanpa_perangkat['uncomplete']['data'] as $key => $value) 
	{
		?>
		<span class="badge badge-danger"><?php echo $value['nama'] ?></span>
		<?php
	}
	echo '<hr>';
	echo '<h5>DESA YANG SUDAH MENGISI DATA PERANGKAT LEBIH DARI 5 ('.@intval($desa_tanpa_perangkat['complete']['total']).')</h5>';
	foreach ($desa_tanpa_perangkat['complete']['data'] as $key => $value) 
	{
		?>
		<span class="badge badge-success"><?php echo $value['nama'] ?></span>
		<?php
	}
}