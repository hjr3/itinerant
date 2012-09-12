<?php

namespace Itinerant\View;

class Mustache extends \Slim_View
{
    public function render($template)
    {
        $m = new \Mustache_Engine();
        $contents = file_get_contents($this->getTemplatesDirectory() . '/' . ltrim($template, '/'));
        return $m->render($contents, $this->data);
    }
}
