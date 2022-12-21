@extends('main')

@section('content')

@php
$title = $data['title'];
$module = $data['module'];
$resourcePath = $data['resourcePath'];
$url = $data['url'];
$id = $data['edit']->id;
@endphp
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

    <br>

    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

        <div class="row">

            <div class="col-lg-12">

                <div class="kt-portlet">

                    <div class="kt-portlet__head">

                        <div class="kt-portlet__head-label">

                            <h3 class="kt-portlet__head-title">

                               {{ $title }}

                           </h3>

                       </div>

                   </div>
                   @php

                   $index= route($resourcePath.'.index');

                   @endphp

                   <form class="kt-form kt-form--label-right edit_form" method="put" action="{{$url}}">

                    @csrf
                    @method('PUT')
                    
                    @include($resourcePath.'.show', array('data' => $data))

                    <div class="kt-portlet__foot">

                        <div class="kt-form__actions">

                            <div class="row">
                                <div class="col-lg-12">
                                    
                                <center>
                                    <a href="{{ $index }}">
                                        <button type="button" class="btn btn-secondary">Cancel</button>
                                    </a>
                                </center>
                                </div>
                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@stop