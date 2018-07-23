<div id="updateusermodal" class="modal fade" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <!--button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button-->
                <h4 class="modal-title"><?php t('Update your data') ?></h4>
            </div>
            <div class="modal-body">
				<p><?php t('Before starting to annotate it is necessary that you fullfil your data.') ?></p>
				<div id="updateformmsg" class="alert alert-danger d-none" role="alert"></div>
                <form>
					<?php $row=getUser() ?>
                    <div class="form-group">
                        <input id="name" type="text" class="form-control" placeholder="<?php t('Name') ?>" value="<?php echo $row['name'] ?>" required="true">
                    </div>
                    <div class="form-group">
                        <input id="email" type="email" class="form-control" placeholder="<?php t('Email Address') ?>" required="true">
                    </div>
					<div class="form-group">
                        <input id="pass" type="password" class="form-control" placeholder="<?php t('Password') ?>" required="true">
                    </div>
                    <button id="save" type="button" class="btn btn-primary col-md-12">
						<span id="save-icon" class="far fa-save"></span> <?php t('Save'); ?>
					</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
// Show the modal at the beginning
$(document).ready(function(){
	$("#updateusermodal").modal('show');
});

// Prente close when click outside of the modal
$('#updateusermodal').modal({
    backdrop: 'static',
    keyboard: false
})

// Save action
$("#save").click(function(){
	
	$.ajax({
		data: {
			hash: "<?php echo $row['hash'] ?>",
			name: $("#name").val(),
			email: $("#email").val(),
			pass: $("#pass").val()
		},
		url: 'updateuser.php',
		type: 'post',
		beforeSend: function(xhr) {
			disableSaveButton();
		},
		error: function(xhr, ajaxOptions, thrownError) {
			enableSaveButton();
			$('#updateformmsg').text(thrownError);
			$('#updateformmsg').removeClass("d-none").hide().fadeIn().show();
			$('#' + xhr.getResponseHeader("Field")).focus();
		},
		success: function(data) {
			$('#updateusermodal').modal('hide');
			showMessage("Your user data has been <strong>updated successfully</strong>.", "success");
		}
	});
	function disableSaveButton() {
		$("#save").attr("disabled", true);
		$("#save-icon").removeClass("far").removeClass("fa-save").addClass("fa").addClass("fa-spinner").addClass("fa-spin");
	}
	function enableSaveButton() {
		$("#save-icon").removeClass("fa").removeClass("fa-spinner").removeClass("fa-spin").addClass("far").addClass("fa-save");
		$("#save").attr("disabled", false);
	}
});

// Enter key in the modal
$(function(){
  $('#updateusermodal').keypress(function(e){
    if(e.which == 13) {
	  $("#save").click();
    }
  })
})
</script>