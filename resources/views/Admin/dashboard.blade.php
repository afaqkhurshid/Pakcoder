<!DOCTYPE html>
<html lang="en" :class="{'dark': darkMode}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard - Laravel Application</title>
    
    <!-- Tailwind CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> --}}
    
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body
    x-data="{ 
        page: 'ecommerce', 
        loaded: true, 
        darkMode: false, 
        stickyMenu: false, 
        sidebarToggle: false, 
        scrollTop: false 
    }"
    x-init="
        darkMode = JSON.parse(localStorage.getItem('darkMode'));
        $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="{'dark bg-gray-900': darkMode === true}"
>
    <!-- ===== Preloader Start ===== -->
    @include('Admin.components.partials.preloader')
    <!-- ===== Preloader End ===== -->

    <!-- ===== Page Wrapper Start ===== -->
    <div class="flex h-screen overflow-hidden">
        <!-- ===== Sidebar Start ===== -->
            @include('Admin.components.partials.sidebar')
        <!-- ===== Sidebar End ===== -->

        <!-- ===== Content Area Start ===== -->
        <div class="relative flex flex-col flex-1 overflow-x-hidden overflow-y-auto">
            <!-- Small Device Overlay Start -->
            @include('Admin.components.partials.overlay')
            <!-- Small Device Overlay End -->

            <!-- ===== Header Start ===== -->
            @include('Admin.components.partials.header')
            <!-- ===== Header End ===== -->

            <!-- ===== Main Content Start ===== -->
            <main>
                <div class="p-4 mx-auto max-w-screen-2xl md:p-6">
                    <div class="grid grid-cols-12 gap-4 md:gap-6">
                        <div class="col-span-12 space-y-6 xl:col-span-7">
                            <!-- Metric Group One -->
                            @include('Admin.components.partials.metric-group-01')
                            <!-- Metric Group One -->

                            <!-- ====== Chart One Start -->
                            @include('Admin.components.partials.chart.chart-01')
                            <!-- ====== Chart One End -->
                        </div>
                        <div class="col-span-12 xl:col-span-5">
                            <!-- ====== Chart Two Start -->
                            @include('Admin.components.partials.chart.chart-02')
                            <!-- ====== Chart Two End -->
                        </div>

                        <div class="col-span-12">
                            <!-- ====== Chart Three Start -->
                            @include('Admin.components.partials.chart.chart-03')
                            <!-- ====== Chart Three End -->
                        </div>

                        <div class="col-span-12 xl:col-span-5">
                            <!-- ====== Map One Start -->
                            @include('Admin.components.partials.map-01')
                            <!-- ====== Map One End -->
                        </div>

                        <div class="col-span-12 xl:col-span-7">
                            <!-- ====== Table One Start -->
                            @include('Admin.components.partials.table.table-01')
                            <!-- ====== Table One End -->
                        </div>
                    </div>
                </div>
            </main>
            <!-- ===== Main Content End ===== -->
        </div>
        <!-- ===== Content Area End ===== -->
    </div>
    <!-- ===== Page Wrapper End ===== -->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>