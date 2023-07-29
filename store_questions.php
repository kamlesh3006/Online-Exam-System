<?php
// Assuming you have established a database connection
$conn = new mysqli("localhost","root","","admin");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the submitted questions, options, and correct answers
    $questions = $_POST["question"];
    $options = $_POST;
    unset($options["question"], $options["correct"]);

    // Insert the questions and options into the database
    $sql = "INSERT INTO mcq_questions (question, option1, option2, option3, option4, correct) VALUES ";

    foreach ($questions as $index => $question) {
        $option1 = $options["option" . ($index + 1) . "_1"];
        $option2 = $options["option" . ($index + 1) . "_2"];
        $option3 = $options["option" . ($index + 1) . "_3"];
        $option4 = $options["option" . ($index + 1) . "_4"];
        $correct = $_POST["correct"][$index];

        $sql .= "('$question', '$option1', '$option2', '$option3', '$option4', $correct),";
    }

    // Remove the trailing comma
    $sql = rtrim($sql, ",");

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        echo "Questions stored successfully.";
    } else {
        echo "Error storing questions: " . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>
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
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <a href="/examm/teacher_exam.php">Go Back</a>
        <script src="" async defer></script>
    </body>
</html>
