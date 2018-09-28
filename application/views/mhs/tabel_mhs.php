<?php
echo "<h1>Halaman Mhs</h1>
<table>
<tr>
	<th>NRP</th>
	<th>Nama</th>
	<th>Action</th>
</tr>";

foreach($m as $row){
	echo "<tr>
	<td>$row->nrp</td>
	<td>$row->nama</td>
	<td>Detil</td>
</tr>";
	
}

?>
</table>