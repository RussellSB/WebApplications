var $nav = $('#navbar');
var $btn = $('#navbar #hmbg');
var $lvlinks = $('ul#leftside');
var $rvlinks = $('ul#rightside');
var $iconbox = $('div#iconbox');
var $hlinks = $('#navbar .hidden-links');

var breaks = [];
var linkSpace = ($iconbox.width() + $lvlinks.width() + $rvlinks.width() + 100);

console.log("SCRIPT LOADED");

function updateNav() {
    // Sets avaliable space to width of navigation bar, OR width of nav - width of button - 30.
    // Which is chosen depends on whether the button is hidden.
    var availableSpace = $btn.hasClass('hidden') ? $nav.width() : $nav.width() - $btn.width() - 30;

    console.log("WITHIN FUNCTION");
    console.log("AVAILIABLE SPACE " + availableSpace);
    console.log("LINKSWIDTH " + linkSpace);

    // If the navigation bar is overflowing...
    if(linkSpace > availableSpace){
        breaks.push(($lvlinks.width() + $rvlinks.width()));

        while($lvlinks.children('li').length > 1){
            var child = $lvlinks.children().last()
            child.find('a').removeClass('menus');
            child.find('a').addClass('burgermenu');
            child.prependTo($hlinks);
        }

        $iconbox.addClass('hidden');

        while($rvlinks.children('li').length > 1){
            var child = $rvlinks.children().first()
            child.find('form').find('input').addClass('modify');
            child.prependTo($hlinks);
        }

        $rvlinks.children().first().addClass('marginadd');

        if($btn.hasClass('hidden')){
            $btn.removeClass('hidden');
        }
    }
    else{
        $rvlinks.children().first().removeClass('marginadd');

        var child = $hlinks.children().first()
        child.find('form').find('input').removeClass('modify')
        child.prependTo($rvlinks);

        $iconbox.removeClass('hidden');

        while($hlinks.children('li').length > 0){
            var child = $hlinks.children().first()
            child.find('a').removeClass('burgermenu');
            child.find('a').addClass('menus');
            child.appendTo($lvlinks)
        }

        $btn.addClass('hidden');
    }
}

$(window).resize(function(){
    console.log("WINDOW RESIZED");
    updateNav();
});

$btn.on('click', function() {
    $hlinks.toggleClass('hidden');
});

updateNav();