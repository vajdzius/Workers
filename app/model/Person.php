<?php

namespace app\model;

use app\model\CoreModel;

class Person extends CoreModel
{
    protected $table = 'workers';

    public function create (array $data)
    {
        $query = $this->generateInsertQuery($data, true);
        $this->query($query);
    }

    public function destroy()
    {
        // TODO: Implement destroy() method.
    }
}