<?php

class __Mustache_cb767a40a8d9d33f188fa406d33a91ab extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="panel panel-default">
';
        $buffer .= $indent . '    <div class="panel panel-default">
';
        $buffer .= $indent . '       <div class="panel-heading">
';
        $buffer .= $indent . '          <h4 class="panel-title" id="icetex_summary">
';
        $buffer .= $indent . '             <a data-toggle="collapse" href="#collapse3">Resumen resoluciones</a>
';
        $buffer .= $indent . '          </h4>
';
        $buffer .= $indent . '       </div>
';
        $buffer .= $indent . '       <!--end panel-heading-->
';
        $buffer .= $indent . '       <div id="collapse3" class="panel-collapse collapse">
';
        $buffer .= $indent . '          <div class="panel-body">
';
        $buffer .= $indent . '             <h2>Resumen resoluciones</h2>
';
        $buffer .= $indent . '          </div>
';
        $buffer .= $indent . '          <div class="col-md-10 col-md-offset-1" id="div_icetex_summary">
';
        $buffer .= $indent . '              <div id="cohort_select">
';
        $buffer .= $indent . '                  <label id="label_cohort">Cohortes: </label>
';
        $buffer .= $indent . '                  ';
        $value = $this->resolveValue($context->find('table'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                  <button class="submit" type="button" id="report_button">Generar reporte</button>
';
        $buffer .= $indent . '              </div>
';
        $buffer .= $indent . '              <div>
';
        $buffer .= $indent . '                  <br>
';
        $buffer .= $indent . '                  <br>                  
';
        $buffer .= $indent . '              </div>
';
        $buffer .= $indent . '              <div class="col-md-10 col-md-offset-1" id="div_report_summary">
';
        $buffer .= $indent . '              </div>
';
        $buffer .= $indent . '          </div>
';
        $buffer .= $indent . '       </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . ' </div>
';

        return $buffer;
    }
}
