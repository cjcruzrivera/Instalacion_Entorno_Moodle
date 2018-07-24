<?php

class __Mustache_763bcd8de6872769572f226911684476 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<form role="form" id="form_general_report">
';
        $buffer .= $indent . '    <div class="row">
';
        $buffer .= $indent . '        <div class="col-sm-8">
';
        $buffer .= $indent . '            <h2>REPORTE GENERAL DE ESTUDIANTES</h2>
';
        $buffer .= $indent . '            <h5>Por favor seleccione los campos a incluir en el reporte</h5>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="col-sm-4" id="div_cohorts">
';
        $buffer .= $indent . '            <label for="">Cohorte:  </label>
';
        $buffer .= $indent . '            <select name="conditions[]" id="conditions" class="form-control">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('cohorts_checks'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '            </select>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <hr class="col-sm-12" />
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="col-sm-12">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <!-- Columna de campos base -->
';
        $buffer .= $indent . '        <div class="col-sm-12" hidden>
';
        $buffer .= $indent . '            <fieldset id="base_fields">
';
        $buffer .= $indent . '                <legend>Campos base</legend>
';
        $buffer .= $indent . '                <div class="checkbox">
';
        $buffer .= $indent . '                    <input type="checkbox" name="fields[]" value="student_code" onchange="check(this)" onclick="check(this)" checked="checked"> Código
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="checkbox">
';
        $buffer .= $indent . '                    <input type="checkbox" name="fields[]" value="firstname" onchange="check(this)" onclick="check(this)" checked="checked">Nombres
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="checkbox">
';
        $buffer .= $indent . '                    <input type="checkbox" name="fields[]" value="lastname" onchange="check(this)" onclick="check(this)" checked="checked">Apellidos
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="checkbox">
';
        $buffer .= $indent . '                    <input type="checkbox" name="fields[]" value="document_id" onchange="check(this)" onclick="check(this)" checked="checked">Documento
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="checkbox">
';
        $buffer .= $indent . '                    <input type="checkbox" name="fields[]" value="cohort" id="cohort_check" onchange="check(this)" onclick="check(this)" checked="checked">Cohorte
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </fieldset>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <!-- Columna de contacto -->
';
        $buffer .= $indent . '        <div class="col-sm-2 col-md-2">
';
        $buffer .= $indent . '            <fieldset id="contact_fields">
';
        $buffer .= $indent . '                <legend><input type="checkbox" id="contact_fields_check"> Contacto</legend>
';
        $buffer .= $indent . '                <div class="checkbox">
';
        $buffer .= $indent . '                    <input type="checkbox" name="fields[]" value="email"> Correo electrónico
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="checkbox">
';
        $buffer .= $indent . '                    <input type="checkbox" name="fields[]" value="cellphone"> Celular
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="checkbox">
';
        $buffer .= $indent . '                    <input type="checkbox" name="fields[]" value="address"> Dirección
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </fieldset>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <!-- Columna de estados -->
';
        $buffer .= $indent . '        <div class="col-sm-2">
';
        $buffer .= $indent . '            <fieldset id="status_fields">
';
        $buffer .= $indent . '                <legend><input type="checkbox" id="status_fields_check"> Estados</legend>
';
        $buffer .= $indent . '                <div class="checkbox">
';
        $buffer .= $indent . '                    <input type="checkbox" name="status_fields[]" value="ases_status"> ASES
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="checkbox">
';
        $buffer .= $indent . '                    <input type="checkbox" name="status_fields[]" value="icetex_status"> ICETEX
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="checkbox">
';
        $buffer .= $indent . '                    <input type="checkbox" name="status_fields[]" value="academic_program_status"> Registro académico
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </fieldset>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <!-- Columna de programa académico -->
';
        $buffer .= $indent . '        <div class="col-sm-3 col-md-3">
';
        $buffer .= $indent . '            <fieldset id="academic_fields">
';
        $buffer .= $indent . '                <legend><input type="checkbox" id="academic_fields_check"> Académico</legend>
';
        $buffer .= $indent . '                <div class="checkbox">
';
        $buffer .= $indent . '                        <input type="checkbox" name="academic_fields[]" value="program_code"> Código programa académico
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                <div class="checkbox">
';
        $buffer .= $indent . '                    <input type="checkbox" name="academic_fields[]" value="name_program"> Programa académico
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="checkbox">
';
        $buffer .= $indent . '                    <input type="checkbox" name="academic_fields[]" value="faculty"> Facultad
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="checkbox">
';
        $buffer .= $indent . '                    <input type="checkbox" name="academic_fields[]" value="average"> Promedio acumulado
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="checkbox">
';
        $buffer .= $indent . '                    <input type="checkbox" name="academic_fields[]" value="academic_stimuli"> Estimulos
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="checkbox">
';
        $buffer .= $indent . '                    <input type="checkbox" name="academic_fields[]" value="low_academic_performance"> Bajos rendimiento
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </fieldset>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <!-- Columna de asignaciones -->
';
        $buffer .= $indent . '        <div class="col-sm-2 col-md-2">
';
        $buffer .= $indent . '            <fieldset id="assignments_check_fieldset">
';
        $buffer .= $indent . '                <legend><input type="checkbox" id="assignment_fields_check"> Asignaciones</legend>
';
        $buffer .= $indent . '                <div class="checkbox">
';
        $buffer .= $indent . '                        <input type="checkbox" name="assignment_fields[]" value="professional"> Profesional
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                <div class="checkbox">
';
        $buffer .= $indent . '                    <input type="checkbox" name="assignment_fields[]" value="training"> Practicante
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="checkbox">
';
        $buffer .= $indent . '                    <input type="checkbox" name="assignment_fields[]" value="monitor"> Monitor
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </fieldset>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <!-- Columna de riesgos -->
';
        $buffer .= $indent . '        <div class="col-sm-3 col-md-3" id="risk_fields">
';
        $buffer .= $indent . '            <fieldset id="riesgo">
';
        $buffer .= $indent . '                <legend><input type="checkbox" id="risk_fields_check"> Riesgos</legend>
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('risks_checks'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '            </fieldset>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <hr />
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <!--Botones del formulario-->
';
        $buffer .= $indent . '    <div class="col-sm-12">
';
        $buffer .= $indent . '        <div class="col-sm-2 col-sm-offset-5">
';
        $buffer .= $indent . '            <button type="button" class="btn btn-danger col-sm-12" id="send_form_btn"><b>Generar reporte</b></button>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <hr>
';
        $buffer .= $indent . '</form>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="col-sm-12" id="div_table">
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';

        return $buffer;
    }
}
