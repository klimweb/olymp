$('.pickadate').pickadate({
	format: 'd mmmm yyyy'
});
$('.pickatime').pickatime({
	default: 'now',
    twelvehour: false,
    donetext: 'OK',
    format:"HH:i",
    autoclose: false,
    vibrate: true 
});

$('[data-action="add_tournament"]').click(function() {
	var prizes = [];
	$('.tour-prize').each(function(i) {
		prizes[i] = $(this).find('input').val();
	});
	prizes = JSON.stringify(prizes);
	console.log(prizes);
	$.ajax({
	  type: "POST",
	  url: 'actions.php',
	  data: {
	  	"action": "add_tournament",
		"img": $('#tour-img').val(),
	  	"name": $('#tour-name').val(),
		"game": $('#tour-game').val(),
		"mode": $('#tour-mode').val(),
	  	"prize": prizes,
	  	"players": $('#tour-players').val(),
	  	"date": $('#tour-date').val(),
	  	"time": $('#tour-time').val()
	  },
	  success: function(data) {
	  	if (data == 'success') {
	  		alert('Турнир добавлен!');
  			location.reload();
	  	}
	  },
	  //dataType: dataType
	});
});

$('[data-action="update_tournament"]').click(function() {
	var prizes = [];
	$('.tour-prize').each(function(i) {
		prizes[i] = $(this).find('input').val();
	});
	prizes = JSON.stringify(prizes);
	//console.log(prizes);
	$.ajax({
	  type: "POST",
	  url: 'actions.php',
	  data: {
	  	"id": $('#tour-id').val(),
	  	"action": "update_tournament",
		"img": $('#tour-img').val(),
	  	"name": $('#tour-name').val(),
	  	"game": $('#tour-game').val(),
		"mode": $('#tour-mode').val(),
	  	"prize": prizes,
	  	"players": $('#tour-players').val(),
	  	"date": $('#tour-date').val(),
	  	"time": $('#tour-time').val()
	  },
	  success: function(data) {
	  	if (data == 'success') {
	  		alert('Информация обновлена!');
  			location.reload();
	  	}
	  },
	  //dataType: dataType
	});
});

$('[data-action="update_user"]').click(function() {
	$.ajax({
	  type: "POST",
	  url: 'actions.php',
	  data: {
	  	"id": $('#user-id').val(),
	  	"action": "update_user",
	  	"tickets": $('#user-tickets').val(),
	  	"balance": $('#user-balance').val()
	  },
	  success: function(data) {
	  	if (data == 'success') {
	  		alert('Информация обновлена!');
  			location.reload();
	  	}
	  },
	  //dataType: dataType
	});
});

$('#add_prize').click(function() {
	var mesto = $('.tour-prize').length + 1;
	$('#tour-prizes').append('<div class="tour-prize"><span class="mesto">'+mesto+'</span> место <br><input type="text" class="form-control"></div>');
});
$('#delete_prize').click(function() {
	if ($('.tour-prize').length > 3) $('.tour-prize').last().remove();
});

$('.action-edit').on("click",function(e){
    e.stopPropagation();
    //var id = $(this).attr('data-id');
    $('.add-new-data-sidebar .load').css('display', 'flex');
    $.ajax({
	  type: "POST",
	  url: 'actions.php',
	  data: {
	  	"action": "get_info_tournament",
	  	"id": $(this).attr('data-id')
	  },
	  success: function(data) {
	  	//console.log(data);

	  	var tournament = JSON.parse(data);
	  	var prize = JSON.parse(tournament.prize);

	  	var date = new Date(tournament.data*1000);
	  	var month = date.getMonth();
	  	switch (month) {
	  		case 0:
	  			month = "January";
	  			break;
	  		case 1:
	  			month = "February";
	  			break;
	  		case 2:
	  			month = "March";
	  			break;
	  		case 3:
	  			month = "April";
	  			break;
	  		case 4:
	  			month = "May";
	  			break;
	  		case 5:
	  			month = "June";
	  			break;
	  		case 6:
	  			month = "July";
	  			break;
	  		case 7:
	  			month = "August";
	  			break;
	  		case 8:
	  			month = "September";
	  			break;
	  		case 9:
	  			month = "October";
	  			break;
	  		case 10:
	  			month = "November";
	  			break;
	  		case 11:
	  			month = "December";
	  			break;
	  	}

	  	$('#tour-id').val(tournament.id);
		$('#tour-name').val(tournament.name);
		$('#tour-img').val(tournament.img);
		$('#tour-mode').val(tournament.mode);
	    $('#tour-game').attr('selected', 'false');
	    $('#tour-game option[value="'+tournament.game+'"]').attr('selected', 'selected');
	    $('#tour-players').val(tournament.players);
	    $('#tour-date').val(date.getDate()+' '+month+' '+date.getFullYear());
	    $('#tour-time').val(date.getHours()+':'+date.getMinutes());
	  	$('#tour-prizes').html('');
	  	prize.forEach(
	  		function(currentValue) {
	  			var mesto = $('.tour-prize').length + 1;
				$('#tour-prizes').append('<div class="tour-prize"><span class="mesto">'+mesto+'</span> место <br><input type="text" class="form-control" value="'+currentValue+'"></div>');
	  		}
	  	);
	  	$('.tournament_btn').hide();
	  	$('.tournament_btn[data-action="update_tournament"]').show();
	  	$('.add-new-data-sidebar .load').fadeOut();
	  },
	  //dataType: dataType
	});

	$('.dt-buttons button').click(function() {
		$('.tournament_btn').hide();
	  	$('.tournament_btn[data-action="add_tournament"]').show();
	});

	$(".add-new-data").addClass("show");
	$(".overlay-bg").addClass("show");
  });

$('.user-edit').on("click",function(e){
    e.stopPropagation();
    //var id = $(this).attr('data-id');
    $('.add-new-data-sidebar .load').css('display', 'flex');
    $.ajax({
	  type: "POST",
	  url: 'actions.php',
	  data: {
	  	"action": "get_user",
	  	"id": $(this).attr('data-id')
	  },
	  success: function(data) {
	  	//console.log(data);

	  	var user = JSON.parse(data);

	  	$('#user-id').val(user.id);
	  	$('#user-name').val('Player_'+user.player_id);
	  	$('#user-tickets').val(user.tickets);
	    $('#user-balance').val(user.balance);
	  	$('.add-new-data-sidebar .load').fadeOut();
	  },
	  //dataType: dataType
	});

	$('.dt-buttons button').click(function() {
		$('.tournament_btn').hide();
	  	$('.tournament_btn[data-action="add_tournament"]').show();
	});

	$(".add-new-data").addClass("show");
	$(".overlay-bg").addClass("show");
  });


$('.give_id_pass').click(function () {
	$('#player_id_getPass span').text($('tr[data-id="'+$(this).attr('data-id')+'"]').find('.player_tour').text());
	$('#date_getPass span').text($('tr[data-id="'+$(this).attr('data-id')+'"]').find('.date_tour').text());
	$('#nametour_getPass span').text($('tr[data-id="'+$(this).attr('data-id')+'"]').find('.name_tour').text());
	$('#tourticket_id').val($(this).attr('data-id'));
	$('#id_touruser').val('');
	$('#pass_touruser').val('');
});

$('#send_idpass').click(function () {
	if (confirm('Вы проверили данные?')) {
		$.ajax({
			type: "POST",
			url: 'actions.php',
			data: {
				"action": "give_idpass",
				"id": $('#tourticket_id').val(),
				"give_id": $('#id_touruser').val(),
				"give_pass": $('#pass_touruser').val()
			},
			success: function(data) {
				if (data == 'success') {
					alert('Данные отправлены');
					location.reload();
				}
			},
			//dataType: dataType
		});
	}
});