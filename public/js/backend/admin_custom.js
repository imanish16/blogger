$('#billingadd').click(function() {
	var checked = $('#billingadd').is(':checked');
	if(checked == true) {
		$('#billingadd').val('1');
	} else {
		$('#billingadd').val('0');
	}
})

// js for table formate changed

$(document).delegate('.tableChanged', 'click', function() {
	
$(".table-striped").each(function() {
        var $this = $(this);
        var newrows = [];
        $this.find("tr").each(function(){
            var i = 0;
            $(this).find("td").each(function(){
                i++;
                if(newrows[i] === undefined) { newrows[i] = $("<tr></tr>"); }
                newrows[i].append($(this));
            });
        });
        $this.find("tr").remove();
        $.each(newrows, function(){
            $this.append(this);
        });
    });
    });
// Email Template View
$('.templateView').click(function() {
      var desc = $(this).attr('data-desc');
      $('#email-template-content').html(desc);
    });
	
//product image show edit form
$('#editProImg').hide();
$('#uploadImg').on('click', function(){
var aa  = document.getElementById("products_image").files.length;
$('#editProImg').show();
$('#products_gallery_img').hide();
})

//product image barcode show edit form
$('#editProBarcode').hide();
$('#uploadBarImg').on('click', function(){
var aa  = document.getElementById("products_image").files.length;
$('#editProBarcode').show();
$('#barCodeImage').hide();
})

function Copy() {
	var urlCheck = $('#agent_url').val();
	if(urlCheck == '') {
		$('#copiedurl').text("URL Not Found.");
	} else {
		var Url = document.getElementById("agent_url");
		Url.select();
		document.execCommand("copy");
		$('#copiedurl').text("URL copied!");
	}
}
// Agent ID generation
$(document).delegate('#fname,#email,#phone', 'keyup', function() {
	var a = Math.floor(100000 + Math.random() * 900000);
	var url = window.location.origin;
	a = String(a);
	a = a.substring(0, 2);
	var fname = $("#fname").val();
	var email = $("#email").val();
	var phone = $("#phone").val();
	var empId = "AG-" + fname.charAt(0) + email.charAt(2) + a;
	var agentUrl = url + '/agent/' + empId;
	$('#agent_url').val(agentUrl);
	$("#agent_id").val(empId);
});

// check store value for Manage Shipping
$('.checkStore').click(function() {
    var checkboxes = $('.checkStore').filter(':checked').length;
    if(checkboxes > 3 ){
		document.getElementById("error_checked").innerHTML = "You Can Select only 3 Store.";
		$('#manageShipping').prop('disabled', true);
    }else {
		$('#manageShipping').prop('disabled', false);
		document.getElementById("error_checked").innerHTML = "";
	}
  })
// check Picked value for Manage Shipping
$('.checkPickup').click(function() {
    var checkPicked = $('.checkPickup').filter(':checked').length;
    if(checkPicked > 3 ){
		document.getElementById("error_checkedPicked").innerHTML = "You Can Select only 3 Pickup.";
		$('#manageShipping').prop('disabled', true);
    }else {
		$('#manageShipping').prop('disabled', false);
		document.getElementById("error_checkedPicked").innerHTML = "";
	}
  })

// Profile Image upload
$(document).delegate('#cityss', 'keyup', function() {
	var city = $("#cityss").val();
	var pattern = /^[a-zA-Z ]*$/;
	if(pattern.test(city) == true) {
		document.getElementById("cityerror").innerHTML = " ";
	} else {
		document.getElementById("cityerror").innerHTML = "Please enter only alphabetical letters.";
	}
});
$(document).delegate('.citysss', 'keyup', function() {
	var city = $(this).val();
	var pattern = /^[a-zA-Z ]*$/;
	if(pattern.test(city) == true) {
		document.getElementById("cityerrorS").innerHTML = " ";
	} else {
		document.getElementById("cityerrorS").innerHTML = "Please enter only alphabetical letters.";
	}
});
$(document).ready(function() {
	$('#table1').DataTable();
});
$(".placeholder").select2({});
$(".roles").select2({
	placeholder: "Select a Roles",
});
$(".tagging").select2({
	tags: true
});
$(document).delegate('.sidebarCollapse', 'click', function() {
	$('.main-container').toggleClass("sidebar-closed");
});

// $('#preview-button').on('click', function(){
// 	$('.cke_button__source').click();
// });

// $('.sendmailCus').on('click', function(){
//    $('.cke_button__source').click();
//    $('#cke_33_label').text('Preview');
// });

//check Multiple loaction for add new product


//Send Mail to Customer 
$('#sendingLoader').hide();
$(document).delegate('#sendCustomMsg', 'click', function() {
	$("#sendingLoader").show();
	$("#sendCustomMsg").hide();
	var emailSend = $('#sendEmail').val();
	var sendSub = $('#sendSub').val();
	var sendMsg = $('#sendMsg').val();
	var csrf_token = $('meta[name="csrf-token"]').attr('content');
	var url = window.location.origin;
	$.ajax({
		"url": url + '/admin/sendEmailToCus',
		"type": "POST",
		"data": {
			emailSend: emailSend,
			_token: csrf_token,
			sendSub: sendSub,
			sendMsg: sendMsg
		},
		success: function(result) {
			$("#sendingLoader").hide();
			$("#sendCustomMsg").show();
			swal({
				title: "Mail Send",
				text: "Email Successfully Sent!!",
				icon: "success",
				buttons: true,
				dangerMode: true,
			}).then((value) => {
				if(value) {
					location.reload();
				} else {}
			});
		},
		error: function(xhr) {
			$.each(xhr.responseJSON.errors, function(key, value) {
				$("#sendingLoader").hide();
				$("#sendCustomMsg").show();
				$('#validation-errors').append('<div class="alert alert-danger">' + value + '</div');
			});
		},
	});
});
// Manage Billing Address			
$(document).delegate('#manageAddress', 'click', function() {
	var csrf_token = $('meta[name="csrf-token"]').attr('content');
	var id = $(this).attr('data-id');
	var userid = $(this).attr('data-userid');
	var url = window.location.origin;
	$.ajax({
		"url": url + '/admin/customer-address',
		"type": "POST",
		"data": {
			id: id,
			_token: csrf_token,
			userid: userid
		},
		success: function(result) {
			$("#adressdetails").html(result);
		},
		error: function(xhr) {
			$.each(xhr.responseJSON.errors, function(key, value) {
				$(".spinner-border ").hide();
				$('#validation-errors').append('<div class="alert alert-danger">' + value + '</div>');
			});
		},
	});
});
$(document).on('change', '#countryadress', function() {
	var counrtyName = $(this).val();
	if(counrtyName == '') {
		document.getElementById("countryerror").innerHTML = "Please Select Country.";
	} else {
		document.getElementById("countryerror").innerHTML = "";
		$("#countryAdd").val(counrtyName);
	}
});

$(document).on('change', '#stateadress', function() {
	var stateId = $(this).val();
	$("#stateAdd").val(stateId);
});
$(document).delegate('#gridChecks', 'change', function() {
	this.value = this.checked ? 1 : 0;
	$("#checkedAdd").val(this.value);
}).change();
$(document).delegate('#storeAddress', 'click', function() {
	var csrf_token = $('meta[name="csrf-token"]').attr('content');
	var countryAdd = $('#countryAdd').val();
	var id = $('#id').val();
	var user_id = $('#user_id').val();
	var stateAdd = $('#stateAdd').val();
	var cityAdd = $('#cityAdd').val();
	var zipAdd = $('#zipAdd').val();
	var fulladdress = $('#fulladdress').val();
	var gridChecks = $('#checkedAdd').val();
	var url = window.location.origin;
	$.ajax({
		"url": url + '/admin/update-customer-address',
		"type": "POST",
		"dataType": 'json',
		"data": {
			_token: csrf_token,
			id: id,
			countryAdd: countryAdd,
			stateAdd: stateAdd,
			cityAdd: cityAdd,
			zipAdd: zipAdd,
			fulladdress: fulladdress,
			gridChecks: gridChecks,
			user_id: user_id,
		},
		success: function(result) {
			if(result.error){
				$('#validation-errors').html('');
				$.each( result.error, function( key, value ) {
				 // alert( key + ": " + value );
				  $('#validation-errors').append('<div class="alert alert-danger">' + value + '</div');
				});
				
			}else{
				swal({
				title: "Address Update",
				text: "Billing Address Successfully Updated!!",
				icon: "success",
				buttons: true,
				dangerMode: true,
			}).then((value) => {
				if(value) {
					location.reload();
				} else {}
			});
			}
		}
	});
});
// Generate a password string
function randString(id) {
	var dataSet = $(id).attr('data-character-set').split(',');
	var possible = '';
	if($.inArray('a-z', dataSet) >= 0) {
		possible += 'abcdefghijklmnopqrstuvwxyz';
	}
	if($.inArray('A-Z', dataSet) >= 0) {
		possible += 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	}
	if($.inArray('0-9', dataSet) >= 0) {
		possible += '0123456789';
	}
	if($.inArray('#', dataSet) >= 0) {
		possible += '![]{}()%&*$#^<>~@|';
	}
	var text = '';
	for(var i = 0; i < $(id).attr('data-size'); i++) {
		text += possible.charAt(Math.floor(Math.random() * possible.length));
	}
	return text;
}
// Create a new password
$(".getNewPass").click(function() {
	var field = $(this).closest('div').find('input[rel="gp"]');
	field.val(randString(field));
});
// Auto Select Pass On Focus
$('input[rel="gp"]').on("click", function() {
	$(this).select();
});
$('.getVisitorId').on('click', function() {
	var url = window.location.origin;
	var id = $(this).attr('data-id');
	$.ajax({
		"url": url + '/admin/visitor-slot',
		"type": "POST",
		"data": {
			id: id,
			_token: $('#csrf-token')[0].content
		},
		success: function(result) {
			$('#visitorDetails').html(result);
		}
	});
});
$(document).on('change', '#book_status', function() {
	var bookStatus = $(this).val();
	$("#statusId").val(bookStatus);
});
$(document).on('change', '#emp_assigned', function() {
	var empAssigned = $(this).val();
	$("#emp_id").val(empAssigned);
});
$('#confirm_visitor').change(function() {
	this.value = (Number(this.checked));
	$("#visitorConfirm").val(this.value);
});
$(document).delegate('#storeViditorDetail', 'click', function() {
	var statusVisitor = $("#statusId").val();
	var empId = $("#emp_id").val();
	var ids = $("#ids").val();
	var confirnVisitor = $('#confirm_visitor').is(':checked');
	var url = window.location.origin;
	$.ajax({
		"url": url + '/admin/update-visitor-detail',
		"type": "POST",
		"data": {
			statusVisitor: statusVisitor,
			empId: empId,
			ids: ids,
			confirnVisitor: confirnVisitor,
			_token: $('#csrf-token')[0].content
		},
		success: function(result) {
			swal({
				title: "Slot Update",
				text: "Slot Successfully Updated!!",
				icon: "success",
				buttons: true,
				dangerMode: true,
			}).then((value) => {
				if(value) {
					location.reload();
				} else {
					swal("Slot Successfully Updated!!");
				}
			});
		},
		error: function(xhr) {
			$.each(xhr.responseJSON.errors, function(key, value) {
				$('#validation-errors').append('<div class="alert alert-danger">' + value + '</div');
			});
		},
	});
});
$(".calendar").datepicker({
	dateFormat: "yy/mm/dd",
	firstDay: 1
});
$(document).on("click", ".date-picker .input", function(e) {
	var $me = $(this),
		$parent = $me.parents(".date-picker");
	$parent.toggleClass("open");
});
$(".calendar").on("change", function() {
	var $me = $(this),
		$selected = $me.val(),
		$parent = $me.parents(".date-picker");
	$parent.find(".result").children("span").html($selected);
	var selectData = $selected;
	var url = window.location.origin;
	$.ajax({
		"url": url + '/admin/get-visitor-detail',
		"type": "POST",
		"data": {
			selectData: selectData,
			_token: $('#csrf-token')[0].content
		},
		success: function(result) {
			$('#getDetailsSlots').html(result);
		},
	});
});
// $(document).on('change', '#filterLoc', function() {
// 	var bookStatus = $(this).val();
// 	$('.errorMsgLoc').text("");
// 	$("#filterLocation").val(bookStatus);
// });
// $(document).on('change', '#filterSt', function() {
// 	var bookStatus = $(this).val();
// 	$('.errorMsg').text("");
// 	$("#filterStatus").val(bookStatus);
// });
// $(document).delegate('#filterByLocation', 'click', function() {
// 	var getLoc = $('#filterLocation').val();
// 	var getstatus = $('#filterStatus').val();
// 	if(getLoc == '') {
// 		$('.errorMsgLoc').text('Please Select Locations');
// 	} else if(getstatus == '') {
// 		$('.errorMsg').text('Please Select Status');
// 	} else if(getLoc != '' && getstatus != '') {
// 		var url = window.location.origin;
// 		$.ajax({
// 			"url": url + '/admin/visitor-detail-filter',
// 			"type": "POST",
// 			"data": {
// 				getLoc: getLoc,
// 				getstatus: getstatus,
// 				_token: $('#csrf-token')[0].content
// 			},
// 			success: function(result) {
// 				$('#getDetailsSlots').html(result);
// 			},
// 		});
// 	}
// });

