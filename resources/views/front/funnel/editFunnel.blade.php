@php $pageTitle = 'Edit Funnel' @endphp
@extends('front.layouts.frontDesign')

@section('extra_css') 
    <style>
        .stats{
            cursor: help;
        }
    </style>
@endsection

@section('content')

<div class="content-section">
    <div class="container-fluid custom-padding">
        <h5 class="head-title mb-5">
            Funnel Products
        </h5>

        <div class="content-wrap bg-light px-3 py-3 add-shadow no-border">
            <div class="funnel-prod-head">
                <div class="content-desc">
                    <div class="title">{{ $funnel->title }}</div>
                    <p>
                        The Below Table Is The List Of
                        Product In The Funnel
                    </p>
                </div>
                <div class="mr-3">
                    <button class="btn btn-find btn-full-br px-2">Add Database Product</button>
                </div>
                <div>
                    <a href="{{ route('product') }}" class="btn btn-find btn-full-br px-2">Add my Product</a>
                </div>
                <div class="ml-auto">
                    <button class="btn btn-find btn-full-br px-2">Back to Funnel</button>
                </div>
            </div>
            <table class="table table-funnel-prod no-border mb-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>ECOVER</th>
                        <th>TITLE/SUMMARY</th>
                        <th>SUGGESTED PRICE</th>
                        <th>STAT</th>
                        <th>TYPE</th>
                        <th>POP-UP</th>
                        <th>ORDER</th>
                        <th>ACTIONS</th>
                        <th>DELETE</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($funnel->products->count() > 0)
                    @php
                        $counter = 1;
                    @endphp
                        @foreach ($funnel->products as $product)
                        <tr>
                            <td scope="row">{{ $counter }}</td>
                            <td><img class="ecover-prev" src="{{ $product->ebook->cover_image }}"
                                alt=""></td>

                            <td class="text-justified ecover-prev-text">
                                <div class="title">{{ $product->ebook->title }}</div>
                                @if (isset($product->ebook->summary))
                                    {!! (strlen($product->ebook->summary) > 28) ? substr($product->ebook->summary, 0, 28) . '...' : $product->ebook->summary !!}
                                @elseif (isset($product->ebook->description))
                                    {!! (strlen($product->ebook->description) > 28) ? substr($product->ebook->description, 0, 28) . '...' : $product->ebook->description !!}
                                @endif
                            </td>

                            <td>{{ isset($product->price) ? $product->price : 'FREE' }}</td>

                            <td>
                                <span class="stats" data-toggle="tooltip" data-placement="left" title="Sales Page Views">SPV : 0</span><br>
                                <span class="stats" data-toggle="tooltip" data-placement="left" title="Thank You Page Views">TPV : 0</span><br>
                                <span class="stats" data-toggle="tooltip" data-placement="left" title="Download Page Views">DPV : 0</span><br>
                                <span class="stats" data-toggle="tooltip" data-placement="left" title="Download Page Downloads">DPD : 0</span><br>
                                <span class="stats" data-toggle="tooltip" data-placement="left" title="Conversion Ratio">CR : N/A</span>
                            </td>

                            <td>{!! isset($product->sales_page_content) ? 'Sales' : 'Squeeze' !!}</td>

                            <td>{{ $product->is_exit_popup_page_enabled == "true" ? 'Yes' : "No" }}</td>

                            <td>
                                <nav class="nav justify-content-center table-actions">
                                    <li class="nav-item up" data-toggle="tooltip" data-placement="left" title="Move Up">
                                        <a class="nav-link px-1" href="#" >
                                            <img src="/assets/icons/try/funnel project svg/arrow up.svg" alt="">
                                            
                                        </a>
                                    </li>

                                    <li class="nav-item down" data-toggle="tooltip" data-placement="right" title="Move Down">
                                        <a class="nav-link px-1" href="#">
                                            <img src="/assets/icons/try/funnel project svg/arrow down.svg" alt="">
                                        </a>
                                    </li>
                        
                                </nav>
                            </td>

                            <td>
                            <div class="d-flex flex-column">
                                    <nav class="nav table-actions d-block">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="tooltip"
                                                data-placement="left" title="Download Product Licence">
                                                <img src="/front/icons/try/funnel project svg/download product licence.svg"
                                                    alt="">
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="tooltip"
                                                data-placement="left" title="Download Personal Use Licence">
                                                <img src="/front/icons/try/funnel project svg/download personal use licence.svg"
                                                    alt="">
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('library',[$product->ebook->unique_id, 'download_pdf']) }}" data-toggle="tooltip"
                                                data-placement="left" title="Download Product">
                                                <img src="/front/icons/try/funnel project svg/download product.svg"
                                                    alt="">
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('editProduct', $product->unique_id) }}" data-toggle="tooltip"
                                                data-placement="left" title="Edit Product">
                                                <img src="/front/icons/try/funnel project svg/edit.svg"
                                                    alt="">
                                            </a>
                                        </li>
                                    </nav>
                                    
                                </div>
                                

                            </td>

                            <td>
                                <nav class="nav flex-column table-actions">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-toggle="tooltip"
                                            data-placement="left" title="Delete">
                                            <img src="/front/icons/delete.svg" alt="">
                                        </a>
                                    </li>
                                </nav>
                            </td>
                        </tr>
                        {{ $counter++ }}
                        @endforeach
                    @else
                        <tr><td colspan="10" class="text-center">No data available at the moment</td></tr>
                    @endif
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

@section('extra_js')

<script>
        //order up & down
        $(function() {
            $('.up').on('click', function(e) {
                var wrapper = $(this).closest('tr')
                wrapper.insertBefore(wrapper.prev())
            })
            $('.down').on('click', function(e) {
                var wrapper = $(this).closest('tr')
                wrapper.insertAfter(wrapper.next())
            })
        })
    </script>

@endsection

@endsection