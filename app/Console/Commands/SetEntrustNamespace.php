<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Foundation\Console\AppNameCommand;

class SetEntrustNamespace extends AppNameCommand
{
    protected function setConfigNamespaces()
    {
        parent::setConfigNamespaces();
        $this->info('Changing entrust namespacing.');
        $this->replaceIn(
            $this->getConfigPath('entrust'),
            $this->currentRoot.'\\Permission',
            $this->argument('name').'\\Permission'
        );
        $this->replaceIn(
            $this->getConfigPath('entrust'),
            $this->currentRoot.'\\Role',
            $this->argument('name').'\\Role'
        );
    }
}
