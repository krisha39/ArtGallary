<?php

class DbHandler 
{
    private $conn;
	
    function __construct() {
        require_once dirname(__FILE__) . '/DbConnect.php';
        // opening db connection
        $db = new DbConnect();
        $this->conn = $db->connect();
    }

    public function get_employee()
    {
        $sql_query="CALL get_employee()";
       
        $stmt = $this->conn->query($sql_query);
        $this->conn->next_result();
        $list=array();
        while ( $row = $stmt->fetch_assoc()) {
            $list[]=$row;
        }

        $stmt->close();

        if (count($list)>0)
        {
            $result=array(
                'success'=>true,
                'Data'=>$list
            );
        }
        else
        {
            $result=array(
                'success'=>false,
                'message'=>NOT_FOUND
            );
        }
        return $result;
    }

    public function get_role()
    {
        $sql_query="CALL get_role()";
       
        $stmt = $this->conn->query($sql_query);
        $this->conn->next_result();
        $list=array();
        while ( $row = $stmt->fetch_assoc()) {
            $list[]=$row;
        }

        $stmt->close();

        if (count($list)>0)
        {
            $result=array(
                'success'=>true,
                'Data'=>$list
            );
        }
        else
        {
            $result=array(
                'success'=>false,
                'message'=>NOT_FOUND
            );
        }
        return $result;
    }

    public function get_dept()
    {
        $sql_query="CALL get_dept()";
       
        $stmt = $this->conn->query($sql_query);
        $this->conn->next_result();
        $list=array();
        while ( $row = $stmt->fetch_assoc()) {
            $list[]=$row;
        }

        $stmt->close();

        if (count($list)>0)
        {
            $result=array(
                'success'=>true,
                'Data'=>$list
            );
        }
        else
        {
            $result=array(
                'success'=>false,
                'message'=>NOT_FOUND
            );
        }
        return $result;
    }

    public function get_all_data()
    {
        $sql_query="CALL get_all_data()";
       
        $stmt = $this->conn->query($sql_query);
        $this->conn->next_result();
        $list=array();
        while ( $row = $stmt->fetch_assoc()) {
            $list[]=$row;
        }

        $stmt->close();

        if (count($list)>0)
        {
            $result=array(
                'success'=>true,
                'Data'=>$list
            );
        }
        else
        {
            $result=array(
                'success'=>false,
                'message'=>NOT_FOUND
            );
        }
        return $result;
    }

    public function add_employee( $first_name, $last_name, $job_title, $manager )
    {
        $sql_query="CALL add_employee(?,?,?,?,@is_done)";
        $stmt      = $this->conn->prepare($sql_query);
        $stmt->bind_param('ssss',$first_name, $last_name, $job_title, $manager);
        $stmt->execute();
        $stmt->close();
                
        $stmt1 = $this->conn->prepare("SELECT @is_done AS is_done");
        $stmt1->execute();
        $stmt1->bind_result($is_done);       
        $stmt1->fetch();
        $stmt1->close();
            
        if ($is_done) {
            $result=array(
                'success'=>true,
                // 'id'=>$c_id,
                'message'=>"Data Added Successfully"
            );
        }
        else
        {
            $result=array(
                'success'=>false,
                'message'=>"Something went wrong!"
            );
        }
        return $result;
    }

    public function add_department( $department )
    {
        $sql_query="CALL add_department(?,@is_done)";
        $stmt      = $this->conn->prepare($sql_query);
        $stmt->bind_param('s',$department);
        $stmt->execute();
        $stmt->close();
                
        $stmt1 = $this->conn->prepare("SELECT @is_done AS is_done");
        $stmt1->execute();
        $stmt1->bind_result($is_done);       
        $stmt1->fetch();
        $stmt1->close();
            
        if ($is_done) {
            $result=array(
                'success'=>true,
                // 'id'=>$c_id,
                'message'=>"Data Added Successfully"
            );
        }
        else
        {
            $result=array(
                'success'=>false,
                'message'=>"Something went wrong!"
            );
        }
        return $result;
    }

    public function add_role( $role )
    {
        $sql_query="CALL add_role(?,@is_done)";
        $stmt      = $this->conn->prepare($sql_query);
        $stmt->bind_param('s',$role);
        $stmt->execute();
        $stmt->close();
                
        $stmt1 = $this->conn->prepare("SELECT @is_done AS is_done");
        $stmt1->execute();
        $stmt1->bind_result($is_done);       
        $stmt1->fetch();
        $stmt1->close();
            
        if ($is_done) {
            $result=array(
                'success'=>true,
                // 'id'=>$c_id,
                'message'=>"Data Added Successfully"
            );
        }
        else
        {
            $result=array(
                'success'=>false,
                'message'=>"Something went wrong!"
            );
        }
        return $result;
    }
}


?>
