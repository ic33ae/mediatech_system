
@extends('layouts.app')

@section('content')
<section class="page-view active" id="page-commissions">

    <div class="page-head">
        <div>
            <div class="eyebrow">Sales incentive</div>
            <h1 class="page-title">Aturan Komisi Sales</h1>
            <div class="page-desc">
                Lihat aturan komisi dan simulasi berdasarkan transaksi Sales Order.
                Sales hanya dapat melihat simulasi transaksinya sendiri dan tidak
                dapat mengubah aturan.
            </div>
        </div>

        <button class="btn btn-primary" id="commission-add">
            ＋ Tambah aturan
        </button>
    </div>

    <!-- PANEL ATURAN KOMISI -->
    <div class="panel" id="commission-rules-panel">
        <div class="panel-head">
            <div>
                <div class="panel-title">Aturan komisi</div>
                <div class="panel-sub">
                    Aturan default disediakan; aturan khusus dapat ditambahkan
                    dan diaktifkan sesuai kebijakan.
                </div>
            </div>
        </div>

        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th>Nama aturan</th>
                        <th>Basis hitung</th>
                        <th>Rentang minimum</th>
                        <th>Rentang maksimum</th>
                        <th>Perhitungan</th>
                        <th>Nilai</th>
                        <th>Periode berlaku</th>
                        <th>Prioritas</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody id="commission-rules-table">
                    <tr>
                        <td colspan="10">
                            <div class="empty-state">
                                Belum ada aturan komisi.
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- PANEL RIWAYAT SIMULASI KOMISI -->
    <div class="panel" id="commission-simulations-panel"
         style="margin-top:16px">

        <div class="panel-head">
            <div>
                <div class="panel-title">
                    Riwayat simulasi komisi per transaksi
                </div>
                <div class="panel-sub" id="commission-scope-note">
                    Daftar transaksi yang menjadi dasar simulasi komisi sales.
                </div>
            </div>

            <button class="btn btn-secondary btn-sm"
                    id="commission-refresh">
                Hitung ulang simulasi
            </button>
        </div>

        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th>Sales Order</th>
                        <th>Tanggal</th>
                        <th>Customer</th>
                        <th>Sales</th>
                        <th>Basis penjualan</th>
                        <th>Basis profit</th>
                        <th>Aturan terpilih</th>
                        <th>Estimasi komisi</th>
                        <th>Status transaksi</th>
                    </tr>
                </thead>

                <tbody id="commission-payouts-table">
                    <tr>
                        <td colspan="9">
                            <div class="empty-state">
                                Belum ada transaksi Sales Order.
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</section>
@endsection
