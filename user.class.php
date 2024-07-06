<?php

class User{
    private $name;
    private $username;
    private $email;
    private $phone;

    public $bio;
    public $skills;

    public $intrest;
    private $storage = "user.json";

    private $stored_users;
    private $new_user;

    public function __construct($name,$username,$email,$phone,$bio,$skills,$intrest,)
    {
        $this->name = filter_var(trim($name), FILTER_SANITIZE_STRING);
        $this->username = filter_var(trim($username), FILTER_SANITIZE_STRING);
        $this->email = filter_var(trim($email), FILTER_SANITIZE_STRING);
        $this->phone = filter_var(trim($phone), FILTER_SANITIZE_STRING);
        $this->bio = filter_var(trim($bio), FILTER_SANITIZE_STRING);
        $this->skills = filter_var(trim($skills), FILTER_SANITIZE_STRING);
        $this->intrest = filter_var(trim($intrest), FILTER_SANITIZE_STRING);

        $this->stored_users = json_decode(file_get_contents($this->storage),true);

        $this->new_user = [
            "name" => $this->name,
            "username" => $this->username,
            "email"=>$this->email,
            "phone" => $this->phone,
            "bio" => $this->bio,
            "skills"=>$this->skills,
            "intrest"=>$this->intrest
            
        ];

        
            $this->insertUser();
        
    }



   

    private function insertUser()
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


?>