@extends('layout.layout')

@section('css')

@endsection

@section('content')
<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-xl">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block">
                    <div class="card card-bordered">
                        <div class="card-aside-wrap">
                            <div class="card-inner card-inner-lg p-0">
                            	<ul class="nav nav-tabs pl-4 font-helvetica-regular">
								    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#personal_information">პირადი ინფორმაცია</a></li>
								    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#order_list">შეკვეთების ჩამონათვალი</a></li>
								</ul>
								<div class="tab-content mt-0">
								    <div class="tab-pane active" id="personal_information">
								        <p>content</p>
								    </div>
								    <div class="tab-pane" id="order_list">
								        <p>content</p>
								    </div>
								    <div class="tab-pane" id="vacation_list">
								        <table class="table table-tranx">
                                            <thead>
                                                <tr class="tb-tnx-head font-neue">
                                                    <th class="tb-tnx-id"><span class="">#</span></th>
                                                    <th class="tb-tnx-info">
                                                        <span class="tb-tnx-desc d-none d-sm-inline-block">
                                                            <span>შექმნა</span>
                                                        </span>
                                                        <span class="tb-tnx-date d-inline-block">
                                                            <span>
                                                                <span>გასვლის თარიღი</span>
                                                                <span>დაბრუნების თარიღი</span>
                                                            </span>
                                                        </span>
                                                    </th>
                                                    <th class="tb-tnx-amount is-alt">
                                                        <span class="tb-tnx-total">შექმნის თარიღი</span>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                            </tbody>
                                        </table>
								    </div>
								</div>
                            </div>
                            <div class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg" data-content="userAside" data-toggle-screen="lg" data-toggle-overlay="true">
                                <div class="card-inner-group" data-simplebar>
                                    <div class="card-inner">
                                        <div class="user-card">
                                            <div class="user-info">
                                                <span class="lead-text font-neue">{{ $customer_data->name }} {{ $customer_data->lastname }}</span>
                                                
                                            </div>
                                            <div class="user-action">
                                                <div class="dropdown">
                                                    <a class="btn btn-icon btn-trigger mr-n2" data-toggle="dropdown" href="#"><em class="icon ni ni-more-v"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr font-helvetica-regular">
                                                            <li><a href="#"><em class="icon ni ni-edit-fill"></em><span>პროფილის რედაქტირება</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-inner">
                                        <div class="user-account-info py-0">
                                            <h6 class="overline-title-alt">{{ $customer_data->phone}}</h6>
                                            <h6 class="overline-title-alt">{{ $customer_data->email}}</h6>
                                        </div>
                                    </div>
                                    <div class="card-inner p-0">

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
@endsection

@section('js')

@endsection