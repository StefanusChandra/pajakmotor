<?php
class User_controller extends CI_Controller
{

    function index()
    {
        $data['datapajak'] = $this->m_data->tampil_data()->result();
        $this->load->view('tampil', $data);
    }
    function tambah()
    {
        $this->load->view('tambah');
    }
    function hapus($no_urut)
    {
        $this->m_data->hapus($no_urut);
        // $data['datapajak'] = $this->m_data->tampil();
        redirect(base_url('user_controller'));
    }
    function edit($no_urut)
    {
        $where = array('no_urut' => $no_urut);
        $data['datapajak'] = $this->m_data->edit($where, 'datapajak')->result();
        $this->load->view('edit', $data);
    }
    function update()
    {
        $no_urut = $this->input->post('no_urut');
        $jenis_motor = $this->input->post('jenis_motor');
        $biaya_pajak = $this->input->post('biaya_pajak');
        $jumlah = $this->input->post('jumlah');

        $data = array(
            'jenis_motor' => $jenis_motor,
            'biaya_pajak' => $biaya_pajak,
            'jumlah' => $jumlah
        );

        $where = array(
            'no_urut' => $no_urut
        );

        $this->m_data->update($where, $data, 'datapajak');
        redirect('user_controller/index');
    }
    function tambah_aksi()
    {
        $no_urut = $this->input->post('no_urut');
        $jenis_motor = $this->input->post('jenis_motor');
        $biaya_pajak = $this->input->post('biaya_pajak');
        $jumlah = $this->input->post('jumlah');

        $data = array(
            'no_urut' => $no_urut,
            'jenis_motor' => $jenis_motor,
            'biaya_pajak' => $biaya_pajak,
            'jumlah' => $jumlah
        );
        $this->m_data->input_data($data, 'datapajak');
        $this->m_data->datasum($data, 'datapajak');
        redirect('user_controller');
    }
}
