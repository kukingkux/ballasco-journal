@include('partials.dashboard_head')

<body style="background-color: #f4f4f4">
    @include('layouts.sidenav')
    <div class="flex-column">
        @include('layouts.topnav')
        <div class="container pe-5">

            <!-- dashboard title -->
            <h5 class="mt-4">
                {{ $currentuser->name }}
                <h6>
                    <nav style="
                  --bs-breadcrumb-divider: url(
                    &#34;data:image/svg + xml,
                    %3Csvgxmlns='http://www.w3.org/2000/svg'width='8'height='8'%3E%3Cpathd='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z'fill='currentColor'/%3E%3C/svg%3E&#34;
                  );
                "
                        aria-label="breadcrumb">
                        <ol class="breadcrumb">

                            <li class="breadcrumb-item active" aria-current="page">
                                Dashboard
                            </li>
                        </ol>
                    </nav>
                </h6>
            </h5>
            <!-- end dashboard title -->
            <!-- card -->

            <!-- end card -->
            <!-- btn button -->
            <div class="d-flex mb-4" style="gap: 50px">

                <div class=" mt-4 p-2"
                    style="box-shadow: 0px 0px 15px -10px rgba(0, 0, 0, 0.75); background-color: #fff; border-radius: 12px; flex: 1">
                    @include('layouts.form_agenda')
                </div>

                <!-- end btn button -->
                <div>
                    @include('layouts.kalender')
                </div>
            </div>

        </div>
    </div>

    @include('partials.css_container')
    @include('partials.css_readonly')
    @extends('partials.dashboard_script')
</body>

</html>
