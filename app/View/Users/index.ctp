<!-- File: /app/View/Posts/index.ctp -->

<h1>Users</h1>
<table>
<tr>
	<th>Id</th>
	<th>First Name</th>
	<th>Last Nmae</th>
</tr>

<!-- Here is where we loop through our $posts array, printing out post info -->

<?php foreach ($users as $user): ?>
<tr>
	<td><?php echo $user['User']['id']; ?></td>
	<td><?php echo $user['User']['first_name']; ?></td>
	<td><?php echo $user['User']['last_name']; ?></td>
</tr>
<?php endforeach; ?>
<?php unset($users); ?>
</table>