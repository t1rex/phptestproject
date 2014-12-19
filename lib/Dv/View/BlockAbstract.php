<?php
namespace Dv\View;

use Dv\Core\Kernel;

abstract class BlockAbstract
{
    protected $template = '';

    /**
     * @return \Dv\View\Layout;
     */
    protected function getLayout()
    {
        return Kernel::$container->layout;
    }

    /**
     * @param string $template
     * @return $this
     */
    public function setTemplate($template)
    {
        $this->template = $template;
        return $this;
    }

    /**
     * @param string @rootDir
     * @return string
     * @throws \Exception
     */
    public function render()
    {
        $template = $this->getLayout()->getRootDir() . $this->getTemplate();
        if (!file_exists($template)) {
            throw new \Exception("Template $template not found");
        }
        ob_start();
        include $template;
        return ob_get_clean();
    }

    public function getTemplate()
    {
        // we need to get template name from file class
        if (empty($this->template)) {
            $class = explode('\\', get_class($this));
            $template = array_slice($class, 2);
            array_walk($template, function(&$value) {
                $value = lcfirst($value);
            });

            $this->template = implode(DIRECTORY_SEPARATOR, $template) . '.phtml';
        }
        return $this->template;
    }

    /**
     * @param string $blockClass
     * @return string
     */
    protected function renderBlock($blockClass)
    {
        return $this->getLayout()->renderBlock($blockClass);
    }
}