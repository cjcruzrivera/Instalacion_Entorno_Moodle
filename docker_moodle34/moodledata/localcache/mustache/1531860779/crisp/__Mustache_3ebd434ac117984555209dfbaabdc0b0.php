<?php

class __Mustache_3ebd434ac117984555209dfbaabdc0b0 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'text' section
        $value = $context->find('text');
        $buffer .= $this->section456531b6dd778c06dc24b54a3be4bab5($context, $indent, $value);

        return $buffer;
    }

    private function section6aff5b39481d5d347daaeead1b7c9a7d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'restricted, core';
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
                
                $buffer .= 'restricted, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section70981dc58677144f6f6a58b2351d062d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <span class="label label-info">{{#str}}restricted, core{{/str}}</span> {{{text}}}
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
                
                $buffer .= $indent . '    <span class="label label-info">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section6aff5b39481d5d347daaeead1b7c9a7d($context, $indent, $value);
                $buffer .= '</span> ';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section456531b6dd778c06dc24b54a3be4bab5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="availabilityinfo {{classes}}">
    {{^isrestricted}}
    <span class="label label-info">{{{text}}}</span>
    {{/isrestricted}}
    {{#isrestricted}}
    <span class="label label-info">{{#str}}restricted, core{{/str}}</span> {{{text}}}
    {{/isrestricted}}
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
                
                $buffer .= $indent . '<div class="availabilityinfo ';
                $value = $this->resolveValue($context->find('classes'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                // 'isrestricted' inverted section
                $value = $context->find('isrestricted');
                if (empty($value)) {
                    
                    $buffer .= $indent . '    <span class="label label-info">';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= $value;
                    $buffer .= '</span>
';
                }
                // 'isrestricted' section
                $value = $context->find('isrestricted');
                $buffer .= $this->section70981dc58677144f6f6a58b2351d062d($context, $indent, $value);
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
