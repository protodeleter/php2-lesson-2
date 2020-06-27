<?php

abstract class Model
{

    protected const TABLE = '';

    public int $id;

    public static function findAll(): array
    {
        $db = Db::instance();
        $sql = 'SELECT * FROM ' . static::TABLE;
        $data = $db->query($sql, static::class);
        include_once __DIR__.'../Tpl/index.php';
        return $data;
    }

    public function findById(): object
    {
        $db = Db::instance();
        $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id='.$this->id;
        $data = $db->query($sql, static::class);
        $data = $data[0];
        include_once __DIR__.'../Tpl/single.php';
        return $data;
    }

    public function insert()
    {
        $props = get_object_vars($this);
        unset($props['id']);
        $columns = [];
        $binds = [];
        $data = [];
        foreach ($props as $name => $value) {
            $columns[] = $name;
            $binds[] = ':' . $name;
            $data[':' . $name] = $value;
        }
        $sql = 'INSERT INTO ' . static::TABLE . ' 
        (' . implode(',', $columns) . ') 
        VALUES (' . implode(',', $binds) . ' )';
        $db = Db::instance();
        $db->execute($sql, $data);
        $this->id = $db->lastId();
    }

    public function update()
    {
        $props = get_object_vars($this);
//        unset($props['id']);
        $data = [];
        $newBind = [];
        $cc = 0;
        $len = count($props);
        foreach ($props as $name => $value) {
            $cc++;
            if ($cc>=$len){
                $newBind[] = $name .'=:'.$name . ' ';
            } else {
                $newBind[] = $name .'=:'.$name . ',';
            }
            $data[':' . $name] = $value;
        }
        $sql = 'UPDATE ' . static::TABLE . ' SET ' . implode( $newBind ) . ' WHERE id='.$this->id;
        $db = Db::instance();
        $db->execute($sql, $data);
    }
    public function delete() {
        $sql = 'DELETE FROM '.static::TABLE.' WHERE id='.$this->id;
        $db = Db::instance();
        $db->execute($sql, $data = []);
    }
    public function save() {
        if( isset( $this->id ) ) {
            $this->update ();
        } else {
            $this->insert ();
        }
    }

}
