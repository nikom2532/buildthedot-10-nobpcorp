function item_del_confirm(rootpath,id) {
	var r = confirm("Do you want to comfirm to delete! ?");
	if (r == true) {
		window.location = rootpath+"assets/html/delete_process.php?id="+id;
	} else {
		// alert("You pressed Cancel!");
	}
}