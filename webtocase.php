
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Formulario Novaventa</title>
        <link href="https://portal-contenido-novaventa.appspot.com/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://portal-contenido-novaventa.appspot.com//css/bootstrap-formhelpers.min.css" rel="stylesheet">
        <link href="https://portal-contenido-novaventa.appspot.com//css/main.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://portal-contenido-novaventa.appspot.com//css/font-awesome.css">
        <script src="https://portal-contenido-novaventa.appspot.com//js/libs/jquery-3.1.0.min.js"></script>
        <script src="https://portal-contenido-novaventa.appspot.com//js/libs/jquery.validate.js"></script> 
        <script type="text/javascript" src="https://portal-contenido-novaventa.appspot.com//js/libs/firebase.js"></script>   
        <script src="https://portal-contenido-novaventa.appspot.com//js/util/validar.js"></script>    
        <script type="text/javascript" src="https://portal-contenido-novaventa.appspot.com//js/libs/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://portal-contenido-novaventa.appspot.com//js/libs/bootstrap-formhelpers.min.js"></script>
        <script type="text/javascript" src="https://portal-contenido-novaventa.appspot.com//js/util/Util.js"></script>
        <script type="text/javascript" src="https://portal-contenido-novaventa.appspot.com//js/util/Validacion.js"></script>
        <script type="text/javascript" src="https://portal-contenido-novaventa.appspot.com//js/Contacto.js"></script> 

        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- Google Tag Manager -->
        <script>(function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({'gtm.start':
                            new Date().getTime(), event: 'gtm.js'});
                var f = d.getElementsByTagName(s)[0],
                        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);

            })(window, document, 'script', 'dataLayer', 'GTM-ML98ZCB');</script>
        <!-- End Google Tag Manager -->
    </head>
    <body>
        <!-- Google Tag Manager (noscript) -->


        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-ML98ZCB"

                          height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

        <!-- End Google Tag Manager (noscript) -->

        <div class="container cont-form">

            <div class="row">
                <div id="loginingone" class="modal-loading">
                    <div class="row" id="before_check">
                        <h3>Cargando!</h3>
                        <div class="loading"><div class="loader"></div></div>
                    </div>

                </div>

                <div id="loginingtwo" class="modal-loading">

                    <div class="row" id="after_check">
                        <h3>Se ha contactado correctamente!</h3>
                        <i class="fa fa-thumbs-up"></i>
                        <a id="aceptarok" href="#" class="aceptar_check">Aceptar</a>
                    </div>
                </div>

                <form id=" " action="https://gnutresaqas.sugarondemand.com/index.php?entryPoint=webtocase" method="post"  >
                    <div class="form-group col-sm-6">		    							
                        <label for="NombreContacto">Nombre de contacto</label>
                        <input type="text" class="form-control" id="nombreContacto" name="description[first_name]" placeholder="Nombre de contacto">				
                    </div>
                    <div class="form-group col-sm-6">		    							
                        <label for="ApellidosContacto">Apellidos de contacto</label>
                        <input type="text" class="form-control" id="apellidosContacto" name="description[last_name]" placeholder="Apellidos de contacto">	
                    </div>
                    <div class="form-group col-sm-6 col-md-2">
                        <label for="TipoID">Tipo de identificaci&oacute;n</label>    							
                        <select class="form-control" id="tipoID" name="tipoID">
                            <option selected>CC</option>
                            <option value="TI">TI</option>
                            <option value="NIT">NIT</option>
                            <option value="CE" >CE</option>
                            <option value="PAS">Pasaporte</option>
                            <option value="OTRos">Otros</option>						  
                        </select>					
                    </div>
                    <div class="form-group col-sm-6 col-md-4">
                        <label for="NumID">N&uacute;mero de documento</label>
                        <input type="text" class="form-control" id="numID" name="description[contact_cedula]" placeholder="N&uacute;mero de documento">			
                    </div>
                    <div class="form-group col-sm-6 col-md-2" >
                        <label>Pa&iacute;s</label>   												
                        <div id="departamentos" name="departamentos" class="bfh-selectbox bfh-countries" data-country="CO" data-flags="true"></div>
                    </div>					
                    <div class="form-group col-sm-6 col-md-4">
                        <label>Departamento</label>						
                        <div class="bfh-selectbox bfh-states" data-country="description[departamentos]" id="ciudad"></div>	
                    </div>
                    <div class="form-group col-sm-6 col-md-5">
                        <label for="NumCel">N&uacute;mero celular</label>
                        <input type="text" class="form-control" id="numCel" name="description[numCel]" placeholder="N&uacute;mero celular">			
                    </div>
                    <div class="form-group col-sm-6 col-md-4">
                        <label for="email">Correo electr&oacute;nico</label>
                        <input type="email" class="form-control" id="email" name="description[email1]" placeholder="Correo electr&oacute;nico">			
                    </div>
                    <div class="form-group col-sm-12 col-md-3 radio" id="autorizo">
                        <p><strong>Autorizo env&iacute;o de email</strong></p>
                        <label>
                            <input type="radio" name="autorizo" id="si" value="si" checked>
                            S&iacute;
                        </label>
                        <label>
                            <input type="radio" name="autorizo" id="no" value="no">
                            No
                        </label>
                    </div>
                    <div class="form-group col-md-12" style="position: static">
                        <label for="motivo">Motivo de contacto</label>
                        <textarea class="form-control" rows="3" id="motivo" name="description[motivo_formulario]"></textarea>			
                    </div>
                    <div class="col-md-12">	
                        <input type="hidden" name="paisval" id="paisval" >
                        <div class="checkbox disabled">
                            <label>
                                <input type="checkbox" name="acepto" value="">
                                <a href="https://storage.googleapis.com/portal-contenido-novaventa.appspot.com/estaticos/politica_tratmiento_dato_personales.pdf" target="_blank">Acepto pol&iacute;tica de privacidad</a>
                            </label>
                        </div>					
                        <input type="hidden" name="departamentoval" id="departamentoval" >
                        <!--<div id="enviar" class="btn bttn-fill bttn-md bttn-primary">Enviar</div>-->
						<input type='submit' name='enviar' id ='enviar'>
                    </div>
					<input id="tipo_formulario" name="description[tipo_formulario]" value="clientes" type="hidden"> 
							<input id="redirect_url" name="redirect_url" type="hidden" value="http://sasaconsultoria.com"> 									
							<input id="sociedad" name="description[sociedad]" value="AGNO" type="hidden"> 
							
							<input id="modified_user_id" name="fields[modified_user_id]" style="display:none" type="hidden" value="1">
							<input id="created_by" name="fields[created_by]" style="display:none" type="hidden" value="1">
							<input id="assigned_user_id" name="fields[assigned_user_id]" style="display:none" type="hidden" value="1">
							
							<input id="sasa_relacion_c" name="fields[sasa_relacion_c]" type="hidden" value="8">
							<input id="account_id" name="fields[account_id]" type="hidden">
							<input id="contact_id" name="fields[contact_id]" type="hidden">
							<input id="team_id" name="fields[team_id]" type="hidden" type="hidden" value="75fac92a-8588-11e6-8a13-060b37ffb723">	
							<input id="status" name="fields[status]" type="hidden" type="hidden" value="New">	
							<input id="sasa_tificacion_casos_cases_1sasa_tificacion_casos_ida" name="fields[sasa_tificacion_casos_cases_1sasa_tificacion_casos_ida]" type="hidden" type="hidden" value="0b59b2fc-8a88-11e6-8d46-06b20b8677ed">			
							<input id="sasa_fuente_c" name="fields[sasa_fuente_c]" type="hidden" type="hidden" value="9">		
                </form>
            </div>
        </div>    
    </body>
</html>