jQuery(document).ready(function($) {

	$(".grado").hide();
	$(".asignatura").hide();
	$(".bloque").hide();
	$("#nivel").prop('required',true);
	$('#nivel').on('change',function(){
		var selection = $(this).val();
		switch(selection) {
			case "Preescolar":
				$('.grado').prop('required',false);
				$('.asignatura').prop('required',false);
				$('.bloque').prop('required',false);
				$('.grado').prop('selectedIndex',0);
				$('.asignatura').prop('selectedIndex',0);
				$('.bloque').prop('selectedIndex',0);
				$(".grado").show();
				$(".asignatura").hide();
				$(".bloque").hide();
				$("#grado").html("<option value=''></option><option value='1°'>1°</option><option value='2°'>2°</option><option value='3°'>3°</option>");
			break;
			case "Primaria":
				$('.grado').prop('required',false);
				$('.asignatura').prop('required',false);
				$('.bloque').prop('required',false);
				$('.grado').prop('selectedIndex',0);
				$('.asignatura').prop('selectedIndex',0);
				$('.bloque').prop('selectedIndex',0);
				$(".grado").show();
				$(".asignatura").show();
				$(".bloque").show()
				$("#grado").html("<option value=''></option><option value='1°'>1°</option><option value='2°'>2°</option><option value='3°'>3°</option><option value='4°'>4°</option><option value='5°'>5°</option><option value='6°'>6°</option>");
			break;
			case "Secundaria":
				$('.grado').prop('required',false);
				$('.asignatura').prop('required',false);
				$('.bloque').prop('required',false);
				$('.grado').prop('selectedIndex',0);
				$('.asignatura').prop('selectedIndex',0);
				$('.bloque').prop('selectedIndex',0);
				$(".grado").show();
				$(".asignatura").show();
				$(".bloque").show();
				$("#grado").html("<option value=''></option><option value='1°'>1°</option><option value='2°'>2°</option><option value='3°'>3°</option>");
			break;
			default:
				$('.grado').prop('required',false);
				$('.asignatura').prop('required',false);
				$('.bloque').prop('required',false);
				$('.grado').prop('selectedIndex',0);
				$('.asignatura').prop('selectedIndex',0);
				$('.bloque').prop('selectedIndex',0);
				$(".grado").hide();
				$(".asignatura").hide();
				$(".bloque").hide();
		}
	});


});