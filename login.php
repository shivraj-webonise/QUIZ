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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class=" container">
            <div class="row">
                <div class="col-lg-6">
                    <h2> Login form</h2>
                    <form action="check.php" method="POST">
                        <div class="form-group">
                            <label> Username</label>
                            <input type="text" name="user" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label> Password</label>
                            <input type="Password" name="password" class="form-control">
                        </div>
                        <button type="Submit" class="btn btn-primary"> Login </button>
                    </form>
                </div>
                
            </div>
        </div>
    </body>
</html>
