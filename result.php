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
// Retrieve the exam results from the database
$sql = "SELECT * FROM questions";
$result = mysqli_query($conn, $sql);

// Retrieve the exam results from the database
$examResultsSql = "SELECT * FROM exam_results";
$examResults = mysqli_query($conn, $examResultsSql);

$totalMarks = 0;

// Display the result table
echo "<table class=' w-full text-sm text-left text-gray-500'>";
echo "<tr><th class='text-xs text-gray-700 uppercase bg-gray-100 px-6 py-3 text-center'>Question</th><th class='text-xs text-gray-700 uppercase bg-gray-100 px-6 py-3 text-center'>Correct Answer</th><th class='text-xs text-gray-700 uppercase bg-gray-100 px-6 py-3 text-center'>Your Answer</th><th class='text-xs text-gray-700 uppercase bg-gray-100 px-6 py-3 text-center'>Marks Obtained</th></tr>";

while ($row = mysqli_fetch_assoc($result)) {
    $question = $row['question'];
    $correctAnswer = $row['answer'];

    // Retrieve the user's answer for the question
    $userAnswer = "";
    $marksObtained = 0;
    mysqli_data_seek($examResults, 0); // Reset the pointer to the beginning

    while ($resultRow = mysqli_fetch_assoc($examResults)) {
        if ($resultRow['question'] == $question) {
            $userAnswer = $resultRow['answer'];

            // Calculate the marks obtained
            if ($userAnswer == $correctAnswer) {
                $marksObtained = 1;
                $totalMarks += 1;
            }

            break;
        }
    }

    echo "<tr class='bg-gray-50 border-b'>";
    echo "<td class='px-6 py-4 text-center'>$question</td>";
    echo "<td class='px-6 py-4 text-center'>$correctAnswer</td>";
    echo "<td class='px-6 py-4 text-center'>$userAnswer</td>";
    echo "<td class='px-6 py-4 text-center'>$marksObtained</td>";
    echo "</tr>";
}

echo "</table>";

// Display the total marks obtained
echo "<h3 class='bg-gray-50 border-b text-gray-700'>Total Marks Obtained: $totalMarks</h3>";

// Close the database connection
mysqli_close($conn);
?>
</div>        
        <script src="" async defer></script>
    </body>
</html>