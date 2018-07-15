<?php
include '../ctrl/lowongan.php';

$idbos = $bos->saya($bos->sesi(), "idbos");

$lowSaya = $lowongan->my($idbos);
if($lowSaya == "null") {
	echo "Anda tidak memiliki lowongan. <a href='./add'>buat lowongan</a> baru";
}else {
	?>
	<table>
		<thead>
			<tr>
				<th>Job Title</th>
				<th>Category</th>
				<th>Salary</th>
				<th style="width: 15%;"></th>
			</tr>
		</thead>
		<tbody>
		<?php
		foreach ($lowSaya as $row) {
			echo "<tr>".
					"<td>".$row['title']."</td>".
					"<td>".$row['category']."</td>".
					"<td>".$row['salary']."</td>".
					"<td>".
						"<button class='merah' onclick='hapus(this.value)' value='".$row['idlowongan']."[[pisah]]".$row['title']."'><i class='fa fa-trash'></i></button>".
					"</td>".
				 "</tr>";
		}
		?>
		</tbody>
	</table>
	<?php
}