<?php

namespace danxill\sass;

use Leafo\ScssPhp\Compiler;

/**
 * Extended class for SCSS compiler
 *
 * @author Artem Frolov <artem@frolov.net>
 * @link https://github.com/artem-frolov/yii-sass
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
