<?php
/**
 * Pop PHP Framework (http://www.popphp.org/)
 *
 * @link       https://github.com/popphp/popphp-framework
 * @author     Nick Sagona, III <dev@nolainteractive.com>
 * @copyright  Copyright (c) 2009-2020 NOLA Interactive, LLC. (http://www.nolainteractive.com)
 * @license    http://www.popphp.org/license     New BSD License
 */

/**
 * @namespace
 */
namespace Pop\View;

use Pop\Filter\FilterableTrait;
use Pop\Utils;

/**
 * View class
 *
 * @category   Pop
 * @package    Pop\View
 * @author     Nick Sagona, III <dev@nolainteractive.com>
 * @copyright  Copyright (c) 2009-2020 NOLA Interactive, LLC. (http://www.nolainteractive.com)
 * @license    http://www.popphp.org/license     New BSD License
 * @version    3.2.0
 */
class View extends Utils\ArrayObject
{

    use FilterableTrait;

    /**
     * View template object
     * @var Template\TemplateInterface
     */
    protected $template = null;

    /**
     * Model data
     * @var array
     */
    protected $data = [];

    /**
     * View output string
     * @var string
     */
    protected $output = null;

    /**
     * Constructor
     *
     * Instantiate the view object
     *
     * @param  mixed $template
     * @param  array $data
     * @param  mixed $filters
     */
    public function __construct($template = null, array $data = null, $filters = null)
    {
        if (null !== $template) {
            $this->setTemplate($template);
        }
        if (null !== $data) {
            parent::__construct($data);
        }
        if (null !== $filters) {
            if (is_array($filters)) {
                $this->addFilters($filters);
            } else {
                $this->addFilter($filters);
            }
        }
    }

    /**
     * Has a view template
     *
     * @return boolean
     */
    public function hasTemplate()
    {
        return (null !== $this->template);
    }

    /**
     * Get view template
     *
     * @return Template\TemplateInterface
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Get rendered output
     *
     * @return string
     */
    public function getOutput()
    {
        return $this->output;
    }

    /**
     * Is view template a file
     *
     * @return boolean
     */
    public function isFile()
    {
        return ((null !== $this->template) && ($this->template instanceof Template\File));
    }

    /**
     * Is view template a stream
     *
     * @return boolean
     */
    public function isStream()
    {
        return ((null !== $this->template) && ($this->template instanceof Template\Stream));
    }

    /**
     * Get all model data
     *
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Get data
     *
     * @param  string $key
     * @return mixed
     */
    public function get($key)
    {
        return (isset($this->data[$key])) ? $this->data[$key] : null;
    }

    /**
     * Set view template
     *
     * @param  mixed $template
     * @return View
     */
    public function setTemplate($template)
    {
        if (!($template instanceof Template\TemplateInterface)) {
            // If a native PHP file template
            if (((substr($template, -6) == '.phtml') ||
                    (substr($template, -5, 4) == '.php') ||
                    (substr($template, -4) == '.php')) && (strlen($template) <= 255) && (file_exists($template))) {
                $template = new Template\File($template);
            // If a string template, or a string template from a non-PHP file
            } else {
                $template = new Template\Stream($template);
            }
        }
        $this->template = $template;
        return $this;
    }

    /**
     * Set all model data
     *
     * @param  array $data
     * @return View
     */
    public function setData(array $data = [])
    {
        $this->data = $data;
        return $this;
    }

    /**
     * Set model data
     *
     * @param  string $name
     * @param  mixed  $value
     * @return View
     */
    public function set($name, $value)
    {
        $this->data[$name] = $value;
        return $this;
    }

    /**
     * Merge new model data
     *
     * @param  array $data
     * @return View
     */
    public function merge(array $data)
    {
        $this->data = array_merge($this->data, $data);
        return $this;
    }

    /**
     * Filter values
     *
     * @param  mixed $values
     * @return mixed
     */
    public function filter($values)
    {
        foreach ($this->filters as $filter) {
            if (is_array($values)) {
                foreach ($values as $key => $value) {
                    $values[$key] = $filter->filter($value, $key);
                }
            } else {
                $values = $filter->filter($values);
            }
        }

        return $values;
    }

    /**
     * Render the view
     *
     * @throws Exception
     * @return mixed
     */
    public function render()
    {
        if (null === $this->template) {
            throw new Exception('A template asset has not been assigned.');
        }

        if ($this->hasFilters()) {
            $this->data = $this->filter($this->data);
        }

        $this->output = $this->template->render($this->data);
        return $this->output;
    }

    /**
     * Return rendered view as string
     *
     * @return string
     */
    public function __toString()
    {
        return $this->render();
    }

}
