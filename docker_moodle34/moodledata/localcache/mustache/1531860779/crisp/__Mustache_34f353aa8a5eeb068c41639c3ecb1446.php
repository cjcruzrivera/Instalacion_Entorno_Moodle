<?php

class __Mustache_34f353aa8a5eeb068c41639c3ecb1446 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'data' section
        $value = $context->find('data');
        $buffer .= $this->section4496b40c33d7a8688ff41ece05568f28($context, $indent, $value);

        return $buffer;
    }

    private function section120a8f297c5dbd55db38bbd8067c0a2e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> block_ases/ic_instance_management}}
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
                
                if ($partial = $this->mustache->loadPartial('block_ases/ic_instance_management')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1d136db92b912c6815a4b0880b8a1bad(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> block_ases/ic_cohort_assignment}}
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
                
                if ($partial = $this->mustache->loadPartial('block_ases/ic_cohort_assignment')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7973978777e00aa290e3f85becbcc1ab(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> block_ases/ic_admin_assignment}}
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
                
                if ($partial = $this->mustache->loadPartial('block_ases/ic_admin_assignment')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3c55511f3785a113203104cd19c85360(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> block_ases/restricted_access}}
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
                
                if ($partial = $this->mustache->loadPartial('block_ases/restricted_access')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4496b40c33d7a8688ff41ece05568f28(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
{{> block_ases/side_menu}}
<div class="container">
    <div class="row">
    <h2>CONFIGURACIÓN DE LA INSTANCIA</h2>
    <hr/>
    {{{message}}}
    <div class="panel-group">

        {{#instance_setup_ic}}
        {{> block_ases/ic_instance_management}}
        {{/instance_setup_ic}}

        {{#cohort_assignment_ic}}
        {{> block_ases/ic_cohort_assignment}}
        {{/cohort_assignment_ic}}

        {{#admin_assignment_ic}}
        {{> block_ases/ic_admin_assignment}}
        {{/admin_assignment_ic}}
    </div>
    {{#status}}
        {{> block_ases/restricted_access}}
    {{/status}}
    {{!--end panel-group--}}
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
                
                if ($partial = $this->mustache->loadPartial('block_ases/side_menu')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= $indent . '<div class="container">
';
                $buffer .= $indent . '    <div class="row">
';
                $buffer .= $indent . '    <h2>CONFIGURACIÓN DE LA INSTANCIA</h2>
';
                $buffer .= $indent . '    <hr/>
';
                $buffer .= $indent . '    ';
                $value = $this->resolveValue($context->find('message'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '    <div class="panel-group">
';
                $buffer .= $indent . '
';
                // 'instance_setup_ic' section
                $value = $context->find('instance_setup_ic');
                $buffer .= $this->section120a8f297c5dbd55db38bbd8067c0a2e($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'cohort_assignment_ic' section
                $value = $context->find('cohort_assignment_ic');
                $buffer .= $this->section1d136db92b912c6815a4b0880b8a1bad($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'admin_assignment_ic' section
                $value = $context->find('admin_assignment_ic');
                $buffer .= $this->section7973978777e00aa290e3f85becbcc1ab($context, $indent, $value);
                $buffer .= $indent . '    </div>
';
                // 'status' section
                $value = $context->find('status');
                $buffer .= $this->section3c55511f3785a113203104cd19c85360($context, $indent, $value);
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
