<?php

namespace ProycerWeb\Http\Controller;

use Pop\Mail;

class WebController extends AbstractController
{

    public function index()
    {
        $this->prepareView('index.phtml');
        $this->view->title = 'Inicio';
        $this->view->request = $this->request->getRequestUri();
        $this->send();
    }

    public function servicios()
    {
    	$this->prepareView('/servicios/index.phtml');
        $this->view->title = 'Servicios';
        $this->view->request = $this->request->getRequestUri();
        $this->send();
    }

    public function wisp()
    {
        $this->prepareView('/servicios/wisp.phtml');
        $this->view->title = 'Proycer Wisp';
        $this->view->request = $this->request->getRequestUri();
        $this->send();
    }

    public function nosotros()
    {
    	$this->prepareView('nosotros.phtml');
        $this->view->title = 'Nosotros';
        $this->view->request = $this->request->getRequestUri();
        $this->send();
    }

    public function contacto()
    {
    	if ($this->request->isGet()) {
    		$this->prepareView('contacto.phtml');
	        $this->view->title = 'Contacto';
	        $this->view->request = $this->request->getRequestUri();
	        $this->send();
	    } elseif ($this->request->isPost()) {
    		// var_dump($this->request()->getParsedData());
		    // TODO implementar email o DB
		    $this->redirect('/');
	    }
    }

    public function autogestion()
    {
    	$this->prepareView('autogestion.phtml');
        $this->view->title = 'Autogestion';
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
