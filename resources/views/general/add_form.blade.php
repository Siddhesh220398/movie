@extends('main')

@section('content')


<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

    <br>

    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

        <div class="row">

            <div class="col-lg-12">

                <div class="kt-portlet">

                    <div class="kt-portlet__head">

                        <div class="kt-portlet__head-label">

                            <h3 class="kt-portlet__head-title animate-charcter" style="font-size: 30px!important;">

                             {{ $title }}

                         </h3>

                     </div>

                 </div>

                 <form class="kt-form kt-form--label-right add_form" method="post" action="{{$url}}">

                    @csrf
                    @php
                        $index= route($resourceRoute.'.index');
                      if($resourceRoute == 'episode')
                          {
                                 $index= route('webseries.episodes',$id);
                          }
                      $store=route($resourceRoute.'.store');

                    @endphp
                    @include($resourcePath.'.create')

                    <div class="kt-portlet__foot">

                        <div class="kt-form__actions">

                            <div class="row">

                                <div class="col-lg-4"></div>

                                <div class="col-lg-8">

                                    <button type="button" class="btn btn-brand submit change_button">Submit<i class="la la-spinner change_spin d-none"></i></button>

                                    <a href="{{ $index }}"><button type="button" class="btn btn-secondary">Cancel</button></a>

                                </div>

                            </div>

                        </div>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

</div>



<script>

    $(document).ready(function() {

        $(".submit").on("click", function(e) {

            e.preventDefault();

            if ($(".add_form").valid()) {

                $('.change_button').find('.change_spin').removeClass('d-none');
                $('.change_button').prop('disabled', true);
                $.ajax({

                    type: "POST",

                    url: "{{$store}}",

                    data: new FormData($('.add_form')[0]),

                    processData: false,

                    contentType: false,

                    success: function(data) {

                        if (data.status === 'success') {

                            window.location = "{{ $index }}";

                            toastr["success"]("{{ $module }} Added Successfully", "Success");



                        } else if (data.status === 'error') {
                            location.reload();

                            toastr["error"]("Something went wrong", "Error");

                        }  else if (data.status === 'type_code'){

                            toastr["error"]("Duplicate code!", "Error");

                            $('.change_button').prop('disabled', false);

                            $('.change_button').find('.change_spin').addClass('d-none');
                        }
                        else if (data.status === 'email_exists') {
                            toastr["error"]("Duplicate Email!", "Error");
                            // location.reload();
                            $('.change_button').prop('disabled', false);
                            $('.change_button').find('.change_spin').addClass('d-none');
                        }

                    },
                    error :function( data ) {
                        console.log(data.status)
                        if(data.status === 422) {
                            var errors = $.parseJSON(data.responseText);
                            $.each(errors.errors, function (key, value) {
                                console.log(key+ " " +value);
                                $('#'+key).addClass('is-invalid');
                                $('#'+key).parent().append('<div id="'+key+'-error" class="error invalid-feedback ">'+value+'</div>');
                            });

                        }

                    }

                });

            } else {
                $('.change_button').prop('disabled', false);
                $('.change_button').find('.change_spin').addClass('d-none');
                e.preventDefault();

            }

        });

    });

</script>
    <style>
        .animate-charcter {
            background-image: linear-gradient(
                -225deg,
                #231557 0%,
                #44107a 29%,
                #ff1361 67%,
                #fff800 100%
            );
            background-size: auto auto;
            background-clip: border-box;
            background-size: 200% auto;
            color: #fff;
            background-clip: text;
            text-fill-color: transparent;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: textclip 2s linear infinite;
        }
        @keyframes textclip {
            to {
                background-position: 200% center;
            }
        }
    </style>

@stop
