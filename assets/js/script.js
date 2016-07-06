var UA = UA || {};

UA.pageAnimation = (function($) {
	var _init = function () {
		$(window).resize(mainFunction);
		mainFunction();
	}

	var mainFunction = function (){
		// $('.masking').css({
		// 	'height':'100vh'
		// });
	}

	return {
		init : _init
	};
})(jQuery);

