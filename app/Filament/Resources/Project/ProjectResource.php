<?php

namespace App\Filament\Resources\Project;

use App\Filament\Resources\Project\ProjectResource\Pages;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Set;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;
    protected static ?string $modelLabel = 'Dự án';
    protected static ?string $slug = 'projects';
    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-check';
    protected static ?string $navigationLabel = 'Dự án';
    protected static ?string $navigationGroup = 'Dự án';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Section::make('Thông tin dự án')->schema([
                    Forms\Components\TextInput::make('title')
                        ->required()
                        ->maxLength(255)
                        ->live(onBlur: true)
                        ->afterStateUpdated(fn(string $operation, $state, Set $set) => $operation
                        === 'create' ? $set('slug', Str::slug($state)) : null)
                        ->label('Tên dự án'),

                    Forms\Components\TextInput::make('slug')
                        ->required()
                        ->maxLength(255)
                        ->dehydrated()
                        ->unique(Project::class, 'slug', ignoreRecord: true)
                        ->maxLength(255)
                        ->label('Slug (Đường dẫn)'),

                    Forms\Components\Select::make('categories')
                        ->relationship('categories', 'name') // Lấy danh sách danh mục từ model Category
                        ->multiple() // Cho phép chọn nhiều danh mục
                        ->label('Danh mục')
                        ->preload()
                        ->columnSpanFull(),

                    RichEditor::make('description')
                        ->nullable()
                        ->label('Mô tả')
                        ->columnSpanFull(),

                ])->columns(2),

                Section::make('Hình ảnh dự án')->schema([
                    FileUpload::make('images')
                        ->multiple()
                        ->directory('projects')
                        ->label('Chọn ảnh định dạng PNG, JPG')
                        ->maxFiles(5)
                        ->reorderable()
                        ->preserveFilenames()
                        ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file, $record, $set): string {
                            // Nếu là form mới thì đặt giá trị mặc định cho slug
                            $slug = $record->slug ?? Str::slug($set('name', 'san-pham'));

                            // Đổi tên file với tiền tố slug và chuỗi ngẫu nhiên
                            return $slug . '-'. Str::random(5) . '.' . $file->getClientOriginalExtension();
                        })
                        //Xóa ảnh sau khi xóa sản phẩm
                        ->deleteUploadedFileUsing(function ($file) {
                            if ($file instanceof TemporaryUploadedFile) {
                                // Nếu là một TemporaryUploadedFile, lấy đường dẫn từ getPathname
                                Storage::disk('public')->delete($file->getPathname());
                            } elseif (is_string($file)) {
                                // Nếu là một string, xóa trực tiếp từ đường dẫn
                                Storage::disk('public')->delete($file);
                            }
                        })
                        ->columnSpanFull(),
                ])->columns(1),

                Section::make('Thông tin liên kết')->schema([
                    Forms\Components\TextInput::make('link_demo')
                        ->nullable()
                        ->label('Liên kết Demo')
                        ->columnSpan(2),

                    Forms\Components\TextInput::make('github')
                        ->nullable()
                        ->label('Liên kết GitHub')
                        ->columnSpan(2),
                ])->columns(2), // Two columns for links

                Forms\Components\Section::make('SEO')->schema([
                    Forms\Components\TextInput::make('meta_title')
                        ->label('Tiêu Đề Meta')
                        ->maxLength(255)
                        ->nullable(),
                    Forms\Components\TextInput::make('meta_description')
                        ->label('Mô Tả Meta')
                        ->maxLength(255)
                        ->nullable(),
                    Forms\Components\TextInput::make('meta_keyword')
                        ->label('Từ Khóa Meta')
                        ->maxLength(255)
                        ->nullable(),
                ])->columns(1),


                Forms\Components\Toggle::make('status')
                    ->default(false)
                    ->label('Trạng thái')
                    ->columnSpan(2),
            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('slug'),
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\TextColumn::make('created_at')->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
