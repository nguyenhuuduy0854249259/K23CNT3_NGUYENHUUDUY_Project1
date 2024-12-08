<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reservation Request</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <section class="container my-3">
        <form action="{{route('nhd-assignment3.store')}}" method="post">
            @csrf
            <div class="card">
                    <div class="card-header">
                        <h1>Reservation Request</h1>
                    </div>
                    <div class="card-body">
                        <div class="card-body-first">
                            <fieldset class="group-box">
                                <legend>Thông tin người dùng</legend>
                            
                                <div class="form-group">
                                    <label for="arrival_date">Arrival date:</label>
                                    <input type="date" id="arrival_date" name="arrival_date" class="form-control" placeholder="">
                                    @error('arrival_date')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            
                                <div class="form-group">
                                    <label for="nights">Nights:</label>
                                    <input type="text" id="nights" name="nights" class="form-control" placeholder="Nhập số đêm...">
                                    @error('nights')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="adults">Adulits:</label>
                                    <input type="number" id="adults" name="adults" class="form-control" placeholder="">
                                    @error('adults')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="children">Children:</label>
                                    <input type="number" id="children" name="children" class="form-control" placeholder="">
                                    @error('children')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
</fieldset>
                        </div>
                        <div class="card-body-second">
                            <fieldset>
                                <legend>tùy chọn</legend>
                                <div class="form-group">
                                    <label for="room_type">Room Type:</label>
                                    <label >
                                        <input type="radio" name="room_type" value="standard" {{old('room_type') == 'standard'}}>    Standard
                                    </label>
                                    
                                    <label >
                                        <input type="radio" name="room_type"  value="bussiness" {{old('room_type') == 'bussiness'}}>Bussiness
                                    </label>

                                    <label >
                                        <input type="radio" name="room_type"  value="suite" {{old('room_type') == 'suite'}}>  Suite
                                    </label>
                                    @error('room_type')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="bed_type">Bed Type:</label>
                                    <label >
                                        <input type="radio" name="bed_type"  value="king" {{old('bed_type') == 'king'}}>  King
                                    </label>
                                    
                                    <label >
                                        <input type="radio" name="bed_type" value="double double" {{old('bed_type') == 'double double'}}>     Double Double
                                    </label>
                                    @error('bed_type')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                
                                <div class="form-group">
                                    <label for="smoking">
                                        <!-- Hidden field to send false when checkbox is not checked -->
                                        <input type="hidden" name="smoking" value="0">
                                        <input type="checkbox" name="smoking" id="smoking" value="1" {{ old('smoking') ? 'checked' : '' }}> Smoking
                                    </label>
                               
                                   @error('smoking')
                                   <span class="text-danger">{{$message}}</span>
                                   @enderror
                                </div>
                            </fieldset>
                        </div>
<div class="card-body-third">
                            <fieldset>
                                <legend>Thông tin Đăng Ký</legend>

                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" name="name" id="name" class="form-control"  placeholder="Please enter your name" >
                                    @error('name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" name="email" id="email" class="form-control"  placeholder="Please enter your Email" >
                                    @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="phone">Phone:</label>
                                    <input type="tel" name="phone" id="phone" class="form-control"  placeholder="Please enter your Phone" >
                                </div>
                            </fieldset>
                        </div>

                       
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary mt-3">Submit Reservation</button>
                        <button type="submit" class="btn btn-primary mt-3">Clear</button>
                    </div>
                        

            </div>
        </form>
    </section>
</body>
</html>