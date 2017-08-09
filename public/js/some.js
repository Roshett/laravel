$( document ).ready(function() {
	console.log('Hello!');
	$(function(){

		$( "#slider-range" ).slider({
			range: true,
			min: 0,
			max: 2000,
			values: [ 0, 2000 ],
			slide: function( event, ui ) {
				$('.price1').val(ui.values[ 0 ] + " Р");
				$('.price2').val(ui.values[ 1 ] + " Р");
			}
		});
		$('.price1').val(ui.values[ 0 ]);
		$('.price2').val(ui.values[ 1 ]);

	});
});