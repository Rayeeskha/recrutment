$('.addUser').click(function() {
  $('.text-danger').html('');
  $('.validateForm')[0].reset();
  $('.modal-title').html('Add User');
  $('#addUserModal').modal('show');
});

//LoggedIn User
function loggedInUser(id){
	$.ajax({
	  type: "POST",
	  url: ajax+'/admin/login-user-account',
	  data: {id:id},
	  // timeout: 800000,
	  success: function (response) { 
	    if (response.success) {
	      toastr.success(response.message);
	      swal("", response.message, "success");
	      setTimeout(function() {
	        if (response.url != '') {
	          window.open(response.url,"", "width=1400, height=1400");
	        }
	      }, 1000);
	    }
	  }
	});
}


// Select user
$('.userName').change(function(){      
   $("#selected_user_id").val($(this).val());
});

$('.serviceActivation').click(function() { 
    let userId = $('#selected_user_id').val();
    if (userId == "") {
    	return swal("", 'Please select username', "error");
    }
    $('.text-danger').html('');
    $('.validateForm')[0].reset();
    $('.modal-title').html('Service Activation');
	$.ajax({
	  type:"GET",
	  url:ajax+'/admin/get-user/'+userId,
	  success:function(response){	    
	    $('.serviceActivationRenderData').html(response.activationData);
	    $('#serviceActivationModal').modal('show');
	  }
	});
});

//Add Sender Id User wise
$('.addSenderIdUserWise').click(function() {
  $('.text-danger').html('');
  $('.validateForm')[0].reset();
  $('.modal-title').html('Add Sender ID');
  $('#addSenderIdModal').modal('show');
});

//Add Sender for all users
$('.addSenderIdForAllUser').click(function() {
  $('.text-danger').html('');
  $('.validateForm')[0].reset();
  $('.modal-title').html('ADD SenderID All Users');
  $('#addSenderIdForAllUserModal').modal('show');
});


//Edit Service Activation
$(document).on('click','.editServiceActivationData',function(){
 	$('.text-danger').html('');
    $('.validateForm')[0].reset();
    $('.modal-title').html('Edit Service Activation');
    let selector = $(this);
  	let tr  = selector.closest('tr'); 
  	let serviceId = tr.attr('row-service_id');
  	$('#service_id').val(serviceId);
	$.ajax({
	  type:"GET",
	  url:ajax+'/admin/edit-service-activation/'+serviceId,
	  success:function(response){	    
	    $('.serviceActivationRenderData').html(response.activationData);
	    $('#serviceActivationModal').modal('show');
	  }
	});
});

 

