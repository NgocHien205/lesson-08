<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm mới thông tin khoa</title>
<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <form action="{{route('khoa.insertSubmit')}}" method="post">
            @csrf   
            <div class="card">
                <div class="card-header">
                    <h3>Thêm thông tin khoa </h3>
                </div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="MaKH" class="col-sm-2 col-form-label">Mã Khoa</label>
                        <div class="col-sm-10">
                        <input type="text"  class="form-control" 
                        id="MaKH" name="MaKH"  value="{{old('MaKH')}}">
                        @error('MaKH')
                            </div class="text-danger"></div>
                        @enderror     
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="TenKH" class="col-sm-2 col-form-label">Tên Khoa</label>
                        <div class="col-sm-10">
                        <input type="text"  class="form-control" 
                        id="TenKH" name="TenKH" value="{{old('TenKH')}}">
                        @error('TenKH')
                            </div class="text-danger"></div>
                        @enderror  
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary mx-2">Insert</button>
                    <a href="/khoas" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </form>
        </section>
</body>
</html>          