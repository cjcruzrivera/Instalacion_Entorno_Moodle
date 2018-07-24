<?php

class __Mustache_e2407da67e96968b81e438be189b41b9 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'data' section
        $value = $context->find('data');
        $buffer .= $this->sectionA8d1240060bbd46c0c66911fdb88a36c($context, $indent, $value);
        $buffer .= $indent . '   <!--end panel-group-->
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function sectionEd527a8eea520754f1c8d2e3dc115c3e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      {{> block_ases/search_periods}}
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
                
                if ($partial = $this->mustache->loadPartial('block_ases/search_periods')) {
                    $buffer .= $partial->renderInternal($context, $indent . '      ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC0c9bf5e7efa5e6e9e746d0470de7201(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      {{> block_ases/create_periods}}
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
                
                if ($partial = $this->mustache->loadPartial('block_ases/create_periods')) {
                    $buffer .= $partial->renderInternal($context, $indent . '      ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2871b49dfc122f1c49e24babc72bbeb2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      {{> block_ases/view_periods}}
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
                
                if ($partial = $this->mustache->loadPartial('block_ases/view_periods')) {
                    $buffer .= $partial->renderInternal($context, $indent . '      ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA8d1240060bbd46c0c66911fdb88a36c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '   
{{> block_ases/side_menu}}
<div class="container">
<div class="row">
   <h2>GESTIÓN DE PERÍODOS</h2>   
  <hr/>
  {{{message}}}   
   <div class="panel-group">
      {{#search_periods_pm}}
      {{> block_ases/search_periods}}
      {{/search_periods_pm}}
      {{#create_periods_pm}}
      {{> block_ases/create_periods}}
      {{/create_periods_pm}}
      {{#view_periods_pm}}
      {{> block_ases/view_periods}}
      {{/view_periods_pm}}
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
                $buffer .= $indent . '   <h2>GESTIÓN DE PERÍODOS</h2>   
';
                $buffer .= $indent . '  <hr/>
';
                $buffer .= $indent . '  ';
                $value = $this->resolveValue($context->find('message'), $context);
                $buffer .= $value;
                $buffer .= '   
';
                $buffer .= $indent . '   <div class="panel-group">
';
                // 'search_periods_pm' section
                $value = $context->find('search_periods_pm');
                $buffer .= $this->sectionEd527a8eea520754f1c8d2e3dc115c3e($context, $indent, $value);
                // 'create_periods_pm' section
                $value = $context->find('create_periods_pm');
                $buffer .= $this->sectionC0c9bf5e7efa5e6e9e746d0470de7201($context, $indent, $value);
                // 'view_periods_pm' section
                $value = $context->find('view_periods_pm');
                $buffer .= $this->section2871b49dfc122f1c49e24babc72bbeb2($context, $indent, $value);
                $buffer .= $indent . '   </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
