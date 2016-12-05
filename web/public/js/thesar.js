$(function () {
  setupPopovers();
  registerEvents();
})

$(document).mouseup(function (e)
{
    if($(e.target).attr('data-toggle') == 'popover'
    && $(e.target).next('div.popover:visible').length){
        return
    }

    var container = $(".popover");
    if (!container.is(e.target)&& container.has(e.target).length === 0)    {
        container.popover("hide");
        //alert( container.is(':visible'))
    }
});

function registerEvents(){
    $(".login_show").click(function(){alert("lesh")})

    $(document).on("click", ".login_show", function(e) {
        content = $(e.target).html().toLowerCase().startsWith('login') ? $("#login_form").html() : $("#register_form").html() ;
        $('#prelogin').attr('data-content', content)
        $('#prelogin').popover('show')
    });
}

function setupPopovers(){
    $('[data-toggle="popover"]').popover({ trigger: 'manual', html:true, placement: 'bottom'})
  
    $('[data-toggle="popover"]').click(function(e){ 
        if ($(this).next('div.popover:visible').length) return
        $(this).popover('show');
        e.preventDefault(); 
    });

    $('#prelogin').attr('data-content', $("#login_form").html())
    $('#prelogin').attr('data-original-title', $("#login_title").html())
}