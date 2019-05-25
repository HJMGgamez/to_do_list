<?php 
require(ROOT . "model/listModel.php");

function index()
{
	$ListInfo = generateList();
	
	render("list/index", array(
		'lists' => $ListInfo)
	);
}
function entrys($id)
{
	$EntryInfo = generateListEntry($id);
	$ListInfo = getlistID($id);
	render("list/entry", array(
		'lists' => $EntryInfo,
		'entry' => $ListInfo)
	);
}
function createListPage()
{
	render("list/create");
}
function createNewList()
{
	if (createlist()) {
		header("location:" . URL . "list/index");
		exit();
	} else {
		//er is iets fout gegaan..
		header("location:" . URL . "error/error_db");
		exit();	
	}
}
function createEntryPage($ide)
{
	$ListInfo = getlistID($ide);

	render("list/createentry" , array(
		'entry' => $ListInfo
	));
}
function createNewEntry($idl)
{
	if (createentry($idl)) {
		header("location:" . URL . "list/entrys/".$idl);
		exit();
	} else {
		//er is iets fout gegaan..
		header("location:" . URL . "error/error_db");
		exit();	
	}
}
function deleteEntry($ide,$idl)
{
	if (distroyEntry($ide)) {
		header("location:" . URL . "list/entrys/".$idl);
		exit();
	} else {
		//er is iets fout gegaan..
		header("location:" . URL . "error/error_delete");
		exit();	
	}
}
function deletelist($idl)
{
	if (distroyList($idl)) {
		header("location:" . URL . "list/index");
		exit();
	} else {
		//er is iets fout gegaan..
		header("location:" . URL . "error/error_delete");
		exit();	
	}
}
function editListPage($idl)
{
	$list = getlistID($idl);
	render("list/edit" , array(
		'list' => $list
	));
}
function editList($idl)
{
	if (changeList($idl)) {
		header("location:" . URL . "list/index");
		exit();
	} else {
		//er is iets fout gegaan..
		header("location:" . URL . "error/error_delete");
		exit();	
	}
}
function editEntryPage($ide)
{
	$entry = getEntryID($ide);
	render("list/editentry" , array(
		'entry' => $entry
	));
}
function editEntry($ide,$idl)
{
	if (changeEntry($ide)) {
		header("location:" . URL . "list/entrys/".$idl);
		exit();
	} else {
		//er is iets fout gegaan..
		header("location:" . URL . "error/error_delete");
		exit();	
	}
}