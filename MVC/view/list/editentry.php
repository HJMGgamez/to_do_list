<form action="<?= URL ?>list/editEntry/<?= $entry["entry_id"] ?>/<?= $entry["list_id"] ?>" method='POST'>
			<input type="hidden" name='idl' value="<?= $entry["list_id"] ?>"><br>
			<p>text</p><input type='text' name='text' value="<?= $entry["text"] ?>" ><br>
		 	<p>status</p><input type='text' name='status' value="<?= $entry["status"] ?>" ><br>	
 	<input type="submit" value="edit">
</form>