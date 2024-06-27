<?php
    class TodoTask {
        public $id;
        public $title;
        public $details;
        function __construct($id, $title, $details) {
            $this->id = $id;
            $this->title = $title;
            $this->details = $details;
        }
    }
?>