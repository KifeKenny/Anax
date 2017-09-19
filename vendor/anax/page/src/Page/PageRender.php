<?php

namespace Anax\Page;

use \Anax\DI\InjectionAwareInterface;
use \Anax\DI\InjectionAwareTrait;

/**
 * A default page rendering class.
 */
class PageRender implements PageRenderInterface, InjectionAwareInterface
{
    use InjectionAwareTrait;

    public function ownrenderPage($data, $status = 200)
    {
        $view = $this->di->get("view");
        $view->add("incl/header", [
            "title" => [
                $data["title"],
                $data["style"]
            ]
        ]);
        $view->add("incl/side-bar1");
        foreach ($data["page"] as $value) {
            $view->add($value, ["resultset" => $data["res"]]);
        }
        $view->add("incl/side-bar2");
        $view->add("incl/footer");

        $this->di->get("response")->setBody([$view, "render"])
                      ->send($status);
        exit;
    }

    /**
     * Render a standard web page using a specific layout.
     *
     * @param array   $data   variables to expose to layout view.
     * @param integer $status code to use when delivering the result.
     *
     * @return void
     */
    public function renderPage($data, $status = 200)
    {
        $data["stylesheets"] = ["css/style.css"];

        // Add common header, navbar and footer
        //$this->view->add("default1/header", [], "header");
        //$this->view->add("default1/navbar", [], "navbar");
        //$this->view->add("default1/footer", [], "footer");

        // Add layout, render it, add to response and send.
        $view = $this->di->get("view");
        $view->add("default1/layout", $data, "layout");
        $body = $view->renderBuffered("layout");
        $this->di->get("response")->setBody($body)
                                  ->send($status);
        exit;
    }
}
