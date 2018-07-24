<?php

class __Mustache_f7e8ea1e608846b47f271684c37fb1f3 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="top_menu" id="menu_div">
';
        $buffer .= $indent . '  <ul>
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('menu'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '  </ul>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }
}
