<?php

abstract class AbstractController
{

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