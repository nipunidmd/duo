/*
**** FORM SUBMIT HANDLER PLUGIN ****
Author: Rumesh Dananjaya
*/


// dynamically declare laddahhhhhh
var ladda = {};
let loop_id = 1;
$('.ajax-submit').each(function(){
	$(this).attr('data-ladda',"ladda_"+loop_id);
	$(this).attr('data-form-id',loop_id);
	$(this).children().find('[type="submit"]').addClass("ladda_"+loop_id);
	ladda['ladda' + '_' + loop_id] = Ladda.create( document.querySelector( ".ladda_"+loop_id ) );
	loop_id++;
});

$('.ajax-submit input').change(function(){
	removeError(this);
});

$('.ajax-submit').submit(function(event){
	event.preventDefault();

	let form_ladda = $(this).attr('data-ladda');
	let form = $(this);
	var data = new FormData(this);
	let path = $(this).attr('action');
	let method = $(this).attr('method');

	resetErrors();
	submitData(data,path,method,form_ladda,form);
});

function submitData(data,path,method,form_ladda,form){
	// get this form's ladda
	var this_ladda = ladda[form_ladda];

	$.ajax({
		url: path,
		method: method,
		data: data,
		processData: false,
		contentType: false,
		beforeSend: function () {
			this_ladda.start();
		},
		complete: function () {
			this_ladda.stop();
		},
		success: function (data) {

			if (typeof window['successHandler'] === 'function') {
				successHandler(form,data); // This need to be handled externally
			}
		},
		error: function(data){

			if(data.status == 422){
				// console.log(data.responseJSON);
				validationErrorHandler(data.responseJSON)
				// validationErrorHandler(data.responseJSON.errors)

				if (typeof window['appendValidationErrorHandler'] === 'function') {

					appendValidationErrorHandler(data.responseJSON.errors);
				}
			}
			if (typeof window['appendErrorHandler'] === 'function') {
				appendErrorHandler(data);
			}
		}
	});

}

function validationErrorHandler(errors){
	$.each(errors, function(index, message) {
		displayErrors(index,message)
	});
}

function displayErrors(index, message) {
	let element = '';
	let input_index = parseInt(index.split('.').pop().trim());
	if (Number.isInteger(input_index)) {
		let input_name = (index.substring(0, index.indexOf(".")));
		element = "[name='" + input_name + "[" + input_index + "]']";
	} else {
		element = '[name="' + index + '"]';
	}

	$(element).addClass('is-invalid');
	$(element).closest('.form-group').find('.invalid-feedback').html(message);
	$(element).closest('.form-group').find('.invalid-feedback').show();

	if (typeof window['appendDisplayErrors'] === 'function') {
		appendDisplayErrors(index, message);
	}

}

// function displayErrors(index,message){

// 	let input_id = '#' + index;
// 	let input_error_id = '#' + index + '-error';

// 	$(input_id).addClass('is-invalid');

// 	$(input_error_id).html(message);
// 	$(input_error_id).show();
// 	$('.selectpicker').selectpicker('refresh');

// }

function resetErrors(){
	$('.is-invalid').removeClass('is-invalid');
	$('.invalid-feedback').hide();
	// $('.input-error-section').hide();
}

function removeError(element) {
	$(element).removeClass('is-invalid');
	$(element).closest('.input-error-section').hide();

	if (typeof window['appendRemoveError'] === 'function') {
		appendRemoveError(element);
	}
}
