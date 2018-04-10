$(document).ready(function() {
	
	$(document).ready(function(){
		$('.collapsible').collapsible();
	});

	activar_events();
});

var events_sum_etc = false;

function activar_events(){

$(".get_product").click(function( event ){
	
	if( $(this).is(":checked") ){

		$price = $(this).parent().find('.get_price').html()

		$coded = $(this).parent().parent().parent().parent().find('.code_product').html();

		$name = $(this).parent().parent().parent().parent().find('.name_product').html()

		$(".collapsible").append('<li id="'+$coded+'" >'+
	    '<div class="collapsible-header">'+
	      '<i class="material-icons">assignment_turned_in</i>'+
	      '<p> Description : '+$name+'<br>Unit price : $<strong class="unit_price">'+$price+'</strong></p>'+

	       '<span class="badge">Cantidad : <strong class="count">1</strong> Total : $<strong class="total">'+$price+'</strong>'+
	      	' <a class="btn-floating btn-small waves-effect waves-light teal darken-1 pluss"><i class="material-icons">add</i></a>'+
	      	' <a class="btn-floating btn-small waves-effect waves-light red disabled less"><i class="material-icons">remove</i></a>'+
		   '</span></div>'+
	  	'</li>').fadeIn();

	  	$("#total_pro").html( parseInt( $("#total_pro").html() ) + 1 );
		
		$("#total_pri").html( parseInt( $("#total_pri").html() ) + parseInt($price) );	

		activar_sum_and_less();
		

	}else {
		
		$coded = $(this).parent().parent().parent().parent().find('.code_product').html();
		
		if( $("#"+$coded).length > 0 ){
	
			$cantidad = parseInt($("#"+$coded).find('.count').html()) ;
	
			$total = parseInt($("#"+$coded).find('.total').html()) ;
			
		  	$("#total_pro").html( parseInt( $("#total_pro").html() )- $cantidad );
			
			$("#total_pri").html( parseInt( $("#total_pri").html() )- $total );	
	
			$("#"+$coded).remove();
		}


	}

});

$(".get_price").click(function(){});

}


/*

rumbosexpress.com
lisy1215

entrar a el programa ...



*/

function activar_sum_and_less(){

events_sum_etc = true;		

		$('.pluss').unbind( 'click' ) ;
		$('.less').unbind( 'click' ) ;

		$('.pluss').bind( 'click', function(event) {
			/* Act on the event */
			
			// Optener cantidad de producto
			$cantidad =  $(this).parent().find('.count').html();
			// optener precio por producto
			$price_unit = $(this).parent().parent().parent().find('.unit_price').html();
			//optener el total que sera cambiado poe uno nuevamente  calculado
			$total = $(this).parent().find('.total').html();
			// parsear y realizar operaciones con las canridades  optenidas
			$new_cantidad = parseInt($cantidad)+1;		

			if( parseInt($cantidad)+1 > 1 ){
				$(this).parent().find(".less").removeClass('disabled');
			}else $(this).parent().find( ".less" ).addClass('disabled');		

			$new_total = parseFloat($price_unit)*$new_cantidad;
			// Imprimir cantidades de calculos

			$(this).parent().find('.total').html($new_total);
			$(this).parent().find('.count').html($new_cantidad);
			$("#total_pro").html( parseInt( $("#total_pro").html() ) - $cantidad + $new_cantidad );

			$("#total_pri").html( parseInt( $("#total_pri").html() ) - $total + $new_total );	


		});

		$('.less').bind('click' ,function(event) {
			/* Act on the event */
			// Optener cantidad de producto
			$cantidad =  $(this).parent().find('.count').html();
			
			if( parseInt($cantidad)-1 < 2 ){
				$(this).addClass('disabled');
			}else $( this ).removeClass('disabled');
			
			// optener precio por producto
			$price_unit = $(this).parent().parent().parent().find('.unit_price').html();
			//optener el total que sera cambiado poe uno nuevamente  calculado
			$total = $(this).parent().find('.total').html();
			// parsear y realizar operaciones con las canridades  optenidas
			$new_cantidad = parseInt($cantidad)-1;		
		

			$new_total = parseFloat($price_unit)*$new_cantidad;
			// Imprimir cantidades de calculos

			$(this).parent().find('.total').html($new_total);
			$(this).parent().find('.count').html($new_cantidad);
			$("#total_pro").html( parseInt( $("#total_pro").html() ) - $cantidad + $new_cantidad );

			$("#total_pri").html( parseInt( $("#total_pri").html() ) - $total + $new_total );	

		});			
}