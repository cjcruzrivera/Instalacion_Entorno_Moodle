<?php

class __Mustache_c913f3337616e9c75d416ee103084e80 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'data' section
        $value = $context->find('data');
        $buffer .= $this->sectionAec2bb5e4ffb263bf0e474146bbadce7($context, $indent, $value);

        return $buffer;
    }

    private function section1691e377d43eca7f211c99ff47b59fd5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
               <form id="formPerfil">
                  <div class="row">
                     <label class="col-sm-3 control-label">Escoja el rol :</label>
                     <div class="col-sm-12" id="userol">
                        {{{roles_table_user}}}
                     </div>
                  </div>
                  <div class="row top-buffer" id="lista_funcionalidades">
                     {{{general_table}}}
                  </div>
                  <div class="col-md-10 col-md-offset-5">
                     <div class="form-pilos">
                        <button type="submit" id="assign_user_profile" class="submit" data-toggle="modal" data-target="#myModal">
                        Guardar
                        </button>
                     </div>
                  </div>
               </form>
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
                
                $buffer .= $indent . '               <form id="formPerfil">
';
                $buffer .= $indent . '                  <div class="row">
';
                $buffer .= $indent . '                     <label class="col-sm-3 control-label">Escoja el rol :</label>
';
                $buffer .= $indent . '                     <div class="col-sm-12" id="userol">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('roles_table_user'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                     </div>
';
                $buffer .= $indent . '                  </div>
';
                $buffer .= $indent . '                  <div class="row top-buffer" id="lista_funcionalidades">
';
                $buffer .= $indent . '                     ';
                $value = $this->resolveValue($context->find('general_table'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                  </div>
';
                $buffer .= $indent . '                  <div class="col-md-10 col-md-offset-5">
';
                $buffer .= $indent . '                     <div class="form-pilos">
';
                $buffer .= $indent . '                        <button type="submit" id="assign_user_profile" class="submit" data-toggle="modal" data-target="#myModal">
';
                $buffer .= $indent . '                        Guardar
';
                $buffer .= $indent . '                        </button>
';
                $buffer .= $indent . '                     </div>
';
                $buffer .= $indent . '                  </div>
';
                $buffer .= $indent . '               </form>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBbf71b6e1866ffaf2f8d59fe470abd4a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="panel-group">
   <div class="panel panel-default">
      <div class="panel panel-default">
         <div class="panel-heading">
            <h4 class="panel-title" id="list-users-panel">
               <a data-toggle="collapse" href="#collapse1">Funcionalidades</a>
            </h4>
         </div>
         {{!--end panel-heading--}}
         <div id="collapse1" class="panel-collapse collapse">
            <div class="panel-body">
               <div class="container">
                  <form id="formFuncion">
                     <div class="form-pilos">
                        <label class="col-sm-2 control-label">Nombre :</label>
                        <div class="col-sm-10">
                           <input type="text" class="form-pilos" id="nombre_funcionalidad" name="nombre_funcionalidad" placeholder="Nombre funcionalidad">
                        </div>
                     </div>
                     <div class="form-pilos">
                        <label class="col-sm-2 control-label">Descripción</label>
                        <div class="col-sm-10">
                           <input type="text" class="form-pilos" id="descripcion_funcionalidad" name="descripcion_funcionalidad" placeholder="Descripcion funcionalidad, sea espefico">
                        </div>
                     </div>
                     <div class="col-md-9 col-md-offset-4"
                     <div class="form-pilos">
                        <button type="submit" id="add_function" class="submit" data-toggle="modal" data-target="#myModal">
                        Crear funcionalidad
                        </button>
                        <div class="invisible">
                           <button type="submit" id="mod_function" class="submit" data-toggle="modal" data-target="#myModal">
                           Modificar funcionalidad
                           </button>
                        </div>
                     </div>
               </div>
               </form>
               <div class="panel-heading">
                  <h3 data-toggle="collapse" data-target="#collapse-function">
                     <i class="glyphicon glyphicon-chevron-right   Try it
                        "></i>Lista de funcionalidades
                  </h3>
               </div>
               <outer-element id="collapse-function" class="collapse">
                  <div class="col-md-8 col-md-offset-2" id="div_functions">
                  </div>
                  <div id="some-other-id" class="collapse">
                     <!-- Bordered Table -->
                     <table class="table table-bordered">
                        <!--table element -->
                     </table>
                  </div>
               </outer-element>
               <div class="col-md-6">
               </div>
               {{!--end col-md-6--}}
            </div>
            {{!--end panel-body--}}
            </form>
         </div>
      </div>
   </div>
   {{!--end panel-group--}} {{> block_ases/manage_action}}
   <div class="panel panel-default">
      <div class="panel panel-default">
         <div class="panel-heading">
            <h4 class="panel-title" id="list-users-panel">
               <a data-toggle="collapse" href="#collapse4">Roles</a>
            </h4>
         </div>
         {{!--end panel-heading--}}
         <div id="collapse4" class="panel-collapse collapse">
            <div class="panel-body">
               <div class="container">
                  <form id="formPerfil">
                     <div class="form-pilos">
                        <label class="col-sm-2 control-label">Nombre :</label>
                        <div class="col-sm-10">
                           <input type="text" class="form-pilos" id="nombre_perfil" name="nombre_perfil" placeholder="Nombre del rol">
                        </div>
                     </div>
                     <div class="form-pilos">
                        <label class="col-sm-2 control-label">Descripción</label>
                        <div class="col-sm-10">
                           <input type="text" class="form-pilos" id="descripcion_perfil" name="descripcion_perfil" placeholder="Descripcion del rol, sea espefico">
                        </div>
                     </div>
                     <div class="col-md-9 col-md-offset-4"
                     <div class="form-pilos">
                        <button type="submit" id="add_profile" class="submit" data-toggle="modal" data-target="#myModal">
                        Crear rol
                        </button>
                     </div>
               </div>
               </form>
               <div class="panel-heading">
                  <h3 data-toggle="collapse" data-target="#collapse-profile">
                     <i class="glyphicon glyphicon-chevron-right   Try it
                        "></i>Lista de roles
                  </h3>
               </div>
               <outer-element id="collapse-profile" class="collapse">
                  <div class="col-md-8 col-md-offset-2" id="div_profiles">
                  </div>
                  <div id="some-other-id" class="collapse">
                     <!-- Bordered Table -->
                     <table class="table table-bordered">
                        <!--table element -->
                     </table>
                  </div>
               </outer-element>
               <div class="col-md-6">
               </div>
               {{!--end col-md-6--}}
            </div>
            {{!--end panel-body--}}
            </form>
         </div>
      </div>
   </div>
   {{!--end panel-group--}} {{!--end panel-group--}}
   <div class="panel panel-default">
      <div class="panel panel-default">
         <div class="panel-heading">
            <h4 class="panel-title" id="list-users-panel">
               <a data-toggle="collapse" href="#collapse6">Gestionar permisos y roles</a>
            </h4>
         </div>
         {{!--end panel-heading--}}
         <div id="collapse6" class="panel-collapse collapse">
            <div class="panel-body">
               {{#data}}
               <form id="formPerfil">
                  <div class="row">
                     <label class="col-sm-3 control-label">Escoja el rol :</label>
                     <div class="col-sm-12" id="userol">
                        {{{roles_table_user}}}
                     </div>
                  </div>
                  <div class="row top-buffer" id="lista_funcionalidades">
                     {{{general_table}}}
                  </div>
                  <div class="col-md-10 col-md-offset-5">
                     <div class="form-pilos">
                        <button type="submit" id="assign_user_profile" class="submit" data-toggle="modal" data-target="#myModal">
                        Guardar
                        </button>
                     </div>
                  </div>
               </form>
               {{/data}}
               <div class="col-md-6">
               </div>
               {{!--end col-md-6--}}
            </div>
            {{!--end panel-body--}}
         </div>
      </div>
   </div>
   {{!--end panel-group--}} ';
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
                
                $buffer .= '
';
                $buffer .= $indent . '<div class="panel-group">
';
                $buffer .= $indent . '   <div class="panel panel-default">
';
                $buffer .= $indent . '      <div class="panel panel-default">
';
                $buffer .= $indent . '         <div class="panel-heading">
';
                $buffer .= $indent . '            <h4 class="panel-title" id="list-users-panel">
';
                $buffer .= $indent . '               <a data-toggle="collapse" href="#collapse1">Funcionalidades</a>
';
                $buffer .= $indent . '            </h4>
';
                $buffer .= $indent . '         </div>
';
                $buffer .= $indent . '         <div id="collapse1" class="panel-collapse collapse">
';
                $buffer .= $indent . '            <div class="panel-body">
';
                $buffer .= $indent . '               <div class="container">
';
                $buffer .= $indent . '                  <form id="formFuncion">
';
                $buffer .= $indent . '                     <div class="form-pilos">
';
                $buffer .= $indent . '                        <label class="col-sm-2 control-label">Nombre :</label>
';
                $buffer .= $indent . '                        <div class="col-sm-10">
';
                $buffer .= $indent . '                           <input type="text" class="form-pilos" id="nombre_funcionalidad" name="nombre_funcionalidad" placeholder="Nombre funcionalidad">
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                     </div>
';
                $buffer .= $indent . '                     <div class="form-pilos">
';
                $buffer .= $indent . '                        <label class="col-sm-2 control-label">Descripción</label>
';
                $buffer .= $indent . '                        <div class="col-sm-10">
';
                $buffer .= $indent . '                           <input type="text" class="form-pilos" id="descripcion_funcionalidad" name="descripcion_funcionalidad" placeholder="Descripcion funcionalidad, sea espefico">
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                     </div>
';
                $buffer .= $indent . '                     <div class="col-md-9 col-md-offset-4"
';
                $buffer .= $indent . '                     <div class="form-pilos">
';
                $buffer .= $indent . '                        <button type="submit" id="add_function" class="submit" data-toggle="modal" data-target="#myModal">
';
                $buffer .= $indent . '                        Crear funcionalidad
';
                $buffer .= $indent . '                        </button>
';
                $buffer .= $indent . '                        <div class="invisible">
';
                $buffer .= $indent . '                           <button type="submit" id="mod_function" class="submit" data-toggle="modal" data-target="#myModal">
';
                $buffer .= $indent . '                           Modificar funcionalidad
';
                $buffer .= $indent . '                           </button>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                     </div>
';
                $buffer .= $indent . '               </div>
';
                $buffer .= $indent . '               </form>
';
                $buffer .= $indent . '               <div class="panel-heading">
';
                $buffer .= $indent . '                  <h3 data-toggle="collapse" data-target="#collapse-function">
';
                $buffer .= $indent . '                     <i class="glyphicon glyphicon-chevron-right   Try it
';
                $buffer .= $indent . '                        "></i>Lista de funcionalidades
';
                $buffer .= $indent . '                  </h3>
';
                $buffer .= $indent . '               </div>
';
                $buffer .= $indent . '               <outer-element id="collapse-function" class="collapse">
';
                $buffer .= $indent . '                  <div class="col-md-8 col-md-offset-2" id="div_functions">
';
                $buffer .= $indent . '                  </div>
';
                $buffer .= $indent . '                  <div id="some-other-id" class="collapse">
';
                $buffer .= $indent . '                     <!-- Bordered Table -->
';
                $buffer .= $indent . '                     <table class="table table-bordered">
';
                $buffer .= $indent . '                        <!--table element -->
';
                $buffer .= $indent . '                     </table>
';
                $buffer .= $indent . '                  </div>
';
                $buffer .= $indent . '               </outer-element>
';
                $buffer .= $indent . '               <div class="col-md-6">
';
                $buffer .= $indent . '               </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            </form>
';
                $buffer .= $indent . '         </div>
';
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '   </div>
';
                $buffer .= $indent . '   ';
                $buffer .= ' ';
                if ($partial = $this->mustache->loadPartial('block_ases/manage_action')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= '
';
                $buffer .= $indent . '   <div class="panel panel-default">
';
                $buffer .= $indent . '      <div class="panel panel-default">
';
                $buffer .= $indent . '         <div class="panel-heading">
';
                $buffer .= $indent . '            <h4 class="panel-title" id="list-users-panel">
';
                $buffer .= $indent . '               <a data-toggle="collapse" href="#collapse4">Roles</a>
';
                $buffer .= $indent . '            </h4>
';
                $buffer .= $indent . '         </div>
';
                $buffer .= $indent . '         <div id="collapse4" class="panel-collapse collapse">
';
                $buffer .= $indent . '            <div class="panel-body">
';
                $buffer .= $indent . '               <div class="container">
';
                $buffer .= $indent . '                  <form id="formPerfil">
';
                $buffer .= $indent . '                     <div class="form-pilos">
';
                $buffer .= $indent . '                        <label class="col-sm-2 control-label">Nombre :</label>
';
                $buffer .= $indent . '                        <div class="col-sm-10">
';
                $buffer .= $indent . '                           <input type="text" class="form-pilos" id="nombre_perfil" name="nombre_perfil" placeholder="Nombre del rol">
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                     </div>
';
                $buffer .= $indent . '                     <div class="form-pilos">
';
                $buffer .= $indent . '                        <label class="col-sm-2 control-label">Descripción</label>
';
                $buffer .= $indent . '                        <div class="col-sm-10">
';
                $buffer .= $indent . '                           <input type="text" class="form-pilos" id="descripcion_perfil" name="descripcion_perfil" placeholder="Descripcion del rol, sea espefico">
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                     </div>
';
                $buffer .= $indent . '                     <div class="col-md-9 col-md-offset-4"
';
                $buffer .= $indent . '                     <div class="form-pilos">
';
                $buffer .= $indent . '                        <button type="submit" id="add_profile" class="submit" data-toggle="modal" data-target="#myModal">
';
                $buffer .= $indent . '                        Crear rol
';
                $buffer .= $indent . '                        </button>
';
                $buffer .= $indent . '                     </div>
';
                $buffer .= $indent . '               </div>
';
                $buffer .= $indent . '               </form>
';
                $buffer .= $indent . '               <div class="panel-heading">
';
                $buffer .= $indent . '                  <h3 data-toggle="collapse" data-target="#collapse-profile">
';
                $buffer .= $indent . '                     <i class="glyphicon glyphicon-chevron-right   Try it
';
                $buffer .= $indent . '                        "></i>Lista de roles
';
                $buffer .= $indent . '                  </h3>
';
                $buffer .= $indent . '               </div>
';
                $buffer .= $indent . '               <outer-element id="collapse-profile" class="collapse">
';
                $buffer .= $indent . '                  <div class="col-md-8 col-md-offset-2" id="div_profiles">
';
                $buffer .= $indent . '                  </div>
';
                $buffer .= $indent . '                  <div id="some-other-id" class="collapse">
';
                $buffer .= $indent . '                     <!-- Bordered Table -->
';
                $buffer .= $indent . '                     <table class="table table-bordered">
';
                $buffer .= $indent . '                        <!--table element -->
';
                $buffer .= $indent . '                     </table>
';
                $buffer .= $indent . '                  </div>
';
                $buffer .= $indent . '               </outer-element>
';
                $buffer .= $indent . '               <div class="col-md-6">
';
                $buffer .= $indent . '               </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            </form>
';
                $buffer .= $indent . '         </div>
';
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '   </div>
';
                $buffer .= $indent . '   ';
                $buffer .= ' ';
                $buffer .= '
';
                $buffer .= $indent . '   <div class="panel panel-default">
';
                $buffer .= $indent . '      <div class="panel panel-default">
';
                $buffer .= $indent . '         <div class="panel-heading">
';
                $buffer .= $indent . '            <h4 class="panel-title" id="list-users-panel">
';
                $buffer .= $indent . '               <a data-toggle="collapse" href="#collapse6">Gestionar permisos y roles</a>
';
                $buffer .= $indent . '            </h4>
';
                $buffer .= $indent . '         </div>
';
                $buffer .= $indent . '         <div id="collapse6" class="panel-collapse collapse">
';
                $buffer .= $indent . '            <div class="panel-body">
';
                // 'data' section
                $value = $context->find('data');
                $buffer .= $this->section1691e377d43eca7f211c99ff47b59fd5($context, $indent, $value);
                $buffer .= $indent . '               <div class="col-md-6">
';
                $buffer .= $indent . '               </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '         </div>
';
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '   </div>
';
                $buffer .= $indent . '   ';
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAec2bb5e4ffb263bf0e474146bbadce7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{> block_ases/side_menu}}
<div class="container">
<div class="row">
<h2>GESTIÓN DE PERMISOS</h2>
<hr/>
{{{message}}} {{#manage_action_ca}}
<div class="panel-group">
   <div class="panel panel-default">
      <div class="panel panel-default">
         <div class="panel-heading">
            <h4 class="panel-title" id="list-users-panel">
               <a data-toggle="collapse" href="#collapse1">Funcionalidades</a>
            </h4>
         </div>
         {{!--end panel-heading--}}
         <div id="collapse1" class="panel-collapse collapse">
            <div class="panel-body">
               <div class="container">
                  <form id="formFuncion">
                     <div class="form-pilos">
                        <label class="col-sm-2 control-label">Nombre :</label>
                        <div class="col-sm-10">
                           <input type="text" class="form-pilos" id="nombre_funcionalidad" name="nombre_funcionalidad" placeholder="Nombre funcionalidad">
                        </div>
                     </div>
                     <div class="form-pilos">
                        <label class="col-sm-2 control-label">Descripción</label>
                        <div class="col-sm-10">
                           <input type="text" class="form-pilos" id="descripcion_funcionalidad" name="descripcion_funcionalidad" placeholder="Descripcion funcionalidad, sea espefico">
                        </div>
                     </div>
                     <div class="col-md-9 col-md-offset-4"
                     <div class="form-pilos">
                        <button type="submit" id="add_function" class="submit" data-toggle="modal" data-target="#myModal">
                        Crear funcionalidad
                        </button>
                        <div class="invisible">
                           <button type="submit" id="mod_function" class="submit" data-toggle="modal" data-target="#myModal">
                           Modificar funcionalidad
                           </button>
                        </div>
                     </div>
               </div>
               </form>
               <div class="panel-heading">
                  <h3 data-toggle="collapse" data-target="#collapse-function">
                     <i class="glyphicon glyphicon-chevron-right   Try it
                        "></i>Lista de funcionalidades
                  </h3>
               </div>
               <outer-element id="collapse-function" class="collapse">
                  <div class="col-md-8 col-md-offset-2" id="div_functions">
                  </div>
                  <div id="some-other-id" class="collapse">
                     <!-- Bordered Table -->
                     <table class="table table-bordered">
                        <!--table element -->
                     </table>
                  </div>
               </outer-element>
               <div class="col-md-6">
               </div>
               {{!--end col-md-6--}}
            </div>
            {{!--end panel-body--}}
            </form>
         </div>
      </div>
   </div>
   {{!--end panel-group--}} {{> block_ases/manage_action}}
   <div class="panel panel-default">
      <div class="panel panel-default">
         <div class="panel-heading">
            <h4 class="panel-title" id="list-users-panel">
               <a data-toggle="collapse" href="#collapse4">Roles</a>
            </h4>
         </div>
         {{!--end panel-heading--}}
         <div id="collapse4" class="panel-collapse collapse">
            <div class="panel-body">
               <div class="container">
                  <form id="formPerfil">
                     <div class="form-pilos">
                        <label class="col-sm-2 control-label">Nombre :</label>
                        <div class="col-sm-10">
                           <input type="text" class="form-pilos" id="nombre_perfil" name="nombre_perfil" placeholder="Nombre del rol">
                        </div>
                     </div>
                     <div class="form-pilos">
                        <label class="col-sm-2 control-label">Descripción</label>
                        <div class="col-sm-10">
                           <input type="text" class="form-pilos" id="descripcion_perfil" name="descripcion_perfil" placeholder="Descripcion del rol, sea espefico">
                        </div>
                     </div>
                     <div class="col-md-9 col-md-offset-4"
                     <div class="form-pilos">
                        <button type="submit" id="add_profile" class="submit" data-toggle="modal" data-target="#myModal">
                        Crear rol
                        </button>
                     </div>
               </div>
               </form>
               <div class="panel-heading">
                  <h3 data-toggle="collapse" data-target="#collapse-profile">
                     <i class="glyphicon glyphicon-chevron-right   Try it
                        "></i>Lista de roles
                  </h3>
               </div>
               <outer-element id="collapse-profile" class="collapse">
                  <div class="col-md-8 col-md-offset-2" id="div_profiles">
                  </div>
                  <div id="some-other-id" class="collapse">
                     <!-- Bordered Table -->
                     <table class="table table-bordered">
                        <!--table element -->
                     </table>
                  </div>
               </outer-element>
               <div class="col-md-6">
               </div>
               {{!--end col-md-6--}}
            </div>
            {{!--end panel-body--}}
            </form>
         </div>
      </div>
   </div>
   {{!--end panel-group--}} {{!--end panel-group--}}
   <div class="panel panel-default">
      <div class="panel panel-default">
         <div class="panel-heading">
            <h4 class="panel-title" id="list-users-panel">
               <a data-toggle="collapse" href="#collapse6">Gestionar permisos y roles</a>
            </h4>
         </div>
         {{!--end panel-heading--}}
         <div id="collapse6" class="panel-collapse collapse">
            <div class="panel-body">
               {{#data}}
               <form id="formPerfil">
                  <div class="row">
                     <label class="col-sm-3 control-label">Escoja el rol :</label>
                     <div class="col-sm-12" id="userol">
                        {{{roles_table_user}}}
                     </div>
                  </div>
                  <div class="row top-buffer" id="lista_funcionalidades">
                     {{{general_table}}}
                  </div>
                  <div class="col-md-10 col-md-offset-5">
                     <div class="form-pilos">
                        <button type="submit" id="assign_user_profile" class="submit" data-toggle="modal" data-target="#myModal">
                        Guardar
                        </button>
                     </div>
                  </div>
               </form>
               {{/data}}
               <div class="col-md-6">
               </div>
               {{!--end col-md-6--}}
            </div>
            {{!--end panel-body--}}
         </div>
      </div>
   </div>
   {{!--end panel-group--}} {{/manage_action_ca}}
</div>
{{!-- Modal --}}
<div id="edit" class="modal modal_pilos" role="dialog">
<div class="modal-dialog">
   <!-- Modal content-->
   <div class="modal-content">
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="modal-title">Permisos</h4>
      </div>
      <div class="modal-body">
         <form id="form_editar">
            <div class="form-pilos">
               <label class="col-sm-2 control-label">Nombre :</label>
               <div class="col-sm-10">
                  <input type="text" class="form-pilos" id="nombre_editar" name="nombre_editar">
               </div>
               <div class="form-pilos">
                  <label class="col-sm-2 control-label">Descripción :</label>
                  <div class="col-sm-10">
                     <input type="text" class="form-pilos" id="descripcion_editar" name="descripcion_editar">
                  </div>
               </div>
               <div class="form-pilos func hide">
                  <label class="col-sm-2 control-label">Funcionalidad</label>
                  <div class="col-sm-10" id="funct2">
                     {{{functions}}}
                  </div>
               </div>
            </div>
         </form>
      </div>
      <div class="modal-footer">
         <button type="button" class="button btn btn-secondary" data-dismiss="modal" id="close_seg">Cerrar</button>
         <button type="button" class="button btn btn-primary" id="save_seg">Guardar</button>
      </div>
   </div>
</div>
{{!-- End Modal --}}
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
                
                $buffer .= $indent . ' ';
                if ($partial = $this->mustache->loadPartial('block_ases/side_menu')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= '
';
                $buffer .= $indent . '<div class="container">
';
                $buffer .= $indent . '<div class="row">
';
                $buffer .= $indent . '<h2>GESTIÓN DE PERMISOS</h2>
';
                $buffer .= $indent . '<hr/>
';
                $value = $this->resolveValue($context->find('message'), $context);
                $buffer .= $indent . $value;
                $buffer .= ' ';
                // 'manage_action_ca' section
                $value = $context->find('manage_action_ca');
                $buffer .= $this->sectionBbf71b6e1866ffaf2f8d59fe470abd4a($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '</div>
';
                $buffer .= $indent . '<div id="edit" class="modal modal_pilos" role="dialog">
';
                $buffer .= $indent . '<div class="modal-dialog">
';
                $buffer .= $indent . '   <!-- Modal content-->
';
                $buffer .= $indent . '   <div class="modal-content">
';
                $buffer .= $indent . '      <div class="modal-header">
';
                $buffer .= $indent . '         <button type="button" class="close" data-dismiss="modal">&times;</button>
';
                $buffer .= $indent . '         <h4 class="modal-title">Permisos</h4>
';
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '      <div class="modal-body">
';
                $buffer .= $indent . '         <form id="form_editar">
';
                $buffer .= $indent . '            <div class="form-pilos">
';
                $buffer .= $indent . '               <label class="col-sm-2 control-label">Nombre :</label>
';
                $buffer .= $indent . '               <div class="col-sm-10">
';
                $buffer .= $indent . '                  <input type="text" class="form-pilos" id="nombre_editar" name="nombre_editar">
';
                $buffer .= $indent . '               </div>
';
                $buffer .= $indent . '               <div class="form-pilos">
';
                $buffer .= $indent . '                  <label class="col-sm-2 control-label">Descripción :</label>
';
                $buffer .= $indent . '                  <div class="col-sm-10">
';
                $buffer .= $indent . '                     <input type="text" class="form-pilos" id="descripcion_editar" name="descripcion_editar">
';
                $buffer .= $indent . '                  </div>
';
                $buffer .= $indent . '               </div>
';
                $buffer .= $indent . '               <div class="form-pilos func hide">
';
                $buffer .= $indent . '                  <label class="col-sm-2 control-label">Funcionalidad</label>
';
                $buffer .= $indent . '                  <div class="col-sm-10" id="funct2">
';
                $buffer .= $indent . '                     ';
                $value = $this->resolveValue($context->find('functions'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                  </div>
';
                $buffer .= $indent . '               </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '         </form>
';
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '      <div class="modal-footer">
';
                $buffer .= $indent . '         <button type="button" class="button btn btn-secondary" data-dismiss="modal" id="close_seg">Cerrar</button>
';
                $buffer .= $indent . '         <button type="button" class="button btn btn-primary" id="save_seg">Guardar</button>
';
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '   </div>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
