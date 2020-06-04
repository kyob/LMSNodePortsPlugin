<?php

/**
 * LMSNodePortsPlugin
 * 
 * @author Łukasz Kopiszka <lukasz@alfa-system.pl>
 */
class LMSNodePortsPlugin extends LMSPlugin
{
    const PLUGIN_NAME = 'LMS Node Ports Plugin';
    const PLUGIN_DESCRIPTION = 'Extra node ports for assigned IP addresses to fast access.';
    const PLUGIN_AUTHOR = 'Łukasz Kopiszka &lt;lukasz@alfa-system.pl&gt;';
    const PLUGIN_DIRECTORY_NAME = 'LMSNodePortsPlugin';

    public function registerHandlers()
    {
        $this->handlers = array(
            'smarty_initialized' => array(
                'class' => 'NodePortsHandler',
                'method' => 'smartyNodePorts'
            ),
            'nodeinfo_before_display' => array(
                'class' => 'NodePortsHandler',
                'method' => 'nodeInfoBeforeDisplay'
            )
        );
    }
}
