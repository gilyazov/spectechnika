<?php
function pre($arr){
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
}

function isEditMode()
{
    return !($_SERVER['SCRIPT_NAME'] != '/bitrix/admin/landing_view.php');
}