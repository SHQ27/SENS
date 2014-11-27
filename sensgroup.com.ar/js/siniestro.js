var siniestro = function() {

	var self = this;

    this.init = function() {
        self.setListeners();
    }

    this.setListeners = function() {
    	self.setSubmitListeners();

	}

	this.setSubmitListeners = function() {
		$('#synyster-submit').click(function(){ 
			var tcDate = $('#tc-date');
			var tcAddress = $('#tc-address');

			var cvpName = $('#cvp-name');
			var cvpDu = $('#cvp-du');
			var cvpPhone = $('#cvp-phone');
			var cvpAddress = $('#cvp-address');

			var tesName = $('#tes-name');
			var tesDu = $('#tes-du');
			var tesPhone = $('#tes-phone');
			var tesAddress = $('#tes-address');

			var ivName = $('#iv-name');
			var ivDu = $('#iv-du');
			var ivPhone = $('#iv-phone');
			var ivAddress = $('#iv-address');

			var insName = $('#ins-name');
			var insDu = $('#ins-du');
			var insPhone = $('#ins-phone');
			var insAddress = $('#ins-address');
			var insNumber = $('#ins-number');
			var insExpire = $('#ins-expire');

			var fact = $('#fact');

			var errors = 0;
			var requestURL = '';
			
			var fields = [tcDate, tcAddress, cvpName, cvpDu, cvpPhone, cvpAddress, tesName, tesDu, tesPhone, tesAddress, ivName, ivDu, ivPhone, ivAddress, insName, insDu, insPhone, insAddress, insNumber, insExpire, fact];
			
			for (i in fields) {
				if (fields[i].val().match('script') ) {
					fields[i].css('border', '2px solid red');
					errors += 1;
				} else if (i != 0 ) {
					if (fields[i].val() == '') {
						fields[i].val('---');
					};
					fields[i].css('border', 'none');
					requestURL += '&' + fields[i].attr('id') + '=' + fields[i].val();; 
				} else {
					if (fields[i].val() == '') {
						fields[i].val('---');
					};
					fields[i].css('border', 'none');
					requestURL += fields[i].attr('id') + '=' + fields[i].val();
				}
			}
			if (errors) {
				return false;	
			}

  			$.ajax({
            	type: "POST",
            	url: "/home/ajax?method=synysterForm",
	            dataType: "json",
    	        data: requestURL,
        	    success: function(results){
            	    $('.synyster-msg').fadeIn();
            	},
            	complete: function() {
            	}
        	});

        });
		

	}

    this.init();
}



