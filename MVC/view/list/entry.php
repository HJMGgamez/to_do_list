<h2><?= $entry["list_name"]?></h2>
	<table id="myTable">
		<thead>
			<tr>
				<th onclick="sortTable(0);" >wat</th>
				<th onclick="sortTable(1);" >status</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		<tbody>
<?php
foreach ($lists as $list) {
	?>
	
		
			<tr>
				<td><?= $list["text"] ?></td>
				<td><?= $list["status"] ?></td>
				<td class="center"><a href="<?= URL ?>list/editEntryPage/<?= $list["entry_id"] ?>">edit</a></td>
				<td class="center"><a href="<?= URL ?>list/deleteEntry/<?= $list["entry_id"] ?>/<?= $list["list_id"] ?>">delete</a></td>
			</tr>
		
<?php } ?>
		</tbody>
	</table>
<a href="<?= URL ?>list/createEntryPage/<?= $list["list_id"] ?>">+create a new entry</a><br>
<a href="<?= URL ?>list/index">home</a>