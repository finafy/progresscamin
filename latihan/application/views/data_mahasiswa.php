<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
</head>
<body>

	<table style="border-collapse: collapse;" border="1">
	 
	 <tbody>
	  <tr style="background: grey;">
	   <td>No. Induk</td>
	   <td>Nama</td>
	   <td>Alamat</td>
	   <td colspan="2"></td>
	  </tr>

	<?php foreach ($data as $mahasiswa) { ?>

	  <tr>
	   <td><?php echo $mahasiswa['no_induk'];?></td>
	   <td><?php echo $mahasiswa['nama'];?></td>
	   <td><?php echo $mahasiswa['alamat'];?></td>
	   <td><a href="<?php echo base_url()."index.php/start/edit_data/".$mahasiswa['no_induk']; ?>">Edit</td>
            <td><a href="<?php echo base_url()."index.php/Start/delete_data/".$mahasiswa['no_induk']; ?>">Delete</td>
	  </tr>

	<?php } ?>

	 </tbody>

	</table>
	<a href="<?php echo base_url()."index.php/Start/add_data";?>">Insert</a>

</body>
</html>

