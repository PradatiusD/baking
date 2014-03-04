
<h1>Phone Numbers</h1>
<table>
<tr>
	<th>User Id</th>
	<th>First Name</th>
</tr>

<?php foreach ($phone_numbers as $phone): ?>
<tr>
	<td><?php echo $phone['PhoneNumber']['user_id']; ?></td>
	<td><?php echo $phone['PhoneNumber']['phone']; ?></td>
</tr>
<?php endforeach; ?>
<?php unset($phone_numbers); ?>
</table>