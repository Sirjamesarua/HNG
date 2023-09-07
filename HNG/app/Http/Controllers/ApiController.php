<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    
    public function task(Request $request)
    {
        $slackName = $request->input('slack_name', '');
        $track = $request->input('track', '');

        $currentDay = now()->format('l');
        $utcTime = now()->toIso8601ZuluString();
        // Replace with your actual GitHub URLs
        $githubFileUrl = 'https://github.com/username/repo/blob/main/file_name.ext';
        $githubRepoUrl = 'https://github.com/username/repo';

        $response = [
            "slack_name" => $slackName,
            "current_day" => $currentDay,
            "utc_time" => $utcTime,
            "track" => $track,
            "github_file_url" => $githubFileUrl,
            "github_repo_url" => $githubRepoUrl,
            "status_code" => 200
        ];

        return response()->json($response);
    }
}


