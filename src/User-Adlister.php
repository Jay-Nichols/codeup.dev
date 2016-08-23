<?php

// __DIR__ is a *magic constant* with the directory path containing this file.
// This allows us to correctly require_once Model.php, no matter where this file is being required from.
require_once __DIR__ . '/Model-Adlister.php';

class User extends Model
{
    /** Insert a new entry into the database */
    protected function insert()
    {
        // @TODO: Use prepared statements to ensure data security

        // @TODO: You will need to iterate through all the attributes to build the prepared query

        // @TODO: After the insert, add the id back to the attributes array
        //        so the object properly represents a DB record
        
            $query = "INSERT INTO adlister (name, description) VALUES (:name, :description)";
            $stmt = self::$dbc->prepare($query);

            $stmt->bindValue(':name', $this->attributes['name'], PDO::PARAM_STR);
            $stmt->bindValue(':description', $this->attributes['description'], PDO::PARAM_STR);
            $stmt->execute();

            $this->attributes['id'] = self::$dbc->lastInsertId();

        
        // $this->save();
    }

    /** Update existing entry in the database */
    protected function update()
    {
        // @TODO: Use prepared statements to ensure data security

        // @TODO: You will need to iterate through all the attributes to build the prepared query
        
            $query = "UPDATE adlister SET name = :name, description = :description WHERE id = :id";
            $stmt = self::$dbc->prepare($query);

            $stmt->bindValue(':name', $this->attributes['name'], PDO::PARAM_STR);
            $stmt->bindValue(':description', $this->attributes['description'], PDO::PARAM_STR);
            $stmt->bindValue(':id', $this->attributes['id'], PDO::PARAM_INT);
            $stmt->execute();

            
        

    }

    /**
     * Find a single record in the DB based on its id
     *
     * @param int $id id of the user entry in the database
     *
     * @return User An instance of the User class with attributes array set to values from the database
     */
    public static function find($id)
    {
        // Get connection to the database
        self::dbConnect();

        // @TODO: Create select statement using prepared statements

        // @TODO: Store the result in a variable named $result

        // The following code will set the attributes on the calling object based on the result variable's contents

        $query = "SELECT * FROM adlister WHERE id = :id";
        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $result = $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);


        $instance = null;
        if ($result) {
            $instance = new static($result);
        }
        return $instance;
    }

    /**
     * Find all records in a table
     *
     * @return User[] Array of instances of the User class with attributes set to values from database
     */
    public static function all()
    {
        self::dbConnect();

        $query = "SELECT * FROM adlister";
        $stmt = self::$dbc->prepare($query);
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $users = [];
        foreach ($rows as $row) {
            $users[] = new static($row);
        }


        return $users;



        // $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        // $result = $stmt->execute();
        // $result = $stmt->fetch(PDO::FETCH_ASSOC); 

        // @TODO: Learning from the find method, return all the matching records

    }
}
