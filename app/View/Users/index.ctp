<h1>Users</h1>
<table>
<tr>
	<th>Id</th>
	<th>First Name</th>
	<th>Last Name</th>
</tr>

<?php foreach ($users as $user): ?>
<tr>
	<td><?php echo $user['User']['id']; ?></td>
	<td><?php echo $user['User']['first_name']; ?></td>
	<td><?php echo $user['User']['last_name']; ?></td>
</tr>
<?php endforeach; ?>
<?php unset($users); ?>
</table>