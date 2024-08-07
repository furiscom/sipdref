<?php

require_once '../models/SumberDana.php';

class SumberDanaController
{
    public function index()
    {
        $sumberDana = new SumberDana();
        $data = $sumberDana->getAll();
        include('../views/sumber_dana/index.php');
    }

    public function create()
    {
        include('../views/sumber_dana/create.php');
    }

    public function store()
    {
        $sumberDana = new SumberDana();
        $sumberDana->create($_POST);
        header('Location: index.php');
    }

    public function edit($id)
    {
        $sumberDana = new SumberDana();
        $data = $sumberDana->getById($id);
        include('../views/sumber_dana/edit.php');
    }

    public function update()
    {
        $sumberDana = new SumberDana();
        $sumberDana->update($_POST);
        header('Location: index.php');
    }

    public function delete($id)
    {
        $sumberDana = new SumberDana();
        $sumberDana->delete($id);
        header('Location: index.php');
    }
}
