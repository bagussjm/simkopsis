<div class="row show-on-large hide-on-small-only" >
    <div class="col s12 ">
        <div class="card">
            <div class="card-content margin" style="margin: 12px;">
                <div class="row">
                    <div class="col s6 m6 l6">
                        <h4 class="cardbox-text light left margin">daftar simpanan Umrah</h4>
                    </div>
                    <!--                    <div class="col s6 m6 l6">-->
                    <!--                        <a href="#tambah-kategori" class="btn-flat white-text blue right waves-effect waves-light modal-trigger">-->
                    <!--                            tambah kategori-->
                    <!--                        </a>-->
                    <!--                    </div>-->

                </div>
            </div>

            <br>
            <div class="divider"></div>
            <table class="bordered" id="barang-table">
                <thead>
                <tr>
                    <th >Kode Anggota</th>
                    <th >Nama Anggota</th>
                    <th >Pekerjaan</th>
                    <th >Tanggal Simpan</th>
                    <th >Total Setoran</th>
                    <th class="center">AKSI</th>
                </tr>
                </thead>
                <tbody>
				<?php
				$no  = 1;
				foreach ($umrah  as $key=>$value):
                    if ($value['simpanan_jenis'] === 'umroh'):
                ?>
                <tr>
                    <td class="grey-text text-darken-1"><?=$no?></td>
                    <td class="teal-text text-darken-1">
                        <a href="<?= base_url('anggota/'.$value['anggota_id'])?>" style="text-decoration: underline">
                            <?=$value['anggota_nama']?>
                        </a>
                    </td>
                    <td class="grey-text text-darken-1"><?=$value['anggota_pekerjaan']?></td>
                    <td class="grey-text text-darken-1">
						<?=$value['simpanan_date_created']?>
                    </td>
                    <td class="grey-text text-darken-1"> Rp <?= number_format($value['simpanan_total'],2,",",".")?></td>
                    <td>
                        <div class="row">
                            <a href="#" class="btn-flat waves-effect waves-orange col l6 center" title="ubah data">
                                <i class="mdi-content-create orange-text"></i>
                            </a>
                        </div>
                    </td>
                </tr>

                <!-- Modal delete -->
                <div id="delete" class="modal">
                    <div class="modal-content">
                        <h4 class="red-text text-lighten-1">
                            <i class="mdi-action-info-outline"></i> Yakin ingin menghapus barang ?
                        </h4>
                        <div class="modal-content">
                            <h4>
                                item yang anda hapus akan tersimpan ke data arsip
                            </h4>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="waves-effect waves-red btn-flat modal-action modal-close">lanjutkan</a>
                        <a href="#!" class="waves-effect btn-flat modal-action modal-close">Batalkan</a>
                    </div>
                </div>
				<?php
				        $no++;
				    endif;
				endforeach;
				?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Floating Action Button -->
<div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
    <a href="#modal-tambah" class="btn-floating btn-large teal modal-trigger" >
        <i class="mdi-av-playlist-add"></i>
    </a>
</div>
<!-- Floating Action Button -->

<!-- Modal delete -->
<div id="modal-tambah" class="modal">
    <?=form_open('simpanan-umrah')?>
        <div class="modal-content center">
            <div class="row">
                <div class="col s12 m12 center">
                    <h5 class="more-text">tambah data simpanan umrah</h5>
                    <h5 class="divider"></h5>
                </div>

                <div class="col s12 m1">
                    <h3 class="grey-text">
                        <i class="mdi-action-perm-identity"></i>
                    </h3>
                </div>
                <div class="input-field col s12 m11">
                    <input id="search-anggota" type="text" class="validate custom-box-search" name="anggota-form" required placeholder="ketikkan nama anggota">
                    <input type="text" name="anggota" id="id-anggota" hidden>
                    <!--set jenis simpanan directly-->
                </div>

                <div class="input-field col s12 m12">
                    <i class="mdi-action-account-balance-wallet prefix grey-text text-lighten-1"></i>
                    <input id="setoran" type="number" name="setoran" required class="simpanan-input" data-minimal="500000">
                    <label for="setoran">Jumlah Setoran</label>
                </div>

                <div class="col s12 m12 ">
                    <div id="simpanan-alert" class="card green lighten-5 z-depth-1">
                        <div class="card-content green-text ">
                            <p>SIMPANAN UMRAH : Adalah jenis produk simpanan yang disediakan untuk persiapan melakukan ibadah umroh atau haji sebagai tambahan uang saku atau pelunasan pembayaran ongkos umroh atau haji. Waktu pengambilan simpanan dapat dilakukan 1 bulan sebelum keberangkatan. Setoran awal minimal sebesar Rp 500.000.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" name="simpan" class="waves-effect waves-red btn-flat " id="simpanan-simpan-button">simpan</button>
            <a href="#!" class="waves-effect btn-flat modal-action modal-close">Batalkan</a>
        </div>
    <?=form_close()?>
</div>
