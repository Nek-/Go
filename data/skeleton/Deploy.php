<?php

namespace Go\Deployer;

use Go\Deployer\Deployer,
    Go\Deployer\Strategy\Rsync;

use OOSSH\SSH2\Authentication\Password;

/**
 * Your deployment instruction
 */

class Deploy extends Deployer
{
    public function preDeploy($go)
    {

    }

    public function postDeploy($go)
    {

    }

    public function preDeployProduction($go)
    {

    }

    public function postDeployProduction($go)
    {

    }

    public function getSshAuthentication()
    {
        /*
         * Warning : this is an example, you'd better to use \OOSSH\SSH2\Authentication\PublicKeyAuthentication !
         * Please refer to the OOSSH configuration : https://github.com/frequence-web/OOSSH
         */
        return new Password('deploy', 'deploy');
    }

    protected function getStrategy()
    {
        return new Rsync($this->output, $this->systemConfig);
    }
}
