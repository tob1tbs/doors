@extends('layout.layout')

@section('css')

@endsection

@section('content')
<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-xl">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">
                                        <li class="nk-block-tools-opt">
                                            <div class="drodown">
                                                <a href="#" class="dropdown-toggle btn btn-icon btn-primary" data-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <ul class="link-list-opt no-bdr font-helvetica-regular">
                                                        <li><a href="{{ route('actionOrdersAdd') }}"><span>ახალი შეკვეთა</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle btn btn-light font-helvetica-regular ml-2" data-toggle="dropdown">შეკვეთების ექსპორტი</a>
                                                <div class="dropdown-menu" style="min-width: 300px;">
                                                    <ul class="link-check font-helvetica-regular">
                                                        <li><span>Excel</span></li>
                                                        <li><a href="javascript:;" onclick="OrderExcelExportModal()">
                                                            <em class="icon ni ni-download"></em><span>არსებული შეკვეთების ჩამოტვირთვა</span></a>
                                                        </li>
                                                        <li><a href="javascript:;" onclick="OrderExcelUploadModal()">
                                                            <em class="icon ni ni-upload"></em><span>ახალი შეკვეთების ატვირთვა</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-block">
                    <div class="card card-bordered card-stretch">
                        <div class="card-inner-group">
                            <div class="card-inner position-relative card-tools-toggle">
                                <div class="card-title-group">
                                    <div class="card-tools">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title font-neue">შეკვეთების ჩამონათვალი</h3>
                                        </div>
                                    </div>
                                    <div class="card-tools mr-n1">
                                        <ul class="btn-toolbar gx-1">
                                            <li>
                                                <div class="toggle-wrap">
                                                    <a href="#" class="btn btn-icon btn-trigger toggle" data-target="cardTools"><em class="icon ni ni-menu-right"></em></a>
                                                    <div class="toggle-content" data-content="cardTools">
                                                        <ul class="btn-toolbar gx-1">
                                                            <li class="toggle-close">
                                                                <a href="#" class="btn btn-icon btn-trigger toggle" data-target="cardTools"><em class="icon ni ni-arrow-left"></em></a>
                                                            </li>
                                                            <li>
                                                                <div class="dropdown">
                                                                    <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-toggle="dropdown">
                                                                        <div class="dot dot-primary"></div>
                                                                        <em class="icon ni ni-filter-alt"></em>
                                                                    </a>
                                                                    <div class="filter-wg dropdown-menu dropdown-menu-xl dropdown-menu-right">
                                                                        <div class="dropdown-head">
                                                                            <span class="sub-title dropdown-title font-neue">შეკვეთების ფილტრი</span>
                                                                            <div class="dropdown">
                                                                                <a href="#" class="btn btn-sm btn-icon">
                                                                                    <em class="icon ni ni-more-h"></em>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="dropdown-body dropdown-body-rg">
                                                                            <form method="get" class="row gx-6 gy-3">
                                                                                <div class="col-6">
                                                                                    <div class="form-group">
                                                                                        <label class="font-helvetica-regular overline-title overline-title-alt">კატეგორიის სახელი <br></label>
                                                                                        <input type="text" class="form-control" name="search_query">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-6">
                                                                                    <div class="form-group">
                                                                                        <label class="font-helvetica-regular overline-title overline-title-alt">სტატუსი</label>
                                                                                        <select class="form-select form-select-sm" name="category_active">
                                                                                            
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-6">
                                                                                    <div class="form-group">
                                                                                        <label class="font-helvetica-regular overline-title overline-title-alt">სორტირება</label>
                                                                                        <select class="form-select form-select-sm" name="sort_by">
                                                                                           
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-6">
                                                                                    <div class="form-group">
                                                                                        <label class="font-helvetica-regular overline-title overline-title-alt">რაოდენობა</label>
                                                                                        <select class="form-select form-select-sm" name="count">
                                                                                           
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12">
                                                                                    <div class="form-group">
                                                                                        <button type="submit" class="btn btn-secondary font-neue">გაფილტვრა</button>
                                                                                        <a href="" class="btn btn-primary font-neue">ფილტრის გასუფთავება</a>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-inner">
                                <div class="nk-block">
                                    <div class="card card-bordered card-stretch">
                                        <div class="card-inner p-0">
                                            <ul class="nav nav-tabs pl-2">
                                                <li class="nav-item"><a class="nav-link active font-neue" data-toggle="tab" href="#new_orders">ახალი შეკვეთები</a></li>
                                                <li class="nav-item"><a class="nav-link font-neue" data-toggle="tab" href="#inprogres_orders">მიმდინარე შეკვეთები</a></li>
                                                <li class="nav-item"><a class="nav-link font-neue" data-toggle="tab" href="#closed_orders">დახურული შეკვეთები</a></li>
                                                <li class="nav-item"><a class="nav-link font-neue" data-toggle="tab" href="#declined_orders">გაუქმებული შეკვეთები</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="new_orders">
                                                    <div class="nk-tb-list nk-tb-ulist">
                                                        <div class="nk-tb-item nk-tb-head font-helvetica-regular">
                                                            <div class="nk-tb-col"><span># შეკვეთის კოდი / ტრექინგ კოდი</span></div>
                                                            <div class="nk-tb-col tb-col-mb"><span>შეკვეთის ღირებულება</span></div>
                                                            <div class="nk-tb-col tb-col-mb"><span>საწყობი</span></div>
                                                            <div class="nk-tb-col tb-col-mb"><span>გამომგზავნი</span></div>
                                                            <div class="nk-tb-col tb-col-md"><span>გაფორმების თარიღი</span></div>
                                                            <div class="nk-tb-col tb-col-md"><span>შეკვეთა გააფორმა</span></div>
                                                            <div class="nk-tb-col tb-col-md"><span>შეკვეთის სტატუსი</span></div>
                                                            <div class="nk-tb-col nk-tb-col-tools">&nbsp;</div>
                                                        </div>
                                                        @foreach($order_list->where('deleted_at_int', '!=', 0)->where('close', 0)->where('status', 1) as $order_item)
                                                        <div class="nk-tb-item font-helvetica-regular">
                                                            <div class="nk-tb-col">
                                                                <div class="align-center">
                                                                    <span class="tb-sub ml-2">{{ $order_item->id }} / {{ $order_item->tracking_code }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="tb-sub tb-amount">{{ $order_item->orderWarehouse->name }} / {{ $order_item->orderChildWarehouse->name }} </span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="tb-sub tb-amount">{{ $order_item->order_amount / 100 }} ₾</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <div class="user-card">
                                                                    <div class="user-name">
                                                                        @if($order_item->customer_type == 2)
                                                                        <span class="tb-lead">{{ $order_item->companyData->name }} / {{ $order_item->companyData->code }}</span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-lg">
                                                                <span class="tb-sub">{{ Carbon\Carbon::parse($order_item->created_at)->format('Y-m-d H:m') }}</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="tb-sub tb-amount">1.094780 <span>BTC</span></span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <span class="tb-sub font-helvetica-regular">{{ $order_item->OrderStatus->name }}</span>
                                                            </div>
                                                            <div class="nk-tb-col nk-tb-col-action">
                                                                <div class="dropdown">
                                                                    <a class="text-soft dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-chevron-right"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs font-helvetica-regular" style="min-width: 200px;">
                                                                        <ul class="link-list-plain">
                                                                            <li><a href="#">შეკვეთის ნახვა</a></li>
                                                                            <li><a href="#" onclick="OrderStatusChange({{ $order_item->id }})">სტატუსის ცვილელება</a></li>
                                                                            <li><a href="#">რედაქტურება</a></li>
                                                                            <li><a href="#" class="text-danger">წაშლა</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="inprogres_orders">
                                                    <div class="nk-tb-list nk-tb-ulist">
                                                        <div class="nk-tb-item nk-tb-head font-helvetica-regular">
                                                            <div class="nk-tb-col"><span># შეკვეთის კოდი / ტრექინგ კოდი</span></div>
                                                            <div class="nk-tb-col tb-col-mb"><span>შეკვეთის ღირებულება</span></div>
                                                            <div class="nk-tb-col tb-col-mb"><span>საწყობი</span></div>
                                                            <div class="nk-tb-col tb-col-mb"><span>გამომგზავნი</span></div>
                                                            <div class="nk-tb-col tb-col-md"><span>გაფორმების თარიღი</span></div>
                                                            <div class="nk-tb-col tb-col-md"><span>შეკვეთა გააფორმა</span></div>
                                                            <div class="nk-tb-col tb-col-md"><span>შეკვეთის სტატუსი</span></div>
                                                            <div class="nk-tb-col nk-tb-col-tools">&nbsp;</div>
                                                        </div>
                                                        @foreach($order_list->where('deleted_at_int', '!=', 0)->where('close', 0)->where('status', 2) as $order_item)
                                                        <div class="nk-tb-item font-helvetica-regular">
                                                            <div class="nk-tb-col">
                                                                <div class="align-center">
                                                                    <span class="tb-sub ml-2">{{ $order_item->id }} / {{ $order_item->tracking_code }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="tb-sub tb-amount">{{ $order_item->orderWarehouse->name }} / {{ $order_item->orderChildWarehouse->name }} </span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="tb-sub tb-amount">{{ $order_item->order_amount / 100 }} ₾</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <div class="user-card">
                                                                    <div class="user-name">
                                                                        @if($order_item->customer_type == 2)
                                                                        <span class="tb-lead">{{ $order_item->companyData->name }} / {{ $order_item->companyData->code }}</span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-lg">
                                                                <span class="tb-sub">{{ Carbon\Carbon::parse($order_item->created_at)->format('Y-m-d H:m') }}</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="tb-sub tb-amount">1.094780 <span>BTC</span></span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <span class="tb-sub font-helvetica-regular">{{ $order_item->OrderStatus->name }}</span>
                                                            </div>
                                                            <div class="nk-tb-col nk-tb-col-action">
                                                                <div class="dropdown">
                                                                    <a class="text-soft dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-chevron-right"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs font-helvetica-regular" style="min-width: 200px;">
                                                                        <ul class="link-list-plain">
                                                                            <li><a href="#">შეკვეთის ნახვა</a></li>
                                                                            <li><a href="#" onclick="OrderStatusChange({{ $order_item->id }})">სტატუსის ცვილელება</a></li>
                                                                            <li><a href="#">რედაქტურება</a></li>
                                                                            <li><a href="#" class="text-danger">წაშლა</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="closed_orders">
                                                    <div class="nk-tb-list nk-tb-ulist">
                                                        <div class="nk-tb-item nk-tb-head font-helvetica-regular">
                                                            <div class="nk-tb-col"><span># შეკვეთის კოდი / ტრექინგ კოდი</span></div>
                                                            <div class="nk-tb-col tb-col-mb"><span>შეკვეთის ღირებულება</span></div>
                                                            <div class="nk-tb-col tb-col-mb"><span>საწყობი</span></div>
                                                            <div class="nk-tb-col tb-col-mb"><span>გამომგზავნი</span></div>
                                                            <div class="nk-tb-col tb-col-md"><span>გაფორმების თარიღი</span></div>
                                                            <div class="nk-tb-col tb-col-md"><span>შეკვეთა გააფორმა</span></div>
                                                            <div class="nk-tb-col tb-col-md"><span>შეკვეთის სტატუსი</span></div>
                                                            <div class="nk-tb-col nk-tb-col-tools">&nbsp;</div>
                                                        </div>
                                                        @foreach($order_list->where('deleted_at_int', '!=', 0)->where('close', 1)->where('close', 3) as $order_item)
                                                        <div class="nk-tb-item font-helvetica-regular">
                                                            <div class="nk-tb-col">
                                                                <div class="align-center">
                                                                    <span class="tb-sub ml-2">{{ $order_item->id }} / {{ $order_item->tracking_code }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="tb-sub tb-amount">{{ $order_item->orderWarehouse->name }} / {{ $order_item->orderChildWarehouse->name }} </span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="tb-sub tb-amount">{{ $order_item->order_amount / 100 }} ₾</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <div class="user-card">
                                                                    <div class="user-name">
                                                                        @if($order_item->customer_type == 2)
                                                                        <span class="tb-lead">{{ $order_item->companyData->name }} / {{ $order_item->companyData->code }}</span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-lg">
                                                                <span class="tb-sub">{{ Carbon\Carbon::parse($order_item->created_at)->format('Y-m-d H:m') }}</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="tb-sub tb-amount">1.094780 <span>BTC</span></span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <span class="tb-sub font-helvetica-regular">{{ $order_item->OrderStatus->name }}</span>
                                                            </div>
                                                            <div class="nk-tb-col nk-tb-col-action">
                                                                <div class="dropdown">
                                                                    <a class="text-soft dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-chevron-right"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs font-helvetica-regular" style="min-width: 200px;">
                                                                        <ul class="link-list-plain">
                                                                            <li><a href="#">შეკვეთის ნახვა</a></li>
                                                                            <li><a href="#" onclick="OrderStatusChange({{ $order_item->id }})">სტატუსის ცვილელება</a></li>
                                                                            <li><a href="#">რედაქტურება</a></li>
                                                                            <li><a href="#" class="text-danger">წაშლა</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="declined_orders">
                                                    <div class="nk-tb-list nk-tb-ulist">
                                                        <div class="nk-tb-item nk-tb-head font-helvetica-regular">
                                                            <div class="nk-tb-col"><span># შეკვეთის კოდი / ტრექინგ კოდი</span></div>
                                                            <div class="nk-tb-col tb-col-mb"><span>შეკვეთის ღირებულება</span></div>
                                                            <div class="nk-tb-col tb-col-mb"><span>საწყობი</span></div>
                                                            <div class="nk-tb-col tb-col-mb"><span>გამომგზავნი</span></div>
                                                            <div class="nk-tb-col tb-col-md"><span>გაფორმების თარიღი</span></div>
                                                            <div class="nk-tb-col tb-col-md"><span>შეკვეთა გააფორმა</span></div>
                                                            <div class="nk-tb-col tb-col-md"><span>შეკვეთის სტატუსი</span></div>
                                                            <div class="nk-tb-col nk-tb-col-tools">&nbsp;</div>
                                                        </div>
                                                        @foreach($order_list->where('deleted_at_int', '!=', 0)->where('close', 0)->where('status', 4) as $order_item)
                                                        <div class="nk-tb-item font-helvetica-regular">
                                                            <div class="nk-tb-col">
                                                                <div class="align-center">
                                                                    <span class="tb-sub ml-2">{{ $order_item->id }} / MTRPOST{{ $order_item->id }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="tb-sub tb-amount">{{ $order_item->order_amount / 100 }} ₾</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="tb-sub tb-amount">{{ $order_item->orderWarehouse->name }} / {{ $order_item->orderChildWarehouse->name }} </span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <div class="user-card">
                                                                    <div class="user-name">
                                                                        @if($order_item->customer_type == 2)
                                                                        <span class="tb-lead">{{ $order_item->companyData->name }} / {{ $order_item->companyData->code }}</span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-lg">
                                                                <span class="tb-sub">{{ Carbon\Carbon::parse($order_item->created_at)->format('Y-m-d H:m') }}</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="tb-sub tb-amount">1.094780 <span>BTC</span></span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <span class="tb-sub font-helvetica-regular">{{ $order_item->OrderStatus->name }}</span>
                                                            </div>
                                                            <div class="nk-tb-col nk-tb-col-action">
                                                                <div class="dropdown">
                                                                    <a class="text-soft dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-chevron-right"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs font-helvetica-regular" style="min-width: 200px;">
                                                                        <ul class="link-list-plain">
                                                                            <li><a href="{{ route('actionOrdersView', $order_item->id) }}">შეკვეთის ნახვა</a></li>
                                                                            <li><a href="#" onclick="OrderStatusChange({{ $order_item->id }})">სტატუსის ცვილელება</a></li>
                                                                            <li><a href="#">რედაქტურება</a></li>
                                                                            <li><a href="#" class="text-danger">წაშლა</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="OrderStatusChangeModal" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-neue">შეკვეთის სტატუსის ცვლილება</h5>
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                <form action="#" class="form-validate is-alter" novalidate="novalidate" id="order_upload_form">
                    <div class="form-group">
                        <label class="form-label font-helvetica-regular" for="excel_file">სტატუსი *</label>
                        <div class="form-control-wrap ">
                            <div class="form-control-select">
                                <select class="form-control" id="default-06">
                                    @foreach($order_status_list as $status_item)
                                    <option value="{{ $status_item->id }}">{{ $status_item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="status_order_id" id="status_order_id">
                    <button type="button" class="btn btn-success font-neue" onclick="OrderStatusChangeSubmit()">შენახვა</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="OrderExcelUploadModal" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-neue">ახალი შეკვეთების ატვირთვა</h5>
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                <form action="#" class="form-validate is-alter" novalidate="novalidate" id="order_upload_form">
                    <div class="form-group">
                        <label class="form-label font-helvetica-regular" for="excel_file">
                            ექსელის ფაილი * 
                        </label>
                        <div class="form-control-wrap">
                            <input type="file" class="form-control check-input" name="excel_file" id="excel_file">
                            <a href="#" class="text-success font-helvetica-regular float-right mt-1">შაბლონის ჩამოტვირთვა</a>
                        </div>
                    </div>
                    <button type="button" class="btn btn-success font-neue" onclick="OrderExcelUploadSubmit()">ატვირთვა</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="OrderExcelExportModal" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-neue">მიმდინარე შეკვეთების ჩამოტვირთვა</h5>
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                <form action="#" class="form-validate is-alter" novalidate="novalidate" id="order_export_form">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label class="form-label" for="date_from">თარიღი (დან)</label>
                                <div class="form-control-wrap">
                                    <input type="date" class="form-control" name="date_from" id="date_from">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label class="form-label" for="default-01">თარიღი (მდე)</label>
                                <div class="form-control-wrap">
                                    <input type="date" class="form-control" name="date_to" id="date_from">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <button type="button" class="btn btn-success font-neue mt-2" onclick="ProductBalanceSubmit()">ექსპორტი</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript" src="{{ url('assets/js/jquery-ui.min.js') }}"></script>
<script src="{{ url('assets/scripts/orders_scripts.js') }}"></script>
@endsection