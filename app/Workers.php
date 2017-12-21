<?php

namespace app;

use app\controller\PersonController;

class Workers
{
    public function __construct()
    {
        $method = $_SERVER['REQUEST_METHOD'];

        $view = $_GET['view'];
        $action = $_GET['action'];

        if ($method == 'GET')
        {

            switch ($view)
            {
                case 'workers':

                    if ($action == 'new')
                        (new PersonController())->create();
                    elseif ($action == 'list')
                        (new PersonController())->list();
                    elseif($action == 'edit')
                        (new PersonController())->edit();

                    break;

            }
        }
        elseif ($method == 'POST')
        {
            switch ($view)
            {
                case 'workers':

                    if ($action == 'create')
                    {
                        (new PersonController())->store();
                    }
                    if ($action == 'update')
                    {
                        (new PersonController())->update();
                    }
                    if ($action == 'delete')
                    {
                        (new PersonController())->delete();
                    }

                    break;

            }
        }
    }
}