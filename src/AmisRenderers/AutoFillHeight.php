<?php

namespace Slowlyo\AmisRenderers;

/**
 * AutoFillHeight
 * 
 * @author slowlyo
 * @version v3.6.1
 */
class AutoFillHeight extends BaseRenderer
{
    public function __construct()
    {
        

    }

    /**
     * 
     */
    public function height($value = '')
    {
        return $this->set('height', $value);
    }

    /**
     * 
     */
    public function maxHeight($value = '')
    {
        return $this->set('maxHeight', $value);
    }


}
