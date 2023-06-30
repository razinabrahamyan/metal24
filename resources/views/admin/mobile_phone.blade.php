@extends('admin.layouts.app')
@section('content')
    <div id="mobile_phone" class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-body">
                <div class="card">
                    <div class="card-header justify-content-center"><h3>Отображение номера мобильного телефона</h3></div>
                    <div class="card-body">
                        <div class="switch-toggle switch-3 switch-candy">
                            <input
                                    id="off"
                                    name="state-d"
                                    type="radio"
                                    @if($status === 'down')
                                    checked="checked"
                                    @endif
                                    value="down"
                                    v-on:change="status = $event.target.value"
                            />
                            <label for="off" style="font-size: 20px; color: red">выкл</label>
                            <input
                                    id="on"
                                    name="state-d"
                                    type="radio"
                                    @if($status === 'up')
                                    checked="checked"
                                    @endif
                                    value="up"
                                    v-on:change="status = $event.target.value"
                            />
                            <label for="on" style="font-size: 20px; color: green">вкл</label>
                            <a></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('styles')
<link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/vendors/css/extensions/toastr.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/css/plugins/extensions/ext-component-toastr.css')}}">
<link href="https://cdn.jsdelivr.net/css-toggle-switch/latest/toggle-switch.css" rel="stylesheet" />
<style>
    .dark-layout .custom-switch .custom-control-input:not(:checked) ~ .custom-control-label:before {
        background-color: #e8872b;
    }
    .custom-control-primary .custom-control-input:checked ~ .custom-control-label::before,
    .custom-control-primary .custom-control-input:active ~ .custom-control-label::before {
        border-color: #08adc1;
        background-color: #08adc1;
    }
</style>
@endpush
@push('scripts')
    <script src="{{asset('admin/app-assets/vendors/js/extensions/toastr.min.js')}}"></script>
    <script>
        let vue = new Vue({
            el: '#mobile_phone',
            data: {
                status: null
            },
            watch: {
                status: function (val) {
                    this.setPhoneStatus()
                },
            },
            methods: {
                setPhoneStatus: function (input, init) {
                    let formdata = new FormData();
                    let myHeaders = new Headers();
                    myHeaders.append('X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr('content'));
                    formdata.append("status", this.status);
                    let requestOptions = {
                        method: 'POST',
                        headers: myHeaders,
                        body: formdata,
                        redirect: 'follow'
                    };

                    this.button_status = true
                    fetch("mobile-phone-show", requestOptions)
                        .then((result) => {
                            toastr['success'](' ', 'Статус успешно обновлен!', {
                                positionClass: 'toast-top-center',
                            });
                            // result.json().then(data);
                        })
                        .catch(error => console.log('error', error));
                }
            }
        })
    </script>
@endpush