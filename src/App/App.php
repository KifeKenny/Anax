<?php

namespace Anax\App;

/**
 * An App class to wrap the resources of the framework.
 *
 * @SuppressWarnings(PHPMD.ExitExpression)
 */
class App
{
    public function redirect($url)
    {
        $this->response->redirect($this->url->create($url));
        exit;
    }

    // just my own render page more simple
    public function ownrenderPage($data, $status = 200)
    {
        $this->view->add("incl/header", ["title" => [$data["title"], "css/style.css"]]);
        $this->view->add("incl/side-bar1");
        $this->view->add($data["page"], ["resultset" => $data["res"]]);
        $this->view->add("incl/side-bar2");
        $this->view->add("incl/footer");

        $this->response->setBody([$this->view, "render"])
                      ->send($status);
        exit;
    }

    /**
     * Render a standard web page using a specific layout.
     */
    public function renderPage($data, $status = 200)
    {
        $data["stylesheets"] = ["css/style.css"];

        // $this->view->add("incl/header", ["title" => ["", "css/style.css"]]);
        // $this->view->add("incl/footer");

        // Add layout, render it, add to response and send.
        $this->view->add("default1/layout", $data, "layout");
        $body = $this->view->renderBuffered("layout");
        $this->response->setBody($body)
                       ->send($status);
        exit;
    }
}
