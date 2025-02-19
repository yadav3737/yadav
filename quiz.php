<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="quiz.css">
    <title>Quiz</title>
    <style>
        /* Full-page background with image */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding-top: 70px;
    background: url('quizz.avif') no-repeat center center/cover; 
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Overlay to improve readability */
body::before {
    content: "";
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.3); /* Adjust transparency */
    z-index: -1;
}

        /* Header Styling */
        .header {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: white;
            padding: 5px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            z-index: 1000;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .login-btn {
            background: white;
            color: #6a11cb;
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: 0.3s;
        }
        .login-btn:hover {
            background: #ddd;
        }
        /* Adjust body padding */
        body {
            padding-top: 70px;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <div class="header">
    
        <h1>Quiz</h1>
        <button class="login-btn" onclick="location.href='home.php'">Logout</button>
    </div>

    <div class="container">
        <div class="start-screen">
            <h1 class="heading">Quiz</h1>
            <div class="settings">
                <label for="num-questions">Number of Questions:</label>
                <select id="num-questions">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                    <option value="40">40</option>
                    <option value="50">50</option>
                </select>
                <label for="category">Select Category:</label>
                <select id="category">
                    <option value="">Any Category</option>
                    <option value="9">General Knowledge</option>
                    <option value="10">Books</option>
                    <option value="11">Films</option>
                    <option value="12">Music</option>
                    <option value="14">Television</option>
                    <option value="15">Video Games</option>
                    <option value="16">Board Games</option>
                    <option value="17">Science and Nature</option>
                    <option value="18">Computers</option>
                    <option value="19">Mathematics</option>
                    <option value="20">Mythology</option>
                    <option value="21">Sports</option>
                    <option value="22">Geography</option>
                    <option value="23">History</option>
                    <option value="24">Politics</option>
                    <option value="25">Art</option>
                    <option value="28">Vehicles</option>
                </select>
                <label for="difficulty">Select Difficulty:</label>
                <select id="difficulty">
                    <option value="">Any Difficulty</option>
                    <option value="easy">Easy</option>
                    <option value="medium">Medium</option>
                    <option value="hard">Hard</option>
                </select>
                <label for="time">Select Time Per Question:</label>
                <select id="time">
                    <option value="10">10 seconds</option>
                    <option value="15">15 seconds</option>
                    <option value="20">20 seconds</option>
                    <option value="25">25 seconds</option>
                    <option value="30">30 seconds</option>
                    <option value="60">60 seconds</option>
                </select>
            </div>
            <button class="btn start">Start Quiz</button>
        </div>
        <div class="quiz hide">
            <div class="timer">
                <div class="progress">
                    <div class="progress-bar"></div>
                    <span class="progress-text"></span>
                </div>
            </div>
            <div class="question-wrapper">
                <div class="number">
                    Question <span class="current">1</span>
                    <span class="total">/10</span>
                </div>
                <div class="question">This is a question This is a question?</div>
            </div>
            <div class="answer-wrapper">
                <div class="answer selected">
                    <span class="text">Answer</span>
                    <span class="checkbox">
                        <i class="fas fa-check"></i>
                    </span>
                </div>
            </div>
            <button class="btn submit" disabled>Submit</button>
            <button class="btn next">Next</button>
        </div>
        <div class="end-screen hide">
            <h1 class="heading">Quiz App</h1>
            <div class="score">
                <span class="score-text">Your Score:</span>
                <div>
                    <span class="final-score">0</span>
                    <span class="total-score">/10</span>
                </div>
            </div>
            <button class="btn restart">Restart Quiz</button>
        </div>
    </div>

    <script src="quiz.js"></script>
</body>
</html>
