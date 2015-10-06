(function($){
	$(document).ready(function() {
        $("h4").click(function() {
            var $this = $(this);
                $this
                    .next("table")
                    .slideToggle("fast")
                    .siblings("table:visible")
                    .slideUp("fast");
                $this.toggleClass("active");
            })
    });
		
		var fileUpload, n = 0, fileData = [], fileDataSent = [];
			$('.myFile').bind('change', function() {
				var l = this.files.length;
					fileUpload = this.files
					num = fileData.length;
					
			n+=1 ;
			switch(n){
				case 1 :
					for( var i =0;  i< l; i++){
						$(this).before('<span class="file-name">'+this.files[i].name+
						 '<button data-id="'+num+'" class="remove-btn"></button>'+'</span>');


						fileData[num] = this.files[i];
						num++;
					}
				break;
				default:
					for( var i =0;  i< l; i++){
							$(this).after('<span class="file-name">'+this.files[i].name+'<button data-id="'+num+'" class="remove-btn"></button>'+'</span>');
							fileData[num] = this.files[i];
							num++;
					}	
				break;
						};
						console.log(fileData);
			});

			$(document).on('click', ".remove-btn", function(){
				$(this).parent().remove();
				    fileData.splice($(this).attr("data-id"), 1);
				    console.log($(this).attr("data-id"));
			});

			$(".file-submit").click(function(){
			    if (parseInt(fileData.length)>8){
				          $(this).parent().find(".msg_error").html("You can only upload maximum 8 files.");
				      }
    			 		else
				       	//console.log(fileData);

				       for( var i =0; i< fileData.length; i++){
				       		readImage(fileData[i], i);
				       }
				       setTimeout(function(){ console.log(fileDataSent) }, 0);
			});
			function readImage(input, i) {
				var rez = "";
			    if ( input ) {
			        var FR= new FileReader();
			        FR.onload = function(e) {
			        	rez = e.target.result;
			        	//fileDataSent[i] = rez;
			        	fileDataSent[i] = {
			        		'name': input.name,
			        		'type': input.type,
			        		'base64': rez
			        	}
			        	// fileDataSent['name'] = input.name;
			        	// fileDataSent['type'] = input.type;
			        	// fileDataSent['base64'] = rez;
			            //console.log( fileDataSent[i],i);
			           
			        };     
			       
			        FR.readAsDataURL( input);
			    }
			}
})(window.jQuery)

// <button type="button" class="btn btn-default remove-attach-button pull-left">
//                         <span class="glyphicon glyphicon-remove"></span>
//                     </button>
//                     <input type="file" class="hidden attach-input-inner" name="test" accept="image/*" >



//                     <button type="button" class="btn btn-default attach-button pull-left">
//                         <span class="glyphicon glyphicon-paperclip"></span>
//                     </button>
//                     <button type="button" class="btn btn-default remove-attach-button pull-left">
//                         <span class="glyphicon glyphicon-remove"></span>
//                     </button>
//                     <input type="file" class="hidden attach-input-inner" name="test" accept="image/*" >