<?php

class NodePortsHandler
{

    public function smartyNodePorts(Smarty $hook_data)
    {
        $template_dirs = $hook_data->getTemplateDir();
        $plugin_templates = PLUGINS_DIR . DIRECTORY_SEPARATOR . LMSNodePortsPlugin::PLUGIN_DIRECTORY_NAME . DIRECTORY_SEPARATOR . 'templates';
        array_unshift($template_dirs, $plugin_templates);
        $hook_data->setTemplateDir($template_dirs);
        return $hook_data;
    }

    public function nodeInfoBeforeDisplay(array $hook_data = array())
    {
        $local_ports = ConfigHelper::getConfig('node.local_ports', array(80, 81, 8080));
        $public_ports = ConfigHelper::getConfig('node.public_ports', array(80, 81, 8080));
        $url_protocol = ConfigHelper::getConfig('node.url_protocol', 'http');

        if (!is_array($local_ports)) {
            $local_ports = explode(",", $local_ports);
        }
        if (!is_array($public_ports)) {
            $public_ports = explode(",", $public_ports);
        }

        $hook_data['nodeinfo']['ports'] = $local_ports;
        $hook_data['nodeinfo']['public_ports'] = $public_ports;
        $hook_data['nodeinfo']['url_protocol'] = $url_protocol;
        return $hook_data;
    }
}
