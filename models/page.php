<?php

class Page extends Model
{
    public function getList( $represent = null, $start = 0, $only_published = false ) {
        if ( $represent == null ){
            $sql = "SELECT * FROM pages WHERE 1";
            if($only_published){
                $sql .= ' AND is_published = 1';
            }
        } else {
            $sql = "SELECT * FROM pages WHERE 1";
            if($only_published){
                $sql .= ' AND is_published = 1';
            }
            $sql .= " LIMIT $start, $represent";
        }
        return $this->db->query($sql);
    }

    public function getByAlias($alias){
        $alias = $this->db->escape($alias);
        $sql = "SELECT * FROM pages WHERE alias = '{$alias}' LIMIT 1";
        $result = $this->db->query($sql);
        return isset($result[0]) ? $result[0] : null;
    }

    public function getById($id){
        $id = (int)$id;
        $sql = "SELECT * FROM pages WHERE id = {$id} LIMIT 1";
        $result = $this->db->query($sql);
        return isset($result[0]) ? $result[0] : null;
    }

    public function save($data, $id = null){
        if ( !isset($data['alias']) || !isset($data['title']) || !isset($data['content']) ){
            return false;
        }

        $id = (int)$id;
        $alias = $this->db->escape($data['alias']);
        $title = $this->db->escape($data['title']);
        $content = $this->db->escape($data['content']);
        $is_published = isset($data['is_published']) ? 1 : 0;

        if (!$id){ //add new record
            $sql = "
                INSERT INTO pages
                   SET alias = '{$alias}',
                       title = '{$title}',
                       content = '{$content}',
                       is_pablished = {$is_published}
            ";
        }else{ //Update existing record
            $sql = "
                UPDATE pages
                   SET alias = '{$alias}',
                       title = '{$title}',
                       content = '{$content}',
                       is_pablished = {$is_published}
                   WHERE id = {$id}
            ";
        }
        return $this->db->query($sql);
    }

    public function delete($id){
        $id = (int)$id;
        $sql = "DELETE FROM pages WHERE id = {$id}";
        return $this->db->query($sql);
    }
}