<?php

namespace App\Interfaces;

interface ItemsRepositoryInterface{
    public function index();
    public function find($id);
    public function update($id, $request);
    public function destroy($id);
}