<?php

namespace App\Filament\Resources\Project;

use App\Filament\Resources\Project\ProjectResource\Pages;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
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

                    Select::make('technology')
                        ->label('Công nghệ sử dụng')
                        ->options([
                            'HTML' => 'HTML',
                            'CSS' => 'CSS',
                            'JavaScript' => 'JavaScript',
                            'PHP' => 'PHP',
                            'Laravel' => 'Laravel',
                            'VueJS' => 'VueJS',
                            'React' => 'React',
                        ])
                        ->maxItems(4)
                        ->multiple()
                        ->default(fn ($record) => $record ? $record->technology : [])
                        ->searchable()
                        ->placeholder('Chọn công nghệ')
                        ->required()
                        ->columnSpanFull(),

                    Select::make('role')
                        ->label('Vai trò trong dự án (tối đa 4)')
                        ->options([
                            'Thiết kế UI/UX' => 'Thiết kế UI/UX',
                            'Thiết kế hệ thống' => 'Thiết kế hệ thống',
                            'Thiết kế thương hiệu' => 'Thiết kế thương hiệu',
                            'Lập trình viên Frontend' => 'Lập trình viên Frontend',
                            'Lập trình viên Backend' => 'Lập trình viên Backend',
                            'Lập trình viên Full Stack' => 'Lập trình viên Full Stack',
                            'Chuyên viên QA' => 'Chuyên viên QA',
                            'Quản lý dự án' => 'Quản lý dự án',
                            'Chuyên viên DevOps' => 'Chuyên viên DevOps',
                            'Chuyên viên bảo mật' => 'Chuyên viên bảo mật',
                            'Chuyên gia cơ sở dữ liệu' => 'Chuyên gia cơ sở dữ liệu',
                            'Chuyên viên phân tích dữ liệu' => 'Chuyên viên phân tích dữ liệu',
                            'Chuyên gia mạng' => 'Chuyên gia mạng',
                            'Quản trị hệ thống' => 'Quản trị hệ thống',
                            'Chuyên viên hỗ trợ kỹ thuật' => 'Chuyên viên hỗ trợ kỹ thuật',
                            'Chuyên gia AI/ML' => 'Chuyên gia AI/ML',
                            'Chuyên gia blockchain' => 'Chuyên gia blockchain',
                            'Chuyên viên Cloud' => 'Chuyên viên Cloud',
                        ])
                        ->maxItems(4)
                        ->multiple()
                        ->default(fn ($record) => $record ? $record->technology : [])
                        ->searchable()
                        ->placeholder('Chọn vai trò')
                        ->required()
                        ->columnSpanFull(),

                    Forms\Components\TextInput::make('customer')
                        ->maxLength(100)
                        ->placeholder('Cty TNHH xyz')
                        ->label('Khách hàng'),

                    Forms\Components\TextInput::make('execution_time')
                        ->maxLength(30)
                        ->placeholder('5 - 10/2024')
                        ->label('Thời gian thực hiện'),

                    RichEditor::make('description')
                        ->nullable()
                        ->label('Mô tả')
                        ->columnSpanFull(),

                ])->columns(2),

//

                Section::make('Hình ảnh đại diện')->schema([
                    FileUpload::make('main_image')
                        ->directory('projects/main')
                        ->label('Chọn ảnh định dạng PNG, JPG')
                        ->reorderable()
                        ->preserveFilenames()
                        ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file, $record, callable $get): string {
                            // Lấy giá trị của `title` từ form, mặc định là 'du-an' nếu không có
                            $title = $get('title') ?? 'du-an';
                            $slug = Str::slug($title);

                            // Đổi tên file với tiền tố slug và chuỗi ngẫu nhiên
                            return $slug . '-' . Str::random(5) . '.' . $file->getClientOriginalExtension();
                        })
                        // Xóa ảnh sau khi xóa sản phẩm
                        ->deleteUploadedFileUsing(function ($file) {
                            if ($file instanceof TemporaryUploadedFile) {
                                Storage::disk('public')->delete($file->getPathname());
                            } elseif (is_string($file)) {
                                Storage::disk('public')->delete($file);
                            }
                        }),
                ]),


                Section::make('Hình ảnh dự án')->schema([
                    FileUpload::make('images')
                        ->multiple()
                        ->directory('projects/description')
                        ->label('Chọn ảnh định dạng PNG, JPG')
                        ->maxFiles(5)
                        ->reorderable()
                        ->preserveFilenames()
                        ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file, $record, callable $get): string {
                            // Lấy giá trị của `title` từ form, mặc định là 'du-an' nếu không có
                            $title = $get('title') ?? 'du-an';
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
            ->defaultSort('created_at', 'desc')
            ->columns([
                Tables\Columns\TextColumn::make('row_number')
                    ->label('#')
                    ->getStateUsing(fn($rowLoop) => $rowLoop->index + 1),
                Tables\Columns\ImageColumn::make('main_image')->label('Hình ảnh'),
                Tables\Columns\TextColumn::make('title')
                    ->label('Tiêu đề'),

                Tables\Columns\ToggleColumn::make('status')->label('Trạng thái'),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ])
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
