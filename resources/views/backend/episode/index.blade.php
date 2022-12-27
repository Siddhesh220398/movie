@extends('main')

@section('content')

    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <div class="col-lg-12">
        <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
            <br>
            <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head kt-portlet__head--lg" style="overflow: auto !important;">
                        <div class="kt-portlet__head-label">
					<span class="kt-portlet__head-icon">
						<i class="kt-menu__link-icon flaticon2-analytics-2"></i>
					</span>
                            <h3 class="kt-portlet__head-title animate-charcter" style="font-size: 15px!important;">
                                Episode Master
                            </h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <div class="kt-portlet__head-wrapper">
                                <div class="kt-portlet__head-actions">
                                    <a style="margin-left:5px !important" data-toggle="modal" href="#add_modal"
                                       class="btn btn-brand btn-elevate btn-icon-sm">
                                        <i class="la la-plus"></i>
                                        Add Episode
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <table class="table table-striped table-bordered table-hover table-checkable datatable"
                                   id="datatable_rows">
                                @csrf
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    @include('layout.multiple_action', array(



                    'table_name' => 'episodes',



                    'is_orderby'=>'yes',



                    'folder_name'=>'',



                    'action' => array()



                    ))
                </div>
            </div>
        </div>@stop
    </div>
    <div class="modal fade" id="add_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Episode</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <form class="add_modal" id="add_modal" method="post" action="{{route('episode.store')}}">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Title:</label>
                            <input type="text" class="form-control" name="title" id="title" required>
                        </div>
                        <div class="form-group">
                            <label>Url:</label>
                            <input type="text" class="form-control" name="url" id="url" required >
                        </div>
                        <div class="form-group">
                            <label>Thumbnail:</label>
                            <input type="file" class="form-control" name="thumbnail" id="thumbnail">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
{{--                        <button type="submit" class="btn btn-primary change_button" id="importBTN"--}}
{{--                                style="background: #602040;">Save<i class="la la-spinner change_spin d-none"></i>--}}
{{--                        </button>--}}
                        <button type="submit" class="btn btn-dark submit">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
{{--    <div class="modal fade" id="edit_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--        <div class="modal-dialog" role="document">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header">--}}
{{--                    <h5 class="modal-title" id="exampleModalLabel">Edit Episode</h5>--}}
{{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>--}}
{{--                </div>--}}
{{--                <form class="edit_modal" method="POST" id="edit_modal">--}}
{{--                    <div class="modal-body">--}}
{{--                        @csrf--}}
{{--                        @method('PUT')--}}
{{--                        <div class="row">--}}
{{--                            <div class="form-group">--}}
{{--                                <label>Title:</label>--}}
{{--                                <input type="text" class="form-control" name="title" id="title">--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label>Url:</label>--}}
{{--                                <input type="text" class="form-control" name="url" id="url">--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label>Thumbnail:</label>--}}
{{--                                <input type="file" class="form-control" name="thumbnail" id="thumbnail">--}}
{{--                            </div>--}}
{{--                            <div class="form-group col-lg-12">--}}
{{--                                <label>ARID:</label>--}}
{{--                                <input type="text" name="ar_id" id="ar_id" class="form-control" required>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="modal-footer">--}}
{{--                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
{{--                        <button type="submit" class="btn btn-dark submit">Update</button>--}}
{{--                    </div>--}}
{{--            </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}



    <div class="modal fade" id="edit_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Episode</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <form class="edit_form" id="edit_modal" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Title:</label>
                            <input type="hidden" class="form-control edit_id" name="edit_id" id="edit_id">
                            <input type="text" class="form-control edit_title" name="edit_title" id="edit_title">
                        </div>
                        <div class="form-group">
                            <label>Url:</label>
                            <input type="text" class="form-control" name="edit_url" id="edit_url">
                        </div>
                        <div class="form-group">
                            <label>Thumbnail:</label>
                            <input type="file" class="form-control" name="thumbnail" id="edit_thumbnail">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        {{--                        <button type="submit" class="btn btn-primary change_button" id="importBTN"--}}
                        {{--                                style="background: #602040;">Save<i class="la la-spinner change_spin d-none"></i>--}}
                        {{--                        </button>--}}
                        <button type="submit" class="btn btn-dark submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @push('scripts')
        <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"
                type="text/javascript"></script>

        <script>

            $(document).ready(function () {

                $('#datatable_rows').DataTable({

                    processing: true,
                    serverSide: true,
                    "dom": '<"top"if>rt<"bottom"lp><"clear">',
                    searchable: true,

                    scrollX: true,

                    order: [0, false],

                    ajax: "{{ route('episode.index') }}",

                    columns: [


                        {
                            orderable: true,

                            searchable: true,

                            "data": "title",

                        },
                        {
                            orderable: true,

                            searchable: true,

                            "data": "thumbnail",

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

            .table thead tr th {
                color: #602040 !important;
                background: #f3d8e5;

            }
        </style>
    @endpush
