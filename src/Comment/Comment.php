<?php

namespace Anax\Comment;

/**
 * REM Server.
 */
class Comment
{
    /**
    * @var $session inject a reference to the session.
    */
    public $session;

    /**
     * @param $session inject session object to handle the session.
     *
    */
    public function inject($ses)
    {
        $this->session = $ses;
    }
    /**
     * Inject dependencies.
     *
     * @param array $values with values to post to session.
     *
     * @return array $values if set else false
     */
    public function getPosts($values, $delim = null)
    {
        $result = [];
        foreach ($values as $val) {
            $name = isset($_POST[$val]) ? htmlentities($_POST[$val]) : null;
            if ($name != $delim) {
                array_push($result, $name);
            } else {
                return false;
            }
        }
        return $result;
    }

    /**
     * .
     *
     * @param array $values with the comment values.
     *
     * @param array $keys contains the keys you want to you'r values.
     *
     * @return array $values if set else false
     */
    public function injectKeys($values, $keys)
    {
        $result = [];
        for ($i=0; $i < count($values); $i++) {
            $result[$keys[$i]] = $values[$i];
        }
        return $result;
    }

    /**
    *@param array $names all the names of inputs you wanna get value from
    *@param array $keys asaign $names values to keys both array need to be same leangth
    *@param string $mes set key and value array to this string
    *@param string $deli delimiter to give fail $name result if math return false
    *@return bool set session with with values and key $mes if or return false if error
    */
    public function addComment($names, $keys, $mes, $deli = null)
    {
        $values = $this->getPosts($names, $deli);
        if ($values) {
            $result = $this->injectKeys($values, $keys);

            $oldMes = $this->session->get($mes);
            if ($oldMes != null) {
                $result["id"] = count($oldMes);
                array_push($oldMes, $result);
                $this->session->set($mes, $oldMes);
                return true;
            }
            $result["id"] = 0;
            $this->session->set($mes, [$result]);
            return true;
        }
        return false;
    }
    /**
    *@param int $id the value you wanna get from the session array
    *@param string $mes session name you wanna get
    *@param array $names input names you wanna get values from
    *@param array $keys keys you wanna set the $names to have to be same leangth as $names
    *@param string $deli to $names to avoid unwanted values
    **/

    public function editCom($id, $mes, $names, $keys, $deli = null)
    {
        $mese = $this->session->get($mes);

        $values = $this->getPosts($names, $deli);
        if ($values) {
            $newcom = $this->injectKeys($values, $keys);
            if ($newcom) {
                $newcom["id"] = $id;
                $mese[$id] = $newcom;
                $this->session->set($mes, $mese);
                return true;
            }
        }
        return false;
    }

    /**
    *@param int $id you want to get
    *@param string $mes from session you want to get it from
    *return false if failure
    */
    public function getComId($id, $mes)
    {
        $mes = $this->session->get($mes);
        $count = count($mes) - 1;
        if ($mes != null && $id <= $count) {
            $result = $mes[$id];
            return $result;
        }
        return false;
    }

    /**
    *@param int $id id you want to delete
    *@param string $mes values you wanna get
    */
    public function delId($id, $mes)
    {
        $allvalues = $this->session->get($mes);
        if ($allvalues && $id != null) {
            foreach ($allvalues as $val) {
                if ($val["id"] == $id) {
                    unset($allvalues[$id]);
                    $this->session->set($mes, $allvalues);
                }
            }
        }
    }
}
