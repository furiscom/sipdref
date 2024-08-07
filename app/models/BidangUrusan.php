<?php

class BidangUrusan
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
        $query = 'SELECT * FROM bidang_urusan';
        $result = $this->db->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getById($id)
    {
        $stmt = $this->db->prepare('SELECT * FROM bidang_urusan WHERE id_bidang_urusan = ?');
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function create($data)
    {
        $stmt = $this->db->prepare('INSERT INTO bidang_urusan (tahun, id_daerah, id_urusan, id_fungsi, kode_bidang_urusan, nama_bidang_urusan, id_unik, is_locked, created_user, created_at, created_ip, set_prov, set_kab_kota, id_daerah_khusus, bidang_urusan_alias) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
        $stmt->bind_param('iisssssiiiiiiis', $data['tahun'], $data['id_daerah'], $data['id_urusan'], $data['id_fungsi'], $data['kode_bidang_urusan'], $data['nama_bidang_urusan'], $data['id_unik'], $data['is_locked'], $data['created_user'], $data['created_at'], $data['created_ip'], $data['set_prov'], $data['set_kab_kota'], $data['id_daerah_khusus'], $data['bidang_urusan_alias']);
        return $stmt->execute();
    }

    public function update($data)
    {
        $stmt = $this->db->prepare('UPDATE bidang_urusan SET tahun = ?, id_daerah = ?, id_urusan = ?, id_fungsi = ?, kode_bidang_urusan = ?, nama_bidang_urusan = ?, id_unik = ?, is_locked = ?, updated_user = ?, updated_at = ?, updated_ip = ?, set_prov = ?, set_kab_kota = ?, id_daerah_khusus = ?, bidang_urusan_alias = ? WHERE id_bidang_urusan = ?');
        $stmt->bind_param('iisssssiiiiiiis', $data['tahun'], $data['id_daerah'], $data['id_urusan'], $data['id_fungsi'], $data['kode_bidang_urusan'], $data['nama_bidang_urusan'], $data['id_unik'], $data['is_locked'], $data['updated_user'], $data['updated_at'], $data['updated_ip'], $data['set_prov'], $data['set_kab_kota'], $data['id_daerah_khusus'], $data['bidang_urusan_alias'], $data['id_bidang_urusan']);
        return $stmt->execute();
    }

    public function delete($id)
    {
        $stmt = $this->db->prepare('DELETE FROM bidang_urusan WHERE id_bidang_urusan = ?');
        $stmt->bind_param('i', $id);
        return $stmt->execute();
    }
}
