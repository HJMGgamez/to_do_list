<form action="<?= URL ?>list/createNewEntry/<?= $entry["list_id"] ?>" method='POST'>
 			<input type="hidden" name='idl' value="<?= $entry["list_id"] ?>"><br>
			<p>text</p><input type='text' name='text'><br>
		 	<p>status</p><input type='text' name='status'><br>			
 		<input type="submit" value="Create">
 	</form>