<?php

namespace Rojr\Leaf\Uppy;

use Rhubarb\Leaf\Controls\Common\FileUpload\SimpleFileUploadView;

class UppyView extends SimpleFileUploadView
{
    public function getDeploymentPackage()
    {
        $package = parent::getDeploymentPackage();

        $package->resourcesToDeploy[] = __DIR__ . '/uppy.min.css';
        $package->resourcesToDeploy[] = __DIR__ . '/uppy.min.js';
        $package->resourcesToDeploy[] = __DIR__ . '/UppyViewBridge.js';

        return $package;
    }

    protected function getViewBridgeName()
    {
        return 'UppyViewBridge';
    }
}
