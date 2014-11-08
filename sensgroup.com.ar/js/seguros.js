var seguros = function() {

    var self = this;
    
    self.insuranceTypes = {
        'people'     : 'PEOPLE',    
        'enterprise' : 'ENTERP'    
    };

    self.peopleData = {
        'name'        : 'personas',
        'linkId'      : 'personas-link', 
        'containerId' : 'personas-sublinks',
        'sublinkId'   : 'personas-sublink' 
    }

    self.enterpriseData = {
        'name'        : 'empresas',
        'linkId'      : 'empresas-link', 
        'containerId' : 'empresas-sublinks',
        'sublinkId'   : 'empresas-sublink' 
    }

    this.init = function() {
        $('#personas-info').show();
        self.setListeners();
    }

    this.setListeners = function() {
        self.setPeopleListeners();
        self.setEnterpriseListeners();
    }


    // Listeners para personas y empresas.

    this.setPeopleListeners = function() {
        self.setTitleListener(insuranceTypes.people);
        self.setSubtitleListener(peopleData);
    }

    this.setEnterpriseListeners = function() {
        self.setTitleListener(insuranceTypes.enterprise);
        self.setSubtitleListener(enterpriseData);
    } 

    // Listeners globales

    this.setTitleListener = function(insuranceType) {
        if (insuranceType === self.insuranceTypes.people) {
            $('#' + self.peopleData.linkId).click( function() {
                $('#' + self.enterpriseData.linkId).addClass('unselected');
                $('#' + self.enterpriseData.linkId).removeClass('selected');
                $('#' + self.peopleData.linkId).addClass('selected');
                $('#' + self.peopleData.linkId).removeClass('unselected');
                $('#' + self.peopleData.containerId).show();
                var infoContainer = $('#' + self.peopleData.name + '-info');
                $('.info-container').hide();
                infoContainer.fadeIn();
            }); 
        } else if (insuranceType === insuranceTypes.enterprise) {
                $('#' + self.enterpriseData.linkId).click( function() {
                $('#' + self.enterpriseData.linkId).addClass('selected');
                $('#' + self.enterpriseData.linkId).removeClass('unselected');
                $('#' + self.peopleData.linkId).addClass('unselected');
                $('#' + self.peopleData.linkId).removeClass('selected');
                $('#' + self.peopleData.containerId).hide();
                var infoContainer = $('#' + self.enterpriseData.name + '-info');
                $('.info-container').hide();
                infoContainer.fadeIn();
            }); 
        }
    }
    
    this.setSubtitleListener = function(data) {
        var sublinks = $('.' + data.sublinkId);
        for (var i=0; i<sublinks.length; i++) {
            var id = sublinks[i].firstChild.nextSibling.id + '-info'; 
            var infoContainer = $('#' + id);
            $(sublinks[i]).click( 
               self.changeInfoContainer(infoContainer)
            );
        }
    }

    this.changeInfoContainer = function(infoContainer){
        return function(){
            self.clearInfoContainers();
            $(infoContainer).fadeIn();
        }
    }

    this.clearInfoContainers = function() {
        $('.info-container').hide();
    };

    this.init();
}
