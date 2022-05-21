<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2>Add Product</h2>
                </div>
                <div class="modal-body">
                    <form action="{{route('product.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            Code :
                            <input type="text" name="code" class="form-control">
                        </div>
                        <div class="form-group">
                            Name :
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            Netto :
                            <input type="text" name="netto" class="form-control">
                        </div>
                        <div class="form-group">
                            Expired :
                            <input type="date" name="expired" class="form-control">
                        </div>
                        <div class="form-group">
                            Price :
                            <input type="text" name="price" class="form-control">
                        </div>
                        <div class="form-group">
                            Stock :
                            <input type="text" name="stock" class="form-control">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">PROSES</button>
                            <button type="" class="btn btn-danger">
                                <a href="{{route('product.index')}}">CANCEL & BACK</a>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
