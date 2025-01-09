@extends('layout.master')

@section('content')
    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
            @include(config('settings.KT_THEME_LAYOUT_DIR') . '/partials/sidebar-layout/_header')
            <!--begin::Wrapper-->
            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

                @if (!$pageDetail ?? false)
                    @include(config('settings.KT_THEME_LAYOUT_DIR') . '/partials/sidebar-layout/_sidebar')
                @endif

                <!--begin::Main-->
                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                    <!--begin::Content wrapper-->
                    <div class="d-flex flex-column flex-column-fluid">
                        @include(config('settings.KT_THEME_LAYOUT_DIR') . '/partials/sidebar-layout/_toolbar')
                        <!--begin::Content-->
                        <div id="kt_app_content" class="app-content flex-column-fluid">
                            <!--begin::Content container-->
                            <div id="kt_app_content_container" class="app-container container-fluid">
                                {{ $slot }}
                            </div>
                            <!--end::Content container-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Content wrapper-->
                    @include(config('settings.KT_THEME_LAYOUT_DIR') . '/partials/sidebar-layout/_footer')
                </div>
                <!--end:::Main-->

                <div id="kt_app_aside" class="app-aside flex-column mt-7" data-kt-drawer="true"
                    data-kt-drawer-name="app-aside" data-kt-drawer-activate="{default: true, lg: false}"
                    data-kt-drawer-overlay="true" data-kt-drawer-width="auto" data-kt-drawer-direction="end"
                    data-kt-drawer-toggle="#kt_app_aside_toggle" style="">

                    <!--begin::Aside wrapper-->
                    <div id="kt_app_aside_wrapper" class="hover-scroll-y px-5 mx-5 my-5" data-kt-scroll="true"
                        data-kt-scroll-activate="true" data-kt-scroll-height="auto"
                        data-kt-scroll-dependencies="#kt_app_header" data-kt-scroll-wrappers="#kt_app_aside"
                        data-kt-scroll-offset="5px" data-kt-scroll-save-state="true" style="height: 761px;">

                        <!--begin::Aside1-->
                        <div class="card card-reset card-p-0">
                            <!--begin::Header-->
                            <div class="card-header min-h-auto mb-5">
                                <h3 class="card-title text-gray-900 fw-bold fs-3">Filters</h3>

                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <a href="#" class="btn btn-sm btn-icon btn-color-gray-500 btn-light">
                                        <i class="ki-duotone ki-magnifier fs-3"><span class="path1"></span><span
                                                class="path2"></span></i> </a>
                                </div>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div class="card-body">
                                <!--begin::Form-->
                                <div class="mb-7">
                                    <span class="text-gray-900 fs-h6 fw-bold d-inline-block mb-1">Agents</span>

                                    <select class="form-select" aria-label="Select example" data-control="select2">
                                        <option>Any agent</option>
                                        <option value="1">Grace Green</option>
                                        <option value="2">Nick LOgan</option>
                                        <option value="3">Carles Nilson</option>
                                        <option value="1">Alice Danchik</option>
                                        <option value="2">Harris Bold</option>
                                        <option value="3">Carles Nilson</option>
                                    </select>
                                </div>

                                <div class="mb-7">
                                    <span class="text-gray-900 fs-h6 fw-bold d-inline-block mb-1">Groups</span>

                                    <select class="form-select" aria-label="Select example">
                                        <option>Any group</option>
                                        <option value="1">Grace Green</option>
                                        <option value="2">Nick LOgan</option>
                                        <option value="3">Carles Nilson</option>
                                        <option value="1">Alice Danchik</option>
                                        <option value="2">Harris Bold</option>
                                        <option value="3">Carles Nilson</option>
                                    </select>
                                </div>

                                <div class="mb-7">
                                    <span class="text-gray-900 fs-h6 fw-bold d-inline-block mb-1">Crated</span>

                                    <select class="form-select" aria-label="Select example">
                                        <option>Any Time</option>
                                        <option value="1">day ago</option>
                                        <option value="2">2 days ago</option>
                                        <option value="3">April 15</option>
                                        <option value="1">April 10</option>
                                        <option value="2">March 30</option>
                                        <option value="3">March 25</option>
                                    </select>
                                </div>

                                <div class="mb-6">
                                    <span class="text-gray-900 fs-h6 fw-bold d-inline-block mb-1">Email</span>

                                    <input type="text" class="form-control" placeholder="Your Email">
                                </div>
                                <!--end::Form-->

                                <!--begin::Action-->
                                <div class="d-flex flex-column">
                                    <a href="#" class="btn btn-primary mb-4 p-3">Default</a>

                                    <a href="#" class="btn btn-secondary btn-color-gray-700 p-3">View more</a>
                                </div>
                                <!--end::Action-->
                                <!--end::Body-->
                            </div>
                        </div>
                        <!--end::Aside1-->
                    </div>
                    <!--end::Aside wrapper-->
                </div>
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::App-->

    @include('partials/_drawers')

    @include('partials/_modals')

    @include('partials/_scrolltop')
@endsection
