<?php

require_once('../models/Urusan.php');

class UrusanController
{
    public function index()
    {
        $urusan = new Urusan();
        $data = $urusan->getAll();
        include('../views/urusan/index.php');
    }

    public function create()
    {
        include('../views/urusan/create.php');
    }

    public function store()
    {
        $urusan = new Urusan();
        $urusan->create($_POST);
        header('Location: index.php');
    }

    public function edit($id)
    {
        $urusan = new Urusan();
        $data = $urusan->getById($id);
        include('../views/urusan/edit.php');
    }

    public function update()
    {
        $urusan = new Urusan();
        $urusan->update($_POST);
        header('Location: index.php');
    }

    public function delete($id)
    {
        $urusan = new Urusan();
        $urusan->delete($id);
        header('Location: index.php');
    }
}
