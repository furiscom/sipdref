<?php

require_once '../models/Kegiatan.php';

class KegiatanController
{
    public function index()
    {
        $kegiatan = new Kegiatan();
        $data = $kegiatan->getAll();
        include('../views/kegiatan/index.php');
    }

    public function create()
    {
        include('../views/kegiatan/create.php');
    }

    public function store()
    {
        $kegiatan = new Kegiatan();
        $kegiatan->create($_POST);
        header('Location: index.php');
    }

    public function edit($id)
    {
        $kegiatan = new Kegiatan();
        $data = $kegiatan->getById($id);
        include('../views/kegiatan/edit.php');
    }

    public function update()
    {
        $kegiatan = new Kegiatan();
        $kegiatan->update($_POST);
        header('Location: index.php');
    }

    public function delete($id)
    {
        $kegiatan = new Kegiatan();
        $kegiatan->delete($id);
        header('Location: index.php');
    }
}
