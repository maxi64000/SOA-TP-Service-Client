<?php

class Account {
	public $id;
	public $lastName;
	private $firstName;
	private $email;
	private $password;

	public function __constructor() {

	}

	public function GetId() {
		return $this->id;
	}

	public function SetId($id) {
		$this->id = $id;
	}

	public function GetLastName() {
		return $this->lastName;
	}
	public function SetLastName($lastName) {
		$this->lastName = $lastName;
	}

	public function GetFirstName() {
		return $this->firstName;
	}
	public function SetFirstName($firstName) {
		$this->firstName = $firstName;
	}

	public function GetEmail() {
		return $this->email;
	}
	public function SetEmail($email) {
		$this->email = $email;
	}

	public function GetPassword() {
		return $this->email;
	}
	public function SetPassword($password) {
		$this->password = $password;
	}
}

?>