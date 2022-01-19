<?php

class User
{
    // Automatically Triggered on Instantiation
    public function __construct($id, $name, $tag, $reputation, $status)
    {
        $this->id = $id;
        $this->name = $name;
        $this->tag = $tag;
        $this->reputation = $reputation;
        $this->status = $status;
    }

    public function changeStatusToFired()
    {
        $this->status = 'Fired';
    }

    public function showStatus()
    {
        return $this->status;
    }
}

$user1 = new User(1, 'Tasky', 'Ok', 55, 'Active');
$user1->changeStatusToFired();