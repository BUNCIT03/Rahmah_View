@extends('layouts.admin')

@section('title', 'Papan Pemuka')
@section('page_title', 'Papan Pemuka')
@section('page_subtitle', 'Gambaran keseluruhan sistem permohonan')

@section('admin_content')

<!-- Stats cards -->
<div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-6">

    <div class="rounded-xl p-5 shadow-sm border-l-4 border-navy bg-white">
        <div class="flex items-center justify-between mb-3">
            <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Jumlah</p>
            <div class="w-8 h-8 rounded-lg bg-navy/10 flex items-center justify-center">
                <svg class="w-4 h-4 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
            </div>
        </div>
        <p class="text-3xl font-bold text-navy">{{ $stats['jumlah'] }}</p>
        <p class="text-xs text-slate-400 mt-1">Semua permohonan</p>
    </div>

    <div class="rounded-xl p-5 shadow-sm border-l-4 border-amber-400 bg-white">
        <div class="flex items-center justify-between mb-3">
            <p class="text-xs font-semibold text-amber-500 uppercase tracking-wider">Menunggu</p>
            <div class="w-8 h-8 rounded-lg bg-amber-50 flex items-center justify-center">
                <svg class="w-4 h-4 text-amber-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
        </div>
        <p class="text-3xl font-bold text-amber-500">{{ $stats['pending'] }}</p>
        <p class="text-xs text-slate-400 mt-1">Perlu semakan</p>
    </div>

    <div class="rounded-xl p-5 shadow-sm border-l-4 border-emerald-500 bg-white">
        <div class="flex items-center justify-between mb-3">
            <p class="text-xs font-semibold text-emerald-600 uppercase tracking-wider">Diluluskan</p>
            <div class="w-8 h-8 rounded-lg bg-emerald-50 flex items-center justify-center">
                <svg class="w-4 h-4 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
        </div>
        <p class="text-3xl font-bold text-emerald-600">{{ $stats['approved'] }}</p>
        <p class="text-xs text-slate-400 mt-1">Berjaya diproses</p>
    </div>

    <div class="rounded-xl p-5 shadow-sm border-l-4 border-red-500 bg-white">
        <div class="flex items-center justify-between mb-3">
            <p class="text-xs font-semibold text-red-600 uppercase tracking-wider">Ditolak</p>
            <div class="w-8 h-8 rounded-lg bg-red-50 flex items-center justify-center">
                <svg class="w-4 h-4 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
        </div>
        <p class="text-3xl font-bold text-red-600">{{ $stats['rejected'] }}</p>
        <p class="text-xs text-slate-400 mt-1">Tidak layak</p>
    </div>

</div>

<!-- Quick actions -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-4 mb-6">

    <a href="{{ route('admin.permohonan') }}"
       class="bg-white rounded-xl p-5 border border-slate-200 shadow-sm hover:border-navy/30 hover:shadow-md transition group flex items-center gap-4">
        <div class="w-11 h-11 rounded-xl bg-slate-100 flex items-center justify-center group-hover:bg-navy/8 transition">
            <svg class="w-5 h-5 text-slate-500 group-hover:text-navy transition" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
        </div>
        <div>
            <p class="font-semibold text-slate-800 text-sm">Urus Permohonan</p>
            <p class="text-xs text-slate-400 mt-0.5">Semak, luluskan atau tolak</p>
        </div>
    </a>

    <a href="{{ route('admin.laporan') }}"
       class="bg-white rounded-xl p-5 border border-slate-200 shadow-sm hover:border-navy/30 hover:shadow-md transition group flex items-center gap-4">
        <div class="w-11 h-11 rounded-xl bg-slate-100 flex items-center justify-center group-hover:bg-navy/8 transition">
            <svg class="w-5 h-5 text-slate-500 group-hover:text-navy transition" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
            </svg>
        </div>
        <div>
            <p class="font-semibold text-slate-800 text-sm">Lihat Laporan</p>
            <p class="text-xs text-slate-400 mt-0.5">Analisis dan pecahan data</p>
        </div>
    </a>

    <a href="{{ route('admin.landing') }}"
       class="bg-white rounded-xl p-5 border border-slate-200 shadow-sm hover:border-navy/30 hover:shadow-md transition group flex items-center gap-4">
        <div class="w-11 h-11 rounded-xl bg-slate-100 flex items-center justify-center group-hover:bg-navy/8 transition">
            <svg class="w-5 h-5 text-slate-500 group-hover:text-navy transition" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
        </div>
        <div>
            <p class="font-semibold text-slate-800 text-sm">Tetapan Laman</p>
            <p class="text-xs text-slate-400 mt-0.5">Kemaskini kandungan & WA</p>
        </div>
    </a>

</div>

<!-- Recent applications -->
<div class="bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden">
    <div class="px-6 py-4 border-b border-slate-100 flex items-center justify-between">
        <h2 class="font-semibold text-slate-800 text-sm">Permohonan Terkini</h2>
        <a href="{{ route('admin.permohonan') }}" class="text-xs text-navy hover:text-gold font-medium transition">Lihat semua →</a>
    </div>

    @php
    $statusMap = [
        'pending'  => ['label' => 'Menunggu',   'cls' => 'bg-amber-100 text-amber-800 border-amber-300'],
        'approved' => ['label' => 'Diluluskan', 'cls' => 'bg-emerald-100 text-emerald-800 border-emerald-300'],
        'rejected' => ['label' => 'Ditolak',    'cls' => 'bg-red-100 text-red-800 border-red-300'],
    ];
    @endphp

    <div class="overflow-x-auto">
        <table class="stack-table w-full text-sm min-w-[640px]">
            <thead>
                <tr class="bg-slate-50 border-b border-slate-200 text-[11px] font-semibold text-slate-400 uppercase tracking-wider">
                    <th class="px-6 py-3 text-left">Nama</th>
                    <th class="px-6 py-3 text-left">Sektor</th>
                    <th class="px-6 py-3 text-left">Majikan</th>
                    <th class="px-6 py-3 text-center">Status</th>
                    <th class="px-6 py-3 text-right">Tarikh</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @foreach($recent as $r)
                <tr class="hover:bg-slate-50/70 transition">
                    <td class="px-6 py-4 font-medium text-slate-800 cell-title">{{ $r['nama'] }}</td>
                    <td class="px-6 py-4 text-slate-600" data-label="Sektor">{{ $r['sektor'] }}</td>
                    <td class="px-6 py-4 text-slate-600" data-label="Majikan">{{ $r['majikan'] }}</td>
                    <td class="px-6 py-4 text-center" data-label="Status">
                        <span class="status-badge {{ $statusMap[$r['status']]['cls'] }}">
                            <span class="dot"></span>{{ $statusMap[$r['status']]['label'] }}
                        </span>
                    </td>
                    <td class="px-6 py-4 text-right text-slate-400 text-xs whitespace-nowrap" data-label="Tarikh">{{ $r['tarikh'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
