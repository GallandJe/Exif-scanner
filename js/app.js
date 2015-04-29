$(document).ready(function () {
    /**
    * Add drop functionality to our holder,
    * This is standard HTML5 File API
    */
    var ignoreDrag = function(e) {
        var event = typeof e.originalEvent != 'undefined' ? e.originalEvent : e;
        if (event.stopPropagation) {
            event.stopPropagation();
        }
        if (event.preventDefault) {
            event.preventDefault();
        }
    };

    $("#dropzone").bind('dragover', ignoreDrag).bind('dragenter', ignoreDrag).bind('drop', function(e){
        var holder= this;
        e = (e&&e.originalEvent?e.originalEvent:window.event) || e;

        ignoreDrag(e);

        var files = (e.files||e.dataTransfer.files);

        var s = "";
        for (var i = 0; i < files.length; i++) {
            (function(i){
                var reader = new FileReader();
                reader.onload = function (event) {
                    var file = files[i];
                    var xhr = new XMLHttpRequest();
                    xhr.addEventListener('load', function(e){
                        $('.exif').empty();
                        $('.exif').append(e.target.responseText);
                    });
                    xhr.open('post', 'upload.php');
                    xhr.setRequestHeader('content-type', 'multipart/form-data');
                    xhr.setRequestHeader('x-file-type', file.type);
                    xhr.setRequestHeader('x-file-size', file.fileSize);
                    xhr.setRequestHeader('x-file-name', file.name);
                    xhr.send(file);
                };
                reader.readAsDataURL(files[i]);
            })(i);
        }
        
        return false;
    });
});