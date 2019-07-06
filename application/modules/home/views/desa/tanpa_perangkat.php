<?php defined('BASEPATH') OR exit('No direct script access allowed');

if(!empty($home['desa_tanpa_perangkat']))
{
	foreach ($home['desa_tanpa_perangkat'] as $key => $value) 
	{
		?>
		<span class="badge badge-danger"><?php echo $value['nama'] ?></span>
		<?php
	}
}