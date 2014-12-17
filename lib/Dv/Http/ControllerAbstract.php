<?php
namespace Dv\Http;

use Dv\Core\Kernel;
use Dv\Db\DataBaseHandler;
use Dv\Http\Response;
use Dv\View\Layout;

abstract class ControllerAbstract
{
    /** @var Layout $layout */
    protected $layout;

    /** @var Response $response */
    protected $response;

    /**
     * @return Layout
     */
    protected $dbh;

    protected function getLayout()
    {
        if (!isset($this->layout)) {
            $layout = new Layout();
            Kernel::$container->layout = $layout;
            $this->layout = $layout;
        }
        return $this->layout;
    }

    /**
     * @return Response
     */
    protected function getResponse()
    {
        if (!isset($this->response)) {
            $this->response = new Response();
        }
        return $this->response;
    }

    public function postDispatch()
    {
        $this->response->send();
    }
}