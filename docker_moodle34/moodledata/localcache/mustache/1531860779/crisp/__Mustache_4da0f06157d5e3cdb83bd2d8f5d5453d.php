<?php

class __Mustache_4da0f06157d5e3cdb83bd2d8f5d5453d extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'data' section
        $value = $context->find('data');
        $buffer .= $this->section58398c573873db63f9e6670597ecf5af($context, $indent, $value);
        $buffer .= $indent . '   <!--end panel-group-->
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section0923b574bbcebf520d71a2a4e7b5ba10(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      {{> block_ases/view_resolution_students}}
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
                
                if ($partial = $this->mustache->loadPartial('block_ases/view_resolution_students')) {
                    $buffer .= $partial->renderInternal($context, $indent . '      ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section708d76615920a22fc881c7d7786728c9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      {{> block_ases/view_resolutions_report}}
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
                
                if ($partial = $this->mustache->loadPartial('block_ases/view_resolutions_report')) {
                    $buffer .= $partial->renderInternal($context, $indent . '      ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section108ce82698ffd9575b42a1ec9ff68d78(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      {{> block_ases/view_icetex_summary}}
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
                
                if ($partial = $this->mustache->loadPartial('block_ases/view_icetex_summary')) {
                    $buffer .= $partial->renderInternal($context, $indent . '      ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section58398c573873db63f9e6670597ecf5af(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '   
{{> block_ases/side_menu}}
<div class="container">
<div class="row">
   <h2>REPORTES DE HISTÓRICOS ICETEX</h2>   
  <hr/>
  {{{message}}}   
   <div class="panel-group">
      {{#view_resolution_students_hir}}
      {{> block_ases/view_resolution_students}}
      {{/view_resolution_students_hir}}
      {{#view_resolutions_report_hir}}
      {{> block_ases/view_resolutions_report}}
      {{/view_resolutions_report_hir}}
      {{#view_icetex_summary_hir}}
      {{> block_ases/view_icetex_summary}}
      {{/view_icetex_summary_hir}}
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
                $buffer .= $indent . '   <h2>REPORTES DE HISTÓRICOS ICETEX</h2>   
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
                // 'view_resolution_students_hir' section
                $value = $context->find('view_resolution_students_hir');
                $buffer .= $this->section0923b574bbcebf520d71a2a4e7b5ba10($context, $indent, $value);
                // 'view_resolutions_report_hir' section
                $value = $context->find('view_resolutions_report_hir');
                $buffer .= $this->section708d76615920a22fc881c7d7786728c9($context, $indent, $value);
                // 'view_icetex_summary_hir' section
                $value = $context->find('view_icetex_summary_hir');
                $buffer .= $this->section108ce82698ffd9575b42a1ec9ff68d78($context, $indent, $value);
                $buffer .= $indent . '   </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
