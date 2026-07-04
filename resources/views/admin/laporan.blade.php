@extends('layouts.admin')

@section('title', 'Laporan')
@section('page_title', 'Laporan')
@section('page_subtitle', 'Analisis dan pecahan data permohonan')

@section('admin_content')

<!-- Filter toolbar -->
<div class="bg-white rounded-xl border border-slate-200 shadow-sm px-5 py-4 mb-5">
    <div class="flex flex-col sm:flex-row sm:items-end gap-4">
        <div class="flex-1">
            <h2 class="font-semibold text-slate-800 text-sm mb-0.5">Penapis Laporan</h2>
            <p class="text-xs text-slate-400">Pilih tempoh dan sektor untuk menyaring data</p>
        </div>

        <div class="flex flex-wrap gap-3">
            <div class="flex flex-col gap-1">
                <label class="text-[10px] font-semibold text-slate-400 uppercase tracking-wider">Tempoh</label>
                <select id="filter-tempoh" onchange="renderReport()"
                        class="text-sm border border-slate-200 rounded-lg px-3 py-1.5 w-40 focus:outline-none focus:ring-2 focus:ring-navy/20 focus:border-navy transition bg-slate-50">
                    <option value="all">Semua masa</option>
                    <option value="year">Tahun ini</option>
                    <option value="q">3 bulan lepas</option>
                    <option value="month">Bulan ini</option>
                </select>
            </div>

            <div class="flex flex-col gap-1">
                <label class="text-[10px] font-semibold text-slate-400 uppercase tracking-wider">Sektor</label>
                <select id="filter-sektor" onchange="renderReport()"
                        class="text-sm border border-slate-200 rounded-lg px-3 py-1.5 w-40 focus:outline-none focus:ring-2 focus:ring-navy/20 focus:border-navy transition bg-slate-50">
                    <option value="all">Semua sektor</option>
                    <option value="awam">Sektor Awam</option>
                    <option value="swasta">Sektor Swasta</option>
                    <option value="sendiri">Bekerja Sendiri</option>
                    <option value="pesara">Pesara</option>
                </select>
            </div>

            <div class="flex flex-col justify-end">
                <span id="report-range" class="text-xs text-slate-500 bg-slate-100 px-3 py-1.5 rounded-lg font-medium whitespace-nowrap">Semua masa</span>
            </div>
        </div>
    </div>
</div>

<!-- Summary cards -->
<div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
    <div class="bg-white rounded-xl p-5 border border-slate-200 shadow-sm">
        <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider mb-3">Jumlah Permohonan</p>
        <p id="sum-total" class="text-3xl font-bold text-slate-800">0</p>
        <p class="text-xs text-slate-400 mt-1">Bagi tempoh dipilih</p>
    </div>
    <div class="bg-white rounded-xl p-5 border border-slate-200 shadow-sm">
        <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider mb-3">Kadar Kelulusan</p>
        <p id="sum-rate" class="text-3xl font-bold text-emerald-600">0%</p>
        <p class="text-xs text-slate-400 mt-1">Daripada jumlah diproses</p>
    </div>
    <div class="bg-white rounded-xl p-5 border border-slate-200 shadow-sm">
        <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider mb-3">Sektor Awam</p>
        <p id="sum-awam" class="text-3xl font-bold text-navy">0</p>
        <p class="text-xs text-slate-400 mt-1">Permohonan</p>
    </div>
    <div class="bg-white rounded-xl p-5 border border-slate-200 shadow-sm">
        <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider mb-3">Sektor Swasta</p>
        <p id="sum-swasta" class="text-3xl font-bold text-gold">0</p>
        <p class="text-xs text-slate-400 mt-1">Permohonan</p>
    </div>
</div>

<!-- Breakdown by sector + status -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-5 mb-5">

    <div class="bg-white rounded-xl border border-slate-200 shadow-sm p-6">
        <div class="flex items-center justify-between mb-5">
            <h3 class="font-semibold text-slate-800 text-sm">Pecahan Mengikut Sektor</h3>
            <span id="sector-note" class="text-[10px] font-medium text-navy bg-navy/5 px-2 py-1 rounded-md hidden"></span>
        </div>
        <div id="sector-bars" class="space-y-4"></div>
    </div>

    <div class="bg-white rounded-xl border border-slate-200 shadow-sm p-6">
        <h3 class="font-semibold text-slate-800 text-sm mb-5">Pecahan Mengikut Status</h3>
        <div id="status-bars" class="space-y-4"></div>
    </div>

</div>

<!-- Monthly trend -->
<div class="bg-white rounded-xl border border-slate-200 shadow-sm p-6">
    <h3 class="font-semibold text-slate-800 text-sm mb-1">Trend Bulanan</h3>
    <p class="text-xs text-slate-400 mb-6">Jumlah permohonan diterima setiap bulan</p>
    <div id="monthly-bars" class="h-36 flex items-end gap-2"></div>
</div>

<script>
const DATA = {
    all:   { label: 'Semua masa',      total: 250,
             sectors: { awam: 130, swasta: 75, sendiri: 30, pesara: 15 },
             status:  { menunggu: 50, diluluskan: 140, ditolak: 60 },
             monthly: [12, 15, 18, 14, 20, 22, 25, 19, 23, 27, 21, 34] },
    year:  { label: 'Tahun ini',       total: 168,
             sectors: { awam: 88, swasta: 50, sendiri: 20, pesara: 10 },
             status:  { menunggu: 34, diluluskan: 95, ditolak: 39 },
             monthly: [10, 12, 14, 11, 16, 18, 20, 15, 19, 14, 11, 8] },
    q:     { label: '3 bulan lepas',   total: 63,
             sectors: { awam: 33, swasta: 18, sendiri: 8, pesara: 4 },
             status:  { menunggu: 14, diluluskan: 34, ditolak: 15 },
             monthly: [0, 0, 0, 0, 0, 0, 0, 0, 0, 19, 21, 23] },
    month: { label: 'Bulan ini',       total: 23,
             sectors: { awam: 12, swasta: 7, sendiri: 3, pesara: 1 },
             status:  { menunggu: 9, diluluskan: 10, ditolak: 4 },
             monthly: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 23] },
};

const SECTORS = [
    { key: 'awam',    name: 'Sektor Awam',     color: 'bg-navy' },
    { key: 'swasta',  name: 'Sektor Swasta',   color: 'bg-gold' },
    { key: 'sendiri', name: 'Bekerja Sendiri', color: 'bg-emerald-500' },
    { key: 'pesara',  name: 'Pesara',          color: 'bg-slate-400' },
];
const STATUSES = [
    { key: 'menunggu',   name: 'Menunggu',   color: 'bg-amber-400' },
    { key: 'diluluskan', name: 'Diluluskan', color: 'bg-emerald-500' },
    { key: 'ditolak',    name: 'Ditolak',    color: 'bg-red-500' },
];
const MONTHS = ['Jan','Feb','Mac','Apr','Mei','Jun','Jul','Ogo','Sep','Okt','Nov','Dis'];

const pct = (n, total) => total ? Math.round(n / total * 100) : 0;
const fmt = (n) => n.toLocaleString('en-US');

function barRow(name, count, percent, color, dimmed) {
    return `<div class="${dimmed ? 'opacity-30' : ''} transition-opacity duration-300">
        <div class="flex justify-between text-xs text-slate-600 mb-1.5">
            <span class="font-medium">${name}</span>
            <span class="text-slate-400">${fmt(count)} (${percent}%)</span>
        </div>
        <div class="h-2 bg-slate-100 rounded-full overflow-hidden">
            <div class="${color} h-full rounded-full transition-all duration-500" style="width:${percent}%"></div>
        </div>
    </div>`;
}

function renderReport() {
    const period = document.getElementById('filter-tempoh').value;
    const sektor = document.getElementById('filter-sektor').value;
    const d = DATA[period] || DATA.all;

    // Summary cards
    const processed = d.status.diluluskan + d.status.ditolak;
    const rate = processed ? Math.round(d.status.diluluskan / processed * 100) : 0;
    document.getElementById('sum-total').textContent  = fmt(d.total);
    document.getElementById('sum-rate').textContent   = rate + '%';
    document.getElementById('sum-awam').textContent   = fmt(d.sectors.awam);
    document.getElementById('sum-swasta').textContent = fmt(d.sectors.swasta);
    document.getElementById('report-range').textContent = d.label;

    // Sector breakdown (dim non-selected sectors when a sector filter is active)
    document.getElementById('sector-bars').innerHTML = SECTORS
        .map(s => barRow(s.name, d.sectors[s.key], pct(d.sectors[s.key], d.total), s.color, sektor !== 'all' && sektor !== s.key))
        .join('');

    const note = document.getElementById('sector-note');
    if (sektor !== 'all') {
        const sel = SECTORS.find(s => s.key === sektor);
        note.textContent = 'Menyaring: ' + sel.name;
        note.classList.remove('hidden');
    } else {
        note.classList.add('hidden');
    }

    // Status breakdown
    document.getElementById('status-bars').innerHTML = STATUSES
        .map(s => barRow(s.name, d.status[s.key], pct(d.status[s.key], d.total), s.color, false))
        .join('');

    // Monthly trend (heights scaled to the busiest month)
    const max = Math.max(...d.monthly, 1);
    document.getElementById('monthly-bars').innerHTML = d.monthly.map((v, i) => {
        const h = v === 0 ? 4 : Math.round(v / max * 118) + 8;
        const barColor = v === 0 ? 'bg-slate-100' : 'bg-navy/80 hover:bg-navy';
        return `<div class="flex-1 flex flex-col items-center gap-1">
            <span class="text-[9px] font-semibold text-slate-400">${v || ''}</span>
            <div class="w-full rounded-t ${barColor} transition-all duration-500" style="height:${h}px" title="${MONTHS[i]}: ${v}"></div>
            <span class="text-[9px] text-slate-400">${MONTHS[i]}</span>
        </div>`;
    }).join('');
}

document.addEventListener('DOMContentLoaded', renderReport);
</script>

@endsection
