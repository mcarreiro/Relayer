    function getEpisodes(value,url){
        $.post(url,
            function(response) {
                if(response.error) {
                    alert('Se produjo un error: ' + response.message.toString());
                } else {
                    var div2Pos = $('[id='+value+']').position();
                    var div2Width2 = $('[id='+value+']').outerWidth();                
                    $('.menuButton').css('color','#666666');
                    $('a[value='+value+']').css('color','#f3f3f3');
                    $(".menuSelector").animate({left: div2Pos.left-14, width: div2Width2-50},300); 
                    $('.contenido').empty();
                    $('.contenido').append(response);
                    window.location.hash  = "#"+getController(value);
                }
            }
        );
        return false;
    }
    
    function getController(value){
        switch(value){
            case '1' : return 'home';
            case '2' : return 'proyectos';
            case '3' : return 'contacto';
            case '4' : return 'servicios';
        }
    }
    
    function getValue(controller){
        switch(controller){
            case 'home' : return '1';
            case 'proyectos' : return '2';
            case 'contacto' : return '3';
            case 'servicios' : return '4';    
        }
    }
    
    function getRealURL() {
        var sharp = location.href.indexOf("#");
        if(sharp > 0 ) {
            return location.href.substring(0, sharp);
        } else {
            return document.URL;
        }
    }
    
    $(document).ready(function() {
        $(function(){ 

            if(window.location.hash != ''){
                controller = window.location.hash.split('#')[1];
                url = getRealURL()+'/'+controller;
                value = getValue(controller);
                getEpisodes(value,url);
            }
        }) ; 

        
        $('.menuButton').click(function() {
            getEpisodes($(this).attr('value'),$(this).attr('name'))});
        
});
