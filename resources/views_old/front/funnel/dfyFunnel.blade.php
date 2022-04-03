@php $pageTitle = 'DFY Funnel' @endphp
@extends('front.layouts.frontDesign')

@section('extra_css')   
@endsection

@section('content')

<div class="content-section">
    <div class="container-fluid custom-padding">
        <h5 class="head-title">
            DFY Funnels
        </h5>
        <div class="funnel-vid-wrap">
            <iframe src="https://www.youtube.com/embed/RpXS1iYz6-M"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen="" frameborder="0"></iframe>
        </div>
        <div class="dfy-head mt-3">
            <h6 class="title mb-0">DFY Funnels</h6>
        </div>
        <div class="content-wrap mt-0 mb-5">
            <table class="table no-border table-product table-funnel table-dfy-funnel">
                <thead>
                    <tr class="bg-light">
                        <th>TITLE</th>
                        <th class="text-center">PRODUCT</th>
                        <th class="text-center">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($dfyFunnels->count() > 0)
                    @foreach ($dfyFunnels as $funnel)
                    @if ( $funnel->createdBy->role == 'admin' )
                    <tr>
                        <td scope="row">
                            {{ $funnel->title }}
                        </td>
                        <td class="text-center">{{ $funnel->products->count() }}</td>

                        <td>
                            <nav class="nav justify-content-center table-actions">
                                <li class="nav-item">
                                    <a class="nav-link px-1" href="#" data-toggle="tooltip"
                                        data-placement="top" title="Preview">
                                        <img src="/front/icons/preview ebook.svg" alt="">
                                    </a>
                                </li>

                                @if ($owner->role != 'admin')
                                <li class="nav-item">
                                    <a class="nav-link px-1" href="{{ route('addDfyFunnelToMyFunnel', $funnel->unique_id) }}" data-toggle="tooltip"
                                        data-placement="top" title="Copy to my funnel ">
                                        <img src="/front/icons/copy to my funnel.svg" alt="">
                                    </a>
                                </li>
                                @endif
                            </nav>
                        </td>
                    </tr>
                    @endif
                        
                    @endforeach
                    
                    @else
                        <tr><td colspan="4" class="text-center">No contents at moments</td></tr>
                    @endif
                    
        
                </tbody>
            </table>
        </div>
    </div>
</div>

    @section('extra_div')
    
    @endsection 



@section('extra_js')  
@endsection

@endsection