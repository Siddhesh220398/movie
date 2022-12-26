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
                        <h3 class="kt-portlet__head-title">
                            Setting
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-wrapper">
                            <div class="kt-portlet__head-actions">
                                <a href="{{route('setting.create')}}" class="btn btn-brand btn-elevate btn-icon-sm">
                                    <i class="la la-plus"></i>
                                    Add Setting
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
                                <th>Website Name</th>
                                <th>Logo</th>
                                <th>Website Email</th>
                                <th>Website Privacy</th>
                                <th>Facebook Url</th>
                                <th>Twitter Url</th>
                                <th>Reddit Url</th>
                                <th>Instagram Url</th>
                                <th>Telegram Url</th>
                                <th>YouTube Url</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>

                @include('layout.multiple_action', array(



                'table_name' => 'settings',



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

                ajax: "{{ route('setting.index') }}",

                columns: [



                    {
                        orderable: true,

                        searchable: true,

                        "data": "website_name"

                    },
                    {
                        orderable: true,

                        searchable: true,

                        "data": "logo"

                    },
                    {
                        orderable: true,

                        searchable: true,

                        "data": "website_email"

                    },
                    {
                        orderable: true,

                        searchable: true,

                        "data": "privacy_policy"

                    },

                    {
                        orderable: true,

                        searchable: true,

                        "data": "facebook_url"

                    },
                    {
                        orderable: true,

                        searchable: true,

                        "data": "twitter_url"

                    },
                    {
                        orderable: true,

                        searchable: true,

                        "data": "reddit_url"

                    },
                    {
                        orderable: true,

                        searchable: true,

                        "data": "instagram_url"

                    },
                    {
                        orderable: true,

                        searchable: true,

                        "data": "telegram_url"

                    },
                    {
                        orderable: true,

                        searchable: true,

                        "data": "youtube_url"

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
@endpush
