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

<<<<<<< HEAD
    public ?string $filename = null;
=======
    public ?string $filename=null;
>>>>>>> 054e6ea (.)

    // public string $key;
    public int|string|null $value = null;

    public function getFilename(): string
    {
<<<<<<< HEAD
        if ($this->filename != null) {
=======
        if($this->filename!=null){
>>>>>>> 054e6ea (.)
            return $this->filename;
        }
        $hints = app('translator')->getLoader()->namespaces();
        $path = collect($hints)->get($this->namespace);
<<<<<<< HEAD
        if ($path === null) {
=======
        if (null === $path) {
>>>>>>> 054e6ea (.)
            throw new \Exception('['.__LINE__.']['.class_basename($this).']');
        }

        // Verifichiamo che $path sia una stringa
        Assert::string($path, 'Il percorso del namespace deve essere una stringa');

<<<<<<< HEAD
        $this->filename = app(\Modules\Xot\Actions\File\FixPathAction::class)->execute($path.'/'.$this->lang.'/'.$this->group.'.php');

=======
        $this->filename= app(\Modules\Xot\Actions\File\FixPathAction::class)->execute($path.'/'.$this->lang.'/'.$this->group.'.php');
>>>>>>> 054e6ea (.)
        return $this->filename;
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
