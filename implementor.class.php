<?php

class RegisterUser {


    private $fullName;
    private $email;
    private $phone;
    private $skills;
    private $experience;
    private $availability;
    
    private $onlineProfiles;
    private $projectPreferences;
    private $communicationChannels;
    private $expectations;
    private $compensation;


    public $error;
    public $success;
    private $storage = "implementor.json";

    private $stored_users;
    private $new_user;

    public function __construct($fullName,$email,$phone,$skills,$experience,$availability,$onlineProfiles,$projectPreferences,$communicationChannels,$expectations,$compensation) {
        $this->fullName = filter_var(trim($fullName), FILTER_SANITIZE_STRING);
        $this->email = filter_var(trim($email), FILTER_SANITIZE_STRING);
        $this->phone = filter_var(trim($phone), FILTER_SANITIZE_STRING);
        $this->skills = filter_var(trim($skills), FILTER_SANITIZE_STRING);
        $this->experience = filter_var(trim($experience), FILTER_SANITIZE_STRING);
        $this->availability = filter_var(trim($availability), FILTER_SANITIZE_STRING);
        
        $this->onlineProfiles = filter_var(trim($onlineProfiles), FILTER_SANITIZE_STRING);
        $this->projectPreferences = filter_var(trim($projectPreferences), FILTER_SANITIZE_STRING);
        $this->communicationChannels = filter_var(trim($communicationChannels), FILTER_SANITIZE_STRING);
        $this->expectations = filter_var(trim($expectations), FILTER_SANITIZE_STRING);
        $this->compensation = filter_var(trim($compensation), FILTER_SANITIZE_STRING);


        if (!file_exists($this->storage)) {
            $this->stored_users = [];
        } else {
            $this->stored_users = json_decode(file_get_contents($this->storage), true);
        }

        $this->new_user = [
        "fullName"              => $this->fullName,
        "email"                 => $this->email,
        "phone"                 =>$this->phone,
        "skills"                =>$this->skills, 
        "experience"            => $this->experience, 
        "availability"          => $this->availability, 
        
        "onlineProfiles"        =>$this->onlineProfiles,
        "projectPreferences"     =>$this->projectPreferences,
        "communicationChannels" =>$this->communicationChannels,
        "expectations"          =>$this->expectations,
        "compensation"          =>$this->compensation

        ];

        if ($this->checkFieldValues()) {
            $this->insertUser();
        }
    }

    private function checkFieldValues() {
        if (empty($this->fullName) || 
            empty($this->email) ||
            empty($this->phone) ||
            empty($this->skills) ||
            empty($this->experience) ||
            empty($this->availability) ||
            
            empty($this->onlineProfiles) ||
            empty($this->projectPreferences) ||
            empty($this->communicationChannels) ||
            empty($this->expectations) ||
            empty($this->compensation)
            ) {
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
