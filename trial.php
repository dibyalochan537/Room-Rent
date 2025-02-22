<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button onclick="getDivValue()">CLick</button>
    <script>
        function getDivValue(){
            var divValue=localStorage.getItem('divValue');
            alert(divValue);
        }
    </script>
</body>
</html>