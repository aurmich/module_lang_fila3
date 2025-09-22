<?php

declare(strict_types=1);

namespace Modules\Lang\Actions;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Modules\Xot\Actions\Array\SaveArrayAction;
use Spatie\QueueableAction\QueueableAction;

class SaveTransAction
{
    use QueueableAction;

    /**
     * Undocumented function.
     */
    public function execute(string $key, int|string|array|\Illuminate\Contracts\Support\Htmlable|null $data): void
    {
        $cont = [];

        $filename = app(GetTransPathAction::class)->execute($key);

<<<<<<< HEAD
        if (!File::exists($filename)) {
            app(SaveArrayAction::class)->execute(
                data: $cont,
                filename: $filename,
            );
=======
        if (! File::exists($filename)) {
            app(SaveArrayAction::class)->execute(data: $cont, filename: $filename);
>>>>>>> 1e3d805 (.)
        }

        try {
            $cont = File::getRequire($filename);
        } catch (\Exception $e) {
            dddx([
                'key' => $key,
                'data' => $data,
                'filename' => $filename,
                'message' => $e->getMessage(),
            ]);
        }

<<<<<<< HEAD
        if (!is_array($cont)) {
=======
        if (! is_array($cont)) {
>>>>>>> 1e3d805 (.)
            $cont = [];
        }

        $piece = implode('.', array_slice(explode('.', $key), 1));
        if ('' !== $piece) {
            Arr::set($cont, $piece, $data);
        } else {
            $cont = $data;
        }

<<<<<<< HEAD
        if (!is_array($cont)) {
            throw new \Exception('Error in SaveTransAction');
        }

        app(SaveArrayAction::class)->execute(
            data: $cont,
            filename: $filename,
        );
=======
        if (! is_array($cont)) {
            throw new \Exception('Error in SaveTransAction');
        }

        app(SaveArrayAction::class)->execute(data: $cont, filename: $filename);
>>>>>>> 1e3d805 (.)
    }
}
