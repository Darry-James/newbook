@php $pageTitle = 'My Product' @endphp
@extends('front.layouts.frontDesign')

@section('extra_css')   
@endsection

@section('content')

<div class="content-section">
    <div class="container-fluid custom-padding">
        <h5 class="head-title">
            My Products
        </h5>
        <div class="content-head align-items-center">
            <div class="left-section">
                <h6 class="title">Products</h6>
            </div>
            <div class=" ml-2 right-section">

                <a href="{{ route('addProduct') }}" class="btn btn-find btn-full-br ml-4">Add
                    New Product</a>
            </div>
        </div>
        <div class="content-wrap">

            <table class="table no-border table-product">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>ECOVER</th>
                        <th>TITLE/SUMMARY</th>
                        <th>PRICE</th>
                        <th>LAST UPDATED</th>
                        <th>ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($products->count() > 0)
                    @foreach ($products as $product)
                    
                    <tr>
                        <td scope="row">1</td>
                        <td>
                            <img class="ecover-prev" src="{{ $product->ebook->cover_image }}"
                                alt="">
                        </td>
                        <td class="text-justified ecover-prev-text">
                            <div class="title">{{ $product->ebook->title }}</div>
                            @if (isset($product->ebook->summary))
                                {!! (strlen($product->ebook->summary) > 28) ? substr($product->ebook->summary, 0, 28) . '...' : $product->ebook->summary !!}
                            @elseif (isset($product->ebook->description))
                                {!! (strlen($product->ebook->description) > 28) ? substr($product->ebook->description, 0, 28) . '...' : $product->ebook->description !!}
                            @endif
                            
                        </td>
                        <td>{{ isset($product->price) ? $product->price : 'FREE' }}</td>

                        <td class="text-center">
                            {{ $product->updated_at->format('Y-m-d') }}<br>{{ $product->updated_at->format('H:i:s') }}
                        </td>

                        <td>
                            <div class="d-flex flex-column">
                                <nav class="nav table-actions">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-toggle="tooltip"
                                            data-placement="top" title="Download Product Licence">
                                            <img src="/front/icons/try/funnel project svg/download product licence.svg"
                                                alt="">
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-toggle="tooltip"
                                            data-placement="top" title="Download Personal Use Licence">
                                            <img src="/front/icons/try/funnel project svg/download personal use licence.svg"
                                                alt="">
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('library',[$product->ebook->id, 'download_pdf']) }}" data-toggle="tooltip"
                                            data-placement="top" title="Download Product">
                                            <img src="/front/icons/try/funnel project svg/download product.svg"
                                                alt="">
                                        </a>
                                    </li>
                                </nav>
                                <nav class="nav table-actions">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('addProductToFunnel', $product->unique_id) }}" data-toggle="tooltip"
                                            data-placement="top" title="Add Product To Funnel">
                                            <img src="/front/icons/try/funnel project svg/setting.svg"
                                                alt="">
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('editProduct', $product->unique_id) }}" data-toggle="tooltip"
                                            data-placement="top" title="Edit">
                                            <img src="/front/icons/try/funnel project svg/edit.svg"
                                                alt="">
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-toggle="tooltip"
                                            data-placement="top" title="Download Funnel From Product">
                                            <img src="/front/icons/try/funnel project svg/ic_cancel_24px.svg"
                                                alt="">
                                        </a>
                                    </li>
                                </nav>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    
                    @else
                        <tr><td colspan="6" class="text-center">No Products at the moment</td></tr>
                    @endif
                    
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

    @section('extra_div')
    
    @endsection 



@section('extra_js') 

<script>

</script>

@endsection

@endsection