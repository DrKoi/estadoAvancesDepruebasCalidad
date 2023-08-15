$(document).ready(function(){
    tablaPersonas = $("#tablaPersonas").DataTable({
        "language": {
            // ... Configuración del lenguaje ...
        }
    });

    $("#btnNuevo").click(function(){
        // ... Código para el botón Nuevo ...
    }); 

   

    $("#formPersonas").submit(function(e){
        e.preventDefault();
        nombre = $.trim($("#nombre").val());
        pais = $.trim($("#pais").val());
        edad = $.trim($("#edad").val());
        $.ajax({
            url: "bd/crud.php",
            type: "POST",
            dataType: "json",
            data: {nombre:nombre, pais:pais, edad:edad, id:id, opcion:opcion},
            success: function(data){
                console.log(data);
                id = data[0].id;
                nombre = data[0].nombre;
                pais = data[0].pais;
                edad = data[0].edad;
                if(opcion == 1){tablaPersonas.row.add([id,nombre,pais,edad]).draw();}
                else{tablaPersonas.row(fila).data([id,nombre,pais,edad]).draw();}
            }
        });
        $("#modalCRUD").modal("hide");
    });
});
