$(function(){

    //画面プレビュー
    var $dropArea = $('.area-drop');
    var $fileInput = $('.input-file');
    $dropArea.on('dragover',function(e){
        e.stopPropagation();
        e.preventDefault();
        $(this).css('border','3px #ccc dashed');
    });

    $dropArea.on('dragleave',function(e){
        e.stopPropagation();
        e.preventDefault();
        $(this).css('border','none');
    });

    $fileInput.on('change',function(e){
        $dropArea.css('border','none');
        var file = this.files[0];
        $img = $(this).siblings('.prev-img');
        fileReader = new FileReader();
        fileReader.onload=function(event){
            $img.attr('src',event.target.result).show();
        };
        fileReader.readAsDataURL(file);
    });

});
