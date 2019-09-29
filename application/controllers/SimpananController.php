<?php

class SimpananController extends GLOBAL_Controller{

    public function __construct()
    {
        parent::__construct();
        $model = array('SimpananModel');
		$this->load->model($model);
    }

    public function simpananAmanah()
    {
    	if (isset($_POST['simpan'])){
    		$data = array(
    			'simpanan_anggota_id' => parent::post('anggota'),
				'simpanan_jenis' => 'amanah',
				'simpanan_total' => parent::post('setoran'),
				'simpanan_keterangan' => 'SIMPANAN AMANAH : Simpanan bersifat umum yang penyimpanan dan penarikannya dapat dilakukan kapan saja oleh nasabah pada jam kerja. Simpanan awal Rp 25.000 dan selanjutnya minimal Rp 10.000.'
			);

			$simpan = parent::model('SimpananModel')->tambah($data);

			if ($simpan > 0 ){
				parent::alert('alert','sukses_tambah');
				redirect('simpanan-amanah');
			} else {
				parent::alert('alert','gagal_tambah');
				redirect('simpanan-amanah');
			}
		} else {
			$data['title'] = 'Simpanan Amanah';
			$data['amanah'] = parent::model('SimpananModel')->lihat_semua()->result_array();

			parent::template('simpanan/amanah',$data);
		}
    }

    public function simpananQurbanAqikah()
    {
        if (isset($_POST['simpan'])){
            $data = array(
                'simpanan_anggota_id' => parent::post('anggota'),
                'simpanan_jenis' => 'kurban',
                'simpanan_total' => parent::post('setoran'),
                'simpanan_keterangan' => 'SIMPANAN AQIQAH/QURBAN : Adalah simpanan yang dipersiapkan untuk membantu pembelian hewan kurban pada saat hari raya Idul Adha atau pembelian hewan untuk Aqiqoh. Simpanan dapat diambil 1 bulan sebelum hari raya Idul Adha atau untuk keperluan Aqiqoh simpanan dapat diambil sesuai keinginan. Setoran awal minimal Rp 100.000 selanjutnya minimal Rp 50.000.'
            );

            $simpan = parent::model('SimpananModel')->tambah($data);

            if ($simpan > 0 ){
                parent::alert('alert','sukses_tambah');
                redirect('simpanan-qurban-aqikah');
            } else {
                parent::alert('alert','gagal_tambah');
                redirect('simpanan-qurban-aqikah');
            }
        } else {
            $data['title'] = 'Simpanan Aqikah/Qurban';
            $data['aqikahQurban'] = parent::model('SimpananModel')->lihat_semua()->result_array();

            parent::template('simpanan/aqikahQurban', $data);
        }
    }

    public function simpananUmrah()
    {
        if (isset($_POST['simpan'])){
            $data = array(
                'simpanan_anggota_id' => parent::post('anggota'),
                'simpanan_jenis' => 'umroh',
                'simpanan_total' => parent::post('setoran'),
                'simpanan_keterangan' => 'SIMPANAN UMRAH : Adalah jenis produk simpanan yang disediakan untuk persiapan melakukan ibadah umroh atau haji sebagai tambahan uang saku atau pelunasan pembayaran ongkos umroh atau haji. Waktu pengambilan simpanan dapat dilakukan 1 bulan sebelum keberangkatan. Setoran awal minimal sebesar Rp 500.000.'
            );

            $simpan = parent::model('SimpananModel')->tambah($data);

            if ($simpan > 0 ){
                parent::alert('alert','sukses_tambah');
                redirect('simpanan-umrah');
            } else {
                parent::alert('alert','gagal_tambah');
                redirect('simpanan-umrah');
            }
        } else {
            $data['title'] = 'Simpanan Umrah dan Haji';
            $data['umrah'] = parent::model('SimpananModel')->lihat_semua()->result_array();

            parent::template('simpanan/umrah', $data);
        }
    }

    public function simpananIdulFitri()
    {
        if (isset($_POST['simpan'])){
            $data = array(
                'simpanan_anggota_id' => parent::post('anggota'),
                'simpanan_jenis' => 'idul_fitri',
                'simpanan_total' => parent::post('setoran'),
                'simpanan_keterangan' => 'SIMPANAN IDUL FITRI : Adalah jenis simpanan yang disediakan untuk kebutuhan menjelang hari raya Idul Fitri yang proses pengambilannya hanya bisa dilakukan 1 bulan sebelum hari raya Idul Fitri. Setoran awal minimal Rp 25.000 selanjutnya minimal Rp 10.000'
            );

            $simpan = parent::model('SimpananModel')->tambah($data);

            if ($simpan > 0 ){
                parent::alert('alert','sukses_tambah');
                redirect('simpanan-idul-fitri');
            } else {
                parent::alert('alert','gagal_tambah');
                redirect('simpanan-idul-fitri');
            }
        } else {
            $data['title'] = 'Simpanan Idul Fitri';
            $data['idulFitri'] = parent::model('SimpananModel')->lihat_semua()->result_array();

            parent::template('simpanan/idulFitri', $data);
        }
    }

    public function simpananWadiah()
    {
        if (isset($_POST['simpan'])){
            $data = array(
                'simpanan_anggota_id' => parent::post('anggota'),
                'simpanan_jenis' => 'wadiah',
                'simpanan_total' => parent::post('setoran'),
                'simpanan_keterangan' => 'SIMPANAN WADIAH : Adalah jenis simpanan atau penitipan dana dimana pihak Koperasi dengan atau tanpa izin pemilik dana dapat memanfaatkan dana titipan dan harus bertanggung jawab terhadap dana tersebut. Semua manfaat dan keuntungan yang diperoleh dalam penggunaan dana tersebut menjadi hak penerima titipan. Waktu penyimpanan dan penarikan simpanan dapat dilakukan kapan saja sesuai keinginan pemilik dana. Simpanan awal sebesar Rp 25.000,- dan selanjutnya tidak dibatasi'
            );

            $simpan = parent::model('SimpananModel')->tambah($data);

            if ($simpan > 0 ){
                parent::alert('alert','sukses_tambah');
                redirect('simpanan-wadiah');
            } else {
                parent::alert('alert','gagal_tambah');
                redirect('simpanan-wadiah');
            }
        } else {
            $data['title'] = 'Simpanan Wadiah';
            $data['wadiah'] = parent::model('SimpananModel')->lihat_semua()->result_array();

            parent::template('simpanan/wadiah', $data);
        }
    }

}
