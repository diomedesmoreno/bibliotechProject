$(document).ready(function() {
	$('#simpletable-paymentId').DataTable();
	// let oTable = $('#teachers').DataTable({
	// 	"ajax":{
	// 		url : URL.baseUrl()+'teachers/datatable'
	// 	},
	// 	"columns" : [
	// 		{ "data" : "teacherId",  		"sClass": "dt-teacherId",   			"width": "0%",    "defaultContent": "<span class='text-muted'>N/A</span>"},
	// 		{ "data" : "image",         	"sClass": "dt-image",           		"width": "0%",    "defaultContent": "<span class='text-muted'>N/A</span>"},
	// 		{ "data" : "full_name",         "sClass": "dt-full_name",           	"width": "45%",   "defaultContent": "<span class='text-muted'>N/A</span>"},
	// 		{ "data" : "specialty_name",    "sClass": "dt-specialty_name",          "width": "30%",   "defaultContent": "<span class='text-muted'>N/A</span>"},
	// 		{ "data" : "statusId",         	"sClass": "dt-statusId text-center",   	"width": "15%",   "defaultContent": "<span class='text-muted'>N/A</span>"},
	// 		{ "data" : "action",            "sClass": "dt-action text-center",  	"width": "10%",    "defaultContent": "<span class='text-muted'>N/A</span>"},
	// 	],
	// 	"createdRow": function(row, data){
	// 		$('.dt-full_name', row).html(UTIL.imagesName(data));
	// 		$('.dt-statusId', row).html(UTIL.statusName(data));
	// 		$('.dt-action', row).html(options(data));
	// 	}
	// });
});
