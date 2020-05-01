<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial_scale=1.0">
    <title>Let's fetch our data from our JSON file!</title>
</head>
<body>
    <h1>Let's fetch our data from our JSON file!</h1>
    <?php
        $people = array();
        $myFile = './example.json'; //file path is defined here
        $myContent = file_get_contents($myFile); //file contents is loaded here
        $myArray = json_decode($myContent, true); //file contents is broken up into an associative array here
        $people = $myArray['users']; //filtering the values of our data with the key 'users'
        foreach ($people as $key => $value){ 
            foreach ($value as $uid => $name){
                if (is_numeric($name)){
                    continue;
                } else {
                    echo "Name: $name<br>"; 
                }
                
            }
        }


        
    ?>
</body>
</html>
