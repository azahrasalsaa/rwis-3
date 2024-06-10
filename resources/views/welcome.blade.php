@php
    $informations = [
        ['url' => '/facility', 'name' => 'Informasi Fasilitas', 'image' => '/img/facility.png'],
        ['url' => '/umkm', 'name' => 'Informasi UMKM', 'image' => '/img/umkm.png'],
        ['url' => 'issue-report', 'name' => 'Laporan Masalah', 'image' => '/img/resident.png'],
        ['url' => '/financial', 'name' => 'Pencatatan Keuangan', 'image' => '/img/bookkeeping.png'],
    ];
@endphp

<!DOCTYPE html>
<html lang="en" class="h-full" data-theme="light">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite('resources/css/app.css')
        <title>RW 11 Information System</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('img/icon.png') }}">
    </head>

    <body class="h-full font-rubik">
        <div class="bg-base-100 h-full">
            @include('user-layout.header')
            <div
                class="bg-no-repeat bg-cover w-full px-80 h-full relative"
                style="background-image: url('/img/homepage.png')"
            >
                <div class="inset-0 bg-gradient-to-t from-black/80 to-transparent absolute z-0"></div>
                <div class="relative z-10 flex flex-col gap-4">
                    <h1 class="font-bold pt-96 mt-44 text-white text-6xl w-full">
                        Selamat Datang di
                        <br>
                        Sistem Informasi
                        RW 11!
                    </h1>
                    <p class="text-white text-lg leading-loose">
                        Tempat untuk memfasilitasi komunikasi dan pengelolaan informasi di lingkungan Muharto, RW 11,
                        Kota Malang.
                    </p>
                    <a href="#content" class="bg-primary text-white text-center py-4 w-1/6 rounded-xl font-medium">
                        Yuk Lihat!
                    </a>
                </div>
            </div>
            <div id="content" class="bg-base-100 py-32">
                <h2 class="text-4xl font-bold mb-8 text-center text-slate-800">Eksplorasi RW 11!</h2>
                <div class="flex flex-col gap-4 max-w-[72rem] mx-auto">
                    @foreach($informations as $info)
                        <a href="{{ url($info['url']) }}">
                            <div
                                class="card card-side bg-base-100 shadow-xl mb-5 hover:text-white hover:bg-primary transition ease-in-out delay-150 hover:-translate-y-1 duration-300"
                            >
                                <div class="card-body flex justify-center">
                                    <h2 class=" text-3xl font-bold">{{ $info['name'] }}</h2>
                                    <div class="card-actions justify-start">
                                    </div>
                                </div>
                                <figure>
                                    <img src="{{ asset($info['image']) }}" alt="Movie" />
                                </figure>
                            </div>
                        </a>
                    @endforeach
                </div>
                <h2 class="pt-32 pb-8 text-center text-slate-800 font-bold text-4xl">Tentang RW 11 Information
                    System</h2>
                <p class="text-center text-slate-800 text-2xl px-80">
                    RW 11 Information System adalah sebuah sistem informasi yang bertujuan untuk memfasilitasi
                    komunikasi
                    dan pengelolaan informasi di lingkungan Muharto, RW 11, Kota Malang. Sistem ini dibuat untuk
                    mempermudah warga dalam mendapatkan informasi terkini seputar lingkungan tempat tinggal mereka.
                </p>
            </div>
            <div class="bg-indigo-900 w-full px-80 py-16">
                <div class="flex items-center gap-3">
                    <img
                        src="{{ request('uwu') === "true" ? asset('img/icon_uwu.png') : asset('img/icon.png') }}"
                        class="h-auto {{ request('uwu') === "true" ? 'w-48' : 'w-16' }}"
                        alt="icon"
                    >
                    @if(!request('uwu'))
                        <h6 class="font-bold text-white">RW 11<br> Information<br> System</h6>
                    @endif
                </div>
                <div class="flex w-full">
                    <div class="pt-12 flex flex-col gap-6 max-w-[72rem] w-1/2">
                        <div class="font-bold text-white flex">
                            <h1>Explorasi</h1>
                        </div>
                        <div class="text-white flex flex-col gap-6 max-w-[72rem]">
                            <a href="{{ url('https://www.youtube.com/watch?v=xvFZjo5PgG0') }}">Tentang RW 11 Information System</a>
                            <a href="">Disclaimer</a>
                            <a href="">Tim Kami</a>
                        </div>
                    </div>
                    <div class="pt-12 flex flex-col gap-6 max-w-[72rem] w-1/2">
                        <div class="font-bold text-white flex">
                            <h1>Kontak Kami</h1>
                        </div>
                        <div class="text-white flex flex-col gap-6 max-w-[72rem]">
                            <a href="">contact@rw11is.id</a>
                            <a href="">Instagram</a>
                            <a href="">Whatsapp</a>
                        </div>
                    </div>
                </div>
                <hr class="mt-8 border-0 h-0.5 bg-indigo-700">
                <div class="flex justify-between text-white mt-4">
                    <p>RW 11 Information System adalah Program untuk Membantu<br>Kebutuhan Warga Muharto RW 11</p>
                    <p>Copyright © 2024 RW 11 Information System</p>
                </div>
            </div>
        </div>
    </body>

</html>
