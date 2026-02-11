@extends('layouts.app')

@section('content')
<div class="relative h-[400px] bg-unsri-light-green overflow-hidden flex items-center">
    <div class="absolute top-0 right-0 w-1/2 h-full bg-unsri-yellow skew-x-12 translate-x-20 opacity-20"></div>
    <div class="absolute bottom-0 left-0 w-64 h-64 bg-unsri-green rounded-full mix-blend-multiply filter blur-3xl opacity-10"></div>

    <div class="max-w-7xl mx-auto px-4 w-full grid grid-cols-1 md:grid-cols-2 gap-12 items-center relative z-10">
        <div>
            <div class="inline-block px-3 py-1 bg-white border border-unsri-green rounded-full text-[10px] font-bold text-unsri-green mb-4">
                <i class="fas fa-graduation-cap mr-2"></i> KAMPUS AMAN, PRESTASI NYAMAN
            </div>
            <h1 class="text-4xl md:text-5xl font-extrabold text-unsri-green leading-tight mb-6">
                Ciptakan Lingkungan <br> Belajar Yang Sehat
            </h1>
            <p class="text-gray-600 mb-8 leading-relaxed">
                Kekerasan seksual bukan hanya masalah individu, tapi masalah kita bersama. Mari kenali bentuk-bentuknya, cegah kejadiannya, dan lindungi korbannya.
            </p>
        </div>

        <div class="relative">
            <div class="absolute inset-0 bg-unsri-yellow rounded-full transform translate-x-4 translate-y-4 -z-10"></div>
            <img src="https://fkip.unsri.ac.id/wp-content/uploads/2016/08/rektorat-unsri-indralaya.jpg" class="rounded-2xl shadow-2xl border-4 border-white object-cover h-64 w-full">
        </div>
    </div>
</div>

<div class="py-20 bg-white text-center">
    <div class="max-w-7xl mx-auto px-4">
        <span class="bg-yellow-100 text-yellow-800 text-xs font-bold px-4 py-1 rounded-full uppercase">Variasi</span>
        <h2 class="text-3xl font-bold text-gray-800 mt-4 mb-12">Bentuk-Bentuk Kekerasan</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
            <div class="bg-blue-50 hover:bg-blue-100 p-6 rounded-xl transition cursor-pointer flex items-center gap-4 text-left border border-blue-100">
                <div class="bg-white p-3 rounded-full text-blue-500 shadow-sm">
                    <i class="fas fa-fist-raised text-xl"></i>
                </div>
                <span class="font-bold text-gray-700">Kekerasan Fisik</span>
            </div>

            <div class="bg-pink-50 hover:bg-pink-100 p-6 rounded-xl transition cursor-pointer flex items-center gap-4 text-left border border-pink-100">
                <div class="bg-white p-3 rounded-full text-pink-500 shadow-sm">
                    <i class="fas fa-bullhorn text-xl"></i>
                </div>
                <span class="font-bold text-gray-700">Kekerasan Verbal</span>
            </div>

            <div class="bg-purple-50 hover:bg-purple-100 p-6 rounded-xl transition cursor-pointer flex items-center gap-4 text-left border border-purple-100">
                <div class="bg-white p-3 rounded-full text-purple-500 shadow-sm">
                    <i class="fas fa-mobile-alt text-xl"></i>
                </div>
                <span class="font-bold text-gray-700">Kekerasan Digital</span>
            </div>

            <div class="bg-red-50 hover:bg-red-100 p-6 rounded-xl transition cursor-pointer flex items-center gap-4 text-left border border-red-100">
                <div class="bg-white p-3 rounded-full text-red-500 shadow-sm">
                    <i class="fas fa-heart-broken text-xl"></i>
                </div>
                <span class="font-bold text-gray-700">Kekerasan Seksual</span>
            </div>

            <div class="bg-green-50 hover:bg-green-100 p-6 rounded-xl transition cursor-pointer flex items-center gap-4 text-left border border-green-100">
                <div class="bg-white p-3 rounded-full text-green-500 shadow-sm">
                    <i class="fas fa-users-slash text-xl"></i>
                </div>
                <span class="font-bold text-gray-700">Diskriminasi</span>
            </div>

            <div class="bg-orange-50 hover:bg-orange-100 p-6 rounded-xl transition cursor-pointer flex items-center gap-4 text-left border border-orange-100">
                <div class="bg-white p-3 rounded-full text-orange-500 shadow-sm">
                    <i class="fas fa-sad-tear text-xl"></i>
                </div>
                <span class="font-bold text-gray-700">Bullying / Perundungan</span>
            </div>
        </div>
    </div>
</div>
@endsection
