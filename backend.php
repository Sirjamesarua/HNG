<?php
    // Retrieve the GET parameters
    $slackName = isset($_GET['slack_name']) ? $_GET['slack_name'] : '';
    $track = isset($_GET['track']) ? $_GET['track'] : '';

    // Get the current day of the week
    $currentDay = date('l');

    // Get the current UTC time
    $utcTime = gmdate('Y-m-d\TH:i:s\Z');

    // Replace these with your actual GitHub URLs
    $githubFileUrl = 'https://github.com/username/repo/blob/main/file_name.ext';
    $githubRepoUrl = 'https://github.com/username/repo';

    // Create the JSON response
    $response = array(
        "slack_name" => $slackName,
        "current_day" => $currentDay,
        "utc_time" => $utcTime,
        "track" => $track,
        "github_file_url" => $githubFileUrl,
        "github_repo_url" => $githubRepoUrl,
        "status_code" => 200
    );

    // Set appropriate headers
    header('Content-Type: application/json');

    // Encode and echo the JSON response
    echo json_encode($response);
