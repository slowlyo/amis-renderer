<?php

namespace Slowlyo\AmisRenderers;

/**
 * SchemaCopyable
 * 
 * @author slowlyo
 * @version untagged-f5310659bf54075f577b
 */
class SchemaCopyable extends BaseRenderer
{
    public function __construct()
    {
        

    }

    /**
     * 配置复制时的内容模板。
     */
    public function content($value = '')
    {
        return $this->set('content', $value);
    }

    /**
     * 可以配置图标
     */
    public function icon($value = '')
    {
        return $this->set('icon', $value);
    }


}
