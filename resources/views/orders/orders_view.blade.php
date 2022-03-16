@extends('layout.layout')

@section('css')

@endsection

@section('content')
<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-xl">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title font-neue">შეკვეთის ნომერი <strong class="text-primary small">#{{ $order_data->id }}</strong></h3>
                            <div class="nk-block-des text-soft">
                                <ul class="list-inline font-neue">
                                    <li>შექმნის თარიღი: <span class="text-base">{{ \Carbon\Carbon::parse($order_data->created_at)->format('d-m-Y') }}</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-block">
                    <div class="invoice">
                        <div class="invoice-wrap">
                            <div class="invoice-brand text-center">
                                <div class="nk-notes ff-italic fs-12px text-soft"> {!! DNS1D::getBarcodeSVG($order_data->id, 'C39') !!}</div>
                            </div>
                            <div class="invoice-head">
                                <div class="invoice-contact">
                                    <span class="overline-title font-neue">შეკვეთის გამომგზავნი:</span>
                                    @switch($order_data->customer_type)
									    @case(2)
	                                    <div class="invoice-contact-info">
	                                        <h4 class="title font-neue">{{ $order_data->companyData->name }} / {{ $order_data->companyData->code }}</h4>
	                                        <ul class="list-plain">
	                                            <li><em class="icon ni ni-map-pin-fill"></em><span>{{ $order_data->companyData->address }}</span></li>
	                                        </ul>
	                                    </div>
								        @break
									@endswitch
                                </div>
                            </div>
                            <div class="invoice-bills">
                                <div class="table-responsive">
                                    <table class="table table-striped font-helvetica-regular">
                                        <thead>
                                            <tr>
                                                <th class="w-150px">შეკვეთის ნომერი</th>
                                                <th class="w-60">მიწოდების დეტალები</th>
                                                <th>შეკვეთის სტატუსი</th>
                                                <th class="text-center">კლიენტის ტარიფი</th>
                                                <th class="text-center">მიწოდების ღირებულება</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $order_data->id }}</td>
                                                <td>{!! $order_data->client_data !!}</td>
                                                <td>{{ $order_data->orderStatus->name }}</td>
                                                <td class="text-center">{{ $order_data->companyData->price / 100 }} ₾</td>
                                                <td class="text-center">{{ $order_data->order_amount / 100 }} ₾</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card card-bordered h-100">
                                    <div class="card-inner border-bottom">
                                        <div class="card-title-group">
                                            <div class="card-title">
                                                <h6 class="title font-neue">შეკვეთის ისტორია</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-inner">
                                        <div class="timeline">
                                            <h6 class="timeline-head font-neue">შეკვეთის გახსნა: {{ $order_data->created_at }}</h6>
                                            <ul class="timeline-list">
                                            	@foreach($order_log_data as $log_item)
                                                <li class="timeline-item">
                                                    <div class="timeline-status bg-primary is-outline"></div>
                                                    <div class="timeline-date">{{ \Carbon\Carbon::parse($log_item->created_at)->format('d-m-y H:m') }} <em class="icon ni ni-alarm-alt"></em></div>
                                                    <div class="timeline-data">
                                                        <h6 class="timeline-title font-neue">{{ json_decode($log_item->data)->title }}</h6>
                                                        <div class="timeline-des">
                                                            <p class="font-helvetica-regular">{{ json_decode($log_item->data)->value }}</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
				                @if($order_data->status == 2)
								<a href="javascript:;" onclick="OrderUpdateModal({{ $order_data->order_id }})" class="mt-2 btn btn-success font-helvetica-regular">შეკვეთის დამუშავება</a>
								@endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="OrderUpdateModal" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-neue">შეკვეთის დამუშავება</h5>
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                <form action="#" class="form-validate is-alter" novalidate="novalidate" id="order_update_form">
                    <div class="row">
                    	<div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label class="form-label" for="order_update_warehouse">საწყობი</label>
                                <div class="form-control-wrap">
                                	<select class="form-control" id="order_update_warehouse" name="order_update_warehouse" onchange="GetChildWarehouse()">
                                		@foreach($warehouse_list as $warehouse_item)
                                		<option value="{{ $warehouse_item->id }}" @if($warehouse_item->id == $order_data->warehouse_id) selected @endif>{{ $warehouse_item->name }}</option>
                                		@endforeach
                                	</select>
                                </div>
                            </div>
                        </div>
                    	<div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label class="form-label" for="order_update_child_warehouse">ქვესაწყობი</label>
                                <div class="form-control-wrap">
                                	<select class="form-control" id="order_update_child_warehouse" name="order_update_child_warehouse">
                                		
                                	</select>
                                </div>
                            </div>
                        </div>
                    	<div class="col-lg-12 mt-1">
                            <div class="form-group">
                                <label class="form-label" for="order_update_child_warehouse">შეკვეთის კომენტარი</label>
                                <div class="form-control-wrap">
                                	<textarea class="form-control" name="order_update_comment" id="order_update_comment">{!! $order_data->comment !!}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mt-1">
                        	<button class="btn btn-success" onclick="OrderUpdateSubmit()">დადასტურება</button>
                        </div>
                    </div>
                    <input type="hidden" name="order_update_id" value="{{ $order_data->id }}">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="{{ url('assets/scripts/orders_scripts.js') }}"></script>
<script type="text/javascript">

	function GetChildWarehouse() {
	    $.ajax({
	        dataType: 'json',
	        url: "{{ route('getOrderChildWareHouse') }}",
	        type: "GET",
	        data: {
	            warehouse_id: $('#order_update_warehouse').val(),
	        },
	        success: function(data) {
	            if(data['status'] == true) {
	            	$("#order_update_child_warehouse").html('');
	            	
	            	$.each(data['ChildOrderWarehouse'], function(key, value) {
	            		if(value['id'] == {{ $order_data->warehouse_child_id }}) {
	            			var selected = 'selected';
	            		}  else {
	            			var selected = ''
	            		}

	            		$("#order_update_child_warehouse").append(`<option value="`+value['id']+`" `+selected+`>`+value['name']+`</option>`);
	            	});
	            }
	        }
	    });
	}

	GetChildWarehouse();
</script>
@endsection