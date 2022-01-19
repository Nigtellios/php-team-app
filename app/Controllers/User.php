<?php

namespace TeamApp;

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
}
