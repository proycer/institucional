<?php

namespace ProycerWeb\Http\Controller;

class WebController extends AbstractController
{

    /**
     * Index action
     *
     * @return void
     */
    public function index()
    {
        $this->prepareView('index.phtml');
        $this->view->title = 'Index';
        $this->send();
    }

    public function servicios()
    {
    	$this->prepareView('index.phtml');
        $this->view->title = 'Servicios';
        $this->send();
    }

    public function nosotros()
    {
    	$this->prepareView('index.phtml');
        $this->view->title = 'Nosotros';
        $this->send();
    }

    public function contacto()
    {
    	$this->prepareView('index.phtml');
        $this->view->title = 'Contacto';
        $this->send();
    }

    public function autogestion()
    {
    	$this->prepareView('index.phtml');
        $this->view->title = 'Autogestion';
        $this->send();
    }

    /**
     * Error action
     *
     * @return void
     */
    public function error()
    {
        $this->prepareView('error.phtml');
        $this->view->title = 'Error';
        $this->send(404);
    }

}