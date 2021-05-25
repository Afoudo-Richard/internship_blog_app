<?php
    class Post_model extends Model {
        public function allPost()
        {
            $sql="SELECT * FROM post ";
            $result = $this->query($sql);
            $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);

            return $rows;
        }

        public function singlePost($id)
        {
            $sql="SELECT * FROM `post` WHERE post_id = $id";
            $result = $this->query($sql);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            return $row;
        }

        public function addComment($post_id, $user_id, $comment){
            $sql="INSERT INTO `comment`(`comment_id`, `user_id`, `post_id`, `comment`) VALUES (NULL,'$user_id', '$post_id', '$comment')";

			$result = $this->query($sql);

			return $result;
        }

        public function getComments($id)
        {
            $sql="SELECT * FROM `comment` as c,`user` as u WHERE c.user_id=u.user_id AND  post_id = $id";
            $result = $this->query($sql);
            $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);

            return $rows;
        }
    }