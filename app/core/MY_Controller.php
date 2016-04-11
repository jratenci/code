<?php
class MY_Controller extends MX_Controller {

        public function __construct()
        {
                parent::__construct();
        }

   function run(){
   $this->load->view("template_view");
   }
}
