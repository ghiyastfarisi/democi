<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tools {
        public function _path_builder($path) {
                return preg_replace('/^' . preg_quote('@', '/') . '/', '/bundle/dist', $path);
        }
}