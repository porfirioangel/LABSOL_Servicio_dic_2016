$(document).ready(function(){
    var next = 1;
    $("#numeroActividades").change(function(e){
        e.preventDefault();
        var num = " ";
        var newInput = ' ';
        $( "select option:selected" ).each(function() {

            num = $( this ).text();
            });

        for (i = 1; i <= num; i++) { 
             //alert("Holi "+i);
            newInput += '<div class="form-group"><label for="concept" class="col-sm-4 control-label">Actividad '+i+':</label><div class="col-sm-5"><input type="text" class="input form-control" id="campo'+i+'" name="campo'+i+'"></div></div>';
            //alert(newInput);
        }
        
        //alert("Numero: "+str);
        //$("#nuevasActividades").empty();
        $("#nuevasActividades").html(newInput);
      

        /*var addto = "#field" + next;
        //alert("addto: "+addto);
        var addRemove = "#field" + (next);
        //alert("addRemove: "+addRemove);
        next = next + 1;
        var newIn = '<div class="form-group"><input autocomplete="off" class="input form-control" id="field' + next + '" name="field' + next + '" type="text" >';
        //alert("newIn: "+newIn);

        var newInput = $(newIn);

        //alert("newInput: "+newInput);
        var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" >-</button></div>';
        
        //alert("removeBtn: "+removeBtn);


        var removeButton = $(removeBtn);
        //alert("removeButton: "+removeButton);

        $(addto).after(newInput);

        $(addRemove).after(removeButton);
        $("#field" + next).attr('data-source',$(addto).attr('data-source'));
        
        $("#count").val(next); 
        
            $('.remove-me').click(function(e){
                e.preventDefault();
                var fieldNum = this.id.charAt(this.id.length-1);
                //alert("fieldNum: "+fieldNum);
                var fieldID = "#field" + fieldNum;
                //alert("fieldID: "+fieldID);
                $(this).remove();
                $(fieldID).remove();
            });*/
    });
});

/*$(function(){
    $(document).on('focus', 'div.form-group-options div.input-group-option:last-child input', function(){
        var sInputGroupHtml = $(this).parent().html();
        alert("sInputGroupHtml: "+sInputGroupHtml);
        var sInputGroupClasses = $(this).parent().attr('class');
        alert("sInputGroupClasses: "+sInputGroupClasses);
        $(this).parent().parent().append('<div class="'+sInputGroupClasses+'">'+sInputGroupHtml+'</div>');
    });
    
    $(document).on('click', 'div.form-group-options .input-group-addon-remove', function(){
        $(this).parent().remove();
    });
});*/

    