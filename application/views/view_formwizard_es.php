        <div class="container" style="overflow-y: scroll; padding-bottom: 90px; margin-top: 90px;">
        <form id="example-advanced-form" action="#">
            <h3>Eres:</h3>
            <fieldset>
                <legend>Eres:</legend>
                <div class="row">
                    <div class="col-xs-12">
                        <br/>
                        <div class="form-group">
                            <input  class="required" type="radio" value="Software Company" name="you_are" />
                            <label class="control-label">
                            Una compañía de software
                            </label>
                        </div>
                        <div class="form-group">
                            <input class="required" type="radio" value="Freelance Developer" name="you_are"/>
                            <label class="control-label">
                            Un desarrollador “Free-Lance”
                            </label>
                        </div>
                        <div class="form-group">
                            <input class="required" type="radio" value="Marketing Company" name="you_are"/>
                            <label class="control-label">
                            Una empresa de marketing
                            </label>
                        </div>
                        <div class="form-group">
                        <input class="required" type="radio" value="Company in general" name="you_are"/>
                            <label class="control-label">
                            Una empresa en general
                            </label>
                        </div>
                        <div class="form-group">
                            <input class="required" type="radio" value="Startup" name="you_are"/>
                                <label class="control-label">
                                Una “Startup”
                                </label>
                        </div>
                        <div class="form-group">
                                <input class="required" type="radio" value="Individual" name="you_are"/>
                                <label class="control-label">
                                Un individuo
                                </label>
                        </div>
                        <div class="form-group">
                                <input class="required o-other" type="radio" value="Other" name="you_are"/>
                                <label class="control-label">
                                Otro
                                </label>
                        </div>
                </div>
                
                </div>                    
            </fieldset>

            <h3>¿Qué estás buscando?</h3>
            <fieldset>
                <legend>¿Qué estás buscando?</legend>
                <div class="row">
                    <div class="col-xs-12">
                    <br/>
                        <div class="form-group">
                            <input id="Customer_Exclusive_Teams" class="required" type="radio" value="Customer_Exclusive_Teams" name="Requiring" />
                            <label class="control-label">
                            Personalizar un equipo de desarrollo
                                </label>
                            <p class="text-justify">
                            Creamos una extensión de tu empresa en una ubicación remota, es decir, tú administras y mantienes tus Gerentes de proyecto y Desarrolladores principales en tu empresa y subcontratas las tareas no esenciales, como la formación de equipos, la nómina, la infraestructura, etc. Este servicio es el más adecuado para las empresas con la necesidad de crecimiento a largo plazo, buscando operar en una región de bajo costo.
                            </p>
                        </div>
                        <div class="form-group">
                            <input class="required" type="radio" value="End_to_End" name="Requiring"/>
                            <label class="control-label">
                            Desarrollar un proyecto “end-to-end”
                            </label>
                            <p class="text-justify">
                            Ofrecemos un servicio para desarrollar proyectos “end-to-end” para aplicaciones web, aplicaciones móviles y herramientas de automatización.
                            </p>
                    </div>
                </div>
                
                </div>                    
            </fieldset>
        
            <h3>End to End</h3>
            <fieldset>
                <legend>End-to-End</legend>
                <!--Customer_Exclusive_Teams Questions-->
                <div class="form-group text-left" >
                                <label class="control-label title-2" style="margin-right:-25px">
                                El proyecto:
                                </label>
                                <br/>
                                <br/>
                                <input class="required" value="New" name="The_Project_is"  type="radio"/>
                                <label class="control-label">
                                Es nuevo
                                </label>
                                <br/>
                                <input class="required" value="Needs maintenance" name="The_Project_is"  type="radio"/>
                                <label class="control-label">
                                Necesita mantenimiento / cambios / mejoras
                                </label>
                                <br/>
                                </div>
                                <hr style="width:20%"/>
                                <div class="form-group text-left" >
                                <label class="control-label title-2" style="margin-right:-25px">
                                    ¿Qué tan familiarizado estás con el desarrollo de software?
                                </label>
                                <br/>
                                <br/>
                                <input class="required" value="none" name="How_familiar"  type="radio"/>
                                <label class="control-label">
                                Nada
                                </label>
                                <br/>
                                <input class="required" value="Some" name="How_familiar"  type="radio"/>
                                <label class="control-label">
                                Poco
                                </label>
                                <br/>
                                <input class="required" value="A lot" name="How_familiar"  type="radio"/>
                                <label class="control-label">
                                Mucho
                                </label>
                                <br/>
                                </div>
                                <hr style="width:20%"/>
                                <div class="form-group text-left" >
                                <label class="control-label title-2" style="margin-right:-25px">
                                ¿Qué servicios estás buscando?
                                </label>
                                <br/>
                                <br/>
                                <div class="checkbox">
                                    <label class="custom-checkbox"><input class="" type="checkbox" name="Looking_for" value="Mobile Applications">Desarrollo de aplicaciones móviles</label>
                                </div>
                                
                                <div class="checkbox">    
                                    <label class="custom-checkbox"><input class="" type="checkbox" name="Looking_for" value="Web Applications">Desarrollo de aplicaciones web</label>
                                </div>
                                
                                <div class="checkbox">    
                                    <label class="custom-checkbox"><input class="" type="checkbox" name="Looking_for" value="Bot Applications">Desarrollo de aplicaciones Bot</label>
                                </div>
                                
                                <div class="checkbox">    
                                    <label class="custom-checkbox"><input class="" type="checkbox" name="Looking_for" value="UX Design">Diseño de Experiencia de usuario (UX)</label>
                                </div>
                                
                                <div class="checkbox">    
                                    <label class="custom-checkbox"><input class="" type="checkbox" name="Looking_for" value="UI Desing">Diseño de Interfaz de Usuario (UI)</label>
                                </div>
                </div>
                <hr style="width:20%"/>
                
                <div class="form-group text-left" >
                                <label class="control-label title-2" style="margin-right:-25px">
                                Por favor ordenar por prioridad:
                                </label>
                                <br/>
                                <br/>
                                <div class="checkbox">
                                    <label class="custom-checkbox"><input class="" type="checkbox" name="Priority" value="Quality">Calidad</label>
                                </div>
                                
                                <div class="checkbox">    
                                    <label class="custom-checkbox"><input class="" type="checkbox" name="Priority" value="Time">Tiempo</label>
                                </div>
                                
                                <div class="checkbox">    
                                    <label class="custom-checkbox"><input class="" type="checkbox" name="Priority" value="Cost">Costo</label>
                                </div>
                                
                                
                </div>
                <hr style="width:20%"/>


                <div class="form-group text-left" >
                                <label class="control-label title-2" style="margin-right:-25px">
                                ¿Cuál es su presupuesto (USD)?
                                </label>
                                <br/>
                                <br/>
                                <input class="required" value="Less than 10k" name="Budget" type="radio" />
                                <label class="control-label">
                                Menos de 10k
                                </label>
                                <br/>

                                <input class="required" value="10k.50k" name="Budget" type="radio"/>
                                <label class="control-label">
                                    10k – 50k
                                </label>
                                <br/>

                                <input class="required" value="50k.100k" name="Budget" type="radio"/>
                                <label class="control-label">
                                    50k – 100k
                                </label>
                                <br/>

                                <input class="required" value="More than 100k" name="Budget" type="radio"/>
                                <label class="control-label">
                                Más de 100k
                                </label>
                                <br/>
                </div>
                <hr style="width:20%"/>
                
                <div class="form-group text-left" >
                    <label class="control-label" style="">
                        <strong>
                        Cuéntanos sobre tus necesidades
                        </strong>
                    </label>
                    <div class="form-group text-center required text-custom" style="margin-top: -2em">
                                    <br/>
                                    <br/>
                                    <textarea name="Details_about_the_end_to_end_project" rows="5" class="form-control required"></textarea>
                                    <br/>
                    </div>
                </div>
                
                <hr style="width:20%"/>

                <div class="form-group text-left" >
                    <label class="control-label">
                        <strong>
                        Adjuntar RFP (Solicitud de Propuesta)
                        </strong>
                    </label>
                    <div class="form-group">
                        <div class="input-group input-file" name="Fichier1">
                            <span class="input-group-btn">
                                <button class="btn btn-default btn-choose" type="button">Choose</button>
                            </span>
                            <input type="text" class="form-control" placeholder='Choose a file...' />
                            <span class="input-group-btn">
                                <button class="btn btn-warning btn-reset" type="button">Reset</button>
                            </span>
                        </div>
                    </div>
                </div>
                        
                <!--Customer_Exclusive_Teams Questions-->
            </fieldset>
        
            <h3>Personalizar un equipo de desarrollo</h3>
            <fieldset class="Customer_Exclusive_Teams">
                <legend>Personalizar un equipo de desarrollo</legend>

                <!--CET Questions-->
                <div class="form-group text-left" >
                                <label class="control-label title-2" style="margin-right:-25px">
                                    Planeas tener a un equipo de desarrollo:
                                </label>
                                <br/>
                                <br/>
                                <input value="Permanently" name="Timeteam"  class="required" type="radio" />
                                <label class="control-label">
                                    Permanentemente, como una extención de la compañia
                                </label>
                                <br/>
                                <input value="Temporarily" name="Timeteam" class="required" type="radio"/>
                                <label class="control-label">
                                    Temporalmente, sólo la duración de un proyecto
                                </label>
                                <br/>
                        </div>

                        <hr style="width:20%"/>
                        <div class="form-group text-left" >
                                <label class="control-label title-2" style="margin-right:-25px">
                                Es nuevo
                                </label>
                                <br/>
                                <br/>
                                <input value="New" name="The_CET_project_is" class="required" type="radio"/>
                                <label class="control-label">
                                    Is new
                                </label>
                                <br/>
                                <input value="Needs maintenance" name="The_CET_project_is" class="required" type="radio"/>
                                <label class="control-label">
                                Necesita mantenimiento / cambios / mejoras
                                </label>
                                <br/>
                        </div>
                        <hr style="width:20%"/>
                        <div class="form-group text-left" >
                                <label class="control-label title-2" style="margin-right:-25px">
                                ¿Cuánto estimas que dure el proyecto?
                                    
                                </label>
                                <br/>
                                <br/>
                                <input value="3 Months" name="estimation" class="required" type="radio"/>
                                <label class="control-label">
                                    3 Meses
                                </label>
                                <br/>
                                <input value="6 Months" name="estimation" class="required" type="radio"/>
                                <label class="control-label">
                                    6 Meses
                                </label>
                                <br/>
                                <input value="More than 6 Months" name="estimation" class="required" type="radio"/>
                                <label class="control-label">
                                    Más de 6 Meses
                                </label>
                                <br/>
                        </div>
                        
                        <hr style="width:20%"/>
                        <div class="form-group text-left" >
                                <label class="control-label title-2" style="margin-right:-25px">
                                ¿Tienes tu propio equipo de administración de proyectos?
                                    
                                </label>
                                <br/>
                                <br/>
                                <input value="Yes" name="managementteam" class="required" type="radio"/>
                                <label class="control-label">
                                Sí
                                </label>
                                <br/>
                                <input value="No" name="managementteam" class="required" type="radio"/>
                                <label class="control-label">
                                    No
                                </label>
                                <br/>
                        </div>
                        <hr style="width:20%"/>
                        <div class="form-group text-left" >
                                <label class="control-label title-2" style="margin-right:-25px">
                                ¿Tienes un desarrollador “Lead” interno?
                                    
                                </label>
                                <br/>
                                <br/>
                                <input value="Yes" name="leaddeveloper" class="required" type="radio"/>
                                <label class="control-label">
                                Sí
                                </label>
                                <br/>
                                <input value="No" name="leaddeveloper" class="required" type="radio"/>
                                <label class="control-label">
                                    No
                                </label>
                                <br/>
                        </div>
                        <hr style="width:20%"/>
                        <div class="form-group text-left" >
                                <label class="control-label title-2" style="margin-right:-25px">
                                ¿Cuáles son las plataformas de comunicación que utilizas?
                                    
                                </label>
                                <br/>
                                <br/>
                                <input name="managementplatforms" value="Jira" class="required" type="radio"/>
                                <label class="control-label">
                                Jira
                                </label>
                                <br/>
                                <input name="managementplatforms" value="Trello" class="required" type="radio"/>
                                <label class="control-label">
                                Trello
                                </label>
                                <br/>
                                <input name="managementplatforms" value="Zenkit" class="required" type="radio"/>
                                <label class="control-label">
                                Zenkit
                                </label>
                                <br/>
                                <input name="managementplatforms" value="Asana" class="required" type="radio"/>
                                <label class="control-label">
                                Asana
                                </label>
                                <br/>
                                <input name="managementplatforms" value="Other" class="required o-other" type="radio"/>
                                <label class="control-label">
                                Other
                                </label>
                                <br/>
                        </div>
                <!--CET Questions-->
            </fieldset>
            <h3>Desarrolladores Requeridos</h3>
            <fieldset>
                <legend>Desarrolladores Requeridos</legend>
                <small style="font-size:">Seleccione los perfiles de desarrollador y la cantidad requerida</small>
                <div class="form-group text-center" style="padding: 1em 0 0">
                            <table class="table table-hover" id="participantTable">
                                    <thead>
                                        <tr>
                                            <th>Numero de Desarrolladores</th>
                                            <th>Tecnología de Programación</th>
                                            <th>Años de Experiencia</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody class="participantRow">
                                    
                                    </tbody>
                            </table>
                            <button class="btn btn-large btn-success2 add" type="button">Agregar</button>
                        </div>
            </fieldset>
        
            <h3>Últimos Detalles</h3>
            <fieldset>
                <legend>Últimos Detalles</legend>
                <label class="control-label">
                    Cuéntanos sobre tus necesidades
                </label>
                <div class="form-group text-center">
                                <br/>
                                <br/>
                                <textarea rows="5" class="form-control required"></textarea>
                                <br/>
                </div>

                <label class="control-label">
                Adjuntar RFP (Solicitud de Propuesta)
                </label>
                <div class="form-group">
                    <div class="input-group input-file" name="Fichier1">
                        <span class="input-group-btn">
                            <button class="btn btn-default btn-choose" type="button">Choose</button>
                        </span>
                        <input type="text" class="form-control" placeholder='Choose a file...' />
                        <span class="input-group-btn">
                            <button class="btn btn-warning btn-reset" type="button">Reset</button>
                        </span>
                    </div>
                </div>
            </fieldset>
            <h3>Contacto</h3>
            <fieldset>
                <legend>Contacto</legend>

                <label class="control-label"> Nombre</label>
                <div class="form-group">
                    <input name="Name" type="text" class="form-control required">
                </div>
                <label class="control-label">Apellidos</label>
                <div class="form-group text-center">
                    <input  name="Surname" type="text" class="form-control">
                </div>
                <hr style="width:20%"/>
                <label class="control-label">
                    Correo Electrónico
                </label>
                <div class="form-group text-center">
                                <br/>
                                <input name="Email" type="text" class="required email form-control">
                </div>
                <hr style="width:20%"/>
                <label class="control-label">Telefono (Opcional)</label>
                <div class="form-group">
                    <input name="phone" type="tel" class="form-control tel phone">
                </div>
            </fieldset>
        </form>
        </div>
        <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="http://www.jquery-steps.com/Scripts/Examples?v=szy5AsAuXKpEfwFGRimEy2MhBBlHea801wFJod1pspE1"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.steps.min.js"></script>
        <script>
            var form = $("#example-advanced-form").show();
            form.steps({
                headerTag: "h3",
                bodyTag: "fieldset",
                transitionEffect: "slideLeft",
                stepsOrientation: "vertical",
                labels: {
                    previous: "Reiniciar",
                    next: "Siguiente"
                },
                onStepChanging: function (event, currentIndex, newIndex){
                    
                    // Instead of allow previous, we reload and disabled all tabs
                    if (currentIndex > newIndex){
                        location.reload();
                        return false;
                    }else{
                        $( ".done" ).addClass( "disabled" );
                        $( ".current" ).addClass( "disabled" );
                    }
                    
                    if (newIndex === 2 && $('#Customer_Exclusive_Teams').is(':checked') == true){
                        
                        form.steps("remove",2);
                    }
                    
                    
                    form.validate().settings.ignore = ":disabled,:hidden";
                    return form.valid();
                },
                onStepChanged: function (event, currentIndex, priorIndex){
                    
                    
                    if (currentIndex === 2 && $('#Customer_Exclusive_Teams').is(':checked') == false){
                        form.steps("remove",5);
                        form.steps("remove",4);
                        form.steps("remove",3);
                    }
                },
                onFinishing: function (event, currentIndex)
                {
                    form.validate().settings.ignore = ":disabled";
                    return form.valid();
                },
                onFinished: function (event, currentIndex)
                {
                    var data = $("#example-advanced-form").serialize();
                    var text = {"data":data.toString()};
                    
                    var dope=text;
                    $.post("<?php echo base_url(); ?>site/recibeform",{data:dope},function(r){
                        console.log(r);
                        alert("The form is saved. Thank you!");
                        if(r == 1){
                            window.location.replace("http://ubicuotech.com/");
                        }
                    });
                }

            }).validate({
                errorPlacement: function errorPlacement(error, element) { element.before(error); },
                rules: {
                    confirm: {
                        equalTo: "#password-2"
                    }
                }
            });
        </script>
        <script>
            function addRow() {
                var row = "<tr>"+
                            "<td>"+
                            "<select class='form-control' name='programming_numbers'>"+
                                                "<option value='1'> 1 </option>"+
                                                "<option value='2'> 2 </option>"+
                                                "<option value='3'> 3 </option>"+
                                            "</select>"+
                            "</td>"+
                            "<td>"+
                                "<select class='form-control' name='programming_technologies'>"+
                                                "<option value='IOs (swift or xcode)'>IOs (swift or xcode)</option>"+
                                                "<option value='Android (Java or kotlin)'>Android (Java or kotlin)</option>"+
                                                "<option value='React Native for Cross-platform App'>React Native for Cross-platform App</option>"+
                                                "<option value='Ionic + Angular for Cross-platform App'>Ionic + Angular for Cross-platform App</option>"+
                                                "<option value='React + Redux (front-end)'>React + Redux (front-end)</option>"+
                                                "<option value='Angular 2-5 (front-end)'>Angular 2-5 (front-end)</option>"+
                                                "<option value='Node.js (back-end)'>Node.js (back-end)</option>"+
                                                "<option value='Laravel 4-5 (back-end)'>Laravel 4-5 (back-end) </option>"+
                                                "<option value='Other'>Other</option>"+
                                "</select>"+
                            "</td>"+
                            "<td>"+
                                "<select class='form-control' name='programming_years'>"+
                                                "<option value='1-2'> 1-2 </option>"+
                                                "<option value='3-5'> 3-5 </option>"+
                                                "<option value='5-10'> 5-10 </option>"+
                                                "<option value='10+'> 10+ </option>"+
                                            "</select>"+
                            "</td>"+
                                "<td><button class='btn btn-danger' onclick='removeRow(this)' type='button'>x</button></td>"+
                            "</tr>";
                $(".participantRow").append(row);
            }
            addRow();

            
            /* Doc ready */
            $(".add").on('click', function () {
                if($("#participantTable tr").length < 10) {
                    addRow();
                }
            });

            function removeRow(e){
                console.log(e);
                if($("#participantTable tr").length > 2) {
                    $(e).parent().parent().remove();
                }
            }

            $('input[type=radio][name=you_are]').on('change',function(){
                if (this.value == 'Other') {
                    $(this).parent().append( "<input type='text' class='form-control other-you_are' name='other-you_are' placeholder='type here...'>" );
                }else{
                    $(".other-you_are").remove();
                }
            });

            $('input[type=radio][name=managementplatforms]').on('change',function(){
                if (this.value == 'Other') {
                    $(this).parent().append( "<input type='text' class='form-control other-you_are' name='other_you_are' placeholder='type here...'>" );
                }else{
                    $(".other-you_are").remove();
                }
            });

            $('select[name=programming_technologies]').on('change',function(){
                if (this.value == 'Other') {
                    $(this).parent().append( "<input type='text' class='form-control other-you_are' name='other_programming_technologies' placeholder='type here...'>" );
                    $(this).remove();
                }
            });
            
        </script>
        <script>
            function bs_input_file() {
	$(".input-file").before(
		function() {
			if ( ! $(this).prev().hasClass('input-ghost') ) {
				var element = $("<input type='file' class='input-ghost' style='visibility:hidden; height:0'>");
				element.attr("name",$(this).attr("name"));
				element.change(function(){
					element.next(element).find('input').val((element.val()).split('\\').pop());
				});
				$(this).find("button.btn-choose").click(function(){
					element.click();
				});
				$(this).find("button.btn-reset").click(function(){
					element.val(null);
					$(this).parents(".input-file").find('input').val('');
				});
				$(this).find('input').css("cursor","pointer");
				$(this).find('input').mousedown(function() {
					$(this).parents('.input-file').prev().click();
					return false;
				});
				return element;
			}
		}
	);
}
$(function() {
	bs_input_file();
});
        </script>
    </body>
</html>