function saveNewTheme(obj){
	var themeName = $(obj).text();
	$.get("backend/ConfigAccess.php",{ 
		functionName: "saveNewTheme", 
		themeName: themeName 
	},function(reply){
	    location.reload();
	});
}