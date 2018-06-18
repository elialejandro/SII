
//var url = "http://energia.ittg.mx/colaboradores/";
var url = "/colaboradores";
function aceptar(){
    var formData = {
        colaboracion: this.value,
    }
    var h = "X-CSRF-TOKEN";
    console.log(formData);
    console.log(url);
    $.ajax({
        type: 'POST',
        url: url + "/aceptar" ,
        data: formData,
        dataType: 'json',
        headers: { h: $('meta[name="_token"]').attr('content')  },
        success: function (data) {
            console.log("regreso en aceptar:", data);
            if(data.aceptado){
                $('#si' + data.colaboracion).hide();
                $('#no' + data.colaboracion).hide();
            }
        },
        error: function (data) {
            console.log('Error:', data);
        },
        async:true
    });
}

function rechaza(){
    var formData = {
        colaboracion: this.value,
    }
    var h = "X-CSRF-TOKEN";
    console.log(formData);
    console.log(url);
    $.ajax({
        type: 'POST',
        url: url + "/rechazar" ,
        data: formData,
        dataType: 'json',
        headers: { h: $('meta[name="_token"]').attr('content')  },
        success: function (data) {
            console.log("regreso en rechazar:" , data);
            if(data.rechazado){
                $('#si' + data.colaboracion).hide();
                $('#no' + data.colaboracion).hide();
            }
        },
        error: function (data) {
            console.log('Error:', data);
        },
        async:true
    });
}

