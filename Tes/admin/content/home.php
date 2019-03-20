<?php 
include '../koneksi/koneksi.php';



	#tampilan/pilih semua data dari table user urutkan berdasarkan dari terbesar ke terkecil
$query 	= mysqli_query($koneksi, "SELECT region_id, name,id,jlh, SUM(IF( region_id = m_regions.name ,jlh , 0)) AS jml_2016 FROM m_person LEFT JOIN m_regions USING(id) GROUP BY region_id");

	#print_r($row);die;

?>


<div class="card">
	<div class="card-header">
		<h2>Rata-Rata Income Setiap Provinsi</h2>
	</div>
	<div class="card-body">
		
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>ID</th>
					<th>Nama </th>
					<th>Jumlah Penduduk</th>
					<th>Total Pendapatan</th>
					<th>Rata-rata Pendapatan</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
				<tr>
						<?php $no=1;   while($row = mysqli_fetch_assoc($query)){ ?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $row['id'] ?></td>
						<td><?php echo $row['name'] ?></td>
						<td><?php echo $row['jml_2016'] ?></td>
									
						
						
					</tr>
				<?php } ?>
				</tr>
			</tbody>
		</table>
	</div>
	
</div>