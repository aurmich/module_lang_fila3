<?php

declare(strict_types=1);

namespace Modules\Lang\Datas;

use Illuminate\Support\Facades\File;
use Spatie\LaravelData\Data;
use Webmozart\Assert\Assert;

class TranslationData extends Data
{
    // public string $id
    public string $lang;

    public string $namespace;

    public string $group;

    public string $item;

    // public string $key;
    public int|string|null $value = null;

    public function getFilename(): string
    {
        $hints = app('translator')->getLoader()->namespaces();
        $path = collect($hints)->get($this->namespace);
        if (null === $path) {
            throw new \Exception('['.__LINE__.']['.class_basename($this).']');
        }
        
        // Verifichiamo che $path sia una stringa
        Assert::string($path, 'Il percorso del namespace deve essere una stringa');
        
        return app(\Modules\Xot\Actions\File\FixPathAction::class)->execute($path.'/'.$this->lang.'/'.$this->group.'.php');
    }

    public function getData(): array
    {
        $filename = $this->getFilename();
        $data = [];
        if (File::exists($filename)) {
            $data = File::getRequire($filename);
        }
        if (! is_array($data)) {
            throw new \Exception('['.__LINE__.']['.class_basename($this).']');
        }

        return $data;
    }
}
