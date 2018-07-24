<?php

class __Mustache_c528614caa4709d92879e36076574767 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="panel panel-default">
';
        $buffer .= $indent . '    <div class="panel panel-default">
';
        $buffer .= $indent . '        <!--Panel heading-->
';
        $buffer .= $indent . '        <div class="panel-heading">
';
        $buffer .= $indent . '            <h4 class="panel-title" id="list-users-panel">
';
        $buffer .= $indent . '                <a data-toggle="collapse" id="setup_instance" href="#div_setup_instance">Configuración de la instancia</a>
';
        $buffer .= $indent . '            </h4>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <!--End panel heading-->
';
        $buffer .= $indent . '        <div id="div_setup_instance" class="panel-collapse collapse">
';
        $buffer .= $indent . '            <!--Panel body-->
';
        $buffer .= $indent . '            <div class="panel-body">
';
        $buffer .= $indent . '                <form class="form-inline">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    <div class="col-sm-4">
';
        $buffer .= $indent . '                        <div class="form-group">
';
        $buffer .= $indent . '                            <label for="input_idnumber">Idnumber:</label>
';
        $buffer .= $indent . '                            <input type="text" class="form-control" id="input_idnumber" value=';
        $value = $this->resolveValue($context->find('idnumber'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    <div class="col-sm-4">
';
        $buffer .= $indent . '                        <div class="form-group">
';
        $buffer .= $indent . '                            <label for="input_description">Descripción:</label>
';
        $buffer .= $indent . '                            <input type="text" class="form-control" id="input_description" value=';
        $value = $this->resolveValue($context->find('description'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    
';
        $buffer .= $indent . '                    <div class="col-sm-4">
';
        $buffer .= $indent . '                        <button type="button" class="btn btn-danger" id="button_update_instance">Actualizar</button>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    
';
        $buffer .= $indent . '                </form>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <!--End panel heading-->
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';

        return $buffer;
    }
}
