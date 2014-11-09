var contacto = function() {

	var self = this;

    this.init = function() {
        self.setListeners();
    }

    this.setListeners = function() {
    	self.setCotizarListeners();
    	self.setSubmitListeners();

	}

	this.setCotizarListeners = function() {
	 	$('.select-cotizar').click(function(){
	 		$('#jq-contactanos').fadeOut('fast');
	 		$('#jq-contactanos').fadeIn();
	 		setTimeout(function() {
	      	$('#jq-contactanos').html('Ingresá tus datos');
		}, 300);
	 		goToByScroll('contact-form-section');
    	});
	}

	this.setSubmitListeners = function() {
		$('#hire-submit').click(function(){ 
			var name = $('#hire-name');
			var mail = $('#hire-mail');
			var phone = $('#hire-phone');
			var cell = $('#hire-cell');
			var time = $('#hire-time');
			var errors = 0;
			var requestURL = '';
			
			var reqFields = [name, mail, phone];
			var optFields = [cell, time];
			
			for (i in reqFields) {
				if (reqFields[i].val() == '' || reqFields[i].val().match('script') ) {
					reqFields[i].css('border', '2px solid red');
					errors += 1;
				} else if (i != 0) {
					reqFields[i].css('border', 'none');
					requestURL += '&' + reqFields[i].attr('id') + '=' + reqFields[i].val(); 
				} else {
					reqFields[i].css('border', 'none');
					requestURL += reqFields[i].attr('id') + '=' + reqFields[i].val();
				}
			}

			for (i in optFields) {
				if (optFields[i].val().match('script') ) {
					optFields[i].css('border', '2px solid red');
					errors += 1;
				} else {
					optFields[i].css('border', 'none');
					requestURL += '&' + optFields[i].attr('id') + '=' + optFields[i].val();
				}
			}

			if (errors) {
				return false;	
			}

  			$.ajax({
            	type: "POST",
            	url: "/home/ajax?method=contactForm",
	            dataType: "json",
    	        data: requestURL,
        	    success: function(results){
            	    $('.cotizar-msg').fadeIn();
            	},
            	complete: function() {
            	}
        	});

        });
		

	}

    this.init();
}



