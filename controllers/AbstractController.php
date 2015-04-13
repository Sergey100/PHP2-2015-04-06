<?php

abstract class AbstractController
{

    abstract protected function getTemplatePath();

    protected function render($template, $data)
    {
        // ['items' => ..., 'user' => ..., ...]
        // $items, $user, ...
        foreach ($data as $key => $value) {
           $$key = $value;
        }
        require $this->getTemplatePath() . '/' . $template . '.php';
    }

}