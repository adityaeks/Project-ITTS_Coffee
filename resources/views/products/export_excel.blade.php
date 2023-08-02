<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Image</th>
            <th>Name</th>
            <th>Harga</th>
            <th>Kategori</th>
            <th>Sub-Kategori</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td><img style="width: 100px" src="{{ asset('images/' . $product->image) }}" alt="tes">
                </td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->kategorys_id }}</td>
                <td>{{ $product->subKategorys_id }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
