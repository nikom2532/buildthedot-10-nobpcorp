/*jQuery time*/
$(document).ready(function() {
	$("#accordian h3").click(function() {
		//slide up all the link lists
		$("#accordian ul ul").slideUp();
		//slide down the link list below the h3 clicked - only if its closed
		if (!$(this).next().is(":visible")) {
			$(this).next().slideDown();
		}
	})
})
function item_del_confirm(rootpath, id) {
	var r = confirm("Do you want to comfirm to delete! ?");
	if (r == true) {
		window.location = rootpath + "assets/html/delete_process.php?id=" + id;
	} else {
		// alert("You pressed Cancel!");
	}
}

$(function() {
	
	$("#group1").click(admin_pdf_edit_enable_cb);
	if (!($('input#group1').is(':checked'))) {
		admin_pdf_edit_enable_cb();
	}
	
	
});

function admin_pdf_edit_enable_cb() {
	if (this.checked) {
		$("input.group1").removeAttr("disabled");
	} else {
		$("input.group1").attr("disabled", true);
	}
}