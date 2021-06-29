<?php

trait CallableId {
    protected int $id;
    public function getId() {
        return $this->id;
    }
} 