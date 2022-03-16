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
                        <h4 class="nk-block-title font-neue">ახალი შეკვეთის დამატება</h4>
                    </div>    
                </div>
            </div>
            <div class="nk-content-body card-bordered">
                <div class="card card-preview">
                    <form id="product_form" class="row">
                        <div class="col-lg-12">
                            <div class="card-inner">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a class="nav-link active font-neue" data-toggle="tab" href="#user_info">მომხმარებლის ინფორმაცია</a></li>
                                    <li class="nav-item"><a class="nav-link font-neue" data-toggle="tab" href="#delivery_parameters">მიწოდების პარამეტრები</a></li>
                                    <li class="nav-item"><a class="nav-link font-neue" data-toggle="tab" href="#payment">გადახდა</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="user_info">
                                        <div class="row">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card-inner">
                                <div class="row">

                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="order_id" id="order_id">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>  
@endsection

@section('js')

@endsection