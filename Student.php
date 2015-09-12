<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 * Students can have names, emails and grades
 * The average of the grades will be displayed
 *
 * @author Rosanna
 */
class Student {
    
    // sets up a new student
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    // sets up the email for the student
    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }

    // adds another grade
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    
    // calculates the average of the grades input
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
        $total += $value;
        return $total / count($this->grades);
    }
    
    
    // makes the student object data into nice paragraph
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what)
        $result .= $which . ': '. $what. "\n";
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}
