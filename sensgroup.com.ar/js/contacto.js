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
			
			var fields = [name, mail, phone, cell, time];
			
			for (i in fields) {
				if (fields[i].val() == '' || fields[i].val().match('script') ) {
					fields[i].css('border', '2px solid red');
					errors += 1;
				} else if (i != 0) {
					fields[i].css('border', 'none');
					requestURL += '&' + fields[i].attr('id') + '=' + fields[i].val();; 
				} else {
					fields[i].css('border', 'none');
					requestURL += fields[i].attr('id') + '=' + fields[i].val();
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



