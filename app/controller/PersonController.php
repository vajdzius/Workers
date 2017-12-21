<?php

namespace app\controller;

use app\model\Person;

class PersonController
{
    public function create ()
    {
        (new TemplateEngineController('new-person'))->echoOutput();

    }

    public function store ()
    {
        $data = $_POST;

        $destination = 'uploads/' . $_FILES['picture']['name'];

        move_uploaded_file($_FILES['picture']['tmp_name'], $destination);

        $data['picture'] = $destination;

        $model = new Person();
        $model->create($data);

        // Redirecting to LIST
        header('Location: ?view=workers&action=list');
        exit();
    }

    public function list()
    {
        $model = new Person();

        $result = $model->list();

        $header = '';
        $data = '';

        foreach ($result as $item) {

            if ($header == '')
            {
                foreach ($item as $key => $value)
                {
                    $header .= '<th>' . $key . '</th>';
                }
            }

            $data .= '<tr onclick="window.location=\'?view=workers&action=edit&id=' . $item['id'] . '\'">';

            foreach ($item as $key => $value) {

                if($key == 'picture')
                    $data .= '<td><img src="' . $value . '" width="200px"></td>';

                else
                    $data .= '<td>' . $value . '</td>';
            }

            $data .= '</tr>';

        }

        $template = new TemplateEngineController('table-list');

        $template->set ('header', $header);
        $template->set ('data', $data);

        $template->echoOutput();
    }

    public function edit()
    {
        $model = new Person();
        $result = $model->find($_GET['id']);
        $record = null;

        foreach ($result as $value)
        {
            $record = $value;
        }
        if (!$record)
            die ('Record not found');

        $template = new TemplateEngineController( 'edit-person');
        $template->set('id', $record['id']);
        $template->set('name', $record['name']);
        $template->set('surname', $record['surname']);
        $template->set('birthday_date', $record['birthday_date']);
        $template->set('position', $record['position']);
        $template->set('comments', $record['comments']);
        $template->set('picture', $record['picture']);

        $template->set('gender_' . $record['gender'], 'selected');

        $template->echoOutput();

    }

    public function update()
    {
        $model = new Person();
        $model->update($_GET['id']);

        header('Location: ?view=workers&action=list');
        exit();
    }

    public function delete()
    {
        $model = new Person();
        $model->delete($_GET['id']);

        header('Location: ?view=workers&action=list');
        exit();
    }
}