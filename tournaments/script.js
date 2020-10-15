$('.buy_for_tickets').click(function() {
	$('#buy_tour_id').val($(this).attr('data-id'));
	$.ajax({
		type: "POST",
		url: '../actions.php',
		data: {
			"action": 'get_tickets_null'
		},
		success: function(data) {
			if (data == 'ok') {
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
					});
				}
			} else {
				$.fancybox.open({
					src  : '#tournament_tickets',
					type : 'inline',
					opts : {
						afterShow : function( instance, current ) {
							//console.info( 'done!' );
						},
						"touch" : false
					}
				});
			}
		},
	});
});

$('#tournament_tickets .item_ticket').click(function () {
	$.fancybox.open({
		src  : '#buy_tournament_tickets',
		type : 'inline',
		opts : {
			afterShow : function( instance, current ) {
				//console.info( 'done!' );
			},
			"touch" : false
		}
	});

	var tickets = $(this).attr('data-tickets');
	var price = 0;
	switch (tickets) {
		case "2":
			price = 99;
			break;
		case "8":
			price = 300;
			break;
		case "15":
			price = 500;
			break;
		default:
			price = tickets * 50;
			break;
	}
	$('#for_oplata').text(price);
	$('#val_tickets').val(tickets);
	$('.items_tickets .robokassa').attr('href', '/buy_tickets/robokassa.php?summ='+price);
});

$('#buy_balance').click(function() {
	if (confirm('Вы уверены?')) {
		$.ajax({
			type: "GET",
			url: '/buy_tickets/buy_balance.php',
			data: {
				"tickets": $('#val_tickets').val(),
				"uid": $('#uid').val(),
			},
			success: function(data) {
				alert(data);
				location.reload();
			},
			//dataType: dataType
		});
	}
});

$('.get_idpass').click(function () {
	$('#get_idpass_tourid').val($(this).attr('data-id'));
	$.ajax({
		type: "POST",
		url: '../actions.php',
		data: {
			"action": 'get_idpass',
			"id": $('#get_idpass_tourid').val()
		},
		success: function(data) {
			$.fancybox.open(data);
		},
		//dataType: dataType
	});
});