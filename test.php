<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="http://localhost:8080/BlueBox/SFS2XFileUpload" method="post" enctype="multipart/form-data">
        <strong>Select one or more files to upload:</strong>
        <input type="file" multiple name="fileName">
        <input type="hidden" name="sessHashId" value="01234567890abcdef" id="sessHashId">
        <input type="submit" value="Upload Files">
    </form>

</body>
</html>