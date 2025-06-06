<?php

namespace ProycerWeb;

use Pop\Application;
use Pop\Db;
use Pop\Http\Server\Request;
use Pop\Http\Server\Response;
use Pop\View\View;

class Module extends \Pop\Module\Module
{

    /**
     * Module name
     * @var string
     */
    protected $name = 'proycerweb';

	/**
	 * Register module
	 *
	 * @param Application $application
	 * @return Module
	 * @throws Db\Adapter\Exception
	 * @throws \Pop\Http\Exception
	 * @throws \Pop\Module\Exception
	 * @throws \Pop\Service\Exception
	 */
    public function register(Application $application)
    {
        parent::register($application);

        if (isset($this->application->config['database'])) {
            $this->initDb($this->application->config['database']);
        }

        if (null !== $this->application->router()) {
            $this->application->router()->addControllerParams(
                '*', [
                    'application' => $this->application,
                    'request'     => new Request(),
                    'response'    => new Response()
                ]
            );
        }

        return $this;
    }

	/**
	 * Initialize database service
	 *
	 * @param array $database
	 * @return void
	 * @throws \Pop\Service\Exception
	 * @throws \Pop\Db\Adapter\Exception
	 */
    protected function initDb($database)
    {
        if (!empty($database['adapter'])) {
            $adapter = $database['adapter'];
            $options = [
                'database' => $database['database'],
                'username' => $database['username'],
                'password' => $database['password'],
                'host'     => $database['host'],
                'type'     => $database['type']
            ];

            $check = Db\Db::check($adapter, $options);

            if (null !== $check) {
                throw new \Pop\Db\Adapter\Exception('Error: ' . $check);
            }

            $this->application->services()->set('database', [
                'call'   => 'Pop\Db\Db::connect',
                'params' => [
                    'adapter' => $adapter,
                    'options' => $options
                ]
            ]);

            if ($this->application->services()->isAvailable('database')) {
                Db\Record::setDb($this->application->services['database']);
            }
        }
    }

	/**
	 * HTTP error handler method
	 *
	 * @param \Exception $exception
	 * @return void
	 * @throws \Pop\Http\Exception
	 * @throws \Pop\View\Exception
	 */
    public function httpError(\Exception $exception)
    {
        $response      = new Response();
        $view          = new View(__DIR__ . '/../view/exception.phtml');
        $view->title   = 'Exception';
        $view->message = $exception->getMessage();
        $response->setBody($view->render());
        $response->send(500);
        exit();
    }

}
