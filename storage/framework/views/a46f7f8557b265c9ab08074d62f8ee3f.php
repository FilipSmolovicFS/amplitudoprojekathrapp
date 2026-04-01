## Filament

- Filament is used by this application. Follow the existing conventions for how and where it is implemented.
- Filament is a Server-Driven UI (SDUI) framework for Laravel that lets you define user interfaces in PHP using structured configuration objects. Built on Livewire, Alpine.js, and Tailwind CSS.
- Use the ___SINGLE_BACKTICK___search-docs___SINGLE_BACKTICK___ tool for official documentation on Artisan commands, code examples, testing, relationships, and idiomatic practices. If ___SINGLE_BACKTICK___search-docs___SINGLE_BACKTICK___ is unavailable, refer to https://filamentphp.com/docs.

### Artisan

- Always use Filament-specific Artisan commands to create files. Find available commands with the ___SINGLE_BACKTICK___list-artisan-commands___SINGLE_BACKTICK___ tool, or run ___SINGLE_BACKTICK___php artisan --help___SINGLE_BACKTICK___.
- Always inspect required options before running a command, and always pass ___SINGLE_BACKTICK___--no-interaction___SINGLE_BACKTICK___.

### Patterns

Always use static ___SINGLE_BACKTICK___make()___SINGLE_BACKTICK___ methods to initialize components. Most configuration methods accept a ___SINGLE_BACKTICK___Closure___SINGLE_BACKTICK___ for dynamic values.

Use ___SINGLE_BACKTICK___Get $get___SINGLE_BACKTICK___ to read other form field values for conditional logic:


<code-snippet name="Conditional form field visibility" lang="php">
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Get;

Select::make('type')
    ->options(CompanyType::class)
    ->required()
    ->live(),

TextInput::make('company_name')
    ->required()
    ->visible(fn (Get $get): bool => $get('type') === 'business'),

</code-snippet>


Use ___SINGLE_BACKTICK___state()___SINGLE_BACKTICK___ with a ___SINGLE_BACKTICK___Closure___SINGLE_BACKTICK___ to compute derived column values:


<code-snippet name="Computed table column value" lang="php">
use Filament\Tables\Columns\TextColumn;

TextColumn::make('full_name')
    ->state(fn (User $record): string => "{$record->first_name} {$record->last_name}"),

</code-snippet>


Actions encapsulate a button with an optional modal form and logic:


<code-snippet name="Action with modal form" lang="php">
use Filament\Actions\Action;
use Filament\Forms\Components\TextInput;

Action::make('updateEmail')
    ->schema([
        TextInput::make('email')
            ->email()
            ->required(),
    ])
    ->action(fn (array $data, User $record) => $record->update($data))

</code-snippet>


### Testing

Always authenticate before testing panel functionality. Filament uses Livewire, so use ___SINGLE_BACKTICK___Livewire::test()___SINGLE_BACKTICK___ or ___SINGLE_BACKTICK___livewire()___SINGLE_BACKTICK___ (available when ___SINGLE_BACKTICK___pestphp/pest-plugin-livewire___SINGLE_BACKTICK___ is in ___SINGLE_BACKTICK___composer.json___SINGLE_BACKTICK___):


<code-snippet name="Table test" lang="php">
use function Pest\Livewire\livewire;

livewire(ListUsers::class)
    ->assertCanSeeTableRecords($users)
    ->searchTable($users->first()->name)
    ->assertCanSeeTableRecords($users->take(1))
    ->assertCanNotSeeTableRecords($users->skip(1));

</code-snippet>

<code-snippet name="Create resource test" lang="php">
use function Pest\Laravel\assertDatabaseHas;
use function Pest\Livewire\livewire;

livewire(CreateUser::class)
    ->fillForm([
        'name' => 'Test',
        'email' => 'test@example.com',
    ])
    ->call('create')
    ->assertNotified()
    ->assertRedirect();

assertDatabaseHas(User::class, [
    'name' => 'Test',
    'email' => 'test@example.com',
]);

</code-snippet>

<code-snippet name="Testing validation" lang="php">
use function Pest\Livewire\livewire;

livewire(CreateUser::class)
    ->fillForm([
        'name' => null,
        'email' => 'invalid-email',
    ])
    ->call('create')
    ->assertHasFormErrors([
        'name' => 'required',
        'email' => 'email',
    ])
    ->assertNotNotified();

</code-snippet>

<code-snippet name="Calling actions in pages" lang="php">
use Filament\Actions\DeleteAction;
use function Pest\Livewire\livewire;

livewire(EditUser::class, ['record' => $user->id])
    ->callAction(DeleteAction::class)
    ->assertNotified()
    ->assertRedirect();

</code-snippet>

<code-snippet name="Calling actions in tables" lang="php">
use Filament\Actions\Testing\TestAction;
use function Pest\Livewire\livewire;

livewire(ListUsers::class)
    ->callAction(TestAction::make('promote')->table($user), [
        'role' => 'admin',
    ])
    ->assertNotified();

</code-snippet>


### Correct Namespaces

- Form fields (___SINGLE_BACKTICK___TextInput___SINGLE_BACKTICK___, ___SINGLE_BACKTICK___Select___SINGLE_BACKTICK___, etc.): ___SINGLE_BACKTICK___Filament\Forms\Components\___SINGLE_BACKTICK___
- Infolist entries (___SINGLE_BACKTICK___TextEntry___SINGLE_BACKTICK___, ___SINGLE_BACKTICK___IconEntry___SINGLE_BACKTICK___, etc.): ___SINGLE_BACKTICK___Filament\Infolists\Components\___SINGLE_BACKTICK___
- Layout components (___SINGLE_BACKTICK___Grid___SINGLE_BACKTICK___, ___SINGLE_BACKTICK___Section___SINGLE_BACKTICK___, ___SINGLE_BACKTICK___Fieldset___SINGLE_BACKTICK___, ___SINGLE_BACKTICK___Tabs___SINGLE_BACKTICK___, ___SINGLE_BACKTICK___Wizard___SINGLE_BACKTICK___, etc.): ___SINGLE_BACKTICK___Filament\Schemas\Components\___SINGLE_BACKTICK___
- Schema utilities (___SINGLE_BACKTICK___Get___SINGLE_BACKTICK___, ___SINGLE_BACKTICK___Set___SINGLE_BACKTICK___, etc.): ___SINGLE_BACKTICK___Filament\Schemas\Components\Utilities\___SINGLE_BACKTICK___
- Actions (___SINGLE_BACKTICK___DeleteAction___SINGLE_BACKTICK___, ___SINGLE_BACKTICK___CreateAction___SINGLE_BACKTICK___, etc.): ___SINGLE_BACKTICK___Filament\Actions\___SINGLE_BACKTICK___. Never use ___SINGLE_BACKTICK___Filament\Tables\Actions\___SINGLE_BACKTICK___, ___SINGLE_BACKTICK___Filament\Forms\Actions\___SINGLE_BACKTICK___, or any other sub-namespace for actions.
- Icons: ___SINGLE_BACKTICK___Filament\Support\Icons\Heroicon___SINGLE_BACKTICK___ enum (e.g., ___SINGLE_BACKTICK___Heroicon::PencilSquare___SINGLE_BACKTICK___)

### Common Mistakes

- **Never assume public file visibility.** File visibility is ___SINGLE_BACKTICK___private___SINGLE_BACKTICK___ by default. Always use ___SINGLE_BACKTICK___->visibility('public')___SINGLE_BACKTICK___ when public access is needed.
- **Never assume full-width layout.** ___SINGLE_BACKTICK___Grid___SINGLE_BACKTICK___, ___SINGLE_BACKTICK___Section___SINGLE_BACKTICK___, and ___SINGLE_BACKTICK___Fieldset___SINGLE_BACKTICK___ do not span all columns by default. Explicitly set column spans when needed.
<?php /**PATH C:\Users\fsmol\Herd\amplitudoprojekathrapp\storage\framework\views/01f02c96bb0330fd32a3c9590e8dd0cf.blade.php ENDPATH**/ ?>