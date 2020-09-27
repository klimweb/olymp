$('.buy_for_tickets').click(function() {
	// $.fancybox.open({
	// 	src  : '#buy_tournament_tickets',
	// 	type : 'inline',
	// 	opts : {
	// 		afterShow : function( instance, current ) {
	// 			//console.info( 'done!' );
	// 		}
	// 	}
	// });
	$('#buy_tour_id').val($(this).attr('data-id'));
	if (confirm('Вы уверены?')) {
		$.ajax({
			type: "POST",
			url: '../actions.php',
			data: {
				"action": 'buy_tournament',
				"id": $('#buy_tour_id').val()
			},
			success: function(data) {
				alert(data);
				location.reload();
			},
			//dataType: dataType
		});
	}
});