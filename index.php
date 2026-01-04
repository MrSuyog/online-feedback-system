<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Feedback | Glass UI</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="feedback-page">
    <div class="feedback-card">
        <h1>💡 Feedback</h1>
        <p class="tagline">Your opinion matters to us</p>

        <form method="post" action="submit_feedback.php">

            <div class="input-box">
                <span>👤</span>
                <input type="text" name="name" placeholder="Your Name" required>
            </div>

            <div class="input-box">
                <span>📧</span>
                <input type="email" name="email" placeholder="Your Email" required>
            </div>

            <div class="input-box textarea">
                <span>✍️</span>
                <textarea name="message" placeholder="Write your feedback..." required></textarea>
            </div>

            <button type="submit">Send Feedback 🚀</button>
        </form>
    </div>
</div>

</body>
</html>
