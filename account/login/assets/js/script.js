$(document).ready(function() {
    function setEqualHeight(columns)
    {
    var tallestcolumn = 0;
    columns.each(
    function()
    {
    currentHeight = $(this).height();
    if(currentHeight > tallestcolumn)
    {
    tallestcolumn  = currentHeight;
    }
    }
    );
    columns.height(tallestcolumn);
    }
    setEqualHeight($("#formats,#ratings,#payouts"));

    $('.pubg').hover(function () {
        $('.dropdown-menu').css({
            'border-bottom-color' : '#ec5e54',
        })
    }, function () {
        $('.dropdown-menu').css({
            'border-bottom-color' : '#0054FF',
        })
    } );

    $('.call-of-duty').hover(function () {
        $('.dropdown-menu').css({
            'border-bottom-color' : '#0054FF',
        })
    }, function () {
        $('.dropdown-menu').css({
            'border-bottom-color' : '#0054FF',
        })
    } );

    $('.garena').hover(function () {
        $('.dropdown-menu').css({
            'border-bottom-color' : '#ec5e54',
        })
    }, function () {
        $('.dropdown-menu').css({
            'border-bottom-color' : '#0054FF',
        })
    } );

    $('.brawl').hover(function () {
        $('.dropdown-menu').css({
            'border-bottom-color' : '#0054FF',
        })
    }, function () {
        $('.dropdown-menu').css({
            'border-bottom-color' : '#0054FF',
        })
    } );


});