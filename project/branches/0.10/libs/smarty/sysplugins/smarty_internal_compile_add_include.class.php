<?php

/**
 * ADD MVC Extends of {extends} smarty tag. Require the layout to be in views/layouts/ directory
 *
 * @since ADD MVC 0.10
 */
CLASS Smarty_Internal_Compile_Add_Include EXTENDS Smarty_Internal_Compile_Include {

   /**
    * Here we change the path to layouts/path
    *
    * @since ADD MVC 0.10
    */
   public function getAttributes() {
      $result = call_user_func_array('parent::'.__FUNCTION__,func_get_args());
      $result['file'] = preg_replace('/^\\\'|\"/','$0includes/',$result['file']);
      return $result;
   }
}