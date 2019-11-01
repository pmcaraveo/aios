$(document).ready(function () {
              
    cargarDatos();

});// document ready end
  
//metodo read
function cargarDatos(){

        $.ajax({
              type: "POST",
              url: "class/publicandose.php",
              success: function(datos) {
                var datos = JSON.parse(datos);      
                    $(datos).each(function(indice,registro){
                        var total = registro.total;
                        $("#publicandose").append(total);
                    });
              }
        });

        $.ajax({
              type: "POST",
              url: "class/pausado.php",
              success: function(datos) {
                var datos = JSON.parse(datos);      
                    $(datos).each(function(indice,registro){
                        var total = registro.total;
                        $("#pausado").append(total);
                    });
              }
        });

        $.ajax({
              type: "POST",
              url: "class/detenido.php",
              success: function(datos) {
                var datos = JSON.parse(datos);      
                    $(datos).each(function(indice,registro){
                        var total = registro.total;
                        $("#detenido").append(total);
                    });
              }
        });

        $.ajax({
              type: "POST",
              url: "class/final.php",
              success: function(datos) {
                var datos = JSON.parse(datos);      
                    $(datos).each(function(indice,registro){
                        var total = registro.total;
                        $("#final").append(total);
                    });
              }
        });

        $.ajax({
              type: "POST",
              url: "class/manga.php",
              success: function(datos) {
                var datos = JSON.parse(datos);      
                    $(datos).each(function(indice,registro){
                        var total = registro.total;
                        $("#mangas").append(total);
                    });
              }
        });

        $.ajax({
              type: "POST",
              url: "class/manhua.php",
              success: function(datos) {
                var datos = JSON.parse(datos);      
                    $(datos).each(function(indice,registro){
                        var total = registro.total;
                        $("#manhuas").append(total);
                    });
              }
        });

        $.ajax({
              type: "POST",
              url: "class/novela.php",
              success: function(datos) {
                var datos = JSON.parse(datos);      
                    $(datos).each(function(indice,registro){
                        var total = registro.total;
                        $("#novelas").append(total);
                    });
              }
        });

        $.ajax({
              type: "POST",
              url: "class/manhwa.php",
              success: function(datos) {
                var datos = JSON.parse(datos);      
                    $(datos).each(function(indice,registro){
                        var total = registro.total;
                        $("#manhwas").append(total);
                    });
              }
        });

}//fin read    


        
