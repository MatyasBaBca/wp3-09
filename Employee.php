<?php
class Employee
{
	private $firstname;
	private $lastname;
	private $birthday;
	private $gender;
	private $position;
	private $computer;

	public function __construct(
		string $firstname, string $lastname, string $birthday, string $gender, string $position, string $computer,) {
            $this->firstname = $firstname;
            $this->lastname = $lastname;
            $this->birthday = $birthday;
            $this->gender = $gender;
            $this->position = $position;
            $this->computer = $computer;

	}

	public function getFirstname(){
		return $this->firstname;
	}

	public function getLastname(){
		return $this->lastname;
	}

	public function getBirthday(){
		return $this->birthday;
    }
    
    public function getGender(){
		return $this->gender;
	}

	public function getPosition(){
		return $this->position;
	}

	public function getComputer(){
		return $this->computer;
	}

}
?>