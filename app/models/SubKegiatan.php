<?php

class SubKegiatan
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
        $query = 'SELECT * FROM sub_kegiatan';
        $result = $this->db->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getById($id)
    {
        $stmt = $this->db->prepare('SELECT * FROM sub_kegiatan WHERE id_sub_giat = ?');
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function create($data)
    {
        $stmt = $this->db->prepare('INSERT INTO sub_kegiatan (tahun, id_urusan, id_bidang_urusan, id_program, id_giat, kode_sub_giat, nama_sub_giat) VALUES (?, ?, ?, ?, ?, ?, ?)');
        $stmt->bind_param('iiissss', $data['tahun'], $data['id_urusan'], $data['id_bidang_urusan'], $data['id_program'], $data['id_giat'], $data['kode_sub_giat'], $data['nama_sub_giat']);
        return $stmt->execute();
    }

    public function update($data)
    {
        $stmt = $this->db->prepare('UPDATE sub_kegiatan SET tahun = ?, id_urusan = ?, id_bidang_urusan = ?, id_program = ?, id_giat = ?, kode_sub_giat = ?, nama_sub_giat = ? WHERE id_sub_giat = ?');
        $stmt->bind_param('iiissssi', $data['tahun'], $data['id_urusan'], $data['id_bidang_urusan'], $data['id_program'], $data['id_giat'], $data['kode_sub_giat'], $data['nama_sub_giat'], $data['id_sub_giat']);
        return $stmt->execute();
    }

    public function delete($id)
    {
        $stmt = $this->db->prepare('DELETE FROM sub_kegiatan WHERE id_sub_giat = ?');
        $stmt->bind_param('i', $id);
        return $stmt->execute();
    }
}
