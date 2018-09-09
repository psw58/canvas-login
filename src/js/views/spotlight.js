//data obj should be json in format [{obj1:''},{obj2:''}....]
var SpotlightView = function (data){
    //the maximun nuber of spotlights
    var MAXLENGTH = 2
    this.init = function(){
        this.$el = $('<div/>');
    }

    this.template = function( data ){
        return '<h2 class="h3">Spotlight</h2> <div class="showcase">'+this.listTemplate(data)+ '</div>';
    }

    this.listTemplate = function( data ){
        var hinner = '';
        if (data.length > MAXLENGTH){
            var truncData = data.splice(0,MAXLENGTH)
        }else{
            truncData = data;
        }
        
        $.each(truncData, function(i, el){
            hinner += '<div class="card"> \
            <div role="article" class="node"> <a href="'+el.url+'" rel="bookmark"> \
                    <div class="group-image field-group"> \
                        <div class="field field-name-field-image"> <img src="'+el.img.src+'" \
                                width="720" height="480" alt="'+el.img.alt+'" /> \
                        </div> \
                    </div> \
                    <div class="group-fields field-group"> \
                        <div class="field field-name-category category"> News </div> \
                        <div class="field field-name-title title"> \
                            <h3 class="sans">'+el.title+'</h3> \
                        </div> \
                    </div> \
                </a> </div> \
        </div>';
        })
        return hinner;
    }

    this.render = function( ){
        this.$el.html( this.template( data ) )
        return this;
    }

    this.init();

}