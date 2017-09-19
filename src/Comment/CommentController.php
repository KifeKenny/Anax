<?php

namespace Anax\Comment;

/**
 * CommentController.
 */
class CommentController
{
    // use InjectionAwareTrait;
    public $comments;
    public $commentObj;
    public $page;

    /**
    * @param array comment obj, Injekt comment objekt with all functions
    */
    public function injects($com, $page1)
    {
        $this->commentObj = $com;
        $this->page = $page1;
        return $this;
    }

    public function startSession()
    {
        $this->commentObj->session->start();
    }


    public function getPage($data = null)
    {
        if ($data == null) {
            $data = [
                "page" => ["normal/comment"],
                "title" => "Edit | Comment",
                "res" => null,
                "style" => "css/style.css"
            ];
        }
        $this->page->ownrenderPage($data);
    }

    public function addcomentPrivate()
    {

        $values = ["comTitle", "comMail", "comText"];
        $keys = ["Title", "Mail", "Text"];
        $mes = "Messages";
        $result = $this->commentObj->addComment($values, $keys, $mes);
        $data = [
            "page" => ["normal/comment"],
            "title" => "Edit | Comment",
            "res" => "1",
            "style" => "css/style.css"
        ];
        if (!$result) {
            $data["res"] = "2";
        }
        $this->getPage($data);
    }

    public function deleteComment()
    {

        $mes = "Messages";
        $id = isset($_GET["id"]) ? $_GET["id"] : null;
        if ($id != null) {
            $this->commentObj->delId($id, $mes);
        }
        $this->getPage();
    }

    public function editPageGet()
    {
        $id = isset($_GET["id"]) ? $_GET["id"] : null;
        $data = [
            "page" => ["default/404"],
            "title" => "Edit | Comment",
            "res" => null,
            "style" => "../css/style.css"
        ];
        if ($id != null) {
            $res = $this->commentObj->getComId($id, "Messages");
            if ($res) {
                $data["page"] = ["normal/comEdit"];
                $data["res"] = $res;
                $data["res"]["result"] = "0";
            }
        }
        $this->getPage($data);
    }

    public function editPage()
    {
        $id = isset($_GET["id"]) ? $_GET["id"] : null;

        $data = [
            "page" => ["default/404"],
            "title" => "Edit | Comment",
            "res" => null,
            "style" => "../css/style.css"
        ];
        $data["res"]["result"] = "2";
        $values = ["comEdiTitle", "comEdiMail", "comEdiText"];
        $keys = ["Title", "Mail", "Text"];
        $mes = "Messages";
        $result = $this->commentObj->editCom($id, $mes, $values, $keys);

        if ($result) {
            $data["res"] = $this->commentObj->getComId($id, "Messages");
            $data["res"]["result"] = "1";
            $data["page"] = ["normal/comEdit"];
        }
        $this->getPage($data);
    }
}
