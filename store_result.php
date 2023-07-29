<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        
  <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
    <nav class="fixed top-0 z-50 w-full bg-violet-900">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
          <div class="flex items-center justify-between">
            <div class="flex items-center justify-start">
              
              <a href="#" class="flex ml-2 md:mr-24" >
                <span class="self-center text-xl font-semibold sm:text-3xl whitespace-nowrap text-white" style="font-weight: bolder;">Result</span>
              </a>
            </div>
          </div>
        </div>
      </nav>
      <div>
        <h1 style="margin-top: 5%; align-items: center; text-align: center; font-weight:bold; font-size:xx-large">Exam Result</h1>
      </div>
      <div class="relative overflow-x-auto shadow-md sm:rounded-lg" style="margin-top: 1%; align-items: center; text-align: center;">
<?php
// Assuming you have established a database connection
$conn = new mysqli("localhost","root","","admin");

// Assuming you have established a database connection

// Retrieve the questions and answers from the database
$sql = "SELECT * FROM mcq_questions";
$result = mysqli_query($conn, $sql);

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $totalMarks = 0;
    $userAnswers = $_POST["answer"];

    // Iterate through each question and compare the user's answer with the correct answer
    while ($row = mysqli_fetch_assoc($result)) {
        $questionId = $row["question"];
        $correctAnswer = $row["correct"];
        $userAnswer = $userAnswers[$questionId];

        // Check if the user's answer matches the correct answer
        if ($userAnswer == $correctAnswer) {
            $totalMarks++;
        }
    }

    // Display the result in a table format
    echo "<table class=' w-full text-sm text-left text-gray-500'>";
    echo "<tr><th class='text-xs text-gray-700 uppercase bg-gray-100 px-6 py-3 text-center'>Question</th><th class='text-xs text-gray-700 uppercase bg-gray-100 px-6 py-3 text-center'>Correct Answer</th><th class='text-xs text-gray-700 uppercase bg-gray-100 px-6 py-3 text-center'>Your Answer</th></tr>";

    // Reset the result set pointer to the beginning
    mysqli_data_seek($result, 0);

    // Iterate through each question again to display the details in the table
    while ($row = mysqli_fetch_assoc($result)) {
        $question = $row["question"];
        $correctAnswer = $row["correct"];
        $userAnswer = $userAnswers[$question];

        echo "<tr class='bg-gray-50 border-b'>
                <td class='px-6 py-4 text-center'>$question</td>
                <td class='px-6 py-4 text-center'>$correctAnswer</td>
                <td class='px-6 py-4 text-center'>$userAnswer</td>
            </tr>";
    }

    echo "</table>";

    // Display the total marks obtained
    echo "<h3>Total Marks Obtained: $totalMarks</h3>";
}

// Close the database connection
mysqli_close($conn);
?>
</div>        
        <script src="" async defer></script>
        <a href="/examm/student.php">Go Back</a>
    </body>
</html>