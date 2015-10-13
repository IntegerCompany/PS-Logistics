(function ($) {
    // $(document).ready(function() {
    //$.ajaxSetup({
    //    type: "POST",
    //    url: window.location.origin + "/ajax"
    //});
    //        $.ajax({
    // 		data:{
    // 			'fileDataSent': 1,
    // 				        }});

    //    });

    var fileUpload, 
    	n = 0, 
    	fileData = [], 
    	fileDataSent = [],
    	fileSendArr = [],
    	 pos;
    
    $('.myFile').bind('change', function () {
        var l = this.files.length;
        fileUpload = this.files
        num = fileData.length;
        n += 1;

        for (var i = 0; i < l; i++) {
            $(this).after('<span class="file-name">' + this.files[i].name +
                '<button data-id="' + num + '" class="remove-btn"><i class="fa fa-trash-o"></i></button>' + '</span>');
            fileData[num] = this.files[i];
            num++;

        }
        pos = $(this);
        console.log(pos);
    });

    //console.log(pos);
    // n+=1 ;
    // switch(n){
    // 	case 1 :
    // 		for( var i =0;  i< l; i++){
    // 			$(this).before('<span class="file-name">'+this.files[i].name+
    // 			 '<button data-id="'+num+'" class="remove-btn"></button>'+'</span>');


    // 			fileData[num] = this.files[i];
    // 			num++;
    // 		}
    // 	break;
    // 	default:
    // 		for( var i =0;  i< l; i++){
    // 				$(this).after('<span class="file-name">'+this.files[i].name+'<button data-id="'+num+'" class="remove-btn"></button>'+'</span>');
    // 				fileData[num] = this.files[i];
    // 				num++;
    // 		}
    // 	break;
    // 			};
    // 			console.log(fileData);
    // });

	   function readImage(input, i) {
        var rez = "";
        if (input) {
            var FR = new FileReader();
            FR.onload = function (e) {
                rez = e.target.result;
                //console.log(fileDataSent[i] = rez);
                fileDataSent[i] = {
                    'name': input.name,
                    'type': input.type,
                    'base64': rez
                }
                return fileDataSent[i];
                 console.log(fileSendArr);
            };
            
            FR.readAsDataURL(input);
        }
    }


    $(document).on('click', ".remove-btn", function () {
        $(this).parent().remove();
        fileData.splice($(this).attr("data-id"), 1);
        console.log($(this).attr("data-id"));
    });

    $(".file-submit").on("click", function () {
        if (parseInt(fileData.length) > 8) {
            $(this).parent().find(".msg_error").html("You can only upload maximum 8 files.");
        } else {
        //console.log(fileData);
        	fileSendArr =[];

        	setTimeout(function(){
	            for (var i = 0; i < fileData.length; i++) {
					fileSendArr.push( readImage(fileData[i], i) );
	            }
                console.log('end' + fileSendArr);
	        }, 5);
    //         for (var i = 0; i < fileData.length; i++) {
				// fileSendArr.push( readImage(fileData[i], i) );
    //         }
                console.log('end' + fileSendArr);
		}

        //setTimeout(function () {
            //console.log(fileDataSent);
            //$.ajax({
            //    data: {
            //        'fileDataSent': fileDataSent,
            //    },
            //
            //    beforeSend: function () {
            //        $(".load").css("display", " block");//show loading gif
            //    },
            //    success: function () {
            //        $(".load").css("display", " none");//remove loading gif
            //        alert("success");
            //        console.log(fileData);
            //        $(".file-name").css("text-decoration", "underline");
            //        $(".file-name").css("color", "#0000FF");
            //    },
            //    error: function () {
            //        $(".load").css("display", " none");//remove loading gif
            //    }

            //});

            //console.log(fileDataSent)
        //}, 0);
    });

	

 


})(window.jQuery)

max;
                        max = files.length > 8 ? 8 : files.length;