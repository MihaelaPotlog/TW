<?php
session_start();

class formularAlerte extends Controller
{

    public function index()
    {

        if (isset($_SESSION['is_logged']))
            $this->view('formularAlerteAutoritati');
        else
            $this->view('formularAlerte');
    }
}
