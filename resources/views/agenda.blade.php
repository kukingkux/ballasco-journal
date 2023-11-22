@extends('partials.agenda_head')

<body style="background-color: #eeeeee;">

        @include('layouts.sidenav')
        <div class="flex-column">
             @include('layouts.topnav')
        <section style="margin-left: -100px">
            <div class="container pe-5" >
                <div>
                    <h5 class="mt-4">
                        Absensi
                    </h5>
                    <h6>
                        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                            aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Absensi</li>
                            </ol>
                        </nav>
                    </h6>

                    <div>
                        <div class="col pt-3 pb-1"
                            style="background-color: white; border-radius: 20px; box-shadow: 0px 10px 20px -10px #A18AFF;">
                            <h5 class="ms-4">Form Absensi Magang Campus Digital</h5>
                            <hr>
                           @include('layouts.form_agenda')
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>


    @extends('partials.agenda_head')
    @include('partials.css_readonly')
    @include('admin.partials.css_container')

</body>

</html>
