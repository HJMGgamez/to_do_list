<h2>List</h2>
	<table id="myTable">
		<thead>
			<tr>
				<th onclick="sortTable(0);" >list</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		<tbody>
<?php
foreach ($lists as $list) {
	?>
	
		
			<tr>
				<td><a href="<?= URL ?>list/entrys/<?= $list["list_id"] ?>"><?= $list["list_name"] ?></a></td>
				<td class="center"><a href="<?= URL ?>list/editListPage/<?= $list["list_id"] ?>">edit</a></td>
				<td class="center"><a href="<?= URL ?>list/deleteList/<?= $list["list_id"] ?>">delete</a></td>
			</tr>
		
<?php } ?>
		</tbody>
	</table>
<a href="<?= URL ?>list/createListPage">+create a new list</a>