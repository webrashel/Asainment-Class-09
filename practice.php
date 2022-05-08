<?php
// $name =30 ;
// if (isset($name)) {
//   echo "value already set" ;
// } else {
//     echo "value not set" ;

// }

// empty
// $names="";
// if (empty($names)) {
//     echo "value is empty" ;
// } else {
//    echo "value is alredy set ";
// }
// $names="rashel";
// if (empty($names)) {
//     echo "value is empty" ;
// } else {
//    echo "value is alredy set ";
// }
// $name ="rashel" ;
// echo "rashel Rana1" ;
// echo "rashel Rana2" ;
// die($name);
// echo "rashel Rana3" ;
// echo "rashel Rana4" ;
// echo "rashel Rana5" ;


/*array variable*/


// $name []= "rashel";
// $name []= "rana";
// $name = "foysal";
// echo '<pre>';
// print_r($name);

// $name []= "rashel";
// $name []= "rana";
// $name []= "foysal";
// echo '<pre>';
// print_r($name);

// function insert(){
//     $data =  [] ;
//     $data['user_info']='kjumfopdlokm';
//     if ('user_info') {
//         $data ['message']='Successful' ;
//         $data ['status']= 1 ;
//     } else {
//         $data ['message']='Faild' ;
//         $data ['status']= 0 ;
//     }
//     return  $data ;



// }
// print_r(insert())  ;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .all-content{
            position: absolute;
            top: 50px;
            left: 450px;
        }


    .button{
        margin-top: 20px;
    }
    .containers{
        width: 500px;
        height: auto;
    }


    </style>


</head>


<body>
    <div class="all-content">
    <div class="containers">
        <div class="wrap shadow from-div">
            <div class="card">
                <div class="card-body">
                    <form method="get" action="info.php">
                        
                    <div class="mb-6">
                            <label for="exampleInputname" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="exampleInputname" aria-describedby="emailHelp">
                        </div>
                    <div class="mb-6">
                            <label for="exampleInputphone" class="form-label">Your Phone</label>
                            <input type="tel" class="form-control" id="exampleInputphone" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-6">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            
                        </div>
                       
                        <div class="mb-6">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="button">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </div>



                       
                    </form>
                </div>

            </div>
        </div>



    </div>

    </div>

</body>

</html>