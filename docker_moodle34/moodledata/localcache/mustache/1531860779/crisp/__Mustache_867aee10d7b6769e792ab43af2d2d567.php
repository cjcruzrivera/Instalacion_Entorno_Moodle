<?php

class __Mustache_867aee10d7b6769e792ab43af2d2d567 extends Mustache_Template
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
        $buffer .= $indent . '                <a data-toggle="collapse" id="listadministradores" href="#div_assign_cohorts">Asignación de cohortes</a>
';
        $buffer .= $indent . '            </h4>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <!--End panel heading-->
';
        $buffer .= $indent . '        <div id="div_assign_cohorts" class="panel-collapse collapse">
';
        $buffer .= $indent . '            <!--Panel body-->
';
        $buffer .= $indent . '            <div class="panel-body">
';
        $buffer .= $indent . '                <div class="col-sm-6">
';
        $buffer .= $indent . '                    <form id="cohort_assignment_form">
';
        $buffer .= $indent . '                        <div class="form-group" id="div_select_cohorts">
';
        $buffer .= $indent . '                            <label for="">Cohorte</label>
';
        $buffer .= $indent . '                            <select name="select_cohorts" id="select_cohorts" class="form-control">
';
        $buffer .= $indent . '                                ';
        $value = $this->resolveValue($context->find('select_cohorts'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                            </select>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                        <div class="form-group">
';
        $buffer .= $indent . '                            <button class="btn btn-danger" type="button" id="button_assign_cohort">Asignar cohorte</button>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    </form>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="col-sm-6" id="div_cohorts_table">
';
        $buffer .= $indent . '                    <table id="cohorts_table">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    </table>
';
        $buffer .= $indent . '                </div>
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
