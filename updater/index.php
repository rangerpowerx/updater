<?php
    function platformSlashes($path) {
        //return str_replace('\', '/', $path);
    }
    $o_dir = new RecursiveDirectoryIterator('.', FilesystemIterator::SKIP_DOTS);
    $rdi = new RecursiveIteratorIterator($o_dir);
    foreach ($rdi as $file) {
        if(is_file($file) && $file->getExtension() != 'php' && $file->getExtension() != 'txt' && $file->getExtension() != 'zip')
        {
            echo substr($file, 1) . '|' . filemtime($file) . '|' . filesize($file) . PHP_EOL;
        }
        else
        {
            continue;
        }
    }
?>