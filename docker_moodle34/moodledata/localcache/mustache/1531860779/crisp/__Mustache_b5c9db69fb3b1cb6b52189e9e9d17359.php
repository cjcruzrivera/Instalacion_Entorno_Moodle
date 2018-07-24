<?php

class __Mustache_b5c9db69fb3b1cb6b52189e9e9d17359 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="panel panel-default">
';
        $buffer .= $indent . '<div class="panel-heading">
';
        $buffer .= $indent . '   <h4 class="panel-title">
';
        $buffer .= $indent . '      <a data-toggle="collapse" href="#collapse1">Actualización de períodos</a>
';
        $buffer .= $indent . '   </h4>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<div id="collapse1" class="panel-collapse collapse">
';
        $buffer .= $indent . '   <div class="panel-body">
';
        $buffer .= $indent . '      <form class="form-pilos" id="role_man_form">
';
        $buffer .= $indent . '         <div class="col-md-6">
';
        $buffer .= $indent . '            <ul>
';
        $buffer .= $indent . '               <li>
';
        $buffer .= $indent . '                  <label for="periods_input">Períodos: </label> 
';
        $buffer .= $indent . '                  <select name="periods" id="periods">
';
        $buffer .= $indent . '                  ';
        $value = $this->resolveValue($context->find('table'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                  </select>
';
        $buffer .= $indent . '                  <button class="submit" type="button" id="search_button">Buscar</button> 
';
        $buffer .= $indent . '               </li>
';
        $buffer .= $indent . '               <li class="assignment_li"> 
';
        $buffer .= $indent . '                  <label for="semester_name">Semestre: </label>
';
        $buffer .= $indent . '                  <input type="text" id="semester_name" name="semester_name"/>
';
        $buffer .= $indent . '               </li>
';
        $buffer .= $indent . '               <li class="assignment_li">
';
        $buffer .= $indent . '                  <label for="beginning_date">Fecha de Inicio (yyyy-mm-dd): </label>
';
        $buffer .= $indent . '                  <input class="period_date" type="text" maxlength="10" id="beginning_date" name="beginning_date"/>
';
        $buffer .= $indent . '               </li>
';
        $buffer .= $indent . '               <li class="assignment_li">
';
        $buffer .= $indent . '                  <label for="ending_date">Fecha de Finalización (yyyy-mm-dd): </label>
';
        $buffer .= $indent . '                  <input class="period_date" type="text" maxlength="10" id="ending_date" name="ending_date"/>
';
        $buffer .= $indent . '               </li>
';
        $buffer .= $indent . '            </ul>
';
        $buffer .= $indent . '         </div>
';
        $buffer .= $indent . '         <div class="col-md-3 col-md-offset-5 assignment_li">
';
        // 'update_periods_pm' section
        $value = $context->find('update_periods_pm');
        $buffer .= $this->section3ce9c2cc742469f3be3f420ab5ba21e6($context, $indent, $value);
        $buffer .= $indent . '            <button class="submit btn-form" type="button" id="cancel-button">Cancelar</button>
';
        $buffer .= $indent . '         </div>
';
        $buffer .= $indent . '   </form>
';
        $buffer .= $indent . '   </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section3ce9c2cc742469f3be3f420ab5ba21e6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' 
            <button class="submit btn-form" type="button" id="ok-button">Guardar</button>
            ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <button class="submit btn-form" type="button" id="ok-button">Guardar</button>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
