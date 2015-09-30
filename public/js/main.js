$( document ).ready(function() {
	$(function(){
		$.ajaxSetup({
			type: "POST",
			url: window.location.origin + "/ajax"
		});
		$('#loginin').on('click',function(){
			/*
			-- must be validation!!!! --
			 */
			var arr = {};
			$('.auth-value input[id]').each(function(){
				var c = $(this),
					n = c.prop('id'),
					v = c.val();
				arr[n] = v;

			});
			if(Object.keys(arr).length == 2) {
				$.ajax({
					data: {
						'login-request': arr
					},
					success: function (data) {
						if(data){
							location.replace('/shipping');
						}

					}
				});
			}


		});
	});
});