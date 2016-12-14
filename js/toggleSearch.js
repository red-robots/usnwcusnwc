jQuery(window).load(function(){
	jQuery('header.page img.showsearch').on('click', function(){
		jQuery('header.page #___gcse_0').toggle(function(){
			var $header=jQuery('header.page');
			if(Number($header.css('opacity'))===1){
				$header.css('opacity',"");
			}
			else $header.css('opacity',1);
		});
	});
});