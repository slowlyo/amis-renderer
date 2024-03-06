<?php

namespace Slowlyo\AmisRenderers;

/**
 * IconChecked
 * 
 * @author slowlyo
 * @version untagged-f5310659bf54075f577b
 */
class IconChecked extends BaseRenderer
{
    public function __construct()
    {
        

    }

    /**
     * 
     */
    public function id($value = '')
    {
        return $this->set('id', $value);
    }

    /**
     * 
     */
    public function name($value = '')
    {
        return $this->set('name', $value);
    }


}
