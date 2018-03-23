<?php

namespace danxill\sass;

use Leafo\ScssPhp\Compiler;

/**
 * Extended class for SCSS compiler
 *
 * @author Dmitriy Bulgar <danxills@gmail.com>
 * @link https://github.com/DanxilL/yii2-sass
 */
class ExtendedScssc extends Compiler
{
    /**
     * Get list of current import paths
     *
     * @return array
     */
    public function getImportPaths()
    {
        return $this->importPaths;
    }
}
