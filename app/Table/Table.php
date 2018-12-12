<?php

namespace App\Table;

use Core\Database\Mysqldatabase;
use App;
/**
 * Description of Table
 *
 * @author Eddy
 */
class Table {
    
    protected $table;
    protected $db;


    public function test() {
        $db->getDb();
        var_dump($db);
        $this->db = $db;
        var_dump($this->db);
    }
    
    
    
}
