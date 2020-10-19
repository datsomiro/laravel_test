<?php

namespace App\Classes\ThisProject;
use App\Classes\ProjectOwner;

//fullyqualifiedname:\App\Classes\ThisProject\Project

class Project
{
    public $name  = null;
    public $owner = null;

    public function __construct()
    {
        $this->name = config('app.name');

        $this->owner = new ProjectOwner;
    }
}