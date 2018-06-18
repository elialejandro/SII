
//var url = "http://energia.ittg.mx/colaboradores/";
var url = "/colaboradores";

function agregar(){
    var formData = {
        users_id: $('#investigador').val(),
        proyecto_id: $('#noproyecto').val(),
    }
    var producto_id = $('#producto_id').val();;
    console.log(formData);
    console.log(url);

    $.ajax({
        type: 'POST',
        url: url,
        data: formData,
        dataType: 'json',
        headers: { 'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')  },
        success: function (data) {
                        console.log("regreso en agregar:");
            console.log(data);
            if (data[0].participacion == null ) 
                data[0].participacion = "Aún no acepta";
            else 
                data[0].participacion = "Acepto";
            var colaborador = '<tr id="cobaborador_' + data[0].id + '"><td>' + data[0].cvutecnm + '</td><td>' + data[0].name + '</td><td>' + data[0].participacion + '</td>';
            colaborador += '<td><button class="btn btn-danger btndel" value="' + data[0].id + '">Eliminar</button></td></tr>';
            $('#colaboradores-list').append(colaborador);
        //    $('#frmcolaboradores').trigger("reset");
        //    $('#colaboradoresModal').modal('hide');
        },
        error: function (data) {
            console.log('Error:', data);
        },
        async:true
    });
}

function poner(){

}


function desinvitar(){
    var formData = {
        users_id: this.value,
        proyecto_id: $('#noproyecto').val(),
    }

    console.log(formData);
    console.log(url);
    $.ajax({
        type: 'POST',
        url: url + "/desinvitar" ,
        data: formData,
        dataType: 'json',
        headers: { 'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')  },
        success: function (data) {
            console.log("regreso en eliminar:");
            console.log(data);
            $("#cobaborador_" + data.id).remove();
        },
        error: function (data) {
            console.log('Error:', data);
        },
        async:true
    });
}

