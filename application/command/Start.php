<?php

namespace app\command;

use think\console\Command;
use think\console\Input;
use think\console\input\Option;
use think\console\Output;
use think\facade\App;

class Start extends Command
{
    protected function configure()
    {
        $this->setName('start')
            ->addOption('host', 'H', Option::VALUE_OPTIONAL, 'The host to server the application on', '127.0.0.1')
            ->addOption('port', 'p', Option::VALUE_OPTIONAL, 'The port to server the application on', 8000)
            ->addOption('root', 'r', Option::VALUE_OPTIONAL, 'The document root of the application', App::getRootPath() . 'public')
            ->setDescription('PHP Built-in Server for ThinkPHP');

    }

    protected function execute(Input $input, Output $output)
    {
        $host = $input->getOption('host');
        $port = $input->getOption('port');
        $root = $input->getOption('root');

        $command = sprintf(
            'php -S %s:%d -t %s %s',
            $host,
            $port,
            escapeshellarg($root),
            escapeshellarg($root . DIRECTORY_SEPARATOR . 'router.php')
        );
        if ($this->checkPort($host, $port)) {
            $output->writeln(sprintf('服务器已经运行: <http://%s:%s/>', $host, $port));
        } else {
            $output->writeln(sprintf('服务器地址: <http://%s:%s/>', $host, $port));
            $output->writeln(sprintf('文档根目录: %s', $root));
            passthru($command);
        }


    }

    private function checkPort($host, $port, $timeout = 3)
    {
        $fsock = @fsockopen($host, $port, $errno, $errstr, $timeout);
        if (!$fsock) {
            return false;
        } else {
            return true;
        }
    }

}
