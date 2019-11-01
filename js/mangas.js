$(document).ready(function () {
              
    readDatos();

});// document ready end
  
function eliminar(Id){
        Swal.fire({
          title: 'Advertencia!!',
          text: "¿Esta seguro de eliminar este registro?",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Si, Borrar!!'
        }).then((result) => {
          if (result.value) {
           var dataString = 'Id='+Id;
                  $.ajax({
                  type: "POST",      
                  url: "class/delete.php",
                  data: dataString,
                    success: function(respuesta){
                    var respuesta = JSON.parse(respuesta);
                        if(respuesta.success){
                           Swal.fire(
                              'Borrado!',
                              'El registro de ha borrado',
                              'success'
                            )
                          //location.reload();
                          readDatos();
                         }else{
                           Swal.fire({
                                type: 'error',
                                title: 'Error al Eliminar!',
                                showConfirmButton: false,
                                timer: 2000,
                                width: '250px'
                            });
                         }
       },
         error: function(respuesta)
         {       
            alert("Error general"); 
          }  
        });// fin de ajax 
          

          }// fin de result.value
        })//fin de confirmacionde borrar
}//Fin funcion elimina

$('#btnActualizar').click(function(){  
  $.ajax({
        type: "POST",       
        url: "class/update.php?t=" + Math.random(),
        data: $("#frmEditar").serialize(), // Adjuntar los campos del formulario enviado.
          success: function(respuesta){
          var respuesta = JSON.parse(respuesta);
            if(respuesta.success){
                Swal.fire({
                    type: 'success',
                    title: 'Registro Actualizado!',
                    showConfirmButton: false,
                    timer: 2500,
                    width: '250px'
                });
                  //location.reload();
                  readDatos();
            }else{
                 Swal.fire({
                    type: 'error',
                    title: 'Error al Guardar!',
                    showConfirmButton: false,
                    timer: 2000,
                    width: '250px'
                 });
            }
          },
             error: function(respuesta)
                 {       
                     alert("Error general"); 
                 }
       
    }); 
});

function editar(Id){
      var dataString = 'Id='+Id;     
        $.ajax({
            type: "GET",       
            url: "class/obtener.php",
            data: dataString,
            success: function(datos) {
              var datos = JSON.parse(datos);
              if(!datos.error){
                //llena el formulario modal para la edicion.
              $('#Id').val(datos[0].Id);
              $('#Nombre').val(datos[0].Nombre);
              $('#Capitulo').val(datos[0].Capitulo);
              $('#Estatus').val(datos[0].Estatus);
              $('#Tipo').val(datos[0].Tipo);
              $('#Link').val(datos[0].Link);
              $('#Detalles').val(datos[0].Detalles);
              }else{      
                Swal.fire({
                      type: 'error',
                      title: 'Error al Cargar!',
                      showConfirmButton: false,
                      timer: 2000,
                      width: '250px'
                });
              }
                                    
          }
        }); 
}
//Fin funcionar editar

//metodo read
function readDatos(){
        $.ajax({
              type: "POST",
              url: "class/read.php",
              success: function(datos) {
                      var datos = JSON.parse(datos);
                         $("#datatable tbody").empty();
                             $(datos).each(function(indice,registro){
                              var fila = "<tr>";
                                      fila+="<td>"+registro.Id+"</td>";
                                      fila+="<td>"+registro.Nombre+"</td>";
                                      fila+="<td>"+registro.Capitulo+"</td>";

                                          if (registro.Estatus=="Publicandose") {
                                            fila+="<td> <span class=\"label label-success\">"+registro.Estatus+"</span></td>";
                                          }else if (registro.Estatus == "Pausado") {
                                            fila+="<td> <span class=\"label label-primary\">"+registro.Estatus+"</span></td>";
                                          }else if (registro.Estatus == "Finalizado") {
                                            fila+="<td> <span class=\"label label-danger\">"+registro.Estatus+"</span></td>";
                                          }else if (registro.Estatus == "Detenido") {
                                            fila+="<td> <span class=\"label label-warning\">"+registro.Estatus+"</span></td>";
                                          }

                                          if (registro.Tipo=="Manga") {
                                            fila+="<td> <span class=\"label label-primary\">"+registro.Tipo+"</span></td>";
                                          }else if (registro.Tipo == "Manhua") {
                                            fila+="<td> <span class=\"label label-success\">"+registro.Tipo+"</span></td>";
                                          }else if (registro.Tipo == "Manhwa") {
                                            fila+="<td> <span class=\"label label-inverse\">"+registro.Tipo+"</span></td>";
                                          }else if (registro.Tipo == "Novela") {
                                            fila+="<td> <span class=\"label label-danger\">"+registro.Tipo+"</span></td>";
                                          }


                                      fila+="<td> <a href=\""+registro.Link+"\" target=\"_blank\">"+registro.Link+
                                              "</a> </td>";
                                       fila+="<td>"+registro.Detalles+"</td>";
                                       //
                                      fila+="<td>"+
                                           "<button onclick=\"editar('"+registro.Id+"')\" class=\"btn btn-icon waves-effect waves-light btn-inverse\" data-toggle=\"modal\" data-target=\"#modalEditar\">" 
                                              +"<i class=\"fa fa-wrench\"></i>"+ 
                                            "</button>"+
                                            "<button onclick=\"eliminar('"+registro.Id+"')\" class=\"btn btn-icon waves-effect waves-light btn-danger\">" 
                                              +"<i class=\"fa fa-remove\"></i>"+ 
                                            "</button>"+
                                            "</td>";
                                        
                                      $("#datatable").append(fila);
                        });
                           $('#datatable').DataTable();
                  }
            });
}//fin read    

var btnGuardar = $('#btnGuardar');
              btnGuardar.on('click', function() {
                  if(validarForm()){
                      $.ajax({
                          type: "POST",
                          url: "class/create.php?t=" + Math.random(),
                          data: $("#frmSave").serialize(),
                          success: function(respuesta){
                          var respuesta = JSON.parse(respuesta);
                              if(respuesta.success){
                                  Swal.fire({
                                    type: 'success',
                                    title: 'Registro Exitoso!',
                                    showConfirmButton: false,
                                    timer: 2500,
                                    width: '350px'
                                  });
                                  //Limpiar los campos del formulario
                                  $('#frmSave').each (function(){
                                       this.reset();
                                  });
                                      location.reload();
                                      //readDatos();
                              }else{
                                 Swal.fire({
                                    type: 'error',
                                    title: 'Error al Guardar!',
                                    showConfirmButton: false,
                                    timer: 2000,
                                    width: '250px'
                                  });
                             }
                          },//fin success
                             error: function(respuesta)
                             {
                                 alert("Error general");
                             }
                      }); //fin ajax
                  }//fin validar
              });// fin de create   


              //metodo validar form

function validarForm() {
      var formulario = document.getElementById('frmSave');
      var mensaje = "Los siguientes campos no deben estar vacíos: \n\n";
      var faltaCampo=false;

      if($("#nombre").val()==""){
          faltaCampo=true;
          mensaje += "- Nombre \n";
      }

      if($("#capitulo").val()==""){
          faltaCampo=true;
          mensaje += "- Capitulo \n";
      }

      if(faltaCampo){
          Swal.fire({
            type: 'info',
            title: mensaje,
            //text: mensaje,
          });
          //alert(mensaje);
          return false;
      }
      else{
          return true;
      }
}

 