
/*
Inicialización de objetos de pantalla del formulario
    Diseño de tabla con campos y cabeceras
    Creación de constantes de los campos del formulario
    Creación de combos y su inicialización de valores por defecto
    Creación de eventos

*/
function doHazFormulariIngrsadoo() {
    /*
        Creata datatable
    */
    var columnas = [
        { "data": "inicio" },
        { "data": "numerohc" },
        { "data": "paciente" },
        { "data": "edad" },
        { "data": "servicio" },
        { "data": "observaciones" }
    ];
    var titulos = [
        { "title": "Llegada", "targets": 0 },
        { "title": "numerohc", "targets": 1 },
        { "title": "Paciente", "targets": 2 },
        { "title": "Edad", "targets": 3 },
        { "title": "Serv", "targets": 4 },
        { "title": "Observa", "targets": 5 }        
    ];
    var tabla = getTabla("#tablaIngresados", columnas, titulos);
      doActulizaTablUrgencias();
    
}


function doActulizaTablUrgencias() {
    var tabla = $('#tablaIngresados').DataTable();

    var data = tabla.rows();
    data.each(function () {
        this.remove();
    });


    $.ajax({
        type :"GET",
        url: "http://localhost:8080/ServiciosHttp/His?llamada=ENURGENCIAS" ,
        contentType: 'application/json; charset=utf-8',
        dataType: "json",

        beforeSend: function () {
            $respuesta.html("Cargando...");
        },
        success: function (result) {
            tabla.rows.add(result).draw();
            tabla.draw();
            $respuesta.html("");
             
            return;
        },
        error: function (xhr, status, error) {
            doMuestraError("urgencias.js"
                , "doActulizaTablUrgencias \n http://localhost:8080/ServiciosHttp/His?llamada=ENURGENCIAS"
                , xhr, status, error);
        }
    });
 
}
