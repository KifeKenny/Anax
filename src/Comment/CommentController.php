<?php

namespace Anax\Comment;

/**
 * CommentController.
 */
class CommentController
{
    public $comments;
    public $commentObj;

    /**
    * @param array or boolean: values of item we gona put in place
    */
    public function inject($com)
    {
        $this->commentObj = $com;
        $this->commentObj->session->start();
        return $this;
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
