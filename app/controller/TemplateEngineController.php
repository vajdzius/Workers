<?php


namespace app\controller;


class TemplateEngineController
{

    /**
     * @var string
     */
    private $viewName;

    private $values = [];

    public function __construct(string $viewName)
    {

        $this->viewName = "app/view/tpl/$viewName.tpl";
    }

    public function set (string $key, string $value = null)
    {
        $this->values[$key] = $value;
    }

    public function echoOutput()
    {
        // check if file exists

        if(!file_exists($this->viewName))
        {
            die("Error loading file($this->viewName)");
        }

        // read file

        $output = file_get_contents($this->viewName);

        // replace all tags with values

        foreach ($this->values as $key => $value)
        {
            $tagToReplace = "[@$key]";
            $output = str_replace($tagToReplace, $value, $output);
        }

        // echo result

        echo $output;
    }
}