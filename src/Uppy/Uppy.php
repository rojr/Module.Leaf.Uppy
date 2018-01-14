<?php

namespace Rojr\Leaf\Uppy;

use Rhubarb\Leaf\Controls\Common\FileUpload\SimpleFileUpload;

class Uppy extends SimpleFileUpload
{
    protected function getViewClass()
    {
        return UppyView::class;
    }
}
