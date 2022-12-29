@extends('main')

@section('content')

    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />

    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
        <br>
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
            <div class="kt-portlet kt-portlet--mobile">
                <div class="kt-portlet__head kt-portlet__head--lg" style="overflow: auto !important;">
                    <div class="kt-portlet__head-label">
					<span class="kt-portlet__head-icon">
						<i class="kt-menu__link-icon flaticon2-analytics-2"></i>
					</span>
                        <h3 class="kt-portlet__head-title animate-charcter" style="font-size: 30px!important;">
                            Movie Master
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-wrapper">
                            <div class="kt-portlet__head-actions">
                                <a href="{{route('movie.create')}}" class="btn btn-brand btn-elevate btn-icon-sm" style="font-size: 20px!important;">
                                    <i class="la la-plus"></i>
                                    Add Movie
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <table class="table table-striped table-bordered table-hover table-checkable datatable" id="datatable_rows">
                            @csrf
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>

                @include('layout.multiple_action', array(



                'table_name' => 'movies',



                'is_orderby'=>'yes',



                'folder_name'=>'',



                'action' => array()



                ))
            </div>
        </div>
    </div>
@stop

@push('scripts')
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js')}}" type="text/javascript"></script>

    <script>

        $(document).ready(function() {

            $('#datatable_rows').DataTable({

                processing: true,
                serverSide: true,
                "dom": '<"top"if>rt<"bottom"lp><"clear">',
                searchable: true,

                scrollX: true,

                order: [0,false],

                ajax: "{{ route('movie.index') }}",

                columns: [

                    {
                        orderable: true,

                        searchable: true,

                        "data": "id"

                    },

                    {
                        orderable: true,

                        searchable: true,

                        "data": "title"

                    },

                    {
                        orderable: true,

                        searchable: true,

                        "data": "description"

                    },

                    {

                        orderable: false,

                        searchable: false,

                        data: 'action',

                    },

                ]

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
        .table thead  tr  th{
            color: #602040 !important;
            background:#f3d8e5;

        }
    </style>
@endpush
