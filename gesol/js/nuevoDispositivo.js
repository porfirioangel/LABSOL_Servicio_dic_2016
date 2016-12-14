/**
 * Este script muestra el dialogo modal de "nuevo dispositivo" al seleccionar
 * la opcion "otro" en la lista de tipo de dispositivo para la creacion o
 * edicion de productos en el inventario.
 */

$(document).ready(function () {
    var selectTipoDispositivo = $('#tipo_dispositivo');
    
    selectTipoDispositivo.click(function () {
        if (selectTipoDispositivo.val() == 'Otro') {
            $('#myModal').modal('show');
        }
    });
});