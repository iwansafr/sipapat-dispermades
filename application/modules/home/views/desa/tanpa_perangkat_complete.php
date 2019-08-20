<?php defined('BASEPATH') OR exit('No direct script access allowed');

if(!empty($desa_tanpa_perangkat))
{
	$kelompok_id = ['1'=>'perangkat desa', '2'=>'bpd','3'=>'lpmd','4'=>'pkk','5'=>'karang taruna','6'=>'rt','7'=>'rw','8'=>'kpmd','9'=>'linmas'];
	$kelompok_min = ['1'=>5, '2'=>5,'3'=>5,'4'=>5,'5'=>5,'6'=>3,'7'=>2,'8'=>1,'9'=>5];
	$title = ['uncomplete'=>'Data Kosong','kurang'=>'Data kurang','complete'=>'Data Cukup'];
	$data = [];
	foreach ($desa_tanpa_perangkat as $key => $value) 
	{
		foreach ($value as $vkey => $vvalue)
		{
			foreach ($vvalue['data'] as $dkey => $dvalue)
			{
				$data[$dvalue['nama']]['desa'] = $dvalue['nama'];
				$data[$dvalue['nama']][$kelompok_id[$vkey]] = $dvalue['total'];
			}
		}
	}
	?>
	<table class="table table-hovered table-striped">
		<tr>
			<td>No</td>
			<td>Desa</td>
			<?php foreach ($kelompok_id as $key => $value): ?>
				<td><?php echo $value ?></td>
			<?php endforeach ?>
		</tr>
		<?php
		$i = 1;
		foreach ($data as $key => $value) 
		{
			?>
			<tr>
				<td><?php echo $i ?></td>
				<td><?php echo $value['desa'] ?></td>
				<?php foreach ($kelompok_id as $dkey => $dvalue): ?>
					<td><?php echo $value[$dvalue] ?></td>
				<?php endforeach ?>
			</tr>
			<?php
			$i++;
		}
		?>
	</table>
	<?php
}
