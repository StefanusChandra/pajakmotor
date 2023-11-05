<?php
class M_data extends CI_Model
{
    function tampil_data()
    {
        return $this->db->get('datapajak');
    }
    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
    function hapus($no_urut)
    {
        $this->db->where('no_urut', $no_urut);
        $this->db->delete('datapajak', ['no_urut' => $no_urut]);
    }
    function edit($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    function update($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function datasum()
    {
        $this->db->query("UPDATE datapajak set total = biaya_pajak*jumlah");
    }
}
