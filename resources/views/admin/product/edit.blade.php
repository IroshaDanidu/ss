<x-admin-layout>
    <form action="{{ url('update/' . $product->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Product Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $product->name) }}" id="name" placeholder="Enter Product Name" required>
        </div>
        <div class="form-group">
            <label for="price">Product Price</label>
            <input type="number" step="0.01" name="price" class="form-control" value="{{ old('price', $product->price) }}" id="price" placeholder="Enter Product Price" required>
        </div>
        <div class="form-group">
            <label for="description">Product Description</label>
            <textarea name="description" class="form-control" id="description" placeholder="Enter Product Description">{{ old('description', $product->description) }}</textarea>
        </div>
        <div class="form-group">
            <label for="qty">Product Quantity</label>
            <input type="number" name="qty" class="form-control" value="{{ old('qty', $product->qty) }}" id="qty" placeholder="Enter Product Quantity" required>
        </div>
        <div class="form-group">
            <label for="image">Product Image</label>
            <input type="file" name="image" class="form-control" id="image">
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="100">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</x-admin-layout>
