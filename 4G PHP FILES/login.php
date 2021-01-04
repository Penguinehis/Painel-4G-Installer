<?php
include_once("functions.php");
?>
<!DOCTYPE html>
<html lang="pt-br" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>Internet4g - Entrar</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-night.css"/>
        <!-- EOF CSS INCLUDE -->                                     
    </head>
    <body>

        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
                <div class="login-logo">Internet4G</div>
				<div class="login-legenda">Controle de Acessos</div>
                <div class="login-body">
                    <div class="login-title"><strong>Seja Bem Vindo</strong>, Entrar</div>
                    <form id="FormLogin" name="FormLogin" class="form-horizontal" method="POST" action="javascript:FormLogin()">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" name="usuario" class="form-control" placeholder="Usuário"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" name="senha" class="form-control" placeholder="Senha"/>
                        </div>
                    </div>
                    <div class="form-group">
                   	    <div id="StatusLogin"></div>
                    	<div class="col-md-12">
                            <button class="btn btn-info btn-block">Entrar</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            
        </div>

<script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
<script>
$(function(){

	$("#FormLogin").submit(function() {
		
		var formData = new FormData($(this)[0]);

		$.ajax({
			
			type: "POST",
			data: formData,
			async: true,
			url: "validar-login.php",
			success: function(result){
				$("#StatusLogin").html('');
				$("#StatusGeral").html('');
				$("#StatusGeral").append(result);
			},
			beforeSend: function(){
		  	  	$('#StatusLogin').html("<center><img src=\"img/owl/AjaxLoader.gif\"><br><br></center>");
		  	},
			cache: false,
        	contentType: false,
        	processData: false
	 	});
	});
});
</script>

<div id="StatusGeral"></div>

    </body>
</html>






