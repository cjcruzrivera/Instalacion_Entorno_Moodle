<?php

class __Mustache_d528e6f5d1e076ba56b19edf9e24c080 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="panel panel-default">
';
        $buffer .= $indent . '   <div class="panel panel-default">
';
        $buffer .= $indent . '      <div class="panel-heading">
';
        $buffer .= $indent . '         <h4 class="panel-title" id="list-users-panel">
';
        $buffer .= $indent . '            <a data-toggle="collapse" id="listadministradores" href="#collapse2">Lista de Administradores</a>
';
        $buffer .= $indent . '         </h4>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '      <div id="collapse2" class="panel-collapse collapse">
';
        $buffer .= $indent . '         <div class="panel-body">
';
        $buffer .= $indent . '            <h2>Lista de Administradores</h2>
';
        $buffer .= $indent . '         </div>
';
        $buffer .= $indent . '         <div class="col-md-8 col-md-offset-2" id="div_users">
';
        $buffer .= $indent . '         </div>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '   </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
