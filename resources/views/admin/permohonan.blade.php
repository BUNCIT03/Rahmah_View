@extends('layouts.admin')

@section('title', 'Permohonan')

@section('admin_content')

<!-- Single unified card: filters + table -->
<div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">

    <!-- Card header with filters inline -->
    <div class="px-6 py-5 border-b border-slate-100">
        <div class="flex flex-col sm:flex-row sm:items-end gap-4">

            <div class="flex-1">
                <h2 class="font-semibold text-slate-800 text-base mb-0.5">Senarai Permohonan</h2>
                <p class="text-xs text-slate-400">Semak, luluskan atau tolak permohonan yang diterima</p>
            </div>

            <!-- Filters row -->
            <div class="flex flex-wrap gap-3">

                <div class="flex flex-col gap-1">
                    <label class="text-[10px] font-semibold text-slate-400 uppercase tracking-wider">Cari Nama</label>
                    <input type="text" id="filter-nama" oninput="filterTable()"
                           placeholder="Nama pemohon..."
                           class="text-sm border border-slate-200 rounded-lg px-3 py-1.5 w-44 focus:outline-none focus:ring-2 focus:ring-navy/20 focus:border-navy transition bg-slate-50">
                </div>

                <div class="flex flex-col gap-1">
                    <label class="text-[10px] font-semibold text-slate-400 uppercase tracking-wider">Status</label>
                    <select id="filter-status" onchange="filterTable()"
                            class="text-sm border border-slate-200 rounded-lg px-3 py-1.5 w-36 focus:outline-none focus:ring-2 focus:ring-navy/20 focus:border-navy transition bg-slate-50">
                        <option value="">Semua Status</option>
                        <option value="pending">Menunggu</option>
                        <option value="approved">Diluluskan</option>
                        <option value="rejected">Ditolak</option>
                    </select>
                </div>

                <div class="flex flex-col gap-1">
                    <label class="text-[10px] font-semibold text-slate-400 uppercase tracking-wider">Sektor</label>
                    <select id="filter-sektor" onchange="filterTable()"
                            class="text-sm border border-slate-200 rounded-lg px-3 py-1.5 w-40 focus:outline-none focus:ring-2 focus:ring-navy/20 focus:border-navy transition bg-slate-50">
                        <option value="">Semua Sektor</option>
                        <option value="awam">Sektor Awam</option>
                        <option value="swasta">Sektor Swasta</option>
                        <option value="sendiri">Bekerja Sendiri</option>
                        <option value="bersara">Pesara</option>
                    </select>
                </div>

                <div class="flex flex-col justify-end">
                    <span id="row-count" class="text-xs text-slate-400 bg-slate-100 px-3 py-1.5 rounded-lg font-medium">0 rekod</span>
                </div>

            </div>
        </div>
    </div>

    <!-- Table -->
    <div class="overflow-x-auto">
        <table class="stack-table w-full text-sm min-w-[820px]" id="permohonan-table">
            <thead>
                <tr class="bg-slate-50 border-b border-slate-200 text-[11px] font-semibold text-slate-400 uppercase tracking-wider">
                    <th class="px-6 py-3 text-left">Nama</th>
                    <th class="px-6 py-3 text-left">No. Tel</th>
                    <th class="px-6 py-3 text-left">Sektor</th>
                    <th class="px-6 py-3 text-left">Majikan / Jawatan</th>
                    <th class="px-6 py-3 text-center">Status</th>
                    <th class="px-6 py-3 text-right">Tindakan</th>
                </tr>
            </thead>
            <tbody id="permohonan-body" class="divide-y divide-slate-100">

                @php
                $rows = [
                    ['nama'=>'Ahmad Albab',           'tel'=>'+60 12-345 6789', 'phone'=>'60123456789',  'sektor'=>'swasta',  'sektorLabel'=>'Swasta', 'majikan'=>'Syarikat ABC / Pengurus',           'status'=>'pending'],
                    ['nama'=>'Siti Nurdiana',         'tel'=>'+60 17-987 6543', 'phone'=>'60179876543',  'sektor'=>'awam',    'sektorLabel'=>'Awam',   'majikan'=>'Kementerian Pendidikan / Pensyarah', 'status'=>'approved'],
                    ['nama'=>'Mohd Faizal bin Hamid', 'tel'=>'+60 11-2233 4455','phone'=>'601122334455', 'sektor'=>'swasta',  'sektorLabel'=>'Swasta', 'majikan'=>'Logistik Jaya Sdn Bhd / Pemandu',    'status'=>'rejected'],
                    ['nama'=>'Nurul Ain Zainudin',    'tel'=>'+60 13-567 8901', 'phone'=>'601135678901', 'sektor'=>'awam',    'sektorLabel'=>'Awam',   'majikan'=>'Hospital Kuala Lumpur / Jururawat',  'status'=>'pending'],
                    ['nama'=>'Khairul Anwar Othman',  'tel'=>'+60 19-334 5566', 'phone'=>'601933455566', 'sektor'=>'awam',    'sektorLabel'=>'Awam',   'majikan'=>'Polis DiRaja Malaysia / Inspektor',  'status'=>'approved'],
                    ['nama'=>'Roslinda Md Yusof',     'tel'=>'+60 16-778 9900', 'phone'=>'601677899900', 'sektor'=>'sendiri', 'sektorLabel'=>'Sendiri','majikan'=>'Perniagaan Sendiri / Peniaga',       'status'=>'rejected'],
                    ['nama'=>'Zulkifli Hassan',       'tel'=>'+60 12-100 2233', 'phone'=>'601221002233', 'sektor'=>'bersara', 'sektorLabel'=>'Pesara', 'majikan'=>'Pesara Kerajaan / Bekas Pegawai',    'status'=>'pending'],
                ];
                $badges = [
                    'pending'  => ['label'=>'Menunggu',   'cls'=>'bg-amber-100 text-amber-800 border-amber-300'],
                    'approved' => ['label'=>'Diluluskan', 'cls'=>'bg-emerald-100 text-emerald-800 border-emerald-300'],
                    'rejected' => ['label'=>'Ditolak',    'cls'=>'bg-red-100 text-red-800 border-red-300'],
                ];
                @endphp

                @foreach($rows as $r)
                <tr class="table-row hover:bg-slate-50/70 transition" data-nama="{{ $r['nama'] }}" data-status="{{ $r['status'] }}" data-sektor="{{ $r['sektor'] }}">
                    <td class="px-6 py-4 font-medium text-slate-800 cell-title">{{ $r['nama'] }}</td>
                    <td class="px-6 py-4 text-slate-500" data-label="No. Tel">{{ $r['tel'] }}</td>
                    <td class="px-6 py-4 text-slate-600" data-label="Sektor">{{ $r['sektorLabel'] }}</td>
                    <td class="px-6 py-4 text-slate-600" data-label="Majikan">{{ $r['majikan'] }}</td>
                    <td class="px-6 py-4 text-center" data-label="Status">
                        <span class="status-badge {{ $badges[$r['status']]['cls'] }}"><span class="dot"></span>{{ $badges[$r['status']]['label'] }}</span>
                    </td>
                    <td class="px-6 py-4 text-right" data-label="Tindakan">@include('admin._action_buttons', ['phone'=>$r['phone'],'nama'=>$r['nama']])</td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    <!-- Empty state -->
    <div id="empty-state" class="hidden px-6 py-16 text-center">
        <svg class="w-10 h-10 text-slate-200 mx-auto mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
        </svg>
        <p class="text-slate-400 text-sm">Tiada rekod dijumpai</p>
        <p class="text-slate-300 text-xs mt-1">Cuba ubah penapis carian anda</p>
    </div>

</div>

<script>
const BADGE_APPROVED = 'status-badge bg-emerald-100 text-emerald-800 border-emerald-300';
const BADGE_REJECTED = 'status-badge bg-red-100 text-red-800 border-red-300';
const BADGE_PENDING  = 'status-badge bg-amber-100 text-amber-800 border-amber-300';
const DOT = '<span class="dot"></span>';

function filterTable() {
    const nama   = document.getElementById('filter-nama').value.toLowerCase();
    const status = document.getElementById('filter-status').value.toLowerCase();
    const sektor = document.getElementById('filter-sektor').value.toLowerCase();
    const rows   = document.querySelectorAll('#permohonan-body .table-row');
    let visible  = 0;

    rows.forEach(row => {
        const match = (row.dataset.nama   || '').toLowerCase().includes(nama)
                   && (status === '' || (row.dataset.status || '') === status)
                   && (sektor === '' || (row.dataset.sektor || '') === sektor);
        row.style.display = match ? '' : 'none';
        if (match) visible++;
    });

    document.getElementById('row-count').textContent = visible + ' rekod';
    document.getElementById('empty-state').classList.toggle('hidden', visible > 0);
}

function luluskan(btn) {
    const row  = btn.closest('tr');
    const cell = row.querySelector('td:nth-child(5)');
    cell.innerHTML = `<span class="${BADGE_APPROVED}">${DOT}Diluluskan</span>`;
    row.dataset.status = 'approved';
    filterTable();
}

function tolak(btn) {
    const row  = btn.closest('tr');
    const cell = row.querySelector('td:nth-child(5)');
    cell.innerHTML = `<span class="${BADGE_REJECTED}">${DOT}Ditolak</span>`;
    row.dataset.status = 'rejected';
    filterTable();
}

document.addEventListener('DOMContentLoaded', () => {
    const total = document.querySelectorAll('#permohonan-body .table-row').length;
    document.getElementById('row-count').textContent = total + ' rekod';
});
</script>

@endsection
