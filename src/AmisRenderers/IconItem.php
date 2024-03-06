<?php

namespace Slowlyo\AmisRenderers;

/**
 * IconItem
 * 
 * @author slowlyo
 * @version v3.5.1
 */
class IconItem extends BaseRenderer
{
    public function __construct()
    {
        

    }

    /**
     * 
     */
    public function icon($value = '')
    {
        return $this->set('icon', $value);
    }

    /**
     * 
     */
    public function position($value = '')
    {
        return $this->set('position', $value);
    }


}
