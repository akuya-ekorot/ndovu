<?php

interface Newsletter {
    public function subscribe($email);
}

class CampaignMonitor implements Newsletter {
    public function subscribe($email) {
        echo 'subscribing with campaign monitor';
    }
}

class Drip implements Newsletter {
    public function subscribe($email) {
        echo 'subscribing with drip';
    }
}

class NewsletterSubscriptionController {
    public function store(Newsletter $newsletter) {
        $email = 'akuya@example.com';
        $newsletter->subscribe($email);
    }
}

$controller = new NewsletterSubscriptionController();
$controller->store(new Drip());

$controller->store(new CampaignMonitor());

?>
