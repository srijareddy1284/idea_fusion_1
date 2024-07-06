<?php

class RegisterUser{
    private $username;
    private $email;
    private $raw_password;
    private $encrypted_password;

    public $error;
    public $success;
    private $storage = "data.json";

    private $stored_users;
    private $new_user;

    public function __construct($username, $email,$password)
    {
        $this->username = trim($this->username);
        $this->username = filter_var($username, FILTER_SANITIZE_STRING);

        $this->email = trim($this->email);
        $this->email = filter_var($email, FILTER_SANITIZE_STRING);

        $this->raw_password = filter_var(trim($password), FILTER_SANITIZE_STRING);
        $this->encrypted_password = password_hash($this->raw_password, PASSWORD_DEFAULT);

        $this->stored_users = json_decode(file_get_contents($this->storage),true);

        $this->new_user = [
            "username" => $this->username,
            "email"=>$this->email,
            "password" => $this->encrypted_password,
        ];

        if($this->checkFieldValues())
        {
            $this->insertUser();
        }
    }

    private function checkFieldValues(){
        if(empty($this->username) || empty($this->raw_password) || empty($this->email))
        {
            $this->error="Both field are required";
            return false;
        }
        else
        {
            return true;
        }
    }

    private function usernameExists()
    {
        foreach($this->stored_users as $user)
        {
            if($this->username == $user['username'])
            {
                $this->error = "Username already taken,please choose a different one";
                 return true;

            }
        }

        return false;
    }

    private function insertUser()
    {
        if($this->usernameExists()==FALSE)
        {
            array_push($this->stored_users, $this->new_user);

            if(file_put_contents($this->storage, json_encode($this->stored_users,JSON_PRETTY_PRINT)))
            {
                return $this->success = "Your registeration is successful";
            }
            else
            {
                return $this->error = "Something went wrong, Please try again";
            }
        }
    }
}


?>