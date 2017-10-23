<?php

namespace Anax\User;

use \Anax\Configure\ConfigureInterface;
use \Anax\Configure\ConfigureTrait;
use \Anax\DI\InjectionAwareInterface;
use \Anax\Di\InjectionAwareTrait;
use \Anax\User\User;
use \Anax\User\HTMLForm\UserLoginForm;
use \Anax\User\HTMLForm\CreateUserForm;
use \Anax\User\HTMLForm\UserEditForm;

/**
 * A controller class.
 */
class UserController implements
    ConfigureInterface,
    InjectionAwareInterface
{
    use ConfigureTrait,
        InjectionAwareTrait;



    /**
     * @var $data description
     */
    // public $loginInfo = [];


    public function checkLogin()
    {
        $result = [];
        $session = $this->di->get("session");
        $result["user"] = $session->get("current_user", null);
        $result["mail"] = $session->get("user_mail", null);
        $result["id"] = $session->get("user_id", null);
        return $result;
    }
    /**
     * Description.
     *
     * @param datatype $variable Description
     *
     * @throws Exception
     *
     * @return void
     */
    public function getIndex()
    {
        $title      = "A index page";
        $view       = $this->di->get("view");
        $pageRender = $this->di->get("pageRender");

        $data = [
            "content" => "An index page",
        ];

        $view->add("default2/article", $data);

        $pageRender->renderPage(["title" => $title]);
    }



    /**
     * Description.
     *
     * @param datatype $variable Description
     *
     * @throws Exception
     *
     * @return void
     */
    public function getPostLogin()
    {
        $loginInfo = $this->checkLogin();
        if ($loginInfo["user"]) {
            $this->di->get("response")->redirect("");
        }


        $title      = "User | Login";
        $view       = $this->di->get("view");
        $pageRender = $this->di->get("pageRender");
        $form       = new UserLoginForm($this->di);



        $form->check();

        $data = [
            "content" => $form->getHTML(),
        ];
        $data2 = [
            "content" => "user/create",
        ];

        $view->add("incl/header", ["title" => ["Book", "../css/style.css"]]);
        $view->add("incl/side-bar1");
        $view->add("default2/article", $data);
        $view->add("user/default3", $data2);
        $view->add("incl/side-bar2");
        $view->add("incl/footer");


        $pageRender->renderPage(["title" => $title]);
    }



    /**
     * Description.
     *
     * @param datatype $variable Description
     *
     * @throws Exception
     *
     * @return void
     */
    public function getPostCreateUser()
    {
        $title      = "User | Create";
        $view       = $this->di->get("view");
        $pageRender = $this->di->get("pageRender");
        $form       = new CreateUserForm($this->di);

        $form->check();

        $data = [
            "content" => $form->getHTML(),
        ];

        $view->add("incl/header", ["title" => ["Book", "../css/style.css"]]);
        $view->add("incl/side-bar1");
        $view->add("default2/article", $data);
        $view->add("incl/side-bar2");
        $view->add("incl/footer");

        $pageRender->renderPage(["title" => $title]);
    }

    public function logoutUser()
    {
        $session = $this->di->get("session");
        $session->set("current_user", null);
        $session->set("user_mail", null);
        $session->set("user_id", null);
        $this->di->get("response")->redirect("");
    }
    public function profile()
    {
        $loginInfo = $this->checkLogin();
        if (!$loginInfo["user"]) {
            $this->di->get("response")->redirect("");
        }

        $title      = "profile";
        $view       = $this->di->get("view");
        $pageRender = $this->di->get("pageRender");
        $user = new User();
        $user->setDb($this->di->get("db"));

        $userInfo = $user->valueExist($loginInfo["user"], true);

        $view->add("incl/header", ["title" => ["Book", "../css/style.css"]]);
        $view->add("incl/side-bar1");
        $view->add("user/profile", ["userInfo" => $userInfo]);
        if ($loginInfo["user"] == "admin") {
            $view->add("user/admin");
        }
        $view->add("incl/side-bar2");
        $view->add("incl/footer");

        $pageRender->renderPage(["title" => $title]);
    }

    public function editProfile($id)
    {
        $loginInfo = $this->checkLogin();
        if (!$loginInfo["user"]) {
            $this->di->get("response")->redirect("");
        }

        $title      = "Profile | Edit";
        $view       = $this->di->get("view");
        $pageRender = $this->di->get("pageRender");
        $form       = new UserEditForm($this->di, $id);

        $form->check();

        $data = [
            "content" => $form->getHTML(),
        ];

        $view->add("incl/header", ["title" => ["Book", "../../css/style.css"]]);
        $view->add("incl/side-bar1");
        $view->add("default2/article", $data);
        $view->add("incl/side-bar2");
        $view->add("incl/footer");

        $pageRender->renderPage(["title" => $title]);
    }

    public function adminIndex()
    {
        $loginInfo = $this->checkLogin();
        if ($loginInfo["user"] != "admin") {
            $this->di->get("response")->redirect("");
        }

        $title      = "Admin | profiles";
        $view       = $this->di->get("view");
        $pageRender = $this->di->get("pageRender");
        $user = new User();
        $user->setDb($this->di->get("db"));

        $data = [
            "items" => $user->findAll(),
        ];


        $view->add("incl/header", ["title" => ["Admin", "css/style.css"]]);
        $view->add("incl/side-bar1");
        $view->add("admin/view-all", $data);
        $view->add("incl/side-bar2");
        $view->add("incl/footer");

        $pageRender->renderPage(["title" => $title]);
    }

    public function adminDelete($id)
    {
        $loginInfo = $this->checkLogin();
        if ($loginInfo["user"] != "admin") {
            $this->di->get("response")->redirect("");
        }

        $user = new user();
        $user->setDb($this->di->get("db"));
        $user->find("id", $id);
        $user->delete();
        $this->di->get("response")->redirect("user/admin/profiles");
    }
}
