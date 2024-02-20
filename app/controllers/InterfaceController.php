<?php
namespace App\Controllers;
interface  InterfaceController {
    public function create();
    public function add();

    public function edit($id);
    public function update($id);
    public function destroy($id);

}