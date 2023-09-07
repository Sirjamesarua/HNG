<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    
    public function task(Request $request)
    {
        $slackName = $request->input('slack_name', '');
        $track = $request->input('track', '');

        $date = now()->format('l');
        $time = now()->toIso8601ZuluString();
        $githubFileUrl = 'https://github.com/Sirjamesarua/HNG/blob/master/HNG/app/Http/Controllers/ApiController.php';
        $githubRepoUrl = 'https://github.com/Sirjamesarua/HNG';

        $response = [
            "slack_name" => $slackName,
            "current_day" => $date,
            "utc_time" => $time,
            "track" => $track,
            "github_file_url" => $githubFileUrl,
            "github_repo_url" => $githubRepoUrl,
            "status_code" => 200
        ];

        return response()->json($response);
    }
}


