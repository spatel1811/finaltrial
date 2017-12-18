<?php

namespace http;

class controller
{



    static public function getTemplate($template, $data = NULL)
    {

        $template = 'pages/' . $template . '.php';

        include $template;

    }
}