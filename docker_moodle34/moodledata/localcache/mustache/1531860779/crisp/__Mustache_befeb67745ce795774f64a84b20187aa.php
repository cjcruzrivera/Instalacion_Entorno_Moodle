<?php

class __Mustache_befeb67745ce795774f64a84b20187aa extends Mustache_Template
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
        $buffer .= $indent . '            <h2>CARGA DE ARCHIVOS HISTÓRICOS</h2>
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
        $buffer .= $this->section1850ca6ce8ac165b431f651374dd8568($context, $indent, $value);
        $buffer .= $indent . '    </div> 
';
        $buffer .= $indent . '    <div class="row col-lg-6 col-md-6 col-lg-offset-3" id="informacion" style="overflow:auto; height:200px;">';

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

    private function sectionCca963b3a987752f220096c0ffc07010(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div id="respuesta" class="col-lg-6 col-md-6 col-lg-offset-3">
                <form id=\'form\' class="form-inline" role="form" >
                  <div class="form-group">
                     <input type="file" name="archivo" id="archivo" required/>
                  </div>
                  <hr />
                  <div class="form-group">
                      <label>Selecione la operacion</label>
                      <select class="selectpicker" name="selector" id="selector" required >
                          <option value="academic">Histórico académico semestres</option>
                          <option value="materias">Histórico académico materias</option>
                          <option value="icetex">Histórico ICETEX</option>
                          <option value="resolution">Resolución</option>
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
                $buffer .= $indent . '                          <option value="academic">Histórico académico semestres</option>
';
                $buffer .= $indent . '                          <option value="materias">Histórico académico materias</option>
';
                $buffer .= $indent . '                          <option value="icetex">Histórico ICETEX</option>
';
                $buffer .= $indent . '                          <option value="resolution">Resolución</option>
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

    private function section1850ca6ce8ac165b431f651374dd8568(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#upload_historical_files_uhf}}
            <div id="respuesta" class="col-lg-6 col-md-6 col-lg-offset-3">
                <form id=\'form\' class="form-inline" role="form" >
                  <div class="form-group">
                     <input type="file" name="archivo" id="archivo" required/>
                  </div>
                  <hr />
                  <div class="form-group">
                      <label>Selecione la operacion</label>
                      <select class="selectpicker" name="selector" id="selector" required >
                          <option value="academic">Histórico académico semestres</option>
                          <option value="materias">Histórico académico materias</option>
                          <option value="icetex">Histórico ICETEX</option>
                          <option value="resolution">Resolución</option>
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
        {{/upload_historical_files_uhf}}
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
                
                // 'upload_historical_files_uhf' section
                $value = $context->find('upload_historical_files_uhf');
                $buffer .= $this->sectionCca963b3a987752f220096c0ffc07010($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
