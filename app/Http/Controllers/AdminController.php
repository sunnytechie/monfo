<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $dummyArrays = [
            'members' => 1,
            'lastWeekMembers' => 1,
            'users' => 1,
            'lastWeekUsers' => 1,
            'news_Events' => 1,
            'lastWeekNews_Events' => 1,
            'projects' => 1,
            'lastWeekProjects' => 1,
        ];

        $members = 1;
        $lastWeekMembers = 1;
        $users = 1;
        $lastWeekUsers = 1;
        $news_Events = 1;
        $lastWeekNews_Events = 1;
        $projects = 1;
        $lastWeekProjects = 1;

        return view('admin.index', compact('members', 'lastWeekMembers', 'users', 'lastWeekUsers', 'news_Events', 'lastWeekNews_Events', 'projects', 'lastWeekProjects'));
    }
}
