<h1>Email Address</h1>
<table>
<tr>
	<th>User Id</th>
	<th>Phone Number</th>
</tr>

<?php foreach ($emails as $email): ?>
<tr>
	<td><?php echo $email['Email']['user_id']; ?></td>
	<td><?php echo $email['Email']['email']; ?></td>
</tr>
<?php endforeach; ?>
<?php unset($emails); ?>
</table>