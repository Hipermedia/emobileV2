jQuery(document).ready(function($) {
	$(".grado").hide();
	$(".asignatura").hide();
	$(".bloque").hide();
	$('#nivel').on('change',function(){
		var selection = $(this).val();
		switch(selection) {
			case "Primaria":
				$('.grado').prop('required',true);
				$('.asignatura').prop('required',true);
				$('.bloque').prop('required',true);
				$('.grado').prop('selectedIndex',0);
				$('.asignatura').prop('selectedIndex',0);
				$('.bloque').prop('selectedIndex',0);
				$(".grado").show();
				$(".asignatura").show();
				$(".bloque").show()
				$("#grado").html("<option value=''>--Selecciona uno--</option><option value='1°'>1°</option><option value='2°'>2°</option><option value='3°'>3°</option><option value='4°'>4°</option><option value='5°'>5°</option><option value='6°'>6°</option>");
			break;
			case "Secundaria":
				$('.grado').prop('required',true);
				$('.asignatura').prop('required',true);
				$('.bloque').prop('required',true);
				$('.grado').prop('selectedIndex',0);
				$('.asignatura').prop('selectedIndex',0);
				$('.bloque').prop('selectedIndex',0);
				$(".grado").show();
				$(".asignatura").show();
				$(".bloque").show();
				$("#grado").html("<option value=''>--Selecciona uno--</option><option value='1°'>1°</option><option value='2°'>2°</option><option value='3°'>3°</option>");
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