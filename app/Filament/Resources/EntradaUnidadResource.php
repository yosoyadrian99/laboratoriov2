<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EntradaUnidadResource\Pages;
use App\Filament\Resources\EntradaUnidadResource\RelationManagers;
use App\Models\EntradaUnidad;
use App\Models\UnidadTransfusional;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Actions\Action;
use Guava\FilamentDrafts\Admin\Resources\Concerns\Draftable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EntradaUnidadResource extends Resource
{
    use Draftable;

    protected static ?string $model = UnidadTransfusional::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Entrada Unidad';

    protected static ?string $pluralLabel = 'Almacenamiento Unidades Transfusionales';

    protected static ?string $navigationGroup = 'Almacenamiento Unidades Transfusionales';

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\EntradaUnidad::route('/'),
            'create' => Pages\CreateEntradaUnidad::route('/create'),
            'edit' => Pages\EditEntradaUnidad::route('/{record}/edit'),
        ];
    }
}
