<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thông tin môn học cần sửa</title>
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <form action="{{route('nhdmonhoc.EditSubmit')}}" method="POST">
            @csrf
        <div class="card">
            <div class="card-header">
                <h3>Sửa thông tin chi tiết môn học</h3>
            </div>
            <div class="card-body">
                <div class="mb-3 row">
                    <label for="NHDMAMH" class="col-sm-2 col-form-label">MÃ môn học</label>
                    <div class="col-sm-10">
                      <input type="text" readonly class="form-control" name="NHDMAMH" id="NHDMAMH" value=" {{$nhdmonhoc->NHDMAMH}}">
                    </div>

                <div class="mb-3 row">
                    <label for="NHDTENMH" class="col-sm-2 col-form-label">Tên môn học</label>
                        <div class="col-sm-10">
                          <input type="text"  class="form-control" name="NHDTENMH" id="NHDTENMH" value="{{$nhdmonhoc->NHDTENMH}}">
                        </div>
            </div>
            <div class="mb-3 row">
                <label for="NHDSOTIET" class="col-sm-2 col-form-label">Số tiết</label>
                    <div class="col-sm-10">
                      <input type="text"  class="form-control" name="NHDSOTIET" id="NHDSOTIET" value="{{$nhdmonhoc->NHDSOTIET}}">
                    </div>
        </div>
            <div class="card-footer">
                <button class="btn btn-primary mx-2">SUbmit</button>
                <a href="/khoa" class="btn btn-primary">Back</a>
            </div>
        </div>
        </form>
    </section>
</body>
</html>