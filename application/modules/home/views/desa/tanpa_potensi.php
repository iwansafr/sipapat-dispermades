<?php defined('BASEPATH') OR exit('No direct script access allowed');

if(!empty($desa_tanpa_potensi))
{
	foreach ($desa_tanpa_potensi as $key => $value) 
	{
		echo $key =='complete' ? '<h2>Desa Sudah Mengisi Potensi ('.count($value).' Desa)</h2>' : '<h2>Desa Belum Mengisi Potensi ('.count($value).' Desa)</h2>' ;
		$status = $key =='complete' ? 'success' : 'danger' ;
		foreach($value AS $vkey => $vvalue)
		{
			echo '<span class="badge badge-'.$status.'">'.$vvalue['nama'].' ('.$vvalue['total'].')</span>';
		}
	}
}