var contacto = function() {

	var self = this;

    this.init = function() {
        self.setListeners();
    }

    this.setListeners = function() {
	 	$('.select-cotizar').click(function(){
	 		$('#jq-contactanos').fadeOut('fast');
	 		$('#jq-contactanos').fadeIn();
	 		setTimeout(function() {
	      	$('#jq-contactanos').html('Ingresá tus datos');
		}, 300);
	 		goToByScroll('contact-form-section');
    	});

	}

    this.init();

//     function validar () {
//     		var errors = [];

//     	var name = $('#hire-name');
//     	var mail = $('#hire-mail');
//     	var phone = $('#hire-phone');
//     	var cell = $('#hire-cell');
//     	var time = $('#hire-time');

//     	if(!isNaN(name.value) || name.value.length < 3) {
//     		errors = "Ingresá un nombre válido.";
//     		$('#' + name.id).css('border', '1px solid red');
//     		showErrors();
//     	}
//     	if(!isNaN(mail.value) || mail.value.length < 10) {
//     		errors = "Ingresá un mail válido.";
//     		$('#' + mail.id).css('border', '1px solid red');
//     		showErrors();
//     	}
//     	if(isNaN(phone.value) || phone.value.length < 8) {
//     		errors = "Ingresá un teléfono válido.";
//     		$('#' + phone.id).css('border','1px solid red');
//     		showErrors();
//     	}
//     	if(isNaN(cell.value) || cell.value.length < 10) {
//     		errors = "Ingresá un Celular válido";
//     		$('#' + cell.id).css('border', '1px solid red');
//     	}	
//     }

// function showErrors(){
// 	parr = document.createElement('p');
// 	text = document.createTextNode(errors);
// 	parr.appendChild(text);
// 	document.body.appendChild(parr);
// 	$(parr).css('color', 'red');
// }
}
