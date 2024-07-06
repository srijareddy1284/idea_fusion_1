<?php

class RegisterUser {
    private $projectName;
    private $projectDescription;
    private $skillsNeeded;

    public $error;
    public $success;
    private $storage = "innovator.json";

    private $stored_users;
    private $new_user;

    public function __construct($projectName, $projectDescription, $skillsNeeded) {
        $this->projectName = filter_var(trim($projectName), FILTER_SANITIZE_STRING);
        $this->projectDescription = filter_var(trim($projectDescription), FILTER_SANITIZE_STRING);
        $this->skillsNeeded = filter_var(trim($skillsNeeded), FILTER_SANITIZE_STRING);

        // Check if the storage file exists, if not initialize an empty array
        if (!file_exists($this->storage)) {
            $this->stored_users = [];
        } else {
            $this->stored_users = json_decode(file_get_contents($this->storage), true);
        }

        $this->new_user = [
            "projectName" => $this->projectName,
            "projectDescription" => $this->projectDescription,
            "skillsNeeded" => $this->skillsNeeded,
        ];

        if ($this->checkFieldValues()) {
            $this->insertUser();
        }
    }

    private function checkFieldValues() {
        if (empty($this->projectName) || empty($this->projectDescription) || empty($this->skillsNeeded)) {
            $this->error = "All fields are required";
            return false;
        } else {
            return true;
        }
    }

    private function insertUser() {
        array_push($this->stored_users, $this->new_user);

        if (file_put_contents($this->storage, json_encode($this->stored_users, JSON_PRETTY_PRINT))) {
            $this->success = "Your information is stored";
        } else {
            $this->error = "Something went wrong, please try again";
        }
    }
}

?>
