<?php

require_once '../models/SubKegiatan.php';

class SubKegiatanController
{
    public function index()
    {
        $subKegiatan = new SubKegiatan();
        $data = $subKegiatan->getAll();
        include('../views/sub_kegiatan/index.php');
    }

    public function create()
    {
        include('../views/sub_kegiatan/create.php');
    }

    public function store()
    {
        $subKegiatan = new SubKegiatan();
        $subKegiatan->create($_POST);
        header('Location: index.php');
    }

    public function edit($id)
    {
        $subKegiatan = new SubKegiatan();
        $data = $subKegiatan->getById($id);
        include('../views/sub_kegiatan/edit.php');
    }

    public function update()
    {
        $subKegiatan = new SubKegiatan();
        $subKegiatan->update($_POST);
        header('Location: index.php');
    }

    public function delete($id)
    {
        $subKegiatan = new SubKegiatan();
        $subKegiatan->delete($id);
        header('Location: index.php');
    }
}
