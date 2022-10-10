<x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ URL::asset('bootstrap_css/bootstrap.min.css') }}" />
    <script src="{{ URL::asset('bootstrap_css/bootstrap.min.css') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/Admin/Product.css') }}" />
</head> 

<form action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form__container">
        
        <!--Success message is placed here-->
        @if(session()->has('message'))
            <div class="alert alert-success message__container">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{session()->get('message')}}
            </div>
        @endif
        <!--Success message ends here-->

        <div class="text__input">
            <h1>Add Product</h1>
        </div>
        <div class="mb-4 mt-5 text__input">
            <label for="">Product title</label>
            <input type="text" name="title" placeholder="Give a product title" required>
        </div>
        
        <div class="mb-4 text__input">
            <label for="">Price</label>
            <input type="number" name="price" placeholder="Give a price title" required>
        </div>
        
        <div class="mb-4 text__input">
            <label for="">Description</label>
            <input type="text" name="description" placeholder="Give a description" required>
        </div>
        
        <div class="mb-4 text__input">
            <label for="">Quantity</label>
            <input type="number" name="quantity" placeholder="Product quantity" required>
        </div>
        
        <div class="mb-4" id="file__container">
            <input id="file" type="file" name="file" required>
        </div>
        
        <div>
            <input type="submit" id="submit_btn" class="btn btn-primary">
        </div>
    </div>
</form>


</x-app-layout>