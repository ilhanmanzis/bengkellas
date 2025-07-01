<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProfileResource\Pages;
use App\Filament\Resources\ProfileResource\RelationManagers;
use App\Models\Profile;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\RichEditor;

class ProfileResource extends Resource
{
    protected static ?string $model = Profile::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';
    protected static ?string $navigationLabel = 'Setting';
    protected static ?string $title = 'Setting';
    protected static ?string $slug = 'setting';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Nama Perusahaan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('motto1')
                    ->label('Motto 1')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('motto2')
                    ->label('Motto 2')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('sekilas_info1')
                    ->label('Sekilas Info 1')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('sekilas_info2')
                    ->label('Sekilas Info 2')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('sekilas_info3')
                    ->label('Sekilas Info 3')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('sekilas_info4')
                    ->label('Sekilas Info 4')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('proyek')
                    ->label('Jumlah Proyek yang sudah pernah dikerjakan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('logo')
                    ->label('Logo Perusahaan')
                    ->image()
                    ->directory('logo')
                    ->disk('public')
                    ->preserveFilenames(false)
                    ->visibility('public')
                    ->required(),
                RichEditor::make('tentang_kami')
                    ->label('Tentang Kami')
                    ->required()
                    ->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('motto1')
                    ->searchable(),
                Tables\Columns\TextColumn::make('motto2')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sekilas_info1')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sekilas_info2')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sekilas_info3')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sekilas_info4')
                    ->searchable(),
                Tables\Columns\TextColumn::make('proyek')
                    ->searchable(),
                Tables\Columns\TextColumn::make('logo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tentang_kami')
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
            'index' => Pages\ListProfiles::route('/'),
            'create' => Pages\CreateProfile::route('/create'),
            'edit' => Pages\EditProfile::route('/{record}/edit'),
        ];
    }
}
