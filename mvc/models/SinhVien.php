<?php
include_once "Model.php";
include_once "database.php";
class SinhVien extends Model {
    private $table="sinhviens";
    private $primaryKey = "id";
    protected $fillable = [
        "name",
        "age",
        "tel"
    ];

    public function all()
    {
        // TODO: Implement all() method.
        $sql_txt = "select * from $this->table";
        $list = queryDB($sql_txt);
        return $list;
    }

    public function find($id)
    {
        $sql_txt = "select * from $this->table where $this->primaryKey = $id";
        $list = queryDB($sql_txt);
        if(count($list)>0) return $list[0];
        return null;
        // TODO: Implement find() method.
    }

    public function save(array $data)
    {
        // TODO: Implement save() method.
        $name = $data["name"];
        $age = $data["age"];
        $tel = $data["tel"];
        $sql_txt = "insert into $this->table (name,age,tel) values ('$name',$age,'$tel')";
        return updateDB($sql_txt);
    }

    public function update(array $data, $id)
    {
        // TODO: Implement update() method.
        $name = $data["name"];
        $age = $data["age"];
        $tel = $data["tel"];
        $sql_txt = "update $this->table set name= '$name',age = $age,tel = '$tel' where $this->primaryKey = $id";
        return updateDB($sql_txt);
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
        $sql_txt = "delete from $this->>table where $this->primaryKey = $id";
        return updateDB($sql_txt);
    }

}