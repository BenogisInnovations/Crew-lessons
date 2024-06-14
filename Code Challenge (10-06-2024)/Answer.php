<?php
// The data of the 15 students
$students = [
    [
        "firstName" => "Daniel",
        "middleName" => "Appiah",
        "lastName" => "Agyekum",
        "gender" => "Male",
        "dateOfBirth" => "2005-01-10",
        "class" => "2A4",
        "admissionDate" => "2020-08-15"
    ],
    [
        "firstName" => "Benjamin",
        "middleName" => "Otchere",
        "lastName" => "Boakye",
        "gender" => "Male",
        "dateOfBirth" => "2006-02-20",
        "class" => "3S1",
        "admissionDate" => "2019-09-10"
    ],
    [
        "firstName" => "Esther",
        "middleName" => "Ama",
        "lastName" => "Nsiah",
        "gender" => "Female",
        "dateOfBirth" => "2007-03-30",
        "class" => "JHS 3",
        "admissionDate" => "2018-07-12"
    ],
    [
        "firstName" => "Austin",
        "middleName" => "Yaw",
        "lastName" => "Sarfo",
        "gender" => "Male",
        "dateOfBirth" => "2005-04-15",
        "class" => "1A1",
        "admissionDate" => "2020-01-05"
    ],
    [
        "firstName" => "Doris",
        "middleName" => "Yaa",
        "lastName" => "Konadu",
        "gender" => "Female",
        "dateOfBirth" => "2008-05-25",
        "class" => "B.S.4",
        "admissionDate" => "2017-05-20"
    ],
    [
        "firstName" => "Gideon",
        "middleName" => "Yaw",
        "lastName" => "Yeboah",
        "gender" => "Male",
        "dateOfBirth" => "2006-06-10",
        "class" => "3B3",
        "admissionDate" => "2019-03-18"
    ],
    [
        "firstName" => "Esther",
        "middleName" => "Ama",
        "lastName" => "Nsiah",
        "gender" => "Female",
        "dateOfBirth" => "2007-03-30",
        "class" => "JHS 3",
        "admissionDate" => "2018-07-12"
    ],
    [
        "firstName" => "Daniel",
        "middleName" => "Appiah",
        "lastName" => "Agyekum",
        "gender" => "Male",
        "dateOfBirth" => "2005-01-10",
        "class" => "2A4",
        "admissionDate" => "2020-08-15"
    ],
    [
        "firstName" => "Austin",
        "middleName" => "Yaw",
        "lastName" => "Sarfo",
        "gender" => "Male",
        "dateOfBirth" => "2005-04-15",
        "class" => "1A1",
        "admissionDate" => "2020-01-05"
    ],
    [
        "firstName" => "Benjamin",
        "middleName" => "Otchere",
        "lastName" => "Boakye",
        "gender" => "Male",
        "dateOfBirth" => "2006-02-20",
        "class" => "3S1",
        "admissionDate" => "2019-09-10"
    ],
    [
        "firstName" => "Angel",
        "middleName" => "Addei",
        "lastName" => "Ama",
        "gender" => "Female",
        "dateOfBirth" => "2007-11-25",
        "class" => "2E1",
        "admissionDate" => "2018-09-15"
    ],
    [
        "firstName" => "Matthew",
        "middleName" => "Opoku",
        "lastName" => "Prempeh",
        "gender" => "Male",
        "dateOfBirth" => "2005-12-30",
        "class" => "Level 300",
        "admissionDate" => "2020-05-01"
    ],
    [
        "firstName" => "Nana",
        "middleName" => "Addo",
        "lastName" => "Danquah",
        "gender" => "Male",
        "dateOfBirth" => "2008-01-05",
        "class" => "Level 100",
        "admissionDate" => "2017-03-12"
    ],
    [
        "firstName" => "Doris",
        "middleName" => "Yaa",
        "lastName" => "Konadu",
        "gender" => "Female",
        "dateOfBirth" => "2008-05-25",
        "class" => "B.S.4",
        "admissionDate" => "2017-05-20"
    ],
    [
        "firstName" => "Erica",
        "middleName" => "Agyemang",
        "lastName" => "Serwaah",
        "gender" => "Female",
        "dateOfBirth" => "2007-03-20",
        "class" => "8th Grade",
        "admissionDate" => "2018-04-25"
    ]
];

// This is the loop, it helps us to display every information for each student in the variable student.
foreach ($students as $student) {
    // Concatenate full name. which is the same as adding the strings which is the names.
    $fullName = $student['firstName'] . ' ' . $student['middleName'] . ' ' . $student['lastName'];
    // I'm using echo to print the students info
    echo "Hello, my name is " . $fullName . ". I am a " . $student['gender'] . ".<br>";
    echo "I was born on the " . $student['dateOfBirth'] . ".<br>";
    echo "I am in class " . $student['class'] . ".<br>";
    echo "I was admitted on the " . $student['admissionDate'] . ".<br>";
    echo "THANK YOU!<br><br>";
}
?>
