<?php
// 
// namespace Anax\Comment;
//
//
// // use \Anax\Comment\ComentDatabase;
// use \Anax\Comment2\Comment;
// /**
//  * CommentController.
//  */
// class ComControllerDatabase
// {
//     // use InjectionAwareTrait;
//     public $comments;
//     public $commentObj;
//     public $page;
//     public $session;
//
//     /**
//     * @param array comment obj, Injekt comment objekt with all functions
//     */
//     public function injects($obj)
//     {
//         $this->commentObj = $obj["comment"];
//         $this->page       = $obj["page"];
//         $this->session    = $obj["session"];
//         return $this;
//     }
//
//     public function getPage($data = null)
//     {
//         if ($data == null) {
//             $data = [
//                 "page" => ["normal/comment"],
//                 "title" => "Edit | Comment",
//                 "res" => null,
//                 "style" => "css/style.css"
//             ];
//         }
//         $this->page->ownrenderPage($data);
//     }
//
//     public function indexPage()
//     {
//         $comment   = new \Anax\Comment2\Comment();
//         // $comment->setDb($this->di->get("db"));
//         // $data = [
//         //     "items" => $comment2->findAll(),
//         // ];
//
//         $data = [
//                 "page" => ["comment3/index"],
//                 "title" => "Comment | Page",
//                 "res" => "1",
//                 "style" => "css/style.css"
//             ];
//     }
//     // public function addcomentPrivate()
//     // {
//     //
//     //     $values = ["comTitle", "comMail", "comText"];
//     //     $keys = ["Title", "Mail", "Text"];
//     //     $mes = "Messages";
//     //     $result = $this->commentObj->addComment($values, $keys, $mes);
//     //     $data = [
//     //         "page" => ["normal/comment"],
//     //         "title" => "Edit | Comment",
//     //         "res" => "1",
//     //         "style" => "css/style.css"
//     //     ];
//     //     if (!$result) {
//     //         $data["res"] = "2";
//     //     }
//     //     $this->getPage($data);
//     // }
// }
