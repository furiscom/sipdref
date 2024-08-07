<?php

class Akun
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
        $query = 'SELECT * FROM akun';
        $result = $this->db->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getById($id)
    {
        $stmt = $this->db->prepare('SELECT * FROM akun WHERE id_akun = ?');
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function create($data)
    {
        $stmt = $this->db->prepare('INSERT INTO akun (tahun, id_daerah, id_urusan, id_bidang_urusan, id_program, id_giat, id_sub_giat, kode_akun, nama_akun, id_unik, is_locked, created_user, created_at, created_ip) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
        $stmt->bind_param('iissssssiiiiis', $data['tahun'], $data['id_daerah'], $data['id_urusan'], $data['id_bidang_urusan'], $data['id_program'], $data['id_giat'], $data['id_sub_giat'], $data['kode_akun'], $data['nama_akun'], $data['id_unik'], $data['is_locked'], $data['created_user'], $data['created_at'], $data['created_ip']);
        return $stmt->execute();
    }

    public function update($data)
    {
        $stmt = $this->db->prepare('UPDATE akun SET tahun = ?, id_daerah = ?, id_urusan = ?, id_bidang_urusan = ?, id_program = ?, id_giat = ?, id_sub_giat = ?, kode_akun = ?, nama_akun = ?, id_unik = ?, is_locked = ?, updated_user = ?, updated_at = ?, updated_ip = ? WHERE id_akun = ?');
        $stmt->bind_param('iissssssiiiiisi', $data['tahun'], $data['id_daerah'], $data['id_urusan'], $data['id_bidang_urusan'], $data['id_program'], $data['id_giat'], $data['id_sub_giat'], $data['kode_akun'], $data['nama_akun'], $data['id_unik'], $data['is_locked'], $data['updated_user'], $data['updated_at'], $data['updated_ip'], $data['id_akun']);
        return $stmt->execute();
    }

    public function delete($id)
    {
        $stmt = $this->db->prepare('DELETE FROM akun WHERE id_akun = ?');
        $stmt->bind_param('i', $id);
        return $stmt->execute();
    }
}
