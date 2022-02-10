$(document).ready(function(e) {


    $('#profpic').change(function() {

        let reader = new FileReader();

        reader.onload = (e) => {

            $('#profpic-preview').attr('src', e.target.result);
        }

        reader.readAsDataURL(this.files[0]);

    });
    $('#wallpaper').change(function() {

        let reader = new FileReader();

        reader.onload = (e) => {

            $('#wallpaper-preview').attr('src', e.target.result);
        }

        reader.readAsDataURL(this.files[0]);

    });

});