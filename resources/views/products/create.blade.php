<form action="{{route('product.store')}}" method="post">
    @csrf
    <input type="text" name="name" ><br>
    <input type="text" name="price" ><br>
    <input type="submit" value="maak product">
</form>
