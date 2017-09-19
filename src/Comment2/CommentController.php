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
    * @param array comment obj
    */
    public function inject($com, $page1)
    {
        $this->commentObj = $com;
        $this->page = $page1;
        $this->commentObj->session->start();
        return $this;
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
        $result = $this->addComment($values, $keys, $mes);
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
            $this->delId($id, $mes);
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
            $res = $this->getComId($id, "Messages");
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
        $result = $this->editCom($id, $mes, $values, $keys);

        if ($result) {
            $data["res"] = $this->getComId($id, "Messages");
            $data["res"]["result"] = "1";
            $data["page"] = ["normal/comEdit"];
        }
        $this->getPage($data);
    }

    /**
    * @param array or boolean: values of item we gona put in place
    */
    public function addComment($names, $keys, $mes, $deli = null)
    {
        $values = $this->commentObj->getPosts($names, $deli);
        if ($values) {
            $result = $this->commentObj->injectKeys($values, $keys);

            $oldMes = $this->getMes($mes);
            if ($oldMes != null) {
                $result["id"] = count($oldMes);
                array_push($oldMes, $result);
                $this->commentObj->session->set($mes, $oldMes);
                return true;
            }
            $result["id"] = 0;
            $this->commentObj->session->set($mes, [$result]);
            return true;
        }
        return false;
    }

    public function getMes($mes)
    {
        $comments = $this->commentObj->session->get($mes);
        if ($comments != null) {
            return $comments;
        }
        return false;
    }

    public function getComId($id, $mes)
    {
        $mes = $this->getMes($mes);
        $count = count($mes) - 1;
        if ($mes != null && $id <= $count) {
            $result = $mes[$id];
            return $result;
        }
        return false;
    }

    public function editCom($id, $mes, $names, $keys, $deli = null)
    {
        $mese = $this->getMes($mes);

        $values = $this->commentObj->getPosts($names, $deli);
        if ($values) {
            $newcom = $this->commentObj->injectKeys($values, $keys);
            // $old_com = $this->getComId($id, $mes);
            if ($newcom) {
                $newcom["id"] = $id;
                $mese[$id] = $newcom;
                $this->commentObj->session->set($mes, $mese);
                return true;
            }
        }
        return false;
    }

    public function delId($id, $mes)
    {
        $allvalues = $this->getMes($mes);
        if ($allvalues && $id != null) {
            foreach ($allvalues as $val) {
                if ($val["id"] == $id) {
                    unset($allvalues[$id]);
                    $this->commentObj->session->set($mes, $allvalues);
                }
            }
        }
    }
}
