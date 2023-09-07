<?php

    $slackName = isset($_GET['slack_name']) ? $_GET['slack_name'] : '';
    $track = isset($_GET['track']) ? $_GET['track'] : '';

    $date = date('l');

    $time = gmdate('Y-m-d\TH:i:s\Z');

    $githubFileUrl = 'https://github.com/Sirjamesarua/HNG/blob/master/backend.php';
    $githubRepoUrl = 'https://github.com/Sirjamesarua/HNG';

    $response = array(
        "slack_name" => $slackName,
        "current_day" => $date,
        "utc_time" => $time,
        "track" => $track,
        "github_file_url" => $githubFileUrl,
        "github_repo_url" => $githubRepoUrl,
        "status_code" => 200
    );

    header('Content-Type: application/json');

    echo json_encode($response);
