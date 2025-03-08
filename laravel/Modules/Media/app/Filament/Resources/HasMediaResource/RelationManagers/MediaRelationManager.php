<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources\HasMediaResource\RelationManagers;

use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Columns\Column;
use Filament\Tables\Columns\Layout\Component as ColumnLayoutComponent;
use Filament\Tables\Filters\BaseFilter;
use Illuminate\Database\Eloquent\Model;
use Modules\Media\Filament\Resources\AttachmentResource;
use Modules\Media\Filament\Resources\HasMediaResource\Actions\AddAttachmentAction;
use Modules\Media\Filament\Resources\MediaResource;
use Modules\UI\Enums\TableLayoutEnum;
use Modules\UI\Filament\Actions\Table\TableLayoutToggleTableAction;
use Modules\Xot\Filament\Resources\XotBaseResource\RelationManager\XotBaseRelationManager;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;

class MediaRelationManager extends XotBaseRelationManager
{
    use NavigationLabelTrait;

    public TableLayoutEnum $layoutView = TableLayoutEnum::LIST;

    protected static string $relationship = 'media';

    protected static ?string $inverseRelationship = 'model';

    public static function getTitle(Model $ownerRecord, string $pageClass): string
    {
        return trans('media::actions.add_attachment.title');
    }

    public function form(Form $form): Form
    {
        $form = MediaResource::form($form, false);

        return $form;
    }

    /**
     * @return array<Column|ColumnLayoutComponent>
     */
    public function getGridTableColumns(): array
    {
        return [];
    }

    /**
     * @return array<Column|ColumnLayoutComponent>
     */
    public function getListTableColumns(): array
    {
        return [];
    }

    /**
     * @return array<BaseFilter>
     */
    protected function getTableFilters(): array
    {
        return [];
    }

    /**
     * @return array<Action|ActionGroup>
     */
    protected function getTableActions(): array
    {
        return [];
    }

    /**
     * @return array<Action|ActionGroup>
     */
    protected function getTableHeaderActions(): array
    {
        return [
            // Tables\Actions\AttachAction::make(),
            // Tables\Actions\CreateAction::make(),
            AddAttachmentAction::make(),
            /*
            Action::make('add_attachment')
                ->translateLabel()
                ->icon('heroicon-o-plus')
                ->color('success')
                ->button()
                ->form(
                    fn (): array => AttachmentResource::getFormSchema(false)
                )
                ->action(
                    fn (RelationManager $livewire, array $data) => AttachmentResource::formHandlerCallback($livewire, $data),
                ),
            */
            TableLayoutToggleTableAction::make(),
        ];
    }

    public static function getRoute($path, $action = null)
    {
        // Define the route logic here
    }
}
