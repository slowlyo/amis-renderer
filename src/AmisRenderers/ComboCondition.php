<?php

namespace Slowlyo\AmisRenderers;

/**
 * ComboCondition
 * 
 * @author slowlyo
 * @version untagged-f5310659bf54075f577b
 */
class ComboCondition extends BaseRenderer
{
    public function __construct()
    {
        

    }

    /**
     * 
     */
    public function items($value = '')
    {
        return $this->set('items', $value);
    }

    /**
     * 
     */
    public function label($value = '')
    {
        return $this->set('label', $value);
    }

    /**
     * 
     */
    public function mode($value = '')
    {
        return $this->set('mode', $value);
    }

    /**
     * 
     */
    public function scaffold($value = '')
    {
        return $this->set('scaffold', $value);
    }

    /**
     * 
     */
    public function test($value = '')
    {
        return $this->set('test', $value);
    }


}
