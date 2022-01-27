<style>
    .grid-container {
        display: grid;
        grid-template-columns: 2fr 1fr 9fr;
        grid-gap: 20px;
    }
</style>
<a href="{{ route('product.create') }}">Add New</a>
<br>

@foreach ($products as $product)
<div class="grid-container">
    <div >{{ $product->name }}</div>
    <div ><a href="{{ route('product.edit', $product) }}">Edit</a></div>
</div>
@endforeach
