<?php

namespace App\Interfaces;

interface ExpenseRepositoryInterface{
    public function index();
    public function find($id);
    public function update($id, $request);
    public function destroy($id);
}