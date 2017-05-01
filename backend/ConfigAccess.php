<?php
$configString = file_exists('backend/config.json')?file_get_contents('backend/config.json'):"";
$configList = json_decode($configString, true);
$functionName = isset($_GET['functionName'])?$_GET['functionName']:"";

switch($functionName){
	case "saveNewTheme":
		$themeName = $_GET['themeName'];
		saveNewTheme($themeName);
	break;
}

function getCurrentTheme(){
	global $configList;
	return $configList['theme'];
}
function saveNewTheme($themeName){
	global $configList;
	$configList['theme'] = $themeName;
	$newConfigList = json_encode($configList);
	file_put_contents('config.json', $newConfigList);
}
function getTitleAndTab($page){
    switch ($page){
        case 'index.php':
            return ['Mantis Quick Editor',0];
        break;
        case 'weeklyreport.php':
            return ['Weekly Report',1];
        break;
        case 'monthlyreport.php':
            return ['Monthly Report',2];
        break;
    }
}
function setActiveTab($tabNumber,$tabToCheck){
    return $tabNumber === $tabToCheck?"class='active'":"";
}
function setActiveTheme($themeToCheck){
    $theme = getCurrentTheme();
    $themeNumber = 0;
    switch($theme){
        case "Blue":    $themeNumber = 0; break;
        case "Azure":   $themeNumber = 1; break;
        case "Green":   $themeNumber = 2; break;
        case "Red":     $themeNumber = 3; break;
        case "Orange":  $themeNumber = 4; break;
        case "Purple":  $themeNumber = 5; break;
        case "Gray":    $themeNumber = 6; break;
    }
    return $themeNumber === $themeToCheck?"class='active'":"";
}
?>