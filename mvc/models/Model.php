<?php
abstract class Model{
    public abstract function all();
    public abstract function find($id);
    public abstract function save(array $data);
    public abstract function update(array $data,$id);
    public abstract function delete($id);
}