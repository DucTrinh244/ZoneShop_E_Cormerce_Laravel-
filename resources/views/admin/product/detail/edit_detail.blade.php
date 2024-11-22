@extends('admin_layout')
@section('content_admin')
    @include('components.toast')
    <div class="page-content">

        <div class="container-xxl">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <h2 class="text-center text-primary">EDIT PRODUCT DETAIL</h2>
                </div>
                <form action="{{ URL::to('admin/update-detail-action/' . $Product->product_id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    {{ $Product->category->category_name . '/' }} <span class="text-primary">
                                        {{ $Product->product_name }}</span>
                                </h3>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Products Details</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    @foreach ($Product->productattributes as $item)
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="attribute-{{ $item->attribute->attribuste_id }}"
                                                    class="form-label">
                                                    {{ $item->attribute->attribute_name }} :
                                                </label>
                                                <input type="text"
                                                    name="attribute_values[{{ $item->attribute->attribute_id }}]"
                                                    id="attribute-{{ $item->attribute->attribute_id }}" class="form-control"
                                                    value="{{ $item->attribute_value }}" placeholder="Enter value" required>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="p-3 bg-light mb-3 rounded">
                            <div class="row justify-content-end g-2">
                                <div class="col-lg-2">
                                    <button type="submit" class="btn btn-outline-secondary w-100">
                                        Update Product
                                    </button>
                                </div>
                                <div class="col-lg-2">
                                    <a href="#!" type="reset" class="btn btn-primary w-100">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
