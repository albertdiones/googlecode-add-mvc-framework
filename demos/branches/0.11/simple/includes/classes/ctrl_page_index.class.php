<?php
/**
 * ctrl_page_index default index page
 * A sample index page controller
 *
 * @author albertdiones@gmail.com
 *
 * @package ADD MVC\Controllers\Extras
 * @since ADD MVC 0.0
 * @version 0.0
 */
CLASS ctrl_page_index EXTENDS ctrl_tpl_page {

   /**
    * The pre-view process
    *
    * @since ADD MVC 0.0
    */
   public function process() {
      $this->view()->assign('current_controller',add::current_controller_class());
      $this->view()->assign('current_view',$this->view_filepath());
      $this->view()->assign('utc_timestamp',@gmmktime());

   }

}