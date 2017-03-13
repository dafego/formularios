
<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
<link rel="stylesheet" type="text/css" href="easy-autocomplete.themes.css">
<script src="jquery.easy-autocomplete.js"></script>



 
</p>
<form id="WebToLeadForm" action="https://gnutresaqas.sugarondemand.com/index.php?entryPoint=WebToLeadCapture" method="POST" name="WebToLeadForm">
<table style="border-top: 1px solid; border-bottom: 1px solid; padding: 10px 6px 12px 10px; background-color: #e9f3ff; font-size: 12px; background-repeat: repeat-x; background-position: center top; width: 100%;">
<tbody>
<tr style="color: #0069e1; font-family: Arial,Verdana,Helvetica,sans-serif; font-size: 18px; font-weight: bold; margin-bottom: 0px; margin-top: 0px;" align="center">
<td colspan="4">
<h2>Formulario Web a cliente potencial para la Campa&ntilde;a</h2>
</td>
</tr>
<tr style="color: #0069e1; font-family: Arial,Verdana,Helvetica,sans-serif; font-size: 2px; font-weight: normal; margin-bottom: 0px; margin-top: 0px;" align="center">
<td colspan="4">&nbsp;</td>
</tr>
<tr style="color: #0069e1; font-family: Arial,Verdana,Helvetica,sans-serif; font-size: 12px; font-weight: normal; margin-bottom: 0px; margin-top: 0px;" align="left">
<td colspan="4">Al enviar este formulario se crear&aacute; un cliente potencial vinculado con la campa&ntilde;a</td>
</tr>
<tr style="color: #0069e1; font-family: Arial,Verdana,Helvetica,sans-serif; font-size: 8px; font-weight: normal; margin-bottom: 0px; margin-top: 0px;" align="center">
<td colspan="4">&nbsp;</td>
</tr>
<tr>
<td style="text-align: left; font-size: 12px; font-weight: normal;" width="15%"><span>Tipo de identificaci&oacute;n: </span></td>
<td style="font-size: 12px; font-weight: normal;" width="35%"><span>
<select id ='sasa_tipodocumento_c' name='sasa_tipodocumento_c'>
<option value='00'>Otros Documentos</option>
<option value='13'>CC</option>
<option value='22'>Cédula de Extranjeria</option>
<option value='41'>Pasaporte</option>
<option value='12'>Tarjeta de Identidad</option>
<option value='31'>NIT</option>
 </select>


<td style="text-align: left; font-size: 12px; font-weight: normal;" width="15%"><span>N&uacute;mero de Identificaci&oacute;n: <span class="required" style="color: #ff0000;">*</span></span></td>
<td style="font-size: 12px; font-weight: normal;" width="35%"><span><input id="sasa_nrodocumento_c" type="text" name="sasa_nrodocumento_c" /></span></td>
</tr>
<tr>
<td style="text-align: left; font-size: 12px; font-weight: normal;" width="15%"><span>Nombre: <span class="required" style="color: #ff0000;">*</span></span></td>
<td style="font-size: 12px; font-weight: normal;" width="35%"><span><input id="first_name" type="text" name="first_name" /></span></td>
<td style="text-align: left; font-size: 12px; font-weight: normal;" width="15%"><span>Apellidos: <span class="required" style="color: #ff0000;">*</span></span></td>
<td style="font-size: 12px; font-weight: normal;" width="35%"><span><input id="last_name" type="text" name="last_name" /></span></td>
</tr>
<tr>
<td style="text-align: left; font-size: 12px; font-weight: normal;" width="15%"><span>Tel&eacute;fono M&oacute;vil: </span></td>
<td style="font-size: 12px; font-weight: normal;" width="35%"><span><input id="phone_mobile" type="text" name="phone_mobile" /></span></td>
<td style="text-align: left; font-size: 12px; font-weight: normal;" width="15%"><span>Correo Electr&oacute;nico: </span></td>
<td style="font-size: 12px; font-weight: normal;" width="35%"><span><input id="email" type="text" name="email"   /></span></td>
</tr>
<tr>
<td style="text-align: left; font-size: 12px; font-weight: normal;" width="15%"><span>Barrio: </span></td>
<td style="font-size: 12px; font-weight: normal;" width="35%"> 
<input id="regio_barrios_leads_1_name" placeholder="Departamento - ciudad - barrio" name ='regio_barrios_leads_1_name' />
<input type ='hidden' id="regio_barrios_leads_1regio_barrios_ida" placeholder="regio_barrios_leads_1regio_barrios_ida" name='regio_barrios_leads_1regio_barrios_ida' />
<input id="ant_zona_sasa_c" placeholder="ant_zona_sasa_c"  name='ant_zona_sasa_c'/>

</td>
<td style="text-align: left; font-size: 12px; font-weight: normal;" width="15%"><span>Zona Antares: </span></td>
<td style="font-size: 12px; font-weight: normal;" width="35%">xxx 
<input type='text' name='primary_address_city' id='primary_address_city' >
<input type='text' name='primary_address_state' id='primary_address_state' >
</td>
</tr>
<tr>
<td style="text-align: left; font-size: 12px; font-weight: normal;" width="15%"><span>Descripci&oacute;n de toma de contacto: </span></td>
<td style="font-size: 12px; font-weight: normal;" width="35%"><span id="ta_replace"><input id="description" type="text" name="description" /></span></td>
<td style="text-align: left; font-size: 12px; font-weight: normal;" width="15%"><span>Tipo de operaci&oacute;n: <span class="required" style="color: #ff0000;">*</span></span></td>
<td style="font-size: 12px; font-weight: normal;" width="35%"><span><select id="sasa_operacion_c" name="sasa_operacion_c" tabindex="1">
<option selected="selected" value="">-ninguno-</option>
<option value="Directa">Directa</option>
<option value="Indirecta">Indirecta</option>
</select></span></td>
</tr>
<tr>
<td style="text-align: left; font-size: 12px; font-weight: normal;" width="15%"><span>Sociedad: <span class="required" style="color: #ff0000;">*</span></span></td>
<td style="font-size: 12px; font-weight: normal;" width="35%"><span><select id="sasa_sociedad_c" name="sasa_sociedad_c" tabindex="1">
<option selected="selected" value="">-ninguno-</option>
<option value="AGNO">AGNO</option>
<option value="ME">ME</option>
<option value="CN">CN</option>
<option value="CO">CO</option>
<option value="PO">PO</option>
<option value="SN">SN</option>
<option value="LR">LR</option>
<option value="AC">AC</option>
</select></span></td>
<td style="text-align: left; font-size: 12px; font-weight: normal;" width="15%"><span>Regional: <span class="required" style="color: #ff0000;">*</span></span></td>
<td style="font-size: 12px; font-weight: normal;" width="35%"><span><select id="sasa_regional_c" name="sasa_regional_c" tabindex="1">
<option selected="selected" value="">-ninguno-</option>
<option value="Medellin">Medell&iacute;n</option>
<option value="Bogota">Bogot&aacute;</option>
<option value="Cali">Cali</option>
<option value="Barranquilla">Barranquilla</option>
<option value="Bucaramanga">Bucaramanga</option>
<option value="Ibague">Ibagu&eacute;</option>
<option value="Pereira">Pereira</option>
<option value="No_Aplica">No Aplica</option>
</select></span></td>
</tr>
<tr>
<td style="text-align: left; font-size: 12px; font-weight: normal;" width="15%"><span>Unidad de Negocio: <span class="required" style="color: #ff0000;">*</span></span></td>
<td style="font-size: 12px; font-weight: normal;" width="35%"><span><select id="sasa_unidad_neg_c" name="sasa_unidad_neg_c" tabindex="1">
<option selected="selected" value="0">Venta Directa</option>
<option value="1">Venta al paso</option>
</select></span></td>
<td style="text-align: left; font-size: 12px; font-weight: normal;" width="15%"><span>&nbsp;</span></td>
<td style="font-size: 12px; font-weight: normal;" width="35%"><span>&nbsp;</span></td>
</tr>
<tr style="color: #0069e1; font-family: Arial,Verdana,Helvetica,sans-serif; font-size: 18px; font-weight: bold; margin-bottom: 0px; margin-top: 0px;" align="center">
<td colspan="4">&nbsp;</td>
</tr>
<tr align="center">
<td colspan="10"><input class="button" type="submit" name="Submit" value="Enviar" /></td>
</tr>
<tr>
<td style="display: none;"><input id="campaign_id" type="hidden" name="campaign_id" value="c24d65f4-fdff-11e6-ae70-02b215474f0b" /></td>
</tr>
<tr>
<td style="display: none;"><input id="assigned_user_id" type="hidden" name="assigned_user_id" value="63cc70d6-dc0a-11e6-8f29-061669249537" /></td>
</tr>
<tr>
<td style="display: none;"><input id="team_id" type="hidden" name="team_id" value="1" /></td>
</tr>
<tr>
<td style="display: none;"><input id="team_set_id" type="hidden" name="team_set_id" value="1" /></td>
</tr>
<tr>
<td style="display: none;"><input id="req_id" type="hidden" name="req_id" value="sasa_nrodocumento_c;first_name;last_name;sasa_operacion_c;sasa_sociedad_c;sasa_regional_c;sasa_unidad_neg_c;" /></td>
</tr>
</tbody>
</table>


<input type='text'  id ='nuts_sociedad_leads_1_name' name='nuts_sociedad_leads_1_name' value='NOVAVENTA'>
<input type='text'  id ='nuts_sociedad_leads_1nuts_sociedad_ida' name='nuts_sociedad_leads_1nuts_sociedad_ida' value='5adb1cec-63de-11e6-9b3a-06d48441b777'>
</form>
<p>
<script type="text/javascript">// <![CDATA[
 function submit_form(){
  
     
  
 }
 function check_webtolead_fields(){
     if(document.getElementById('bool_id') != null){
        var reqs=document.getElementById('bool_id').value;
        bools = reqs.substring(0,reqs.lastIndexOf(';'));
        var bool_fields = new Array();
        var bool_fields = bools.split(';');
        nbr_fields = bool_fields.length;
        for(var i=0;i<nbr_fields;i++){
          if(document.getElementById(bool_fields[i]).value == 'on'){
             document.getElementById(bool_fields[i]).value = 1;
          }
          else{
             document.getElementById(bool_fields[i]).value = 0;
          }
        }
      }
    if(document.getElementById('req_id') != null){
        var reqs=document.getElementById('req_id').value;
        reqs = reqs.substring(0,reqs.lastIndexOf(';'));
        var req_fields = new Array();
        var req_fields = reqs.split(';');
        nbr_fields = req_fields.length;
        var req = true;
        for(var i=0;i<nbr_fields;i++){
          if(document.getElementById(req_fields[i]).value.length <=0 || document.getElementById(req_fields[i]).value==0){
           req = false;
           break;
          }
        }
        if(req){
            document.WebToLeadForm.submit();
            return true;
        }
        else{
          alert('Indique todos los campos requeridos');
          return true;
         }
        return true
   }
   else{
    document.WebToLeadForm.submit();
   }
}
function validateEmailAdd(){
  if(document.getElementById('email1') && document.getElementById('email1').value.length >0) {
    if(document.getElementById('email1').value.match(/^\w+(['\.\-\+]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,})+$/) == null){
      alert('No es una dirección de correo válida');
    }
  }
  if(document.getElementById('email2') && document.getElementById('email2').value.length >0) {
    if(document.getElementById('email2').value.match(/^\w+(['\.\-\+]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,})+$/) == null){
      alert('No es una dirección de correo válida');
    }
  }
}
// ]]></script>

<script>
var options = {
    url: "buscazona.json",
    getValue: function(element) {
        return element.dep;
    },
   template: {
        type: "description",
        fields: {
            description: "dep"
        }
    },
    list: {
        maxNumberOfElements: 8,
        match: {
            enabled: true
        },
        sort: {
            enabled: true
        },
     onSelectItemEvent: function() {
            var selectedItemValue = $("#regio_barrios_leads_1_name").getSelectedItemData().id;
            $("#regio_barrios_leads_1regio_barrios_ida").val(selectedItemValue).trigger("change");
      var selectedItemValue2 = $("#regio_barrios_leads_1_name").getSelectedItemData().zona;
      $("#ant_zona_sasa_c").val(selectedItemValue2).trigger("change");
          var selectedItemValue3 = $("#regio_barrios_leads_1_name").getSelectedItemData().description.split("|");
      $("#primary_address_city").val(selectedItemValue3[1]).trigger("change");
      $("#primary_address_state").val(selectedItemValue3[0]).trigger("change");
    },
    },
    theme: "square"
};
$("#regio_barrios_leads_1_name").easyAutocomplete(options);
</script>


</p>
