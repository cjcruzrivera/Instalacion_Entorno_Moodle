<?php

class __Mustache_443e2055fead63fad1d2c9fc03eac0a0 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<body name="finalgrade_report">
';
        // 'data' section
        $value = $context->find('data');
        $buffer .= $this->section27568994761131dbc26aca611fb50f46($context, $indent, $value);
        $buffer .= $indent . '</body>';

        return $buffer;
    }

    private function section1d32bfe4303e6d603b373421f4fe9c2d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class=\'title\' style="top: 5px !important; width: 350px !important; ">
            <b>REPORTE DE NOTAS FINALES PARCIALES</b>
        </div>

        <div class = "count_items">

            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: #D0C4C4;">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#collapse01">
                                Reporte de notas finales parciales 
                            </a>
                        </h4>
                    </div>
                    <div id="div_table_report">
                    </div>
                </div>

            </div>
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
                
                $buffer .= $indent . '        <div class=\'title\' style="top: 5px !important; width: 350px !important; ">
';
                $buffer .= $indent . '            <b>REPORTE DE NOTAS FINALES PARCIALES</b>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        <div class = "count_items">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            <div class="panel-group">
';
                $buffer .= $indent . '                <div class="panel panel-default">
';
                $buffer .= $indent . '                    <div class="panel-heading" style="background-color: #D0C4C4;">
';
                $buffer .= $indent . '                        <h4 class="panel-title">
';
                $buffer .= $indent . '                            <a data-toggle="collapse" href="#collapse01">
';
                $buffer .= $indent . '                                Reporte de notas finales parciales 
';
                $buffer .= $indent . '                            </a>
';
                $buffer .= $indent . '                        </h4>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div id="div_table_report">
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section27568994761131dbc26aca611fb50f46(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' 
    {{> block_ases/side_menu}} 
    {{{message}}}
    <div>
        {{#view_students_finalgrade_reports_sfr}}
        <div class=\'title\' style="top: 5px !important; width: 350px !important; ">
            <b>REPORTE DE NOTAS FINALES PARCIALES</b>
        </div>

        <div class = "count_items">

            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: #D0C4C4;">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#collapse01">
                                Reporte de notas finales parciales 
                            </a>
                        </h4>
                    </div>
                    <div id="div_table_report">
                    </div>
                </div>

            </div>
            {{/view_students_finalgrade_reports_sfr}} 
        </div>
        
    </div>
    <!-- end wrapper -->
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
                
                if ($partial = $this->mustache->loadPartial('block_ases/side_menu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $buffer .= $indent . '    ';
                $value = $this->resolveValue($context->find('message'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '    <div>
';
                // 'view_students_finalgrade_reports_sfr' section
                $value = $context->find('view_students_finalgrade_reports_sfr');
                $buffer .= $this->section1d32bfe4303e6d603b373421f4fe9c2d($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    <!-- end wrapper -->
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
