<div class="jumbotron" id="home-head">
	<div class="dotted">
		<h1>Life! Annotator</h1>
		<p><?php t("Welcome to the colaborative annotator of the Life! Platform of Suicide and Bullying Prevention in Social Media." ) ?></p>
	</div>
</div>

<div id="message-section">
</div>

<?php
if(!is_known_user()) {
?>
<div class="alert alert-danger">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	Lo sentimos pero no te reconocemos como anotador. Por favor, comprueba que la URL introducida es la que te dieron o solicita un nuevo usuario a través del <a href="https://gplsi.dlsi.ua.es/life/node/34">formulario de alta como anotador</a>. Si tienes cualquier duda, <a href="https://gplsi.dlsi.ua.es/life/contact">ponte en contacto con nosotros</a>.
</div>
<?php
} else {
	if(is_new_user()) {
		include 'updateuserform.php';
	}
	if(is_user_starting()) {
?>

<!--h2 class="text-center font-bold pt-4 pb-5 mb-5"><strong>Registration form with steps</strong></h2-->

<!-- Stepper -->
<!--div class="steps-form-2">
    <div class="steps-row-2 setup-panel-2 d-flex justify-content-between">
        <div class="steps-step-2">
            <a href="#step-1" type="button" class="btn btn-amber btn-circle-2 waves-effect ml-0" data-toggle="tooltip" data-placement="top" title="Basic Information"><i class="fa fa-folder-open-o" aria-hidden="true"></i></a>
        </div>
        <div class="steps-step-2">
            <a href="#step-2" type="button" class="btn btn-blue-grey btn-circle-2 waves-effect" data-toggle="tooltip" data-placement="top" title="Personal Data"><i class="fa fa-pencil" aria-hidden="true"></i></a>
        </div>
        <div class="steps-step-2">
            <a href="#step-3" type="button" class="btn btn-blue-grey btn-circle-2 waves-effect" data-toggle="tooltip" data-placement="top" title="Terms and Conditions"><i class="fa fa-photo" aria-hidden="true"></i></a>
        </div>
        <div class="steps-step-2">
            <a href="#step-4" type="button" class="btn btn-blue-grey btn-circle-2 waves-effect mr-0" data-toggle="tooltip" data-placement="top" title="Finish"><i class="fa fa-check" aria-hidden="true"></i></a>
        </div>
    </div>
</div-->

<!-- First Step -->
<!--form role="form" action="" method="post">
    <div class="row setup-content-2" id="step-1">
        <div class="col-md-12">
            <h3 class="font-weight-bold pl-0 my-4"><strong>Basic Information</strong></h3>
            <div class="form-group md-form">
                <label for="yourEmail-2" data-error="wrong" data-success="right">Email</label>
                <input id="yourEmail-2" type="email" required="required" class="form-control validate">
            </div>
            <div class="form-group md-form">
                <label for="yourUsername-2" data-error="wrong" data-success="right">Username</label>
                <input id="yourUsername-2" type="text" required="required" class="form-control validate">
            </div>
            <div class="form-group md-form mt-3">
                <label for="yourPassword-2" data-error="wrong" data-success="right">Password</label>
                <input id="yourPassword-2" type="password" required="required" class="form-control validate">
            </div>
            <div class="form-group md-form mt-3">
                <label for="repeatPassword-2" data-error="wrong" data-success="right">Repeat Password</label>
                <input id="repeatPassword-2" type="password" required="required" class="form-control validate">
            </div>
            <button class="btn btn-mdb-color btn-rounded nextBtn-2 float-right" type="button">Next</button>
        </div>
    </div-->

<!-- Second Step -->
    <!--div class="row setup-content-2" id="step-5">
        <div class="col-md-12">
            <h3 class="font-weight-bold pl-0 my-4"><strong>Personal Data</strong></h3>
            <div class="form-group md-form">
                <label for="yourName-2" data-error="wrong" data-success="right">First Name</label>
                <input id="yourName-2" type="text" required="required" class="form-control validate">
            </div>
            <div class="form-group md-form mt-3">
                <label for="secondName-2" data-error="wrong" data-success="right">Second Name</label>
                <input id="secondName-2" type="text" required="required" class="form-control validate">
            </div>
            <div class="form-group md-form">
                <label for="surname-2" data-error="wrong" data-success="right">Surname</label>
                <input id="surname-2" type="text" required="required" class="form-control validate">
            </div>
            <div class="form-group md-form mt-3">
                <label for="yourAddress-2" data-error="wrong" data-success="right">Address</label>
                <textarea id="yourAddress-2" type="text" required="required" rows="2" class="md-textarea validate form-control"></textarea>
            </div>
            <button class="btn btn-mdb-color btn-rounded prevBtn-2 float-left" type="button">Previous</button>
            <button class="btn btn-mdb-color btn-rounded nextBtn-2 float-right" type="button">Next</button>
        </div>
    </div-->

    <!-- Third Step -->
    <!--div class="row setup-content-2" id="step-3">
        <div class="col-md-12">
            <h3 class="font-weight-bold pl-0 my-4"><strong>Terms and conditions</strong></h3>
            <div class="form-check">
                <input type="checkbox" id="checkbox111" class="form-check-input">
                <label for="checkbox111" class="form-check-label">I agree to the terms and conditions</label>
            </div>
            <div class="form-check">
                <input type="checkbox" id="checkbox112" class="form-check-input">
                <label for="checkbox112" class="form-check-label">I want to receive newsletter</label>
            </div>
            <button class="btn btn-mdb-color btn-rounded prevBtn-2 float-left" type="button">Previous</button>
            <button class="btn btn-mdb-color btn-rounded nextBtn-2 float-right" type="button">Next</button>
        </div>
    </div-->

    <!-- Fourth Step -->
    <!--div class="row setup-content-2" id="step-4">
        <div class="col-md-12">
            <h3 class="font-weight-bold pl-0 my-4"><strong>Finish</strong></h3>
            <h2 class="text-center font-weight-bold my-4">Registration completed!</h2>
            <button class="btn btn-mdb-color btn-rounded prevBtn-2 float-left" type="button">Previous</button>
            <button class="btn btn-success btn-rounded float-right" type="submit">Submit</button>
        </div>
    </div>
</form-->
<!--script>
// Tooltips Initialization
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

// Steppers                
/*$(document).ready(function () {
  var navListItems = $('div.setup-panel-2 div a'),
          allWells = $('.setup-content-2'),
          allNextBtn = $('.nextBtn-2'),
          allPrevBtn = $('.prevBtn-2');

  allWells.hide();

  navListItems.click(function (e) {
      e.preventDefault();
      var $target = $($(this).attr('href')),
              $item = $(this);

      if (!$item.hasClass('disabled')) {
          navListItems.removeClass('btn-amber').addClass('btn-blue-grey');
          $item.addClass('btn-amber');
          allWells.hide();
          $target.show();
          $target.find('input:eq(0)').focus();
      }
  });
  
  allPrevBtn.click(function(){
      var curStep = $(this).closest(".setup-content-2"),
          curStepBtn = curStep.attr("id"),
          prevStepSteps = $('div.setup-panel-2 div a[href="#' + curStepBtn + '"]').parent().prev().children("a");

          prevStepSteps.removeAttr('disabled').trigger('click');
  });

  allNextBtn.click(function(){
      var curStep = $(this).closest(".setup-content-2"),
          curStepBtn = curStep.attr("id"),
          nextStepSteps = $('div.setup-panel-2 div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
          curInputs = curStep.find("input[type='text'],input[type='url']"),
          isValid = true;

      $(".form-group").removeClass("has-error");
      for(var i=0; i< curInputs.length; i++){
          if (!curInputs[i].validity.valid){
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
          }
      }

      if (isValid)
          nextStepSteps.removeAttr('disabled').trigger('click');
  });

  $('div.setup-panel-2 div a.btn-amber').trigger('click');
})*/;
</script-->

<?php	
	}
}
?>