<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include('student.php');
            
            // create an array of students
            $students = array();

            // add a first student
            $first = new Student();
            $first->surname = "Doe";
            $first->first_name = "John";
            $first->add_email('home','john@doe.com');
            $first->add_email('work','jdoe@mcdonalds.com');
            $first->add_grade(65);
            $first->add_grade(75);
            $first->add_grade(55);
            $students['j123'] = $first;
            
            // add a second student
            $second = new Student();
            $second->surname = "Einstein";
            $second->first_name = "Albert";
            $second->add_email('home','albert@braniacs.com');
            $second->add_email('work1','a_einstein@bcit.ca');
            $second->add_email('work2','albert@physics.mit.edu');
            $second->add_grade(95);
            $second->add_grade(80);
            $second->add_grade(50);
            $students['a456'] = $second;
            
            // add a third student
            $third = new Student();
            $third->surname = "Wubs";
            $third->first_name = "Rosanna";
            $third->add_email('home','rwubs@brains.com');
            $third->add_grade(100);
            $third->add_grade(100);
            $third->add_grade(100);
            $students['a000'] = $third;

            // sort the students in the array via id
            ksort($students);
            
            // display students
            foreach($students as $student)
            echo $student->toString();
        ?>
    </body>
</html>
