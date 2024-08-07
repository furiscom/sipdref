<?php

class Urusan
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
        $query = 'SELECT * FROM urusan';
        $result = $this->db->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getById($id)
    {
        $stmt = $this->db->prepare('SELECT * FROM urusan WHERE id_urusan = ?');
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function create($data)
    {
        $stmt = $this->db->prepare('INSERT INTO urusan (tahun, id_daerah, kode_urusan, nama_urusan, id_unik, is_locked, created_user, created_at, created_ip) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)');
        $stmt->bind_param('iissiiiii', $data['tahun'], $data['id_daerah'], $data['kode_urusan'], $data['nama_urusan'], $data['id_unik'], $data['is_locked'], $data['created_user'], $data['created_at'], $data['created_ip']);
        return $stmt->execute();
    }

    public function update($data)
    {
        $stmt = $this->db->prepare('UPDATE urusan SET tahun = ?, id_daerah = ?, kode_urusan = ?, nama_urusan = ?, id_unik = ?, is_locked = ?, updated_user = ?, updated_at = ?, updated_ip = ? WHERE id_urusan = ?');
        $stmt->bind_param('iissiiiiii', $data['tahun'], $data['id_daerah'], $data['kode_urusan'], $data['nama_urusan'], $data['id_unik'], $data['is_locked'], $data['updated_user'], $data['updated_at'], $data['updated_ip'], $data['id_urusan']);
        return $stmt->execute();
    }

    public function delete($id)
    {
        $stmt = $this->db->prepare('DELETE FROM urusan WHERE id_urusan = ?');
        $stmt->bind_param('i', $id);
        return $stmt->execute();
    }
}
