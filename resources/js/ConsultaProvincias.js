$(document).ready(function () {

    $.ajax({
        url: '/Provincias/ConsultarProvincias',
        type: 'GET',
        dataType: 'json',
        success: function (res) {
            $('.provincias').append('<option value="">Provincia</option>');
                $.each(res, function (key, value) {
                    $('.provincias').append('<option value="' + value.id_provincia + '">' + value.descrip + '</option>');
               });
        }
    });

    $('.provincias').on('change', function () {
        var id_provincia = $(this).val();
        $.ajax({
            url: '/Provincias/BuscarCantonesProvincia',
            type: "GET",
            dataType: "json",
            data: { "id_provincia": id_provincia },
            success: function (data) {
                $('.cantones').empty();
                $('.cantones').append('<option value="">Cantones</option>');
                $.each(data, function (key, value) {
                    $('.cantones').append('<option value="' + value.id_canton + '">' + value.descrip + '</option>');
                });
            },
            error: function (data) {
                console.log('hubo un error');
            }
        });
    });

    $('.cantones').on('change', function () {
        var id_canton = $(this).val();
        $.ajax({
            url: '/Provincias/BuscarDistritosCanton',
            type: "GET",
            dataType: "json",
            data: { "id_canton": id_canton },
            success: function (data) {
                $('.distritos').empty();
                $('.distritos').append('<option value="">Distrito</option>');
                $.each(data, function (key, value) {
                    $('.distritos').append('<option value="' + value.id_distrito + '">' + value.descrip + '</option>');
                });
            },
            error: function (data) {
                console.log('hubo un error');
            }
        });
    });

});