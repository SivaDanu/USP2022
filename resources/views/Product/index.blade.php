<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 align="center">Data Product</h1>
            <a href="{{route('product.create')}}">
                <button class="btn btn-primary">Add New Product</button> <br><br>
            </a>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>No : </th>
                    <th>Code : </th>
                    <th>Name : </th>
                    <th>Netto : </th>
                    <th>Expired : </th>
                    <th>Price : </th>
                    <th>Stock : </th>
                    <th>Action : </th>
                </tr>
                @php
                    $nomor= 1;
                @endphp
                @foreach ($data_product as $product)
                <tr>
                    <td>{{$nomor++}}</td>
                    <td>{{$product->code}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->netto}}</td>
                    <td>{{$product->expired}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->stock}}</td>
                    <td>
                        <a href="{{route('product.edit', $product->id)}}">
                            <button class="btn btn-warning">EDIT</button>
                        </a>
                        <form action="{{route('product.destroy', $product->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">DELETE</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
    </div>
</body>
</html>
