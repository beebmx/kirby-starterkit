<?php

use Tinkerwell\ContextMenu\Label;
use Tinkerwell\ContextMenu\OpenURL;

const KIRBY_HELPER_DUMP = false;
const KIRBY_HELPER_E = false;
const KIRBY_HELPER_GO = false;

class Kirby3TinkerwellDriver extends TinkerwellDriver
{
    public function canBootstrap($projectPath)
    {
        return file_exists($projectPath . '/kirby/bootstrap.php') &&
            file_exists($projectPath . '/public/index.php');
    }

    public function bootstrap($projectPath)
    {
        require_once $projectPath . '/vendor/autoload.php';

        $kirby = new Kirby([
            'roots' => [
                'index' => $projectPath . '/public',
                'base' => $base = $projectPath,
                'content' => $base . '/content',
                'site' => $base . '/site',
                'storage' => $storage = $base . '/storage',
                'accounts' => $storage . '/accounts',
                'cache' => $storage . '/cache',
                'sessions' => $storage . '/sessions',
            ]
        ]);

        $kirby->render();
    }

    public function getAvailableVariables()
    {
        return [
            'site' => site(),
            'kirby' => kirby(),
        ];
    }

    public function contextMenu()
    {
        return [
            Label::create('Detected Kirby v.' . Kirby::version()),

            OpenURL::create('Kirby Guide', 'https://getkirby.com/docs/guide'),

            OpenURL::create('Kirby Reference', 'https://getkirby.com/docs/reference'),
        ];
    }
}
