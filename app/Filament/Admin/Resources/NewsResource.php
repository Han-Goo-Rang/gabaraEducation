<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\NewsResource\Pages;
use App\Models\News;
use Filament\Forms;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Str;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class NewsResource extends Resource
{
    protected static ?string $model = News::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Section::make('Main content')
                ->schema([
                    TextInput::make('title')
                            ->live(onBlur: true)
                            ->debounce(500)
                            ->required()->minLength(1)->maxLength(150)
                            ->afterStateUpdated(function (string $operation, $state, Forms\Set $set) {
                                if ($operation === 'edit') {
                                    return;
                                }

                                $set('slug', Str::slug($state));
                            }),
                        TextInput::make('slug')->required()->minLength(1)->unique(ignoreRecord: true)->maxLength(150),
                    RichEditor::make('body')->required()->fileAttachmentsDirectory('News/images')->columnSpanFull(),
                ])
                ->columns(2),
            Section::make('Meta')->schema([
                FileUpload::make('image')
                    ->image()
                    ->directory('News/thumbnails')
                    ->acceptedFileTypes(['image/png', 'image/jpeg', 'image/jpg']),
                DateTimePicker::make('published_at')->nullable(),
                Select::make('author')->relationship('author', 'name')->searchable()->required()->default(auth()->id()),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([ImageColumn::make('image')->disk('public'), TextColumn::make('title')->sortable()->searchable(), TextColumn::make('slug')->sortable()->searchable(), TextColumn::make('author.name')->sortable()->searchable(), TextColumn::make('published_at')->date('Y-m-d')->sortable()->searchable()])
            ->filters([Tables\Filters\TrashedFilter::make()])
            ->actions([Tables\Actions\EditAction::make()])
            ->bulkActions([Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make(), Tables\Actions\ForceDeleteBulkAction::make(), Tables\Actions\RestoreBulkAction::make()])]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->withoutGlobalScopes([SoftDeletingScope::class]);
    }
}
