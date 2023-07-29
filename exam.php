<!DOCTYPE html>
<html>
<head>
    <title>MCQ Test</title>
    <style>
        .question-container {
            margin-bottom: 10px;
        }
    </style>
    
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav class="fixed top-0 z-50 w-full bg-violet-900">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
          <div class="flex items-center justify-between">
            <div class="flex items-center justify-start">
              
              <a href="#" class="flex ml-2 md:mr-24" >
                <span class="self-center text-xl font-semibold sm:text-3xl whitespace-nowrap text-white" style="font-weight: bolder;">Exam</span>
              </a>
            </div>
          </div>
        </div>
      </nav>
    <h2 style="margin-top: 4%; font-size: xx-large; font-weight: bold; margin-left:40%;">MCQ Test</h2>
    <form action="store_result.php" method="post">
        <?php
        // Assuming you have established a database connection
        
        $conn = new mysqli("localhost","root","","admin");
        // Retrieve the questions and options from the database
        $sql = "SELECT * FROM mcq_questions";
        $result = mysqli_query($conn, $sql);

        // Check if there are any questions available
        if (mysqli_num_rows($result) > 0) {
            // Iterate through each question and display them
            while ($row = mysqli_fetch_assoc($result)) {
                $question = $row["question"];
                $option1 = $row["option1"];
                $option2 = $row["option2"];
                $option3 = $row["option3"];
                $option4 = $row["option4"];

                echo "<div class='question-container' style='margin-left: 40%;'>";
                echo "<p style='font-size: large; font-weight: 500;'>Q. $question</p>";
                echo "<label><input type='radio' name='answer[$question]' value='1'> $option1</label><br>";
                echo "<label><input type='radio' name='answer[$question]' value='2'> $option2</label><br>";
                echo "<label><input type='radio' name='answer[$question]' value='3'> $option3</label><br>";
                echo "<label><input type='radio' name='answer[$question]' value='4'> $option4</label><br>";
                echo "</div>";
            }
        } else {
            echo "No questions available.";
        }

        // Close the database connection
        mysqli_close($conn);
        ?>

        <input style="margin-left: 45%;" type="submit" value="Submit Test">
    </form>
</body>
</html>
