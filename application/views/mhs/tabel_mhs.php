<?php
echo "<h1>Halaman Mhs</h1>
<table>
<tr>
	<th>NRP</th>
	<th>Nama</th>
	<th>Action</th>
</tr>";
foreach($m as $row){
	$link = anchor(site_url("mahasiswa/show/$row->nrp"),"Detil");
	
	echo "<tr>
	<td>$row->nrp</td>
	<td>$row->nama</td>
	<td>$link
<a href=\"http://localhost:9999/mahasiswa/show/$row->nrp\">Detil</a></td>
</tr>";
	
}
?>
</table>