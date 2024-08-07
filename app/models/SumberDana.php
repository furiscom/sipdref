<?php

class SumberDana
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
        $query = 'SELECT * FROM Sumber_Dana';
        $result = $this->db->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getById($id)
    {
        $stmt = $this->db->prepare('SELECT * FROM Sumber_Dana WHERE id_dana = ?');
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function create($data)
    {
        $stmt = $this->db->prepare('INSERT INTO Sumber_Dana (kode_dana, nama_dana, is_locked, sumber_dana, set_input) VALUES (?, ?, ?, ?, ?)');
        $stmt->bind_param('sssss', $data['kode_dana'], $data['nama_dana'], $data['is_locked'], $data['sumber_dana'], $data['set_input']);
        return $stmt->execute();
    }

    public function update($data)
    {
        $stmt = $this->db->prepare('UPDATE Sumber_Dana SET kode_dana = ?, nama_dana = ?, is_locked = ?, sumber_dana = ?, set_input = ? WHERE id_dana = ?');
        $stmt->bind_param('sssssi', $data['kode_dana'], $data['nama_dana'], $data['is_locked'], $data['sumber_dana'], $data['set_input'], $data['id_dana']);
        return $stmt->execute();
    }

    public function delete($id)
    {
        $stmt = $this->db->prepare('DELETE FROM Sumber_Dana WHERE id_dana = ?');
        $stmt->bind_param('i', $id);
        return $stmt->execute();
    }
}
