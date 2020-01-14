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

    /**
     * Muestra la pagina principal de servicios y controla el envio del
     * email del formulario
     */
    public function servicios()
    {
        if ($this->request->isGet()) {
            $this->prepareView('/servicios/index.phtml');
            $this->view->title = 'Servicios';
            $this->view->request = $this->request->getRequestUri();
            $this->send();
        } elseif ($this->request->isPost()) {
            $data = $this->request->getParsedData();

            $transport = new Mail\Transport\Smtp('srv001.proycer.com.ar', 465, 'ssl');
            $transport->setUsername('web@proycer.com.ar')
                ->setPassword('john@astete#38429880');

            $mailer = new Mail\Mailer($transport);

            $message = new Mail\Message('Contacto Proycer');
            $message->setTo('contacto@proycer.com.ar');
            $message->setFrom('web@proycer.com.ar');
            $message->setBody('Email: ' . $data['email']);

            $mailer->send($message);
            $this->redirect('/servicios');
        }
    }

    /**
     * Muestra la seccion de proycer wisp
     */
    public function wisp()
    {
        $this->prepareView('/servicios/wisp.phtml');
        $this->view->title = 'Proycer Wisp';
        $this->view->request = $this->request->getRequestUri();
        $this->send();
    }

    /**
     * Procesa el formulario de contrato para proycer wisp
     */
    public function contratoWisp()
    {
        if ($this->request->isPost()) {
            $data = $this->request->getParsedData();

            $transport = new Mail\Transport\Smtp('srv001.proycer.com.ar', 465, 'ssl');
            $transport->setUsername('web@proycer.com.ar')
                ->setPassword('john@astete#38429880');

            $mailer = new Mail\Mailer($transport);

            $message = new Mail\Message('Solicitud Proycer Wisp');
            $message->setTo('contacto@proycer.com.ar');
            $message->setFrom('web@proycer.com.ar');
            $message->setBody('Nombre: ' . $data['nombre'] . ', Contacto: ' . $data['contacto'] . ', Plan: ' . $data['plan']);
            
            $mailer->send($message);
        }

        $this->redirect('/servicios/wisp');
    }

    /**
     * Muestra la seccion de nosotros
     */
    public function nosotros()
    {
    	$this->prepareView('nosotros.phtml');
        $this->view->title = 'Nosotros';
        $this->view->request = $this->request->getRequestUri();
        $this->send();
    }

    /**
     * Muestra la pagina de contacto y controla el envio del formulario
     * de contacto general
     */
    public function contacto()
    {
    	if ($this->request->isGet()) {
    		$this->prepareView('contacto.phtml');
	        $this->view->title = 'Contacto';
	        $this->view->request = $this->request->getRequestUri();
	        $this->send();
	    } elseif ($this->request->isPost()) {
            $data = $this->request->getParsedData();

            $recaptcha = $data['g-recaptcha-response'];

            $url = 'https://www.google.com/recaptcha/api/siteverify';
            $data = array(
                'secret' => '6Lc47M4UAAAAAJcpTQMm71VE0U_vl-osLY2RL884',
                'response' => $recaptcha
            );

            $options = array(
                'http' => array(
                    'method' => 'POST',
                    'content' => http_build_query($data)
                )
            );

            $context  = stream_context_create($options);
            $verify = file_get_contents($url, false, $context);
            $captcha_success = json_decode($verify);

            if ($captcha_success->success) {
                $transport = new Mail\Transport\Smtp('srv001.proycer.com.ar', 465, 'ssl');
                $transport->setUsername('web@proycer.com.ar')
                    ->setPassword('john@astete#38429880');

                $mailer = new Mail\Mailer($transport);

                $message = new Mail\Message('Contacto Proycer');
                $message->setTo('contacto@proycer.com.ar');
                $message->setFrom('web@proycer.com.ar');
                $message->setBody('Nombre: ' . $data['nombre'] . ', Contacto: ' . $data['contacto'] . ', Mensaje: ' . $data['mensaje']);

                $mailer->send($message);
            }

		    $this->redirect('/contacto');
	    }
    }

    /**
     * Mostrara en el futuro la seccion de autogestion para los clientes
     */
    public function autogestion()
    {
    	$this->prepareView('autogestion.phtml');
        $this->view->title = 'Autogestion';
        $this->view->request = $this->request->getRequestUri();
        $this->send();
    }

    /**
     * Control de errores redirecciona automaticamente; en un futuro
     * podria mostrar un mensaje u opciones al usuario.
     */
    public function error()
    {
        $this->redirect('/');
    }

}
