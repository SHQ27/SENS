var maps = function() {

	var self = this;

    this.init = function() {
        self.setListeners();
    }

    this.setListeners = function() {
    	self.setDelVisoListeners();
    	self.setDerquiListeners();
	}

	this.setDelVisoListeners = function(mapId) {
	 	$('#del-viso').click(function(){
	 		$('#map_canvas_derqui_container').css({opacity: 1.0, visibility: "visible", zIndex: '-10'}).animate({opacity: 0}, 200);
	 		$('#map_canvas_viso_container').css({opacity: 0.0, visibility: "visible", zIndex: '0'}).animate({opacity: 1.0});
	 		$('#viso-title').addClass('selected-sucursal');
	 		$('#derqui-title').removeClass('selected-sucursal');
    	});
	}

	this.setDerquiListeners = function(mapId) {
	 	$('#derqui').click(function(){
	 		$('#map_canvas_viso_container').css({opacity: 1.0, visibility: "visible", zIndex: '-10'}).animate({opacity: 0}, 200);
	 		$('#map_canvas_derqui_container').css({opacity: 0.0, visibility: "visible", zIndex: '0'}).animate({opacity: 1.0});
	 		$('#derqui-title').addClass('selected-sucursal');
	 		$('#viso-title').removeClass('selected-sucursal');
    	});
	}

    this.init();
}



