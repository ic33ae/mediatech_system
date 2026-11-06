@extends('layouts.app')

@section('content')
<section class="page-view active" id="page-sales-orders">
            <div class="page-head">
              <div>
                <div class="eyebrow">Sales workspace</div>
                <h1 class="page-title">Sales Order</h1>
                <div class="page-desc">
                  Pesanan dari quotation yang disetujui. Produk tersimpan sebagai snapshot; Goods Out dapat memproses beberapa produk sekaligus dan SO dapat dibatalkan dalam 30 menit jika belum diproses.
                </div>
              </div>
              <button class="btn btn-secondary" data-go="quotations">
                Lihat quotation
              </button>
            </div>

<div class="panel">
  <div class="filterbar">
    <input
      class="filter-input"
      id="so-search"
      placeholder="Cari SO / customer…"
    />
    <select
      class="filter-input"
      style="width: 155px"
      id="so-status"
    >
      <option value="all">Semua status</option>
      <option>Open</option>
      <option>Processing</option>
      <option>Completed</option>
      <option>Cancelled</option>
    </select>
  </div>

  <div class="export-tools">
    <button type="button" class="btn btn-secondary" data-export-table="csv">
      Ekspor Excel/CSV
    </button>
    <button type="button" class="btn btn-secondary" data-export-table="pdf">
      Cetak / Simpan PDF
    </button>
  </div>

  <div class="table-wrap">
    <table>
      <thead>
        <tr>
          <th>No. Sales Order</th>
          <th>Customer</th>
          <th>Basis quotation</th>
          <th>Produk</th>
          <th>Tanggal</th>
          <th>Total</th>
          <th>Pengiriman</th>
          <th>Status</th>
          <th>Aksi</th>
        </tr>
      </thead>

      <tbody id="so-table">
        <tr>
          <td class="primary-text">SO-2026-031</td>
          <td>PT Cipta Distribusi Nusantara</td>
          <td>QT-2026-017</td>
          <td style="white-space:normal;min-width:220px;max-width:320px">
            Kamera CCTV Hikvision 2MP (16 Unit), NVR Hikvision 16 Channel (1 Unit), Instalasi jaringan networking (CCTV, access door) (16 Titik)
          </td>
          <td>17 Okt 2026</td>
          <td style="font-weight:700">Rp 22.650.000</td>
          <td>10 / 17 unit</td>
          <td><span class="status s-pending">Processing</span></td>
          <td>
            <div class="row-actions">
              <button class="text-action" data-soview="SO-2026-031">Detail</button>
              <button class="text-action" data-print-doc="sales-order" data-print-id="SO-2026-031">Print</button>
              <button class="text-action" data-so-goodsout="SO-2026-031">Goods Out</button>
            </div>
          </td>
        </tr>

        <tr>
          <td class="primary-text">SO-2026-030</td>
          <td>PT Energi Samudra Migas</td>
          <td>QT-2026-011</td>
          <td>Item belum tersedia</td>
          <td>12 Okt 2026</td>
          <td style="font-weight:700">Rp 48.500.000</td>
          <td>4 / 4 titik</td>
          <td><span class="status s-approved">Completed</span></td>
          <td>
            <div class="row-actions">
              <button class="text-action" data-soview="SO-2026-030">Detail</button>
              <button class="text-action" data-print-doc="sales-order" data-print-id="SO-2026-030">Print</button>
            </div>
          </td>
        </tr>

        <tr>
          <td class="primary-text">SO-2026-029</td>
          <td>PT Maju Retail Indonesia</td>
          <td>QT-2026-009</td>
          <td>Item belum tersedia</td>
          <td>08 Okt 2026</td>
          <td style="font-weight:700">Rp 71.900.000</td>
          <td>0 / 16 unit</td>
          <td><span class="status s-pending">Open</span></td>
          <td>
            <div class="row-actions">
              <button class="text-action" data-soview="SO-2026-029">Detail</button>
              <button class="text-action" data-print-doc="sales-order" data-print-id="SO-2026-029">Print</button>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="table-pagination">
    <span class="pg-count">Menampilkan 1–3 dari 3</span>
    <label>
      Tampilkan
      <select class="pg-size" aria-label="Jumlah data per halaman">
        <option>5</option>
        <option selected>10</option>
        <option>25</option>
        <option>50</option>
      </select>
    </label>
    <button type="button" class="pg-prev" disabled>Sebelumnya</button>
    <span class="pg-page">Halaman 1/1</span>
    <button type="button" class="pg-next" disabled>Berikutnya</button>
  </div>
</div>
          </section>
@endsection
