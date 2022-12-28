<?php

namespace App\Interfaces;

interface SaleRepositoryInterface{
    public function index();
    public function destroy($id);
}