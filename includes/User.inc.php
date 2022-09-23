<?php
    class User extends Dbh
    {
        protected function getAllUsers()
        {
            $sql = "SELECT *FROM tbl_users";
            $result = $this->connect()->query($sql);
            $count = $result->num_rows;

            if($count>0)
            {
                while($row = $result->fetch_assoc())
                {
                    $data[] = $row;
                }
                return $data;
            }
        } 
    }
?> 