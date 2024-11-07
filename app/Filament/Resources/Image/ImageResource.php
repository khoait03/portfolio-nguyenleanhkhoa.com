<?php

namespace App\Filament\Resources\Image;

use App\Filament\Resources\Image\ImageResource\Pages;
use App\Models\Image;
use App\Models\License;
use Filament\Forms;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class ImageResource extends Resource
{
    protected static ?string $model = Image::class;

    protected static ?string $slug = 'images';

    protected static ?string $modelLabel = 'Hình ảnh';
    protected static ?string $navigationLabel = 'Hình ảnh';
    protected static ?string $navigationGroup = 'Hình ảnh';
    protected static ?string $navigationIcon = 'heroicon-o-photo';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    Section::make('Thông tin hình ảnh')->schema([

                        TextInput::make('name')
                            ->required()
                            ->maxLength(200)
                            ->label('Tên hình ảnh')
                            ->columnSpanFull(),

                        Forms\Components\FileUpload::make('image')
                            ->label('Hình Ảnh')
                            ->nullable()
                            ->directory('images')
                            ->reorderable()
                            ->preserveFilenames()
                            ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file, $record, callable $get): string {
                                // Lấy giá trị của `title` từ form, mặc định là 'du-an' nếu không có
                                $title = $get('name') ?? 'hinh-anh';
                                $slug = Str::slug($title);

                                // Đổi tên file với tiền tố slug và chuỗi ngẫu nhiên
                                return $slug . '-' . Str::random(5) . '.' . $file->getClientOriginalExtension();
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


                        TextInput::make('path')
                            ->maxLength(255)
                            ->label('Đường dẫn lưu ảnh')
                            ->columnSpanFull(),


                        TextInput::make('alt_text')
                            ->maxLength(255)
                            ->label('Alt text')
                            ->columnSpanFull(),

                        RichEditor::make('description')
                            ->label('Mô tả')
                            ->nullable()
                            ->columnSpanFull(),

                    ])->columns(2),


                ])->columnSpan(2),

                Group::make()->schema([

                    Section::make()
                        ->schema([
                            Placeholder::make('created_at')
                                ->label('Thời gian tạo')
                                ->content(fn ($record) => $record ? $record->created_at->format('d/m/Y H:i:s') : '-'),

                            Placeholder::make('updated_at')
                                ->label('Thời gian cập nhật mới nhất')
                                ->content(fn ($record) => $record ? $record->updated_at->format('d/m/Y H:i:s') : '-'),
                        ])

                ])->columnSpan(1)

            ])->columns(3);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc')
            ->columns([

                Tables\Columns\TextColumn::make('row_number')
                    ->label('#')
                    ->getStateUsing(fn($rowLoop) => $rowLoop->index + 1),

                // Cột hiển thị product_name
                Tables\Columns\ImageColumn::make('image')
                    ->label('Ảnh bìa')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('name')
                    ->label('Tên hình ảnh')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ListImages::route('/'),
            'create' => Pages\CreateImage::route('/create'),
            'edit' => Pages\EditImage::route('/{record}/edit'),
        ];
    }
}
