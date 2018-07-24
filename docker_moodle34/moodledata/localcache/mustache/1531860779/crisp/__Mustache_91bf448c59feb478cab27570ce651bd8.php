<?php

class __Mustache_91bf448c59feb478cab27570ce651bd8 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="';
        $value = $this->resolveValue($context->find('classes'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"';
        // 'attributes' section
        $value = $context->find('attributes');
        $buffer .= $this->sectionAd20463c348991d5bbd2fb97358ea7c0($context, $indent, $value);
        $buffer .= '>
';
        // 'primary' section
        $value = $context->find('primary');
        $buffer .= $this->section451079de268652a75c7062ae66f4f128($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'secondary' section
        $value = $context->find('secondary');
        $buffer .= $this->sectionD6bf6d9bd6cd66f6717c3af1bd5fbf34($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->sectionE600f5e3fca9d2a880692ccebb307172($context, $indent, $value);

        return $buffer;
    }

    private function sectionAd20463c348991d5bbd2fb97358ea7c0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{name}}="{{value}}"';
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
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8597580726f78320d0e398ab287528e4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<li role="presentation">{{> core/action_menu_trigger }}</li>';
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
                
                $buffer .= '<li role="presentation">';
                if ($partial = $this->mustache->loadPartial('core/action_menu_trigger')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= '</li>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section732be9d267aa1bccceec5952e0e9aece(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<li role="presentation">{{> core/action_menu_item }}</li>';
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
                
                $buffer .= '<li role="presentation">';
                if ($partial = $this->mustache->loadPartial('core/action_menu_item')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= '</li>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section451079de268652a75c7062ae66f4f128(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '

        <ul class="{{classes}}"{{#attributes}} {{name}}="{{value}}"{{/attributes}}>

            {{#prioritise}}<li role="presentation">{{> core/action_menu_trigger }}</li>{{/prioritise}}<!--

            -->{{#items}}<li role="presentation">{{> core/action_menu_item }}</li>{{/items}}<!--

            -->{{^prioritise}}<li role="presentation">{{> core/action_menu_trigger }}</li>{{/prioritise}}

        </ul>

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
                
                $buffer .= $indent . '
';
                $buffer .= $indent . '        <ul class="';
                $value = $this->resolveValue($context->find('classes'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"';
                // 'attributes' section
                $value = $context->find('attributes');
                $buffer .= $this->sectionAd20463c348991d5bbd2fb97358ea7c0($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            ';
                // 'prioritise' section
                $value = $context->find('prioritise');
                $buffer .= $this->section8597580726f78320d0e398ab287528e4($context, $indent, $value);
                $buffer .= '<!--
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            -->';
                // 'items' section
                $value = $context->find('items');
                $buffer .= $this->section732be9d267aa1bccceec5952e0e9aece($context, $indent, $value);
                $buffer .= '<!--
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            -->';
                // 'prioritise' inverted section
                $value = $context->find('prioritise');
                if (empty($value)) {
                    
                    $buffer .= '<li role="presentation">';
                    if ($partial = $this->mustache->loadPartial('core/action_menu_trigger')) {
                        $buffer .= $partial->renderInternal($context);
                    }
                    $buffer .= '</li>';
                }
                $buffer .= '
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        </ul>
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD6bf6d9bd6cd66f6717c3af1bd5fbf34(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <ul class="{{classes}}"{{#attributes}} {{name}}="{{value}}"{{/attributes}}>
            {{#items}}<li role="presentation">{{> core/action_menu_item }}</li>{{/items}}
        </ul>
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
                
                $buffer .= $indent . '        <ul class="';
                $value = $this->resolveValue($context->find('classes'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"';
                // 'attributes' section
                $value = $context->find('attributes');
                $buffer .= $this->sectionAd20463c348991d5bbd2fb97358ea7c0($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '            ';
                // 'items' section
                $value = $context->find('items');
                $buffer .= $this->section732be9d267aa1bccceec5952e0e9aece($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE600f5e3fca9d2a880692ccebb307172(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'core/yui\'], function(Y) {
    Y.use(\'moodle-core-actionmenu\', function() {
        M.core.actionmenu.init();
    });
});
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
                
                $buffer .= $indent . 'require([\'core/yui\'], function(Y) {
';
                $buffer .= $indent . '    Y.use(\'moodle-core-actionmenu\', function() {
';
                $buffer .= $indent . '        M.core.actionmenu.init();
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
