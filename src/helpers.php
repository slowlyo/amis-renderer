<?php

if (!function_exists('amis')) {
    /**
     * @param $type
     *
     * @return \Slowlyo\AmisRenderers\Amis|\Slowlyo\AmisRenderers\Component
     */
    function amis($type = null)
    {
        if ($type) {
            return \Slowlyo\AmisRenderers\Component::make()->setType($type);
        }

        return \Slowlyo\AmisRenderers\Amis::make();
    }
}
