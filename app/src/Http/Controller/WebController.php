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

    /**
     * Procesa el formulario de contrato para wisp
     */
    public function contratoWisp()
    {
        if ($this->request->isPost()) {
            $data = $this->request->getParsedData();
            $nombre = $data['nombre'];
            $contacto = $data['contacto'];
            $plan = $data['plan'];

            $transport = new Mail\Transport\Smtp('srv001.proycer.com.ar', 465, 'ssl');
            $transport->setUsername('contacto@proycer.com.ar')
                ->setPassword('john@astete#38429880');

            $mailer = new Mail\Mailer($transport);

            $message = new Mail\Message('Solicitud Proycer Wisp');
            $message->setTo('john.astete@proycer.com.ar');
            $message->setFrom('contacto@proycer.com.ar');
            
            $message->addPart();
            $message->setBody(
                <<<TEXT
                Nueva solicitud de Proycer Wisp
                Nombre: [{nombre}]
                Contacto: [{contacto}]
                Plan: [{plan}]
                TEXT
            );

            $mailer->send($message);
        }

        $this->redirect('/servicios/wisp');
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
