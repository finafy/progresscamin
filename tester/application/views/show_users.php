<!DOCTYPE html>
<html>
<head>
	<title>CI CRUD</title>

	<script type="text/javascript">

	function show_confirm(act,gotoid)

	{

		if(act=="edit")

			var r=confirm("Do you really want to edit?");

		else

			var r=confirm("Do you really want to delete?");

		if (r==true)

		{

			window.location="<?php echo base_url();?>index.php/users/"+act+"/"+gotoid;

		}

	}

</script>


</head>
<body>

<h2> Simple CI CRUD Application </h2>

<table width="600" border="1" cellpadding="5">
	
	<tr>
		<th scope="col">NRP</th>
		<th scope="col">User Name</th>
		<th scope="col">Email</th>
		<th scope="col">Status</th>
		
	</tr>

	<?php foreach ($user_list as $u_key){ ?>

	<tr>
		<td><?php echo $u_key->A_NRP; ?></td>
		<td><?php echo $u_key->A_NAMA; ?></td>
		<td><?php echo $u_key->A_EMAIL; ?></td>
		<td><?php echo $u_key->A_STATUS; ?></td>

		<td width="40" align="left" ><a href="#" onClick="show_confirm('edit',<?php echo $u_key->A_NRP;?>)">Edit</a></td>

		<td width="40" align="left" ><a href="#" onClick="show_confirm('delete',<?php echo $u_key->A_NRP;?>)">Delete </a></td>

	</tr>

	<?php }?>

	<tr>

		<td colspan="7" align="right"> <a href="<?php echo base_url();?>index.php/users/add_form">Insert New User</a></td>

	</tr>


</table>

</body>
</html>