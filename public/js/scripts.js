$(document).ready(function(){
    if ($( window ).width() <= 600){
        $('ul.menu>li:nth-child(n+3)').addClass('active');
        $("ul.menu>li:first-child a").html('<i class="fa fa-home" aria-hidden="true"></i> PRINCIPALA');
        $("ul.menu>li.despre>a").html('DESPRE &nbsp <i class="fa fa-caret-down" aria-hidden="true"></i>');
    }
       
    $(window).resize(function(){
        if ($( window ).width() <= 600){}
            if (!$('ul.menu>li:nth-child(n+3)').hasClass('active')){
                $('ul.menu>li:nth-child(n+3)').addClass('active');
                $("ul.menu>li:first-child a").html('<i class="fa fa-home" aria-hidden="true"></i> PRINCIPALA');
                $("ul.menu>li.despre>a").html('DESPRE &nbsp <i class="fa fa-caret-down" aria-hidden="true"></i>');
            }
        if ($( window ).width() > 600){
            $("ul.menu>li:nth-child(n+3)").removeClass('active').removeAttr('style');
            $("ul.menu li.despre").removeClass('active');
            $("ul.menu>li:first-child a").html('PRINCIPALA');
            $("ul.menu>li.despre>a").html('DESPRE NOI');
            $("ul.menu>li>ul.submenu").removeAttr('style');
        }  
    });
    //main menu
    $('ul.menu li.menu_bar a').click(function(){
        $('ul.menu>li.active').slideToggle(600);
    });
    //submenu
    var changer = 0;
    var clicked = 'DESPRE &nbsp <i class="fa fa-caret-left" aria-hidden="true"></i>';
    var unclicked = 'DESPRE &nbsp <i class="fa fa-caret-down" aria-hidden="true"></i>'
    $("ul.menu li.despre").click(function(){
        if($("ul.menu li.despre").hasClass('active')){
            $("ul.menu>li>ul.submenu").slideToggle(500);
            // change arrow
            if (changer == 0){
                $("ul.menu>li.despre>a").html(clicked);
                changer = 1;
            }
            else if (changer == 1){
                $("ul.menu>li.despre>a").html(unclicked);
                changer = 0;
            }
        }
        
    });
});