<?php

class HomeController extends Controller {
    
    function Index() {
        $this->view("Home/Index");
    }
    
    function Member() {
        if ($_SESSION["userId"]) {
            $this->view("Home/Member");
        }
        else
            header("Location: /Lab_Login_MVC/Member/Login");
    }

}

?>
