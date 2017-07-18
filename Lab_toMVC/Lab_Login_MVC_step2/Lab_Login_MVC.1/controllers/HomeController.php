<?php

class HomeController extends Controller {
    
    function Index() {
        $this->view("Home/Index");
    }
    
    function Member() {
        $this->view("Home/Member");
    }

}

?>
