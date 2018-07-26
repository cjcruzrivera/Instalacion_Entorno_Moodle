<?php

class __Mustache_6ac87054277d916c7d483d1f08758089 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<form id="gradetreeform" method="post" action="';
        $value = $this->resolveValue($context->find('actionurl'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <div>
';
        $buffer .= $indent . '        <input type="hidden" name="sesskey" value="';
        $value = $this->resolveValue($context->find('sesskey'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        // 'notification' section
        $value = $context->find('notification');
        $buffer .= $this->sectionF3ed6258ad6ffc1f6233ec69a0fbe7c2($context, $indent, $value);
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('table'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '        <div id="gradetreesubmit">
';
        // 'showsave' section
        $value = $context->find('showsave');
        $buffer .= $this->sectionA6fe819bfa0ffc4ab9d7e37d190b17da($context, $indent, $value);
        // 'showbulkmove' section
        $value = $context->find('showbulkmove');
        $buffer .= $this->section30dc1531a0b6de9ad522d4a3b2e99c03($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</form>
';

        return $buffer;
    }

    private function sectionF3ed6258ad6ffc1f6233ec69a0fbe7c2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{>core/notification_info}}
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
                
                if ($partial = $this->mustache->loadPartial('core/notification_info')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCc896fb1429559fad42f2607525c3e3c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'savechanges';
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
                
                $buffer .= 'savechanges';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8f209621011f7654520ac1389834686d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}}savechanges{{/str}}';
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
                
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionCc896fb1429559fad42f2607525c3e3c($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA6fe819bfa0ffc4ab9d7e37d190b17da(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <input class="advanced" type="submit" value={{#quote}}{{#str}}savechanges{{/str}}{{/quote}}>
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
                
                $buffer .= $indent . '                <input class="advanced" type="submit" value=';
                // 'quote' section
                $value = $context->find('quote');
                $buffer .= $this->section8f209621011f7654520ac1389834686d($context, $indent, $value);
                $buffer .= '>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCfb97d18e3db40984b4bc7dfb28ab6f2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'moveselectedto, grades';
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
                
                $buffer .= 'moveselectedto, grades';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section31228305e5f36f31cd419223f3cc29e2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <option value="{{value}}">{{name}}</option>
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
                
                $buffer .= $indent . '                        <option value="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCd40f67c442c6cf3e4e18af0c0f7a7ca(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'go';
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
                
                $buffer .= 'go';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section218175ab31322cf3023d7cb8bb792280(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}}go{{/str}}';
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
                
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionCd40f67c442c6cf3e4e18af0c0f7a7ca($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section30dc1531a0b6de9ad522d4a3b2e99c03(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <br><br>
                <input type="hidden" name="bulkmove" value="0" id="bulkmoveinput">
                <label for="menumoveafter">{{#str}}moveselectedto, grades{{/str}}</label>
                <select name="moveafter" id="menumoveafter" class="ignoredirty singleselect select">
                    {{#bulkmoveoptions}}
                        <option value="{{value}}">{{name}}</option>
                    {{/bulkmoveoptions}}
                </select>
                <div id="noscriptgradetreeform" class="hiddenifjs">
                    <input type="submit" name={{#quote}}{{#str}}go{{/str}}{{/quote}}>
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
                
                $buffer .= $indent . '                <br><br>
';
                $buffer .= $indent . '                <input type="hidden" name="bulkmove" value="0" id="bulkmoveinput">
';
                $buffer .= $indent . '                <label for="menumoveafter">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionCfb97d18e3db40984b4bc7dfb28ab6f2($context, $indent, $value);
                $buffer .= '</label>
';
                $buffer .= $indent . '                <select name="moveafter" id="menumoveafter" class="ignoredirty singleselect select">
';
                // 'bulkmoveoptions' section
                $value = $context->find('bulkmoveoptions');
                $buffer .= $this->section31228305e5f36f31cd419223f3cc29e2($context, $indent, $value);
                $buffer .= $indent . '                </select>
';
                $buffer .= $indent . '                <div id="noscriptgradetreeform" class="hiddenifjs">
';
                $buffer .= $indent . '                    <input type="submit" name=';
                // 'quote' section
                $value = $context->find('quote');
                $buffer .= $this->section218175ab31322cf3023d7cb8bb792280($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
