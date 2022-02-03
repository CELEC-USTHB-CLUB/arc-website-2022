<?php

namespace App\Http\Livewire;

use App\Exports\UsersExport;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Maatwebsite\Excel\Facades\Excel;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class UsersTable extends DataTableComponent {

    public array $bulkActions = [
        'export' => 'Export',
    ];

    public function export() {
        return Excel::download(new UsersExport, 'users_'.date("Y-m-d H-i").'.xlsx');;
    }

    public function columns(): array {
        return [
            Column::make('ID', "id")->sortable(),
            Column::make('leader_name')->searchable(),
            Column::make('email')->searchable(),
            Column::make('wilaya')->sortable(),
            Column::make('member_2'),
            Column::make('member_3'),
            Column::make('member_4'),
            Column::make('participations_number')->sortable(),
            Column::make('skills'),
            Column::make('created at'),
        ];
    }

    public function query(): Builder
    {
        return User::query();
    }
}
