@extends('layouts.admin')
@section('content')
    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                <h4 class="mb-3">{{ $pageTitle }}</h4>
            </div>
            <div class="col-lg col-xl-3">
                <div class="d-flex">

                    <a href="{{ route('products.create') }}" class="btn btn-primary flex-fill">Create Product</a>
                </div>
            </div>

        </div>
        <hr>
        <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th
                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Image
                            </th>
                            <th
                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                Nama</th>
                            <th
                            <th
                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                Harga</th>
                            <th
                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                Kategori</th>
                            <th
                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                Sub-Kategori</th>

                            <th class="text-secondary opacity-7"></th>
                        </tr>
                    </thead>

                <tbody>
                    @if (!empty($products) && count($products) > 0)
                        @foreach ($products as $product)
                            <tr>
                                <td>
                                    @if ($product->image)
                                        <img class="image" src="{{ asset('storage/images/' . $product->image) }}"
                                            alt="{{ $product->name }}" style="width: 100px; height: 100px;">
                                    @else
                                        <span>No Image</span>
                                    @endif
                                </td>

                                <td>{{ $product->name }}</td>
                                <td>{{ number_format($product->price, 0, ',', '.') }}</td>
                                <td>{{ $product->kategory->name }}</td>
                                <td>{{ $product->subkategory->name }}</td>

                                <td>
                                    <div class="d-flex">
                                        {{-- <a href="#" class="btn btn-outline-dark btn-sm me-2"><i
                                            class="bi-person-lines-fill"></i></a> --}}
                                        <a href="{{ route('products.edit', $product->id) }}"
                                            class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>
                                        <div>
                                            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-outline-dark btn-sm me-2"
                                                    data-name="{{ $product->name . ' ' . $product->price }}"><i
                                                        class="bi-trash"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    @push('scripts')
        <script type="module">
            $(document).ready(function() {
                $('#productTable').DataTable();
            });
        </script>
    @endpush
@endsection
