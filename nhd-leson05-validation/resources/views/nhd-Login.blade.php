<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nhd-login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">nhd-login Form</h2>
        <form method="POST" action="{{route('nhd-login.submit')}}">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h1>Nguyễn Hữu Duy - login</h1>
                </div>  
                <div class="card-body">
                    <div class="mb-3 form-group">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="nó là cái khi m k nhập vào nó hiện ra cho m xem">   
                        @error('email')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3 form-group">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control"name="pass" id="pass" placeholder="">
                        @error('password')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
</body>
</html>
