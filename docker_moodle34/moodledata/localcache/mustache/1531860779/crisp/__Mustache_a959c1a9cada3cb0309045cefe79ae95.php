<?php

class __Mustache_a959c1a9cada3cb0309045cefe79ae95 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="panel panel-default">
';
        $buffer .= $indent . '   <div class="panel-heading">
';
        $buffer .= $indent . '      <h4 class="panel-title">
';
        $buffer .= $indent . '         <a data-toggle="collapse" href="#collapse3">Creación de períodos</a>
';
        $buffer .= $indent . '      </h4>
';
        $buffer .= $indent . '   </div>
';
        $buffer .= $indent . '   <div id="collapse3" class="panel-collapse collapse">
';
        $buffer .= $indent . '      <div class="panel-body">
';
        $buffer .= $indent . '         <form class="form-pilos" id="role_man_form">
';
        $buffer .= $indent . '            <div class="col-md-6">
';
        $buffer .= $indent . '               <ul>
';
        $buffer .= $indent . '                  <li class="new_assignment_li"> 
';
        $buffer .= $indent . '                     <label for="new_semester_name">Nombre del semestre: </label>
';
        $buffer .= $indent . '                     <input type="text" id="new_semester_name" name="new_semester_name"/>
';
        $buffer .= $indent . '                  </li>
';
        $buffer .= $indent . '                  <li class="new_assignment_li">
';
        $buffer .= $indent . '                     <label for="new_beginning_date">Fecha de Inicio (yyyy-mm-dd): </label>
';
        $buffer .= $indent . '                     <input class="period_date" type="text" maxlength="10" id="new_beginning_date" name="new_beginning_date"/>
';
        $buffer .= $indent . '                  </li>
';
        $buffer .= $indent . '                  <li class="new_assignment_li">
';
        $buffer .= $indent . '                     <label for="new_ending_date">Fecha de Finalización (yyyy-mm-dd): </label>
';
        $buffer .= $indent . '                     <input class="period_date" type="text" maxlength="10" id="new_ending_date" name="new_ending_date"/>
';
        $buffer .= $indent . '                  </li>
';
        $buffer .= $indent . '               </ul>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="col-md-3 col-md-offset-5 new_assignment_li">
';
        $buffer .= $indent . '               <button class="submit btn-form" type="button" id="save-button">Guardar</button>
';
        $buffer .= $indent . '               <button class="submit btn-form" type="button" id="cancel-save-button">Cancelar</button>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '         </form>
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
