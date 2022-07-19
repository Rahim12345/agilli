@extends('front.layout.master')

@section('title') - {{ __('menu.contact') }} @endsection

@section('css')

@endsection

@section('content')
    <main class="main">
        <div class="mt-div"></div>
        <!-- CONATCT ==================================== -->
        <section class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 left">
                        <div class="content">
                        <span>{!! __('menu.contact_text') !!}</span>
                        </div>
                    </div>
                    <div class="col-lg-6 right">
                        <div class="content">
                            <div class="inner-content">
                                <div class="title"><span>{!! __('menu.subscribe') !!}</span></div>
                                <div class="subscribe ">
                                    <input type="email" placeholder="{!! __('menu.email_adresiniz') !!}" id="subEmail">
                                    <button type="button" id="subBtn"><img src="{{ asset('a-n/img/global/news/arrow-right.png') }}" alt=""></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection


@section('js')
    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#subBtn').click(function () {
                let email = $('#subEmail').val();
                $.ajax({
                    type : 'POST',
                    data : { email : email },
                    url  : '{!! route('front.contact.post') !!}',
                    success : function (response) {
                        $('#subEmail').val('');
                        toastr.success(response);
                    },
                    error : function (myErrors) {
                        $.each(myErrors.responseJSON.errors, function (key, error) {
                            toastr.error(error);
                        })
                    }
                });
            });
        });
    </script>
@endsection
