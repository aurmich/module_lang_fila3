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
    public null|string $filename = null;
=======
    public ?string $filename=null;
>>>>>>> 1e3d805 (.)

    // public string $key;
    public int|string|null $value = null;

    public function getFilename(): string
    {
<<<<<<< HEAD
        if ($this->filename !== null) {
=======
        if($this->filename!=null){
>>>>>>> 1e3d805 (.)
            return $this->filename;
        }
        $hints = app('translator')->getLoader()->namespaces();
        $path = collect($hints)->get($this->namespace);
        if (null === $path) {
<<<<<<< HEAD
            throw new \Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
=======
            throw new \Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> 1e3d805 (.)
        }

        // Verifichiamo che $path sia una stringa
        Assert::string($path, 'Il percorso del namespace deve essere una stringa');

<<<<<<< HEAD
        $this->filename = app(\Modules\Xot\Actions\File\FixPathAction::class)
            ->execute($path . '/' . $this->lang . '/' . $this->group . '.php');
=======
        $this->filename= app(\Modules\Xot\Actions\File\FixPathAction::class)->execute($path.'/'.$this->lang.'/'.$this->group.'.php');
>>>>>>> 1e3d805 (.)
        return $this->filename;
    }

    public function getData(): array
    {
        $filename = $this->getFilename();
        $data = [];
        if (File::exists($filename)) {
            $data = File::getRequire($filename);
        }
<<<<<<< HEAD
        if (!is_array($data)) {
            throw new \Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
=======
        if (! is_array($data)) {
            throw new \Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> 1e3d805 (.)
        }

        return $data;
    }
}
