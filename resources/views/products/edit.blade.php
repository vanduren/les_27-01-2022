<form action="{{route('product.update',$product)}}" method="post">
    @csrf
    @method('put')
    <input type="text" name="name" value="{{$product->name}}"><br>
    <input type="text" name="price" value="{{$product->price}}"><br>
    <input type="submit" value="wijzig">
</form>
