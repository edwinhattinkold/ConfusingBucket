function getHeight() {
  myHeight = 0;
  if( typeof( window.innerWidth ) == 'number' ) {
    //Non-IE
    myHeight = window.innerHeight;
  } else if( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) {
    //IE 6+ in 'standards compliant mode'
    myHeight = document.documentElement.clientHeight;
  } else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
    //IE 4 compatible
    myHeight = document.body.clientHeight;
  }
  return myHeight;
}

function getMaxHeight()
{
    return getHeight() - 50;
}

function hide()
{
	$('#section').stop();
	
	$('#section').animate({
		top: getMaxHeight() + "px"
	}, 1500);
	
	$('#showhide').css("transform","rotate(0deg)");
	$('#showhide').css("-ms-transform","rotate(0deg)");
	$('#showhide').css("-webkit-transform","rotate(0deg)");
	
	$('#mapClick').css("top", getHeight() + "px");
	
	$('#map_button').unbind("click");
	$('#map_button').one("click", function() { show(); return false; });
}

function show()
{
	$('#section').stop();
	
	$('#section').animate({
		top: "0px"
	}, 1500);
	
	$('#showhide').css("transform","rotate(180deg)");
	$('#showhide').css("-ms-transform","rotate(180deg)");
	$('#showhide').css("-webkit-transform","rotate(180deg)");
	
	$('#mapClick').css("top", '0px');
	
	$('#map_button').unbind("click");
	$('#map_button').one("click", function() { hide(); return false; });
}

function load(page)
{
	console.log('Loading page:' + page);
	$('#content').load(page);
	$('.active').removeClass("active");
	$('.'+page.split('.')[0]+'menu').addClass("active");
	show()
}

//Balk goedzetten bij window resize
$(window).on('resize', function(){
	var maxHeight = getMaxHeight();
	
    $('#mapClick').css("top", maxHeight + "px");
    
	if (!($('#section').css('top') == "0px" || ($('#section').css('top') == "")))
	{
		if (maxHeight > 50)
		{
			$('#section').finish().css('top', maxHeight + "px");
		}
	}
});

//Stop scrollen van de pagina (content mag wel gescrolld worden)
$( document ).ready(function() {
    $('body').mousedown(function(e){
		if(e.button==1 && !($('.scroll').has($(e.target)).length))return false
	});
	
	$('html, body').on('touchmove',function(e){
		if(!$('.scroll').has($(e.target)).length)
			e.preventDefault();
	});
});

//failsafe: toch gescrolld? Zet de pagina weer terug.
$(window).scroll(function(e){
    $(this).scrollTop(0);
});

