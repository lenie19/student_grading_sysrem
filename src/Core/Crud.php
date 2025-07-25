<?php
namespace Antipuesto\Gs\Core;

interface crud {
    public function create();
    public function read();
    public function update($id);
    public function delete($id);
    
}
