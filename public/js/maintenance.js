//(function ($) {
//    // $(document).ready(function() {
//    //$.ajaxSetup({
//    //    type: "POST",
//    //    url: window.location.origin + "/ajax"
//    //});
//    //        $.ajax({
//    // 		data:{
//    // 			'fileDataSent': 1,
//    // 				        }});
//
//    //    });
//
//    var fileUpload, n = 0, fileData = [], fileDataSent = [], pos;
//    //$('.myFile').bind('change', function () {
//    //    var l = this.files.length;
//    //    fileUpload = this.files
//    //    num = fileData.length;
//    //    n += 1;
//    //
//    //    for (var i = 0; i < l; i++) {
//    //        $(this).after('<span class="file-name">' + this.files[i].name +
//    //            '<button data-id="' + num + '" class="remove-btn"><i class="fa fa-trash-o"></i></button>' + '</span>');
//    //        fileData[num] = this.files[i];
//    //        num++;
//    //
//    //    }
//    //    pos = $(this);
//    //    console.log(pos);
//    //});
//    var sendObj = {};
//    sendObj.arr = [];
//    //$('.myFile').bind('change', function () {
//    //    var c = $(this),
//    //        f = c[0].files,
//    //        l = f.length;
//    //
//    //    for(var i = 0; i<l ;i++ ){
//    //        var reader = new FileReader(),
//    //            type = f[i].type,
//    //            name = f[i].name;
//    //        reader.onload = function () {
//    //            var obj = JSON.stringify({
//    //                    "base64": reader.result,
//    //                    "type": type,
//    //                    "name": name
//    //                });
//    //            c.after('<span class="file-name" data-info="'+obj+'">' + name + '<button class="remove-btn"><i class="fa fa-trash-o"></i></button> </span>');
//    //        };
//    //        reader.readAsDataURL(f[i]);
//    //    }
//    //    console.log(sendObj);
//    //});
//
//    //console.log(pos);
//    // n+=1 ;
//    // switch(n){
//    // 	case 1 :
//    // 		for( var i =0;  i< l; i++){
//    // 			$(this).before('<span class="file-name">'+this.files[i].name+
//    // 			 '<button data-id="'+num+'" class="remove-btn"></button>'+'</span>');
//
//
//    // 			fileData[num] = this.files[i];
//    // 			num++;
//    // 		}
//    // 	break;
//    // 	default:
//    // 		for( var i =0;  i< l; i++){
//    // 				$(this).after('<span class="file-name">'+this.files[i].name+'<button data-id="'+num+'" class="remove-btn"></button>'+'</span>');
//    // 				fileData[num] = this.files[i];
//    // 				num++;
//    // 		}
//    // 	break;
//    // 			};
//    // 			console.log(fileData);
//    // });
//
//    //$(document).on('click', ".remove-btn", function () {
//    //    $(this).parent().remove();
//    //    fileData.splice($(this).attr("data-id"), 1);
//    //    console.log($(this).attr("data-id"));
//    //});
//
//    //$(".file-submit").click(function () {
//    //    if (parseInt(fileData.length) > 8) {
//    //        $(this).parent().find(".msg_error").html("You can only upload maximum 8 files.");
//    //    }
//    //    else
//    //    //console.log(fileData);
//    //
//    //        for (var i = 0; i < fileData.length; i++) {
//    //            readImage(fileData[i], i);
//    //        }
//    //    //setTimeout(function () {
//    //        console.log(fileDataSent);
//    //        //$.ajax({
//    //        //    data: {
//    //        //        'fileDataSent': fileDataSent,
//    //        //    },
//    //        //
//    //        //    beforeSend: function () {
//    //        //        $(".load").css("display", " block");//show loading gif
//    //        //    },
//    //        //    success: function () {
//    //        //        $(".load").css("display", " none");//remove loading gif
//    //        //        alert("success");
//    //        //        console.log(fileData);
//    //        //        $(".file-name").css("text-decoration", "underline");
//    //        //        $(".file-name").css("color", "#0000FF");
//    //        //    },
//    //        //    error: function () {
//    //        //        $(".load").css("display", " none");//remove loading gif
//    //        //    }
//    //
//    //        //});
//    //
//    //        console.log(fileDataSent)
//    //    //}, 0);
//    //});
//
//
////    function readImage(input, i) {
////        var rez = "";
////        if (input) {
////            var FR = new FileReader();
////            FR.onload = function (e) {
////                rez = e.target.result;
////                //fileDataSent[i] = rez;
////                fileDataSent[i] = {
////                    'name': input.name,
////                    'type': input.type,
////                    'base64': rez
////                }
////
////            };
////
////            FR.readAsDataURL(input);
////        }
////    }
////
////
////})(window.jQuery)
//
