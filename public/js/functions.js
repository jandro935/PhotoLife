$(document).ready(function () {
    console.log('Ready');

    $('.preview-image, .change-image-button').hide();

    function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {

                var image = new Image();
                image.src = e.target.result;

                image.onload = function () {
                    var maxWidth = 555;
                    var aspectRelation = this.width / this.height;

                    if (this.width > maxWidth) {
                        var newHeight = maxWidth / aspectRelation;
                        $('.preview-image').css('width', maxWidth);
                        $('.preview-image').css('height', newHeight);
                    }

                    $('.preview-image, .change-image-button').show();
                    $('.Icon-upload').hide();
                    $('.preview-image').attr('src', e.target.result);
                }
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $('#image-media').change(function(){
        readURL(this);
    });

    $('.change-image-button').on('click', function () {
        $('.preview-image').hide();
        $('.Icon-upload').show();
    });
});