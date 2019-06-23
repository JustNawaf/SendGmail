<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href = {{ asset("css/app.css") }} rel="stylesheet" />

</head>
<body>
    <div class="container mt-5">
        <h1>Send Email To</h1>
        <form action="send" method="GET">
            <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                    
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Send"/>
            </div>
        </form>
    </div>
    
</body>
</html>