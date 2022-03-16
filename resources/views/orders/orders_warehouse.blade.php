@extends('layout.layout')

@section('css')

@endsection

@section('content')
<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-xl">
        <div class="nk-content-inner">
            <div class="nk-block-head">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h4 class="nk-block-title font-neue">მომხმარებელთა ჩამონათვალი</h4>
                    </div>    
                </div>
            </div>
            <div class="nk-content-body">
                <div class="card card-preview">
                    <div class="card-inner">
                        <ul class="nav nav-tabs">
                        	@foreach($warehouse_list as $warehouse_item)
                            <li class="nav-item"><a class="nav-link @if($loop->first) active @endif font-neue" data-toggle="tab" href="#warehouse_item_{{ $warehouse_item['id'] }}">{{ $warehouse_item['name'] }}</a></li>
                            @endforeach
                        </ul>
                        <div class="tab-content">
                        	@foreach($warehouse_list as $warehouse_item)
                            <div class="tab-pane @if($loop->first) active @endif" id="warehouse_item_{{ $warehouse_item['id'] }}">
                                <div class="nk-tb-list">
                                    <div class="nk-tb-item nk-tb-head font-neue">
                                        <div class="nk-tb-col p-0"><span><b>დასახელება</b></span></div>
                                        <div class="nk-tb-col text-right p-0"><span><b>მოქმედება</b></span></div>
                                    </div>
	                            	@foreach($warehouse_item['childs'] as $child_item)
	                            	<div class="nk-tb-item font-helvetica-regular" style="height: 50px; line-height: 50px;">
                                        <div class="nk-tb-col p-0">
                                            <div class="align-center">
                                                <span class="tb-sub">{{ $child_item['name'] }}</span>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-action p-0">
                                            <div class="dropdown">
                                                <a class="text-soft dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-chevron-right"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs" style="min-width: 200px;">
                                                    <ul class="link-list-plain">
                                                        <li><a href="{{ route('actionOrdersWarehouseView', [$warehouse_item['id'], $child_item['id']] ) }}">შეკვეთების ნახვა</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
	                            	@endforeach
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')

@endsection