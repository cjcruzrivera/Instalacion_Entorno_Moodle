<?php

class __Mustache_cbd733eb02a4563cca83189cbfe56115 extends Mustache_Template
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
        $buffer .= $indent . '         <h4 class="panel-title" id="list-periods-panel">
';
        $buffer .= $indent . '            <a data-toggle="collapse" href="#collapse2">Lista de períodos</a>
';
        $buffer .= $indent . '         </h4>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '      <!--end panel-heading-->
';
        $buffer .= $indent . '      <div id="collapse2" class="panel-collapse collapse">
';
        $buffer .= $indent . '         <div class="panel-body">
';
        $buffer .= $indent . '            <h2>Lista de períodos</h2>
';
        $buffer .= $indent . '         </div>
';
        $buffer .= $indent . '         <div class="col-md-8 col-md-offset-2" id="div_periods">
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
