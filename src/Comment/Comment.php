<?php

namespace Anax\Comment;

/**
 * REM Server.
 */
class Comment
{
    /**
     * @var array $session inject a reference to the session.
     */
    public $session;
    // private $comApp;


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
}
