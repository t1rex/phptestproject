<?php
namespace Dv\View;

class Layout
{
    protected $baseTemplate = 'index/index.phtml';

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

    protected function renderControllerActionTemplate()
    {
        // по имени контроллера и экшна мы можем достать блок и вызвать у него метод render()
    }

    protected function renderBlock()
    {

    }

    protected function getTemplatePath()
    {

    }
}