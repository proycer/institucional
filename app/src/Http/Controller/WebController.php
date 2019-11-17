<?php

namespace ProycerWeb\Http\Controller;

class WebController extends AbstractController
{

    public function index()
    {
        $this->prepareView('index.phtml');
        $this->view->title = 'Inicio | Proycer';
        $this->view->request = $this->request->getRequestUri();
        $this->send();
    }

    public function servicios()
    {
    	$this->prepareView('/servicios/index.phtml');
        $this->view->title = 'Servicios | Proycer';
        $this->view->request = $this->request->getRequestUri();
        $this->send();
    }

    public function nosotros()
    {
    	$this->prepareView('nosotros.phtml');
        $this->view->title = 'Nosotros | Proycer';
        $this->view->request = $this->request->getRequestUri();
        $this->send();
    }

    public function contacto()
    {
    	$this->prepareView('contacto.phtml');
        $this->view->title = 'Contacto | Proycer';
        $this->view->request = $this->request->getRequestUri();
        $this->send();
    }

    public function autogestion()
    {
    	$this->prepareView('autogestion.phtml');
        $this->view->title = 'Autogestion | Proycer';
        $this->view->request = $this->request->getRequestUri();
        $this->send();
    }

    public function error()
    {
        $this->prepareView('error.phtml');
        $this->view->title = 'Error';
        $this->view->request = $this->request->getRequestUri();
        $this->send(404);
    }

}
