$('document').ready(function()
{ 
	[].slice.call( document.querySelectorAll( '.progress-button' ) ).forEach( function( bttn, pos ) {
				new UIProgressButton( bttn, {
					callback : function( instance ) {
						var progress = 0,
							interval = setInterval( function() {
								progress = Math.min( progress + Math.random() * 0.1, 1 );
								instance.setProgress( progress );

								if( progress === 1 ) {
									instance.stop( pos === 1 || pos === 3 ? -1 : 1 );
									clearInterval( interval );
								}
							}, 150 );
					}
				} );
			} );
			
			
     /* Validacion del Login*/
	 $("#login-form").validate({
      rules:{
			  password: {
			  required: true,
			},
			  user: {
              required: true,
            },
	   },
            messages:
	   {
            password:{
                      required: "Porfavor, ingresa tu nombre de Usuario"
                     },
            user: "Porfavor, ingresa un usuario valido",
       },
	   submitHandler: submitForm	
       });  
	   /* validation */
	   
	   /* login submit */
	   function submitForm()
	   {		
			var data = $("#login-form").serialize();
			$.ajax({
			type : 'POST',
			url  : 'class/login_process.php',
			data : data,
			beforeSend: function()
			{	
				$("#error").fadeOut();
				$("#btn-login").html('Cargando ...');
			},
			success :  function(response)
			   {	

					if(response=="ok"){
									
						$("#btn-login").html('<img src="img/login2.gif" />');
						setTimeout(' window.location.href = "menu.php"; ',2000);
					}
					else{
									
						$("#error").fadeIn(500, function(){						
							$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+' !</div>');
											$("#btn-login").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Iniciar Sesión');
									});
					}
			  }
			});
				return false;
		}
	   /* login submit */
});

		