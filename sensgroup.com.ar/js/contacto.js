var contacto = function() {

	var self = this;

    this.init = function() {
        self.setListeners();
    }

    this.setListeners = function() {
    	self.setCotizarListeners();
    	self.setSubmitListeners();
    	self.setSelectListeners();
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
			var brand = $('#select-brand');
			var model = $('#select-model');
			var submodel = $('#select-submodel');
			var year = $('#hire-year');
			var motive = $('#hire-motive');

			var errors = 0;
			var requestURL = '';
			
			var reqFields = [name, mail];
			var optFields = [cell, time, brand, model, submodel, year, phone, motive];
			
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
				if (optFields[i].val() && optFields[i].val().match('script') ) {
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

	self.setSelectListeners = function() {
		$('#select-brand').change(function(){
			var brand = $('#select-brand option:selected').val();
			$.ajax({
            	type: "POST",
            	url: "/home/ajax?method=getModels",
	            dataType: "json",
    	        data: 'brand=' + brand,
        	    success: function(results){
        	    	$('#select-model').find('option').remove();
        	    	$('#select-submodel').find('option').remove();
        	    	for (var i = results.models.length - 1; i >= 0; i--) {
        	    		$('#select-model').append("<option value='" + results.models[i] + "'>" + results.models[i] + "</option>");
        	    	};
        	    	$('#select-model option:eq(1)').prop('selected', true);
        	    	$('#select-model').trigger("change");
            	},
            	complete: function() {
            	}
        	});
		});

		$('#select-model').change(function(){
			var model = $('#select-model option:selected').val();
			var brand = $('#select-brand option:selected').val();

			if (!model) {
				return false;
			}

			$.ajax({
            	type: "POST",
            	url: "/home/ajax?method=getSubmodels",
	            dataType: "json",
    	        data: 'brand=' + brand + '&model=' + model,
        	    success: function(results){
        	    	$('#select-submodel').find('option').remove();
        	    	for (var i = results.submodels.length - 1; i >= 0; i--) {
        	    		$('#select-submodel').append("<option value='" + results.submodels[i] + "'>" + results.submodels[i] + "</option>");
        	    	};
            	},
            	complete: function() {
            	}
        	});

		});
	}

    this.init();
}



