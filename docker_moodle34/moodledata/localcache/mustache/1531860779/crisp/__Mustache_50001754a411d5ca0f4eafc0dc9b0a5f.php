<?php

class __Mustache_50001754a411d5ca0f4eafc0dc9b0a5f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'data' section
        $value = $context->find('data');
        $buffer .= $this->section06ebf29b0f9f09e690908bea021025a2($context, $indent, $value);

        return $buffer;
    }

    private function sectionDd7ddd06aa344de450bd6895a750228c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{> block_ases/um_search_users}}
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
                
                if ($partial = $this->mustache->loadPartial('block_ases/um_search_users')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB00d1ca0d5f9282f117804bc82cc2dfc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{> block_ases/um_view_users}}
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
                
                if ($partial = $this->mustache->loadPartial('block_ases/um_view_users')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section06ebf29b0f9f09e690908bea021025a2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
{{> block_ases/side_menu}}
<div class="container">
<div class="row">
<h2>GESTIÓN DE USUARIOS</h2>
<hr/>
{{{message}}}
   {{#search_user_um}}
    {{> block_ases/um_search_users}}
   {{/search_user_um}}
   {{#view_users_um}}
    {{> block_ases/um_view_users}}
   {{/view_users_um}}
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
                $buffer .= $indent . '<div class="row">
';
                $buffer .= $indent . '<h2>GESTIÓN DE USUARIOS</h2>
';
                $buffer .= $indent . '<hr/>
';
                $value = $this->resolveValue($context->find('message'), $context);
                $buffer .= $indent . $value;
                $buffer .= '
';
                // 'search_user_um' section
                $value = $context->find('search_user_um');
                $buffer .= $this->sectionDd7ddd06aa344de450bd6895a750228c($context, $indent, $value);
                // 'view_users_um' section
                $value = $context->find('view_users_um');
                $buffer .= $this->sectionB00d1ca0d5f9282f117804bc82cc2dfc($context, $indent, $value);
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
