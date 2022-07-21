<?php
class Connection extends mysqli {
	public $MySQL;
    
    public function __construct(){
        $this->connectDB();
    }

	public function initMySql() 
	{
        $this->MySQL = new stdClass();
        $this->MySQL->Connection = null;
        $this->MySQL->TotalQuery = 0;
        $this->MySQL->Configurations = null;
		$this->MySQL->Error = null;
        $this->MySQL->Con = null;
	}
	
	private function connectDB() {
		$this->initMySql();
        parent::__construct(DBHOST, DBUSER, DBPASS, DBNAME);
        if (mysqli_connect_error()){
			$this->SystemExit("Error: [" . mysqli_connect_errno() ."] ". mysqli_connect_error(), __LINE__, __FILE__);
			$this->MySQL->Connection = false;
			$this->MySQL->Error = "mysqli_connect_errno() . mysqli_connect_error()";
        }else{
			$this->MySQL->Connection = true;
		}
    }
	
	private function DBase($type, $params) {
        $output = new stdClass(); 
        if (!$this->MySQL->Connection)
        $this->SystemExit('No available MySQLi connection', __LINE__, __FILE__);
        
        switch (strtolower($type)) {
        case 'query':
            if ($Query = parent::query($params)) {
                $this->MySQL->TotalQuery++;
                return $Query;
            } else
            $this->SystemExit('MySQLi failed to query: ' . $params, __LINE__, __FILE__);
            break;
        case 'prepare':
            if ($Query = parent::prepare($params)) {
                $this->MySQL->TotalQuery++;
                return $Query;
            } else
            $this->SystemExit('MySQLi failed to prepare: ' . $params, __LINE__, __FILE__);
            break;
        case 'escapestring':                
            if ($Escape = parent::real_escape_string($params))
            return $Escape;
            else
            $this->SystemExit('MySQLi failed to escape: ' . $params, __LINE__, __FILE__);                
            break;
        }
    }
	
    public function Exec($type, $data, $fetchAll = null){
        $this->connectDB();
        $output = new stdClass();
        $output->status = false;
        $output->message = "";
        if(isset($type)){
            switch($type){
                case 'fetch':
                    $query = $this->DBase('query', $data);
                    if($fetchAll){
                        $output->data = $query->fetch_all(MYSQLI_ASSOC);
                        $output->status = true;
                    }else{
                        $output->data = $query->fetch_object();
                        if($output->data){
                            $output->status = true;
                        }
                    }
                break;
                case 'update':
                    try {
                        $query = $this->DBase('prepare', $data);
                        if ($query->execute()) { 
                            $output->status = true;
                        } else {
                            $output->status = false;
                        }
                    } catch(PDOException $e){
                        $output->message = $e->getMessage();
                    }
                break;
                case 'insert':
                    try {
                        $query = $this->DBase('query', $data);
                        $output->status = true;
                        $output->data = json_encode($query);
                    } catch(PDOException $e){
                        $output->message = $e->getMessage();
                    }
                break;
                case 'delete':
                    $query = $this->DBase('prepare', $data);
                    if ($query->execute()) { 
                        $output->status = true;
                    }
                break;
                default:
                    $output->status = false;
                    $output->message = "No query parameter";
                break;
            }
        }else{
            $output->status = false;
            $output->message = "No query parameter";
        }
        return $output;
    }

    public function get($query, $all = false){
        if(isset($all)){
             return $this->Exec("fetch", $query, true);
        }else{
             return $this->Exec("fetch", $query);
        }
    }

    public function add($query){
        return $this->Exec("insert", $query);
    }

    public function update($query){
        return $this->Exec("update", $query);
    }

    public function delete($query){
        return $this->Exec("delete", $query);
    }

	public function SystemExit($text, $line, $file = null) {
        if (ob_get_level()) ob_end_clean();
        header('Content-Type: text/plain');
        print ("$text");
        print ("Dated: " . date("F j, Y - g:i a"));
        //print ("\nLocation: $file ($line)");
        exit(1);
    }
}
?>