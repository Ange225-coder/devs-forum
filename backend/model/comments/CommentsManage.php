<?php

    declare(strict_types = 1);

    namespace App\Model\Comments;

    use App\Model\Database\DbManage;

    class CommentsManage extends DbManage
    {

        /**
         * function which get a theme post based on its id
         */
        public function getTheme(string $idPost)
        {
            $db = $this->dbConnect();
            $queryGetPost = $db->prepare('SELECT f_theme FROM subjects WHERE id = ?');
            $queryGetPost->execute(array($idPost));

            return $queryGetPost->fetch();
        }


        /** function which insert new comment in db */
        public function setNewComment(string $idPost, string $post, string $author, string $comment): bool
        {
            $db = $this->dbConnect();

            $querySetNewComment = $db->prepare('INSERT INTO comments(idPost, post_theme, f_author, f_comment, comment_date) VALUE(?, ?, ?, ?, NOW())');

            return $querySetNewComment->execute(array($idPost, $post, $author, $comment));
        }

        /**
         * function which retrieve all comments
         * of a post based on its id
         */
        public function getPostComments(string $idPost): array
        {
            $db = $this->dbConnect();
            $queryGetPostComments = $db->prepare('SELECT *, DATE_FORMAT(comment_date, "%d/%m/%Y  à %Hh:%imin:%ss") as date_com_fr FROM comments WHERE idPost = ? ORDER BY comment_date DESC');
            $queryGetPostComments->execute(array($idPost));

            return $queryGetPostComments->fetchAll();
        }

        /**
         * function which  get all comments
         * and used it in tablesCounterCtrl for
         * count comments
         */
         public function getComments(): array
         {
             $db = $this->dbConnect();
             $queryGetComments = $db->prepare('SELECT * FROM comments');
             $queryGetComments->execute();

             return $queryGetComments->fetchAll();
         }


    }