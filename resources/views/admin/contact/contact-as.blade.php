@extends('admin.layouts.app')

@section('content')
    <div>

        <h2>Orders List</h2>

        {{-- @foreach ($products as $product)
        <div>
            <a href="{{ route('products.show', $product) }}">{{ $product->name }}</a>
        </div>
    @endforeach --}}

        <a href="{{ route('products.create') }}">Orders</a>

    </div>


    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">All Contact</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Contact</a></li>
                            <li class="breadcrumb-item active">All Contact</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <div class="content">
            <div class="container-fluid">
                <!-- /.row start -->
                <div class="row">
                    {{-- Start - Content comes here --}}
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">All Contact <small>Page</small></h3>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Message</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($galleries as $order)
                                            <tr>
                                                <td>{{ $order->id }}</td>
                                                <td>{{ $order->name }}</td>
                                                <td>{{ $order->email }}</td>
                                                <td>{{ $order->phone }}</td>
                                                <td>{{ $order->message }}</td>

                                                <td>
                                                   
                                                    <form method="POST" action="{{ route('allcontact.destroy', $order->id) }}"
                                                        onsubmit="return confirm('Are you sure you want to delete this order?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm mt-2">
                                                            <i class="fas fa-trash fa-sm"></i>
                                                        </button>
                                                    </form>
                                                </td>


                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <!-- /.card -->
                    </div>





                    {{-- End - Content comes here --}}
                </div>
                <!-- /.row end -->
            </div>
            <!-- /.container-fluid -->
        </div>

    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#sizes').select2({
                tags: true,
                tokenSeparators: [',', ' '],
                placeholder: 'Add sizes and prices',
            });
        });
    </script>
@endpush
