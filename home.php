<?php

session_start();


$con = mysqli_connect('localhost','admin','Shivraj@24');
if($con)
{
    echo 'hello sucess';
}
mysqli_select_db($con, 'quizdbase');


?>
<!DOCTYPE html>

<html>
    <head>
        <title></title>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>
    
    <body>
        <div class="container">
            
            <form action="check.php" method="post"> 
            <?php

            for($i = 1; $i<6;$i++)
            {
            $q= 'select * from questions where qid = $i';

            $query = mysqli_query($con, $q);

            while ($rows = mysqli_fetch_array($query)){
                ?>

                    <div class="card">
                        <h4 class="card-header">   <?php echo $rows['question']; ?></h4>

                        <?php

                            $q = "select * from answers where ans_id = $i";

                            $query = mysqli_query($con, $q);

                            while($rows = mysqli_fetch_array($query)){
                                ?>
                                <div class="card-body">
                                    <input type="radio" name="quizcheck[]" value="<?php echo $rows['aid']; ?>">
                                    <?php echo $rows['answer'];?>
                                </div>

                    



         <?php
            }
            }
            }

            ?>
                        <input type="submit" name="submit" value="Submit" class="btn btn-success m-auto">    
            </form>  
            </div>
        </div>
    </body>
    
</html>