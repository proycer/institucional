<?php

namespace ProycerWeb\Http\Controller;

use Pop\Application;
use Pop\Http\Exception;
use Pop\Http\Server\Request;
use Pop\Http\Server\Response;
use Pop\View\View;

abstract class AbstractController extends \Pop\Controller\AbstractController
{

    /**
     * Application object
     * @var Application
     */
    protected $application = null;

    /**
     * Request object
     * @var Request
     */
    protected $request = null;

    /**
     * Response object
     * @var Response
     */
    protected $response = null;

    /**
     * View path
     * @var string
     */
    protected $viewPath = __DIR__ . '/../../../view';

    /**
     * View object
     * @var View
     */
    protected $view = null;

    /**
     * Constructor for the controller
     *
     * @param  Application $application
     * @param  Request     $request
     * @param  Response    $response
     */
    public function __construct(Application $application, Request $request, Response $response)
    {
        $this->application = $application;
        $this->request     = $request;
        $this->response    = $response;
    }

    /**
     * Get application object
     *
     * @return Application
     */
    public function application()
    {
        return $this->application;
    }

    /**
     * Get request object
     *
     * @return Request
     */
    public function request()
    {
        return $this->request;
    }

    /**
     * Get response object
     *
     * @return Response
     */
    public function response()
    {
        return $this->response;
    }

    /**
     * Get view object
     *
     * @return View
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * Determine if the controller has a view
     *
     * @return boolean
     */
    public function hasView()
    {
        return (null !== $this->view);
    }

	/**
	 * Redirect method
	 *
	 * @param string $url
	 * @param int $code
	 * @param string $version
	 * @return void
	 */
    public function redirect($url, $code = 302, $version = '1.1')
    {
	    try {
		    Response::redirect($url, $code, $version);
	    } catch (Exception $e) {
	    }
	    exit();
    }

    /**
     * Send method
     *
     * @param  int    $code
     * @param  string $body
     * @param  string $message
     * @param  array  $headers
     * @return void
     */
    public function send($code = 200, $body = null, $message = null, array $headers = null)
    {
        if ((null === $body) && (null !== $this->view)) {
	        try {
		        $body = $this->view->render();
	        } catch (\Pop\View\Exception $e) {
	        }
        }

        if (null !== $message) {
            $this->response->setMessage($message);
        }

	    try {
		    $this->response->setCode($code);
	    } catch (Exception $e) {
	    }
	    $this->response->setBody($body . PHP_EOL . PHP_EOL);
        $this->response->send(null, $headers);
    }

    /**
     * Prepare view
     *
     * @param  string $template
     * @return void
     */
    protected function prepareView($template)
    {
        $this->view = new View($this->viewPath . '/' . $template);
    }

}
