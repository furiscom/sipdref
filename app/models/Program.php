<?php

class Program
{
    private $db;

    public function __construct()
    {
        $this->db = new mysqli('localhost', 'root', '', 'sipdref');
        if ($this->db->connect_error) {
            die('Connection failed: ' . $this->db->connect_error);
        }
    }

    public function getAll()
    {
        $query = 'SELECT * FROM program';
        $result = $this->db->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getById($id)
    {
        $stmt = $this->db->prepare('SELECT * FROM program WHERE id_program = ?');
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function create($data)
    {
        $stmt = $this->db->prepare('INSERT INTO program (tahun, id_daerah, id_urusan, id_bidang_urusan, kode_program, nama_program, no_program, id_unik, is_locked, created_user, created_at, created_ip, set_prov, set_kab_kota, id_daerah_khusus, papua, papua_barat, yogyakarta, jakarta, aceh, bali, kode_unik, is_setwan, is_setda, kunci_tahun, mulai_tahun) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
        $stmt->bind_param('iissssssiiiiiissiiiiii', $data['tahun'], $data['id_daerah'], $data['id_urusan'], $data['id_bidang_urusan'], $data['kode_program'], $data['nama_program'], $data['no_program'], $data['id_unik'], $data['is_locked'], $data['created_user'], $data['created_at'], $data['created_ip'], $data['set_prov'], $data['set_kab_kota'], $data['id_daerah_khusus'], $data['papua'], $data['papua_barat'], $data['yogyakarta'], $data['jakarta'], $data['aceh'], $data['bali'], $data['kode_unik'], $data['is_setwan'], $data['is_setda'], $data['kunci_tahun'], $data['mulai_tahun']);
        return $stmt->execute();
    }

    public function update($data)
    {
        $stmt = $this->db->prepare('UPDATE program SET tahun = ?, id_daerah = ?, id_urusan = ?, id_bidang_urusan = ?, kode_program = ?, nama_program = ?, no_program = ?, id_unik = ?, is_locked = ?, updated_user = ?, updated_at = ?, updated_ip = ?, set_prov = ?, set_kab_kota = ?, id_daerah_khusus = ?, papua = ?, papua_barat = ?, yogyakarta = ?, jakarta = ?, aceh = ?, bali = ?, kode_unik = ?, is_setwan = ?, is_setda = ?, kunci_tahun = ?, mulai_tahun = ? WHERE id_program = ?');
        $stmt->bind_param('iissssssiiiiiissiiiiii', $data['tahun'], $data['id_daerah'], $data['id_urusan'], $data['id_bidang_urusan'], $data['kode_program'], $data['nama_program'], $data['no_program'], $data['id_unik'], $data['is_locked'], $data['updated_user'], $data['updated_at'], $data['updated_ip'], $data['set_prov'], $data['set_kab_kota'], $data['id_daerah_khusus'], $data['papua'], $data['papua_barat'], $data['yogyakarta'], $data['jakarta'], $data['aceh'], $data['bali'], $data['kode_unik'], $data['is_setwan'], $data['is_setda'], $data['kunci_tahun'], $data['mulai_tahun'], $data['id_program']);
        return $stmt->execute();
    }

    public function delete($id)
    {
        $stmt = $this->db->prepare('DELETE FROM program WHERE id_program = ?');
        $stmt->bind_param('i', $id);
        return $stmt->execute();
    }
}
