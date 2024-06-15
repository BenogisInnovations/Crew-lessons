<?php
// Create an array to hold student details
$students = [
    [
        "firstName" => "Florence",
        "middleName" => "Serwaah",
        "lastName" => "Agyei",
        "gender" => "Female",
        "dateOfBirth" => "2005-01-10",
        "class" => "J.H.S 2",
        "admissionDate" => "2020-08-15"
    ],
    [
        "firstName" => "Joseph",
        "middleName" => "Appiah",
        "lastName" => "Menkah",
        "gender" => "Male",
        "dateOfBirth" => "2006-02-20",
        "class" => " 6",
        "admissionDate" => "2019-09-10"
    ],
    [
        "firstName" => "Emelia",
        "middleName" => "Akua",
        "lastName" => "Osei",
        "gender" => "Female",
        "dateOfBirth" => "2007-03-30",
        "class" => "6",
        "admissionDate" => "2018-07-12"
    ],
    [
        "firstName" => "Michael",
        "middleName" => "Ayenim",
        "lastName" => "Kuffour",
        "gender" => "Male",
        "dateOfBirth" => "2005-04-15",
        "class" => "J.H.S 3",
        "admissionDate" => "2020-01-05"
    ],
    [
        "firstName" => "Sarah",
        "middleName" => "Boakye",
        "lastName" => "Acheampong",
        "gender" => "Female",
        "dateOfBirth" => "2008-05-25",
        "class" => "J.H.S 1",
        "admissionDate" => "2017-05-20"
    ],
    [
        "firstName" => "Florence",
        "middleName" => "Serwaah",
        "lastName" => "Agyei",
        "gender" => "Female",
        "dateOfBirth" => "2005-01-10",
        "class" => "J.H.S 2",
        "admissionDate" => "2020-08-15"
    ],
    [
        "firstName" => "Joseph",
        "middleName" => "Appiah",
        "lastName" => "Menkah",
        "gender" => "Male",
        "dateOfBirth" => "2006-02-20",
        "class" => " 6",
        "admissionDate" => "2019-09-10"
    ],
    [
        "firstName" => "Emelia",
        "middleName" => "Akua",
        "lastName" => "Osei",
        "gender" => "Female",
        "dateOfBirth" => "2007-03-30",
        "class" => "6",
        "admissionDate" => "2018-07-12"
    ],
    [
        "firstName" => "Michael",
        "middleName" => "Ayenim",
        "lastName" => "Kuffour",
        "gender" => "Male",
        "dateOfBirth" => "2005-04-15",
        "class" => "J.H.S 3",
        "admissionDate" => "2020-01-05"
    ],
    [
        "firstName" => "Sarah",
        "middleName" => "Boakye",
        "lastName" => "Acheampong",
        "gender" => "Female",
        "dateOfBirth" => "2008-05-25",
        "class" => "J.H.S 1",
        "admissionDate" => "2017-05-20"
    ],
    [
        "firstName" => "Florence",
        "middleName" => "Serwaah",
        "lastName" => "Agyei",
        "gender" => "Female",
        "dateOfBirth" => "2005-01-10",
        "class" => "J.H.S 2",
        "admissionDate" => "2020-08-15"
    ],
    [
        "firstName" => "Joseph",
        "middleName" => "Appiah",
        "lastName" => "Menkah",
        "gender" => "Male",
        "dateOfBirth" => "2006-02-20",
        "class" => " 6",
        "admissionDate" => "2019-09-10"
    ],
    [
        "firstName" => "Emelia",
        "middleName" => "Akua",
        "lastName" => "Osei",
        "gender" => "Female",
        "dateOfBirth" => "2007-03-30",
        "class" => "6",
        "admissionDate" => "2018-07-12"
    ],
    [
        "firstName" => "Michael",
        "middleName" => "Ayenim",
        "lastName" => "Kuffour",
        "gender" => "Male",
        "dateOfBirth" => "2005-04-15",
        "class" => "J.H.S 3",
        "admissionDate" => "2020-01-05"
    ],
    [
        "firstName" => "Sarah",
        "middleName" => "Boakye",
        "lastName" => "Acheampong",
        "gender" => "Female",
        "dateOfBirth" => "2008-05-25",
        "class" => "J.H.S 1",
        "admissionDate" => "2017-05-20"
    ],
];

// Function to display student details
function displayStudentDetails($student) {
    // Concatenate full name
    $fullName = $student['firstName'] . ' ' . $student['middleName'] . ' ' . $student['lastName'];
    // Display the student's information
    echo "Hello, my name is " . $fullName . ". I am a " . $student['gender'] . ".<br>";
    echo "I was born on the " . $student['dateOfBirth'] . ".<br>";
    echo "I am in class " . $student['class'] . ".<br>";
    echo "I was admitted on the " . $student['admissionDate'] . ".<br>";
    echo "THANK YOU!<br><br>";
}

// Loop through each student and display their details
foreach ($students as $student) {
    displayStudentDetails($student);
}
?>
