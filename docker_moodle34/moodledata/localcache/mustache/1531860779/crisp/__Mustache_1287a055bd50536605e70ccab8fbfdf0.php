<?php

class __Mustache_1287a055bd50536605e70ccab8fbfdf0 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<body name="prueba">
';
        $buffer .= $indent . '  <!-- Testing -->
';
        // 'data' section
        $value = $context->find('data');
        $buffer .= $this->sectionCef135fcef683ea57202fbe00578d77d($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '</body>
';

        return $buffer;
    }

    private function section280370758ef602bbbb76f746aaedbc24(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      {{> block_ases/ar_search_students}}
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
                
                if ($partial = $this->mustache->loadPartial('block_ases/ar_search_students')) {
                    $buffer .= $partial->renderInternal($context, $indent . '      ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1b285a299be11f9c4f09e4d87cf2d20f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      {{> block_ases/ar_view_summary}}
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
                
                if ($partial = $this->mustache->loadPartial('block_ases/ar_view_summary')) {
                    $buffer .= $partial->renderInternal($context, $indent . '      ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCef135fcef683ea57202fbe00578d77d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  {{> block_ases/side_menu}}
  <div class="container">
    {{{message}}}
    {{#search_all_students_ar}}
      {{> block_ases/ar_search_students}}
    {{/search_all_students_ar}}

    {{#search_assigned_students_ar}}
      {{> block_ases/ar_search_students}}
    {{/search_assigned_students_ar}}

    {{#view_summary_report}}
      {{> block_ases/ar_view_summary}}
    {{/view_summary_report}}
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
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                $buffer .= $indent . '  <div class="container">
';
                $buffer .= $indent . '    ';
                $value = $this->resolveValue($context->find('message'), $context);
                $buffer .= $value;
                $buffer .= '
';
                // 'search_all_students_ar' section
                $value = $context->find('search_all_students_ar');
                $buffer .= $this->section280370758ef602bbbb76f746aaedbc24($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'search_assigned_students_ar' section
                $value = $context->find('search_assigned_students_ar');
                $buffer .= $this->section280370758ef602bbbb76f746aaedbc24($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'view_summary_report' section
                $value = $context->find('view_summary_report');
                $buffer .= $this->section1b285a299be11f9c4f09e4d87cf2d20f($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
