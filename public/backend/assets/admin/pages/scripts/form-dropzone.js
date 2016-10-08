Dropzone.options.myDropzone = {
    maxFilesize: 2,
    acceptedFiles: 'image/*',
    success: function(file, response){



            this.on("complete", function (file) {
                if (this.getUploadingFiles().length === 0 && this.getQueuedFiles().length === 0) {
                    location.reload();
                }
            });
        if(file.status == 'success'){
            handleDropzoneFileUpload.handleSuccess(response);

        } else {
            handleDropzoneFileUpload.handleError(response);
        }
    }

};

var handleDropzoneFileUpload = {
    handleError: function (response) {
        console.log(response);
    },
    handleSuccess: function (response) {
        var imageList =  $('#append');
        var imageSrc = response.file_path;
        //$(imageList).append('<a class="thumbnail" href=""><img class="img-responsive" src="' + imageSrc + '"></a>')
    }

};

$(document).ready(function() {
    console.log('Document is ready');

});

