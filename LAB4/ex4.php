<!DOCTYPE html>
<html>
<body>
<form action = "ex4.php" method = "post">
    <label for = "id">ID:</label><br>
    <input type = "text" id = "id" name = "id"><br>
    <label for = "name">Name:</label><br>
    <input type = "text" id = "name" name = "name"><br>
    <label for = "avgScore">Average Score:</label><br>
    <input type = "text" id = "avgScore" name = "avgScore"><br>
    <input type = "submit" value = "Submit">
</form>
<?php

    class Student
    {
        public $id;
        public $name;
        public $avgScore;

        public function __construct($id, $name, $avgScore)
        {
            $this->id = $id;
            $this->name = $name;
            $this->avgScore = $avgScore;
        }
    }

    class StudentList
    {
        private $students = array();

        public function addStudent($student)
        {
            array_push($this->students, $student);
        }

        public function getStudents()
        {
            return $this->students;
        }
    }

    session_start();

    if (!isset($_SESSION['studentList'])) {
        $_SESSION['studentList'] = new StudentList();
    }

    $studentList = $_SESSION['studentList'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $avgScore = $_POST['avgScore'];

        $student = new Student($id, $name, $avgScore);
        $studentList->addStudent($student);

        $_SESSION['studentList'] = $studentList;
    }

    $students = $studentList->getStudents();

    echo "<table>";
    echo "<tr><th>ID</th><th>Name</th><th>Average Score</th></tr>";
    foreach ($students as $student) {
        echo "<tr><td>" . $student->id . "</td><td>" . $student->name . "</td><td>" . $student->avgScore . "</td></tr>";
    }
    echo "</table>";

?>

</body>
</html>