<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>nhd login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <form action="{{route('nhdaccount.nhdloginsubmit')}}" method="post">
            @csrf 
            <div class="card">
                <div class="card-header">
                    <h1>nhd-Login</h1>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <label for="nhdEmail" class="form-label">Email </label>
                        <input type="email" class="form-control" 
                            id="nhdEmail" name="nhdEmail"
                            placeholder="nhdEmail@example.com"/>
                        @error('nhdEmail')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nhdPass" class="form-label">Password </label>
                        <input type="password" class="form-control" 
                            id="nhdPass" name="nhdPass"
                            placeholder="xxxx"/>
                        @error('nhdPass')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                          
                    </div>
                </div>

                <div class="card-footer">
                    <button class="btn btn-primary">Submit</button>

                    @if (Session::has('nhd-error'))
                        <div class="alert alert-danger">                            
                            {{ Session::get("nhd-error") }}                            
                        </div>
                    @endif
                </div>
            </div>
        </form>
    </section>
</body>
</html>