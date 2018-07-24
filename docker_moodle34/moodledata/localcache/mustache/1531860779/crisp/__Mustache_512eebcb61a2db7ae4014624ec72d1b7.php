<?php

class __Mustache_512eebcb61a2db7ae4014624ec72d1b7 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="panel panel-default">
';
        $buffer .= $indent . '   <div class="panel-heading">
';
        $buffer .= $indent . '      <h4 class="panel-title">
';
        $buffer .= $indent . '         <a data-toggle="collapse" href="#collapse2">Acciones</a>
';
        $buffer .= $indent . '      </h4>
';
        $buffer .= $indent . '   </div>
';
        $buffer .= $indent . '   <div id="collapse2" class="panel-collapse collapse">
';
        $buffer .= $indent . '      <div class="panel-body">
';
        $buffer .= $indent . '         <div class="container">
';
        $buffer .= $indent . '            <form id="formAction">
';
        // 'data' section
        $value = $context->find('data');
        $buffer .= $this->section972c18e69bb49cd25bb93eed9073fac7($context, $indent, $value);
        $buffer .= $indent . '         </form>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '      <div class="panel-heading">
';
        $buffer .= $indent . '         <h3 data-toggle="collapse" data-target="#collapseactions"><i class="glyphicon glyphicon-chevron-right   Try it
';
        $buffer .= $indent . '            "></i>Lista de acciones</h3>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '      <outer-element id="collapseactions" class="collapse">
';
        $buffer .= $indent . '         <div class="col-md-8 col-md-offset-2" id="div_actions">
';
        $buffer .= $indent . '         </div>
';
        $buffer .= $indent . '         <div id="some-other-id" class="collapse">
';
        $buffer .= $indent . '            <!-- Bordered Table -->
';
        $buffer .= $indent . '            <table class="table table-bordered">
';
        $buffer .= $indent . '               <!--table element -->
';
        $buffer .= $indent . '            </table>
';
        $buffer .= $indent . '         </div>
';
        $buffer .= $indent . '      </outer-element>
';
        $buffer .= $indent . '      <div class="col-md-6">
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '   </div>
';
        $buffer .= $indent . '   </form>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section972c18e69bb49cd25bb93eed9073fac7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
               <div class="form-pilos">
                  <label class="col-sm-2 control-label">Nombre :</label>
                  <div class="col-sm-10">
                     <input type="text" class="form-pilos" id="nombre" name="nombre" placeholder="Nombre de la accion">
                  </div>
               </div>
               <div class="form-pilos">
                  <label class="col-sm-2 control-label">Descripcion</label>
                  <div class="col-sm-10">
                     <input type="text" class="form-pilos" id="descripcion" name="descripcion" placeholder="Descripcion de la accion, sea espefico">
                  </div>
               </div>
               <div class="form-pilos">
                  <label class="col-sm-2 control-label">Funcionalidad</label>
                  <div class="col-sm-10" id="funct1">
                     {{{functions_table}}}
                  </div>
               </div>
               <div class="col-md-9 col-md-offset-4"
               <div class="form-pilos">
                  <button type="submit" id="add_accion" class="submit" data-toggle="modal" data-target="#myModal">
                  Crear acción
                  </button>
               </div>
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
                
                $buffer .= $indent . '               <div class="form-pilos">
';
                $buffer .= $indent . '                  <label class="col-sm-2 control-label">Nombre :</label>
';
                $buffer .= $indent . '                  <div class="col-sm-10">
';
                $buffer .= $indent . '                     <input type="text" class="form-pilos" id="nombre" name="nombre" placeholder="Nombre de la accion">
';
                $buffer .= $indent . '                  </div>
';
                $buffer .= $indent . '               </div>
';
                $buffer .= $indent . '               <div class="form-pilos">
';
                $buffer .= $indent . '                  <label class="col-sm-2 control-label">Descripcion</label>
';
                $buffer .= $indent . '                  <div class="col-sm-10">
';
                $buffer .= $indent . '                     <input type="text" class="form-pilos" id="descripcion" name="descripcion" placeholder="Descripcion de la accion, sea espefico">
';
                $buffer .= $indent . '                  </div>
';
                $buffer .= $indent . '               </div>
';
                $buffer .= $indent . '               <div class="form-pilos">
';
                $buffer .= $indent . '                  <label class="col-sm-2 control-label">Funcionalidad</label>
';
                $buffer .= $indent . '                  <div class="col-sm-10" id="funct1">
';
                $buffer .= $indent . '                     ';
                $value = $this->resolveValue($context->find('functions_table'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                  </div>
';
                $buffer .= $indent . '               </div>
';
                $buffer .= $indent . '               <div class="col-md-9 col-md-offset-4"
';
                $buffer .= $indent . '               <div class="form-pilos">
';
                $buffer .= $indent . '                  <button type="submit" id="add_accion" class="submit" data-toggle="modal" data-target="#myModal">
';
                $buffer .= $indent . '                  Crear acción
';
                $buffer .= $indent . '                  </button>
';
                $buffer .= $indent . '               </div>
';
                $buffer .= $indent . '         </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
