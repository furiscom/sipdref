<?php

require_once '../models/Akun.php';

class AkunController
{
    public function index()
    {
        $akun = new Akun();
        $data = $akun->getAll();
        include('../views/akun/index.php');
    }

    public function create()
    {
        include('../views/akun/create.php');
    }

    public function store()
    {
        $akun = new Akun();
        $akun->create($_POST);
        header('Location: index.php');
    }

    public function edit($id)
    {
        $akun = new Akun();
        $data = $akun->getById($id);
        include('../views/akun/edit.php');
    }

    public function update()
    {
        $akun = new Akun();
        $akun->update($_POST);
        header('Location: index.php');
    }

    public function delete($id)
    {
        $akun = new Akun();
        $akun->delete($id);
        header('Location: index.php');
    }
}
