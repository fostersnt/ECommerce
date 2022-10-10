<style>
    .main{
        display: flex;
        justify-items: center;
        justify-content: flex-start
    }

    .add-new-product{
        align-self: flex-end
    }

    a{
        text-decoration: none;
        font-size: 20px;
    }

    .content{
        background-color: white;
        margin: 10px;
        flex-grow: 1;
        padding: 10px;
    }

    .add-new-product{
        align-self: flex-end
    }

    .sidebar{
        width: 250px;
        height: 90vh;
        background-color: aliceblue;
        padding: 10px;
        margin-right: 10px;
    }
    li{
        list-style-type: none;
        background-color: white;
        margin-bottom: 20px;
        padding: 20px;
    }

    td{
        height: 100px; 
      }

    img{
        width: 100px;
        height: 100px;
    }
    
    .pagination{
        align-self: center;
    }
</style>

<div class="main">
    <div class="sidebar">
        <div>
            <a href="{{url('product')}}"><li>Add Product</li></a>
            <a href="{{url('product')}}"><li>Update Product</li></a>
            <a href="{{url('product')}}"><li>Delete Product</li></a>
        </div>
    </div>
    
    <div class="content">

        <!--Success message is placed here-->
        @if(session()->has('message'))
            <div class="alert alert-success message__container">
                <button type="button" class="close" data-bs-dismiss="alert">x</button>
                {{session()->get('message')}}
            </div>
        @endif
        <!--Success message ends here-->

    <div class="add-new-product mb-3"><a href="{{url('product')}}" class="btn btn-primary">Add New Product</a></div>
    <table class="table table-striped">
        <th>Title</th>
        <th>Image</th>
        <th>Description</th>
        <th>Quantity Available</th>
        <th>Price per Item</th>
        <th colspan="2" class="">Product Actions</th>
        @foreach ($data as $product)
            <tr>
                <td>{{$product->title}}</td>
                <td><img src="/productimage/{{$product->image}}" width="100" height="100" alt=""></td>
                <td>{{$product->description}}</td>
                <td>{{$product->quantity}}</td>
                <td>{{$product->price}}</td>
                <td><a class="btn btn-primary" href="{{url('updateview', $product->id)}}">Edit</a></td>
                <td><a class="btn btn-danger" href="{{url('deleteproduct', $product->id)}}">Delete</a></td>
            </tr>
        @endforeach
    </table>
    <!--Pagination begins here-->
    <div class="pagination">{{$data->links()}}</div>
    </div>
</div>