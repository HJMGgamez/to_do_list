<?php

function generateList()
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM list";

	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}
function generateListEntry($idl)
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM list_entry WHERE list_id = :idl" ;

	$query = $db->prepare($sql);
    $query->execute(array(
        ":idl" => $idl
    ));

	$db = null;

	return $query->fetchAll();
}
function getlistID($idl)
{
    $db = openDatabaseConnection();

    $sql = "SELECT * FROM `list` WHERE list_id = :idl LIMIT 1";

    $query = $db->prepare($sql);
    $query->execute(array(
        ":idl" => $idl
    ));

    $db = null;

    return $query->fetch();
}
function getEntryID($ide)
{
    $db = openDatabaseConnection();

    $sql = "SELECT * FROM `list_entry` WHERE entry_id = :ide LIMIT 1";

    $query = $db->prepare($sql);
    $query->execute(array(
        ":ide" => $ide
    ));

    $db = null;

    return $query->fetch();
}
function createlist()
{
    $listname = isset($_POST["listname"])? $_POST["listname"] : null;
    if ($listname === null ) {
        return false;
        exit();
    }
    $db = openDatabaseConnection();
    $sql = "INSERT INTO `list` (`list_name`) 
    VALUES (:listname)";
    $query = $db->prepare($sql);
    $query->execute(array(
        ":listname" => $listname,
    ));
    $db = null;
    return true;
}
function createEntry()
{
    $list_id = isset($_POST["idl"])? $_POST["idl"] : null;
    $status = isset($_POST["status"])? $_POST["status"] : null;
    $text = isset($_POST["text"]) ? $_POST["text"] : null;

    $db = openDatabaseConnection();
    $sql = "INSERT INTO `list_entry` (`text`, `list_id`,`status`) 
    VALUES (:text, :list_id, :status)";
    $query = $db->prepare($sql);
    $query->execute(array(
        ":list_id" => $list_id,
        ":text" => $text,
        ":status" => $status
    ));
    $db = null;
    return true;
}
function changeList($idl)
{    
    $listname = isset($_POST["listname"]) ? $_POST["listname"] : null;

    $db = openDatabaseConnection();

    $sql = "UPDATE `list` 
        SET `list_name`= :listname 
        WHERE list_id = :idl";

    $query = $db->prepare($sql);
    $query->execute(array(
        ":listname" => $listname,
        ":idl" => $idl
    ));
    $db = null;
    return true;
}
function changeEntry($ide)
{    
    $text = isset($_POST["text"]) ? $_POST["text"] : null;
    $status = isset($_POST["status"]) ? $_POST["status"] : null;

    if ($text === null || $status === null) {
        return false;
        exit();
    }

    $db = openDatabaseConnection();

    $sql = "UPDATE `list_entry` 
        SET `text`= :text, `status`= :status 
        WHERE entry_id = :ide";

    $query = $db->prepare($sql);
    $query->execute(array(
        ":text" => $text,
        ":status" => $status,
        ":ide" => $ide
    ));
    $db = null;
    return true;
}
function distroyEntry($ide)
{
    if ($ide === '') {
        return false;
    }
    $db = openDatabaseConnection();
    $sql = "DELETE FROM `list_entry` WHERE entry_id = :ide";
    $query = $db->prepare($sql);
    $query->execute(array(
        ":ide" => $ide
    ));
    $db = null;
    return true;
}
function distroyList($idl)
{
    if ($idl === '') {
        return false;
    }
    $db = openDatabaseConnection();
    $sql = "DELETE FROM `list` WHERE list_id = :idl";
    $query = $db->prepare($sql);
    $query->execute(array(
        ":idl" => $idl
    ));
    $db = null;
    return true;
}