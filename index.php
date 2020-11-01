<?php
    
    class User {
        // properties and methods
        public $username;
        protected $email;
        public $role = 'member';

        public function __construct($username, $email) {
            $this->username = $username;
            $this->email = $email;
        }

        // more magic methods besides the constructor
        public function __destruct() {
            echo "the user $this->username was removed <br>";
        }

        public function __clone() {
            $this->username = $this->username.'(cloned)<br>';
        }

        public function addFriend() {
            
            return "$this->username Added a new friend";
        }

        // getters
        public function getEmail() {
            return $this->email;
        }

        // setters
        public function setEmail($email) {
            if (strpos($email, '@') > -1) {
                $this->email = $email;
            } else {
                echo "Please enter a valid email";
            }
        }

        public function message() {
            return "$this->email sent a new message";
        }

    }

    class AdminUser extends User {
        public $level;
        public $role = 'admin';

        public function __construct($username, $email, $level) {
            $this->level = $level;
            parent::__construct($username, $email);
        }

        public function message() {
            return "$this->email, an admin, sent a new message <br>";
        }
    }

    $userOne = new User('thando', 'thando@gmail.com');
    $userTwo = new User('mncedi', 'mncedi@mail.com');
    $userThree = new AdminUser('Dishman', 'dishman@thandotech.com', 5);

    echo $userThree->username.'<br>';
    echo $userThree->getEmail().'<br>';
    
    echo $userOne->getEmail().'<br>';
    echo $userTwo->getEmail().'<br>';

    $userOne->setEmail('thandotech@mail.co.za');

    echo $userThree->level.'<br>';
    echo $userOne->role.'<br>';
    echo $userThree->role.'<br>';
    echo $userOne->message().'<br>';
    echo $userTwo->message().'<br>';
    echo $userThree->message().'<br>';

    $userFour = clone $userOne;
    echo $userFour->username;
    // echo $userOne->addFriend().'<br>';
    // echo $userTwo->addFriend().'<br>';

    // echo "<br/><br/> ################## get_class_vars('classname') ################<br/>";
    // print_r(get_class_vars('User')).'<br/>';
    // echo "<br/> <br>################## get_class_methods('classname') ################<br/>";
    // print_r(get_class_methods('User')).'<br>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Tutorial</title>
</head>
<body>

</body>
</html>