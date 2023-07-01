$(document).ready(function () {
    $.ajaxSetup({ cache: false });
    $('#province').on('change', function () {
        data = {};
        console.log('Checking Canton and District...');
        data.province_id = $('#province').val();

        updateZone(data);
    });

    $('#canton').on('change', function () {
        data = {};
        console.log('Checking Districts...');
        data.canton_id = $('#canton').val();

        updateZone(data);
    });

    function updateZone(data) {

        console.log(data)
        $.ajax({
            // En data puedes utilizar un objeto JSON, un array o un query string
            data: data,
            //Cambiar a type: POST si necesario
            type: "GET",
            // Formato de datos que se espera en la respuesta
            dataType: "json",
            // URL a la que se enviará la solicitud Ajax
            url: "/get-cantons-districts",
            success: function (result) {
                console.log('Update...');
                if (result['cantons']) {
                    var $select_canton = $("#canton");
                    $select_canton.empty(); // remove old options
                    $.each(result['cantons'], function (key, canton) {
                        $select_canton.append($("<option></option>").attr("value", canton['id']).text(canton['name']));
                    });
                }

                if (result['districts']) {
                    var $select_district = $("#district");
                    $select_district.empty(); // remove old options
                    $.each(result['districts'], function (key, district) {
                        $select_district.append($("<option></option>").attr("value", district['id']).text(district['name']));
                    });
                }
            },
            error: function( req, status, err ) {
                console.log('Request Fail...', err);

            }
        });

    }

});
