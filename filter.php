<?php
// Define the input text to be checked
$inputText = $prompt;

// Create the prompt for Pollinations A
$checkInstruction = "Evaluate the following prompt for potentially harmful or inappropriate content (e.g., pornography, erotica, violence, murder, torture, threats, etc.). 
If it is appropriate, respond with 'Aman'. 
If it is inappropriate, respond with 'Unauthorized prompt' and explain why.";

$prompt1 = $checkInstruction . "\n\nPrompt: " . $inputText;

// Pollinations API URL
$apiUrl = "https://text.pollinations.ai/" . urlencode($prompt1);

// Initialize cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the cURL request and get the response
$response = curl_exec($ch);

// Check for any cURL errors
if (curl_errno($ch)) {
    echo "Error: " . curl_error($ch);
    curl_close($ch);
    exit;
}

curl_close($ch);


/**
 * Function to analyze the AI response and check for bad words
 * @param string $response
 * @return bool
 */
function analyzeResponse($response)
{
    // Check if the AI response contains the word "Unauthorized prompt"
    if (stripos($response, "Unauthorized") !== false) {
        return true; // Bad word found in the response
    }

    return false; // No bad words found
}
?>
