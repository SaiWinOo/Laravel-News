<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PartnerTypeResource\Pages;
use App\Filament\Resources\PartnerTypeResource\RelationManagers;
use App\Models\PartnerType;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PartnerTypeResource extends Resource
{
    protected static ?string $model = PartnerType::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected  static ?string $navigationGroup = 'Partner Management';

    protected static ?int $navigationSort = 1;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
               Forms\Components\Section::make()->schema([
                   Forms\Components\TextInput::make('name')
                       ->required()
                       ->maxLength(255),
                   Forms\Components\TextInput::make('slug')
                       ->required()
                       ->maxLength(255),
                   Forms\Components\Textarea::make('description')->columnSpanFull(),
               ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPartnerTypes::route('/'),
            'create' => Pages\CreatePartnerType::route('/create'),
            'view' => Pages\ViewPartnerType::route('/{record}'),
            'edit' => Pages\EditPartnerType::route('/{record}/edit'),
        ];
    }
}
