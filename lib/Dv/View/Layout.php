<?php
namespace Dv\View;

class Layout
{
    protected $baseTemplate = 'base.phtml';

    protected $rootDir = '';

    public function __construct()
    {
        $this->rootDir = $_SERVER['DOCUMENT_ROOT'] . '..' . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR;
    }

    /**
     * @return string
     * @throws \Exception
     */
    public function render()
    {
        $template = $this->rootDir . $this->baseTemplate;
        if (!file_exists($template)) {
            throw new \Exception("Template $template not found");
        }
        ob_start();
        include $template;
        return ob_get_clean();
    }

    /**
     * @param string $baseTemplate
     */
    public function setBaseTemplate($baseTemplate)
    {
        $this->baseTemplate = $baseTemplate;
    }

    /**
     * @param \Dv\view\BlockAbstract $blockClass
     * @param array $arguments
     * @return BlockAbstract
     */
    public function getBlock($blockClass, $arguments = null)
    {
        return new $blockClass($arguments);
    }

    public function renderBlock($blockClass)
    {
        return $this->getBlock($blockClass)->render();
    }

    /**
     * @return string
     */
    public function getRootDir()
    {
        return $this->rootDir;
    }
}
