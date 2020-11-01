<?php
    
    class User {
        // properties and methods
        public $username;
        private $email;

        public function __construct($username, $email) {
            $this->username = $username;
            $this->email = $email;
        }

        public function addFriend() {
            
            return "$this->username Added a new friend";
        }

    }

    $userOne = new User('thando', 'thando@gmail.com');
    $userTwo = new User('mncedi', 'mncedi@mail.com');

    echo $userOne->addFriend().'<br>';
    echo $userTwo->addFriend().'<br>';

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