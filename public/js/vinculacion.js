
var url = "/vinculacion";
 
function agregar(){
             
//id, descripcion, partida, monto, cronograma_id, proyecto_id
    var archivo = $('#archivo');
    var noproy = $('#proyecto_id').val();

    var formData = new FormData();
    formData.append('evidencia', archivo[0].files[0]);
    formData.append('proyecto_id', noproy);
    

//    var formData = new FormData(document.getElementById("frmvinculacion"));
    console.log('formData:', formData);
    $.ajax({

        type: 'POST',
        url: url,
        data: formData,
        dataType: "json",        
        cache: false,
        contentType: false,
        processData: false,        
        headers: { 'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')  },
        success: function (data) {
            alert("Carta de vinculación subida correctamente");
            console.log("regreso en agregar:",data);
            epdf = $('#pdf');
            $('#pdf').attr('src', data.fileName);
            javascript:location.reload();

        },
        error: function (data) {
            console.log('Error:', data);
        },
        async:true
    }).fail(function () {
        alert('No fue posible cargar la carta de vinculación.');
    });

}

function eliminar( id ){

    var formData = {
        proyecto_id: id,
    }

    console.log(formData);
    console.log(url);
    $.ajax({
        type: 'POST',
        url: url + "/eliminar" ,
        data: formData,
        dataType: 'json',
        headers: { 'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')  },
        success: function (data) {
            console.log("regreso en eliminar:", data);
            if (data.realizado){
                alert("Carta de vinculación eliminada");
                $('#pdf').attr('src', 'evidencias/balnco.pdf');
                javascript:location.reload();
            }
            else alert("No se pudo eliminar la carta de vinculación.")
            
            // $('#gastos-list_actividad_' + data.cronograma_id)
            // quitar = "#gasto_" + data.id;
            // console.log ("QUITAR: ", quitar);
            // $("#gasto_" + data.id ).remove();
        },
        error: function (data) {
            console.log('Error:', data);
        },
        async:true
    }).fail(function () {
        alert('No fue posible eliminar la carta de vinculación.');
    });
}

