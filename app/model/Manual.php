<?php

namespace app\model;

use think\Model;

class Manual extends Model
{
    public function getTitleAttr($value,$data)
    {
        $file =$data['file'];
        $url = "<a href='../php-chunked-xhtml/$file.html' target='_blank'>$value</a>";
        return $url;
        // <a href='../php-chunked-xhtml/index.html' target='_blank'>about.formats5f</a>
    }
    public function getFileAttr($value)
    {

        $url = "<a href='../php-chunked-xhtml/$value.html' target='_blank'>$value</a>";
        return $url;
        // <a href='../php-chunked-xhtml/index.html' target='_blank'>about.formats5f</a>
    }
}