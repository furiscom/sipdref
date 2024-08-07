<?php

require_once('../models/BidangUrusan.php');

class BidangUrusanController
{
    public function index()
    {
        $bidangUrusan = new BidangUrusan();
        $data = $bidangUrusan->getAll();
        include('../views/bidang_urusan/index.php');
    }

    public function create()
    {
        include('../views/bidang_urusan/create.php');
    }

    public function store()
    {
        $bidangUrusan = new BidangUrusan();
        $bidangUrusan->create($_POST);
        header('Location: index.php');
    }

    public function edit($id)
    {
        $bidangUrusan = new BidangUrusan();
        $data = $bidangUrusan->getById($id);
        include('../views/bidang_urusan/edit.php');
    }

    public function update()
    {
        $bidangUrusan = new BidangUrusan();
        $bidangUrusan->update($_POST);
        header('Location: index.php');
    }

    public function delete($id)
    {
        $bidangUrusan = new BidangUrusan();
        $bidangUrusan->delete($id);
        header('Location: index.php');
    }
}
