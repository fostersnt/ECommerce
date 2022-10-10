<style>
    #update_btn{
        margin-bottom: 50px;
    }
    .form__container{
        margin-top: 50px;
    }

    a{
        text-decoration: none;
    }

    #update_btn{
        
    }
</style>

<x-app-layout>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Update Product</title>
        <link rel="stylesheet" href="{{ URL::asset('bootstrap_css/bootstrap.min.css') }}" />
        <script src="{{ URL::asset('bootstrap_css/bootstrap.min.css') }}"></script>
        <link rel="stylesheet" href="{{ URL::asset('css/Admin/Product.css') }}" />
    </head>
     <body>
           
    <form action="{{url('updateproduct', $data->id)}}" method="post" enctype="multipart/form-data">
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

           

            <div class="mb-4 mt-5 text__input">
                <label for="">Product title</label>
                <input type="text" value="{{$data->title}}" name="title" required>
            </div>
            
            <div class="mb-4 text__input">
                <label for="">Price</label>
                <input type="number" value="{{$data->price}}" name="price" required>
            </div>
            
            <div class="mb-4 text__input">
                <label for="">Description</label>
                <input type="text" value="{{$data->description}}" name="description" required>
            </div>
            
            <div class="mb-4 text__input">
                <label for="">Quantity</label>
                <input type="number" value="{{$data->quantity}}" name="quantity" required>
            </div>
            
            <div class="mb-4 old__image" id="file__container">
                Old Image
                <img src="/productimage/{{$data->image}}" width="200" height="200" alt="">
            </div>
            
            <div class="mb-4" id="file__container">
                <label for="">Change Image</label>
                <input id="file" type="file" name="file">
            </div>

            <div>
                <input type="submit" value="Update Product" id="update_btn" class="btn btn-primary">
            </div>
        </div>
    </form>
   
     </body>

    </x-app-layout>