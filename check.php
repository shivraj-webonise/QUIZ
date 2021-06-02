<?php

session_start();

$con = mysqli_connect('localhost','admin','Shivraj@24');

mysqli_select_db($con,'quizdbase');

$result= 0;

if(isset($_POST['submit']))
{
    if(!empty($_POST['quizcheck']))
    {
        $count = count($_POST['quizcheck']);
        echo 'out of 5 you have selected ' .$count. "options";
        
        
        $i= 0;
        $selected = $_POST['quizcheck'];
        print_r($selected);
        
        $q = "select * from questions";
        
        $query = mysqli_query($con,$q);
        
        while($rows = mysqli_fetch_array($query))
        {
            print_r($rows['ans_id']);
            
            $checked = $rows['ans_id'] == $selected[$i];
            if($checked)
            {
                $result++;
            }
            $i++;
        }
        
        echo '<br> ur total score is '.$result;
    }
}


$name = $_POST['user'];
$pass = $_POST['password'];  
$finalresult = "insert into user(username,totalques,answerscorrect) values ('$name',5,$result) ";
$queryresult = mysqli_query($con,$finalresult);

if($queryresult)
{
    echo 'success \n';
}
else
{
    echo 'not \n';
}


?>
