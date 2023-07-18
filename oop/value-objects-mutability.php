<?php

// The idea here is that you can build your own types using classes
// but don't go overboard with them. Will make the app too hard to work with
class Age {
    protected $age;

    public function __construct(int $age) {
        if ($age < 0 || $age > 130) {
            throw new InvalidArgumentException('That makes no sense');
        }

        $this->age = $age;
    }

    public function age() {
        return $this->age;
    }
}

function register(string $name, Age $age) {
    echo 'You\'re ' . $name . ' and you\'re ' . $age->age() . ' years old\n';
}

register('Akuya Ekorot', new Age(27));

?>
