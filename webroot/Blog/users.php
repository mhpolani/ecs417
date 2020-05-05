<?php
require('connect.php');

function dd($value)
{
    echo "<pre>", print_r($value,true), "</pre";
    die();
}
function executeQuery($sql,$data)
{
    global $conn;
    $stmt = $conn->prepare($sql);
    $values = array_values($data);
    $types = str_repeat('s',count($values));
    $stmt->bind_param($types, ...$values);
    $stmt->execute();
    return $stmt;
}

function selectAll($table, $conditions = [])
{
    global $conn;
    $sql = "SELECT * FROM $table";
    if(empty($conditions))
    {
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;    
    }
    else
    {
        // $sql = "SELECT * FROM $tab
        $i = 0;
        foreach($conditions as $key => $value)        
        {
            if ($i === 0)
            {
                $sql = $sql . " WHERE $key=?";
            }
            else
            {
                $sql = $sql . " AND $key=?";                
            }
            $i++;
        }
        
        $stmt = $conn->prepare($sql);   
        $values = array_values($conditions);
        $types = str_repeat('s',count($values));  //
        $stmt->bind_param($types, ...$values);   //Bind parameters—also called dynamic parameters or bind variables—are an alternative way to pass data to the database. ... When using bind parameters you do not write the actual values but instead insert placeholders into the SQL statement. That way the statements do not change when executing them with different values.
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;    
    }
}

function selectOne($table, $conditions)
{
    
    $sql = "SELECT * FROM $table";
        
        // $sql = "SELECT * FROM $tab
        $i = 0;
        foreach($conditions as $key => $value)        
        {
            if ($i === 0)
            {
                $sql = $sql . " WHERE $key=?";
            }
            else
            {
                $sql = $sql . " AND $key=?";                
            }
            $i++;
        }
        
        global $conn; 
        $sql = $sql . " LIMIT 1";    //Limits records grabbed to only 1
        $stmt = $conn->prepare($sql);               //start of executeQuery()
        $values = array_values($conditions);
        $types = str_repeat('s',count($values));  //
        $stmt->bind_param($types, ...$values);   //Bind parameters—also called dynamic parameters or bind variables—are an alternative way to pass data to the database. ... When using bind parameters you do not write the actual values but instead insert placeholders into the SQL statement. That way the statements do not change when executing them with different values.
        $stmt->execute();
        $records = $stmt->get_result()->fetch_assoc();
        return $records;       //end of executeQuery()
}

function create($table,$data)
{
    global $conn;
    $sql = "INSERT INTO $table SET ";
    
    $i = 0;
    foreach($data as $key => $value)        
    {
        if ($i === 0)
        {
            $sql = $sql . " $key=?";
        }
        else
        {
            $sql = $sql . ", $key=?";                
        }
        $i++;
    }
    
    $stmt = executeQuery($sql,$data);
    $id = $stmt->insert_id;   //grab the id of the record
    return $id;
}

function update($table, $id, $data)
{
    global $conn;
    $sql = "UPDATE $table SET ";
    
    $i = 0;
    foreach($data as $key => $value)        
    {
        if ($i === 0)
        {
            $sql = $sql . " $key=?";
        }
        else
        {
            $sql = $sql . ", $key=?";                
        }
        $i++;
    }
    $sql = $sql . " WHERE id=?";
    $data['id'] = $id;
    $stmt = executeQuery($sql,$data);
    return $stmt->affected_rows;  //will return a negative value if query fails 
}

function delete($table, $id)
{
    global $conn;
    $sql = "DELETE from $table WHERE id=?";
    $stmt = executeQuery($sql,['id' => $id]);
    return $stmt->affected_rows;  //will return a negative value if query fails 
}





//The selectAll function returns all the records in the database, provided that the conditions, if passed, are met.
//All the records in the table represent an array that in turn holds arrays, each of which represents a record.

if (isset($_POST['register-btn']))
{
    unset($_POST['register-btn']);
    unset($_POST['passwordConfirmation']);
    $_POST['ad'] = 0;
    $_POST['pw'] = password_hash($_POST['pw'], PASSWORD_DEFAULT);
    $user_id = create('USERS', $_POST);
    $user = selectOne('USERS', ['id' => $user_id]);
    dd($user);
} 
?>