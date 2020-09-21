$('.buy_for_tickets').click(function() {
	$.fancybox.open({
		src  : '#buy_tournament_tickets',
		type : 'inline',
		opts : {
			afterShow : function( instance, current ) {
				//console.info( 'done!' );
			}
		}
	});
});