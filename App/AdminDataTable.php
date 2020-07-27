<?php


namespace App;


class AdminDataTable
{
    public $models;
    public $function;
    public function __construct(iterable $models, array $function)
    {
        $this->models = $models;
        $this->function = $function;
    }
    public function render(string $template)
    {
        ob_start();
        $data = [];
        foreach ($this->models as $key => $model) {
            foreach ($this->function as $name => $function) {
                $data[$key][$name] = $function($model);
            }
        }
        include $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }
}