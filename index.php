<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Feedback</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Font Awesome -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet"> <!-- Poppins Font -->
    <link rel="stylesheet" href="styles.css"> <!-- Link to external CSS file -->
    <style>
        body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    background-color: black;
}

.feedback-section {
    padding: 50px 20px;
    text-align: center;
}

.header {
    font-weight: 600;
    font-size: 24px;
    margin-bottom: 20px;
    color: white;
}

.stars {
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
}

.stars input {
    display: none;
}

.stars label {
    font-size: 40px;
    color: #ccc;
    cursor: pointer;
    transition: color 0.2s;
}

.stars input:checked ~ label {
    color: orange;
}

.feedback-message {
    margin-top: 20px;
}

.textarea {
    margin: 15px 0;
}

.submit-btn {
    background-color: orange;
    color: black;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
    font-size: 16px;
}

.submit-btn:hover {
    background-color: #c50000;
}

    </style>
</head>
<body>
    <section class="feedback-section">
        <h1 class="header">We value your feedback!<br>Please rate us below:</h1>
        <div class="feedback-container">
            <form method="POST" action="submit_feedback.php">
                <div class="stars">
                    <input type="radio" name="rating" id="star-1" value="1">
                    <label for="star-1" class="fas fa-star"></label>

                    <input type="radio" name="rating" id="star-2" value="2">
                    <label for="star-2" class="fas fa-star"></label>

                    <input type="radio" name="rating" id="star-3" value="3">
                    <label for="star-3" class="fas fa-star"></label>

                    <input type="radio" name="rating" id="star-4" value="4">
                    <label for="star-4" class="fas fa-star"></label>

                    <input type="radio" name="rating" id="star-5" value="5">
                    <label for="star-5" class="fas fa-star"></label>
                </div>
                <div class="feedback-message">
                    <header class="rating-message" id="feedback-text"></header>
                    <div class="textarea">
                        <textarea id="comment" name="comment" cols="30" placeholder="Leave your comments..." required></textarea>
                    </div>
                    <button type="submit" class="submit-btn">Submit</button>
                </div>
            </form>
        </div>
    </section>

    <script>
        const stars = document.querySelectorAll('.stars input');
        const feedbackText = document.getElementById('feedback-text');

        stars.forEach(star => {
            star.addEventListener('change', function() {
                const value = this.value;
                feedbackText.innerHTML = getEmojiMessage(value);
            });
        });

        function getEmojiMessage(value) {
            switch(value) {
                case '5': return "I Hate this 😠";  
                case '4': return "I don't Like this 🙄"; 
                case '3': return "It's okay 😄"; 
                case '2': return "I Like this 😎"; 
                case '1': return "I Love this 🤩";  
                default: return '';
            }
        }
    </script>
</body>
</html>