<?php

class __Mustache_5009a9c1ac8c232b086b10073c615f4a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'data' section
        $value = $context->find('data');
        $buffer .= $this->sectionE514e9e1ad2cdee41344ce8a981c6b52($context, $indent, $value);
        $buffer .= $indent . '<div class="container">
';
        $buffer .= $indent . '    <div class="row">
';
        $buffer .= $indent . '        <div class="col-lg-6 col-md-6 col-sm-12 col-lg-offset-3">
';
        $buffer .= $indent . '            <h2>GESTIÓN MASIVA DE ROLES, ASIGNACIONES Y ACTUALIZACION DE ESTADOS</h2>
';
        $buffer .= $indent . '            <hr />
';
        // 'data' section
        $value = $context->find('data');
        $buffer .= $this->section77c27272e924165558e07aa7fa2ca6bc($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="row">
';
        // 'data' section
        $value = $context->find('data');
        $buffer .= $this->sectionAbc714e379c30acce1462e2d3e81713f($context, $indent, $value);
        $buffer .= $indent . '    </div> 
';
        $buffer .= $indent . '    <div class="row col-lg-6 col-md-6 col-lg-offset-3" id="informacion" style="overflow:auto; height:200px;">
';
        $buffer .= $indent . '  ';

        return $buffer;
    }

    private function sectionE514e9e1ad2cdee41344ce8a981c6b52(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
{{> block_ases/side_menu}}            
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
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section77c27272e924165558e07aa7fa2ca6bc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{{message}}}
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
                
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('message'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE787e32fc2a13af81798f88c32c1b42f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '

            <div id="respuesta" class="col-lg-6 col-md-6 col-lg-offset-3">
                <form id=\'form\' class="form-inline" role="form" >
                  <div class="form-group">
                     {{!--<label> Nombre el archivo: </label> --}}
                     {{!--<input type="text" name="nombre_archivo" id="nombre_archivo" />--}}
                     <input type="file" name="archivo" id="archivo" required/>
                  </div>
                  <hr />
                  <div class="form-group">
                      <label>Selecione la operacion</label>
                      <select class="selectpicker" name="selector" id="selector" required >
                        <option value="roles_usuario">Asignar Roles a Usuario</option>
                        <option value="monitor_estud">Asignar Estudiantes a Monitor</option>
                        <option value="status">Actualizar Estados de Estudiantes</option>
                       </select>
                   </div>
                  <hr />
                  <div class="form-group">
                      {{!--<input type="submit" id="boton_subir" value="Subir" class="btn btn-success col-md-3" />--}}
                      <button class="submit btn-form col-md-9" type="button" id="boton_subir">Subir</button>
                      <div class="col-md-3" id="response"></div>
                  </div>
                 
               </form>
               <hr />

             <div class="hide">
                 
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
                
                $buffer .= $indent . '
';
                $buffer .= $indent . '            <div id="respuesta" class="col-lg-6 col-md-6 col-lg-offset-3">
';
                $buffer .= $indent . '                <form id=\'form\' class="form-inline" role="form" >
';
                $buffer .= $indent . '                  <div class="form-group">
';
                $buffer .= $indent . '                     <input type="file" name="archivo" id="archivo" required/>
';
                $buffer .= $indent . '                  </div>
';
                $buffer .= $indent . '                  <hr />
';
                $buffer .= $indent . '                  <div class="form-group">
';
                $buffer .= $indent . '                      <label>Selecione la operacion</label>
';
                $buffer .= $indent . '                      <select class="selectpicker" name="selector" id="selector" required >
';
                $buffer .= $indent . '                        <option value="roles_usuario">Asignar Roles a Usuario</option>
';
                $buffer .= $indent . '                        <option value="monitor_estud">Asignar Estudiantes a Monitor</option>
';
                $buffer .= $indent . '                        <option value="status">Actualizar Estados de Estudiantes</option>
';
                $buffer .= $indent . '                       </select>
';
                $buffer .= $indent . '                   </div>
';
                $buffer .= $indent . '                  <hr />
';
                $buffer .= $indent . '                  <div class="form-group">
';
                $buffer .= $indent . '                      <button class="submit btn-form col-md-9" type="button" id="boton_subir">Subir</button>
';
                $buffer .= $indent . '                      <div class="col-md-3" id="response"></div>
';
                $buffer .= $indent . '                  </div>
';
                $buffer .= $indent . '                 
';
                $buffer .= $indent . '               </form>
';
                $buffer .= $indent . '               <hr />
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '             <div class="hide">
';
                $buffer .= $indent . '                 
';
                $buffer .= $indent . '             </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAbc714e379c30acce1462e2d3e81713f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
       {{#upload_data_mrm}}

            <div id="respuesta" class="col-lg-6 col-md-6 col-lg-offset-3">
                <form id=\'form\' class="form-inline" role="form" >
                  <div class="form-group">
                     {{!--<label> Nombre el archivo: </label> --}}
                     {{!--<input type="text" name="nombre_archivo" id="nombre_archivo" />--}}
                     <input type="file" name="archivo" id="archivo" required/>
                  </div>
                  <hr />
                  <div class="form-group">
                      <label>Selecione la operacion</label>
                      <select class="selectpicker" name="selector" id="selector" required >
                        <option value="roles_usuario">Asignar Roles a Usuario</option>
                        <option value="monitor_estud">Asignar Estudiantes a Monitor</option>
                        <option value="status">Actualizar Estados de Estudiantes</option>
                       </select>
                   </div>
                  <hr />
                  <div class="form-group">
                      {{!--<input type="submit" id="boton_subir" value="Subir" class="btn btn-success col-md-3" />--}}
                      <button class="submit btn-form col-md-9" type="button" id="boton_subir">Subir</button>
                      <div class="col-md-3" id="response"></div>
                  </div>
                 
               </form>
               <hr />

             <div class="hide">
                 
             </div>
        </div>
      {{/upload_data_mrm}}
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
                
                // 'upload_data_mrm' section
                $value = $context->find('upload_data_mrm');
                $buffer .= $this->sectionE787e32fc2a13af81798f88c32c1b42f($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
