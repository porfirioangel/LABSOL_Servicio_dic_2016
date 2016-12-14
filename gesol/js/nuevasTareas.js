$(document).ready(function(){
    var next = 1;
    $("#numeroTareas").change(function(e){
        e.preventDefault();
        var num = " ";
        var newInput = ' ';
        $( "select option:selected" ).each(function() {

            num = $( this ).text();
            });

        for (i = 1; i <= num; i++) { 
            /*
            '<label for="amount" class="col-sm-3 col-md-offset-6 control-label">
                Tarea '+i+'</label>
            <div class="form-group">
                <label for="amount" class="col-sm-4 control-label">
                    Nombre:
                </label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="nombre'+i+'" name="nombre'+i+'">
            </div>
            </div>
                <div class="form-group">
                    <label for="amount" class="col-sm-4 control-label">
                        Tiempo:
                    </label>
                <div class="col-sm-5">
                <input type="number" class="form-control" id="duracion'+i+'" name="duracion'+i+'">
                </div>
            </div>
            <div class="form-group">
                <label for="amount" class="col-sm-4 control-label">
                    Porcentaje:
                </label>
            <div class="col-sm-5">
                <input type="number" class="form-control" id="porcentaje'+i+'" name="porcentaje'+i+'">
            </div>
            </div>
            </div>
            <hr>';
        
            */
            //newInput += '<div class="form-group"><label for="concept" class="col-sm-4 control-label">Actividad '+i+':</label><div class="col-sm-5"><input type="text" class="input form-control" id="campo'+i+'" name="campo'+i+'"></div></div>';
            newInput += '<label for="amount" class="col-sm-3 col-md-offset-6 control-label">Tarea '+i+'</label><div class="form-group"><label for="amount" class="col-sm-4 control-label">Nombre:</label><div class="col-sm-5"><input type="text" class="form-control" id="nombre'+i+'" name="nombre'+i+'"></div></div><div class="form-group"><label for="amount" class="col-sm-4 control-label">Tiempo:</label><div class="col-sm-5"><input type="number" class="form-control" id="duracion'+i+'" name="duracion'+i+'"></div></div><div class="form-group"><label for="amount" class="col-sm-4 control-label">Porcentaje:</label><div class="col-sm-5"><input type="number" class="form-control" id="porcentaje'+i+'" name="porcentaje'+i+'"></div></div></div><hr>';
        
        }
        
        
        $("#nuevasTareas").html(newInput);
      

        
    });
});