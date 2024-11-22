<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pixa | AI Image Generator</title>
  <link rel="stylesheet" href="style.css"> <!-- Link to the external CSS file -->
</head>
<body>
  <div class="form-container">
    <h1>Pixa - AI Image Generator</h1>

    <?php
    // Check if the form was submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get form inputs
        $prompt = urlencode($_POST['prompt']);
        $width = intval($_POST['width']);
        $height = intval($_POST['height']);
        $seed = intval($_POST['seed']);

        // Construct the API URL
        $apiUrl = "https://image.pollinations.ai/prompt/{$prompt}?width={$width}&height={$height}&seed={$seed}&nologo=poll";

        // Initialize cURL session
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $apiUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Execute the API call
        $imageData = curl_exec($ch);

        // Check for errors
        if (curl_errno($ch)) {
            echo "<p>Error: " . curl_error($ch) . "</p>";
        } else {
            // Display the image if successful
            echo "<div class='image-result'>";
            echo "<h2>Generated Image:</h2>";
            echo "<img src='data:image/png;base64," . base64_encode($imageData) . "' alt='Generated Image'>";
            echo "</div>";
        }

        // Close the cURL session
        curl_close($ch);
    }
    ?>

    <!-- Form for user input -->
    <form action="index.php" method="POST">
      <label for="prompt">Prompt</label>
      <input type="text" name="prompt" id="prompt" placeholder="e.g., A beautiful sunset" required>

      <label for="width">Width (px)</label>
      <input type="number" name="width" id="width" placeholder="e.g., 1280" required>

      <label for="height">Height (px)</label>
      <input type="number" name="height" id="height" placeholder="e.g., 720" required>

      <label for="seed">Seed (Random Number)</label>
      <input type="number" name="seed" id="seed" placeholder="e.g., 42" required>

      <button type="submit">Generate Image</button>
    </form>
  </div>
</body>
</html>
