<form action="<?= URL ?>list/editlist/<?= $list["list_id"] ?>" method='POST'>
<input type="hidden" name='idl' value="<?= $list["list_id"] ?>">
 		<p>list name</p><input type='text' name='listname' value="<?= $list["list_name"]; ?>"><br>
 	<input type="submit" value="edit">
</form>