/**
 * Created by porfirio on 7/24/16.
 */

$(document).ready(function () {
    var pendientes = $('.st-pendiente');
    var aceptados = $('.st-aceptado');
    var rechazados = $('.st-rechazado');
    var devueltos = $('.st-devuelto');
    var chkAceptado = $('#chkAceptado');
    var chkPendiente = $('#chkPendiente');
    var chkRechazado = $('#chkRechazado');
    var chkDevuelto = $('#chkDevuelto');

    chkAceptado.change(function () {
        refreshRows();
    });

    chkPendiente.change(function () {
        refreshRows();
    });

    chkRechazado.change(function () {
        refreshRows();
    });

    chkDevuelto.change(function () {
        refreshRows();
    });

    function refreshRows() {
        if (chkAceptado.is(':checked')) {
            aceptados.removeClass('hidden');
        } else {
            aceptados.addClass('hidden');
        }

        if (chkRechazado.is(':checked')) {
            rechazados.removeClass('hidden');
        } else {
            rechazados.addClass('hidden');
        }

        if (chkPendiente.is(':checked')) {
            pendientes.removeClass('hidden');
        } else {
            pendientes.addClass('hidden');
        }

        if (chkDevuelto.is(':checked')) {
            devueltos.removeClass('hidden');
        } else {
            devueltos.addClass('hidden');
        }
    }
});