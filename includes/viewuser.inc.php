<?php
    class User extends Dbh {

        public function showAllUsers() {
            $datas = $this->getAllsers();
            foreach ($datas as $data) {
                echo $data['uid']."<br>";
                echo $data['pwd'];
            }
        }
    }
?>