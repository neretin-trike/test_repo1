<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?
    $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_URL, "https://api.github.com/user/repos");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"name\": \"test_repo2\", \"message\": \"Initial Commit\", \"committer\": {\"name\": \"neretin-trike\", \"email\": \"hawktrike@gmail.com\"}, \"content\": \"bXkgbmV3IGZpbGUgY29udGVudHM=\", \"note\":\"Test Commit\"}");
    curl_setopt($ch, CURLOPT_POST, 1);
    
    $headers = array();
    $headers[] = "Authorization: token 88fc079801737f85dda005b1e868f4831bed1cad";
    $headers[] = "Content-Type: application/x-www-form-urlencoded";
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    
    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close ($ch);
?>

<h1>ПРОВЕРОЧКА</h1>
    
</body>
</html>
