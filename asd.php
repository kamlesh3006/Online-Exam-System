<!DOCTYPE html>
<html>
<head>
	<title>Exam Question</title>
	<style>
		body {
			font-family: Arial, sans-serif;
		}

		.question-container {
			margin-top: 50px;
			padding: 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
		}

		.question {
			font-weight: bold;
			margin-bottom: 10px;
		}

		.option {
			margin-bottom: 5px;
		}

		.timer {
			position: fixed;
			top: 10px;
			right: 10px;
			font-size: 20px;
			font-weight: bold;
		}
	</style>
	<script>
		// Define the time limit for the exam (in seconds)
		var timeLimit = 300; // 5 minutes
		var timeRemaining = timeLimit;
		
		// Countdown timer function
		function countdown() {
			var minutes = Math.floor(timeRemaining / 60);
			var seconds = timeRemaining % 60;
			document.getElementById("timer").innerHTML = "Time remaining: " + minutes + "m " + seconds + "s";
			timeRemaining--;
			if (timeRemaining < 0) {
				// Time's up - submit the exam
				document.getElementById("exam-form").submit();
			} else {
				setTimeout(countdown, 1000);
			}
		}
	</script>
</head>
<body onload="countdown()">
	<div class="timer" id="timer"></div>
	<div class="question-container">
		<h1>Exam Question</h1>
		<form id="exam-form" action="exammm.php" method="POST">
			<div class="question">
				<p>Who developed PHP?</p>
			</div>
			<div class="options">
				<div class="option">
					<input type="radio" name="answer" id="answer-1" value="Paris">
					<label for="answer-1">Rasmus Lerdorf</label>
				</div>
				<div class="option">
					<input type="radio" name="answer" id="answer-2" value="London">
					<label for="answer-2">Alex White</label>
				</div>
				<div class="option">
					<input type="radio" name="answer" id="answer-3" value="Berlin">
					<label for="answer-3">Barney Stinson</label>
				</div>
				<div class="option">
					<input type="radio" name="answer" id="answer-4" value="Madrid">
					<label for="answer-4">Anuj Sharma</label>
				</div>
			</div>
			<input type="submit" style="margin-top: 3vh;" value="Submit Exam">
      <input type="submit" style="margin-left:155vh;" value="Previous">
      <input type="submit" value="Next">
		</form>
	</div>
</body>
</html>
