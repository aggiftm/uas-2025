<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\SummaryResource\Pages;
use App\Filament\Admin\Resources\SummaryResource\RelationManagers;
use App\Models\Summary;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SummaryResource extends Resource
{
    protected static ?string $model = Summary::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('projects_ongoing')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('projects_completed')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('projects_pending')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('revenue_total')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('revenue_this_month')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('clients_total')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('clients_new_month')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('projects_ongoing')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('projects_completed')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('projects_pending')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('revenue_total')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('revenue_this_month')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('clients_total')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('clients_new_month')
                    ->numeric()
                    ->sortable(),
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
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListSummaries::route('/'),
            'create' => Pages\CreateSummary::route('/create'),
            'edit' => Pages\EditSummary::route('/{record}/edit'),
        ];
    }
}
