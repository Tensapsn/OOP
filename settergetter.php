<?php
class Person {
    public $name;
    private $age;
    protected $job;

    public function setName($name) {
        $this->name = $name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function setJob($job) {
        $this->job = $job;
    }

    public function getInfo() {
        return "Name: " . $this->name . ", Age: " . $this->age . ", Job: " . $this->job;
    }
}

// Create a new instance of Person
$person1 = new Person();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Set the person's data based on the form inputs
    $person1->setName($_POST["name"]);
    $person1->setAge($_POST["age"]);
    $person1->setJob($_POST["job"]);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Set Person Data</title>
</head>
<body>
    <h1>Set Person Data</h1>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required><br>

        <label for="job">Job:</label>
        <input type="text" id="job" name="job" required><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    // Check if the person's data is set
    if (!empty($person1->name)) {
        echo "<h2>Person Information:</h2>";
        echo $person1->getInfo();
    }
    ?>
</body>
</html>
