<?php

class Team
{
	protected $name;
	protected $members = [];

	public function __construct($name, $members)
	{
		$this->name = $name;
		$this->members = $members;
	}

	public static function start(...$params)
	{
		return new static(...$params);
	}

	public function name()
	{
		return $this->name;
	}

	public function add($name)
	{
		$this->members[] = $name;
	}

	public function members()
	{
		return $this->members;
	}
}

class Member {
	protected $name;

	public function __construct($name) {
		$this->name = $name;
	}

	public static function create(...$params) {
		return new static(...$params);
	}

	public function name() {
		return $this->name;
	}
}

$akuya = Member::create("Akuya");
$brian = Member::create("Brian");

$acme = Team::start("Acme", [$akuya, $brian]);

echo var_dump($acme->members());

?>
