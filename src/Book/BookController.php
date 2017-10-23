<?php

namespace Anax\Book;

use \Anax\Configure\ConfigureInterface;
use \Anax\Configure\ConfigureTrait;
use \Anax\DI\InjectionAwareInterface;
use \Anax\DI\InjectionAwareTrait;
use \Anax\Book\HTMLForm\CreateForm;
use \Anax\Book\HTMLForm\EditForm;
use \Anax\Book\HTMLForm\DeleteForm;
use \Anax\Book\HTMLForm\UpdateForm;

/**
 * A controller class.
 */
class BookController implements
    ConfigureInterface,
    InjectionAwareInterface
{
    use ConfigureTrait,
        InjectionAwareTrait;



    /**
     * @var $data description
     */
    //private $data;



    /**
     * Show all items.
     *
     * @return void
     */
    public function getIndex()
    {
        $title      = "Book | Library";
        $view       = $this->di->get("view");
        $pageRender = $this->di->get("pageRender");
        $book = new Book();
        $book->setDb($this->di->get("db"));

        $data = [
            "items" => $book->findAll(),
        ];


        $view->add("incl/header", ["title" => ["Book", "css/style.css"]]);
        $view->add("incl/side-bar1");
        $view->add("book/crud/view-all", $data);
        $view->add("incl/side-bar2");
        $view->add("incl/footer");

        $pageRender->renderPage(["title" => $title]);
    }



    /**
     * Handler with form to create a new item.
     *
     * @return void
     */
    public function getPostCreateItem()
    {
        $title      = "Book | Add";
        $view       = $this->di->get("view");
        $pageRender = $this->di->get("pageRender");
        $form       = new CreateForm($this->di);

        $form->check();

        $data = [
            "form" => $form->getHTML(),
            // form
        ];

        $view->add("incl/header", ["title" => ["Book", "../css/style.css"]]);
        $view->add("incl/side-bar1");
        $view->add("book/crud/create", $data);
        $view->add("incl/side-bar2");
        $view->add("incl/footer");

        $pageRender->renderPage(["title" => $title]);
    }



    /**
     * Handler with form to delete an item.
     *
     * @return void
     */
    public function getPostDeleteItem()
    {
        $title      = "Book | Delete";
        $view       = $this->di->get("view");
        $pageRender = $this->di->get("pageRender");
        $form       = new DeleteForm($this->di);

        $form->check();

        $data = [
            "form" => $form->getHTML(),
        ];

        $view->add("incl/header", ["title" => ["Book", "../css/style.css"]]);
        $view->add("incl/side-bar1");
        $view->add("book/crud/delete", $data);
        $view->add("incl/side-bar2");
        $view->add("incl/footer");

        $pageRender->renderPage(["title" => $title]);
    }



    /**
     * Handler with form to update an item.
     *
     * @return void
     */
    public function getPostUpdateItem($id)
    {
        $title      = "Book | Update";
        $view       = $this->di->get("view");
        $pageRender = $this->di->get("pageRender");
        $form       = new UpdateForm($this->di, $id);

        $form->check();

        $data = [
            "form" => $form->getHTML(),
        ];

        $view->add("incl/header", ["title" => ["Book", "../../css/style.css"]]);
        $view->add("incl/side-bar1");
        $view->add("book/crud/update", $data);
        $view->add("incl/side-bar2");
        $view->add("incl/footer");


        $pageRender->renderPage(["title" => $title]);
    }
}
