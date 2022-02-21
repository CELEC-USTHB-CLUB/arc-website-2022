@foreach($columns as $column)
    @if ($column->isVisible())
        @continue($columnSelect && ! $this->isColumnSelectEnabled($column))
        <x-livewire-tables::bs5.table.cell
            :class="method_exists($this, 'setTableDataClass') ? $this->setTableDataClass($column, $row) : ''"
            :id="method_exists($this, 'setTableDataId') ? $this->setTableDataId($column, $row) : ''"
            :customAttributes="method_exists($this, 'setTableDataAttributes') ? $this->setTableDataAttributes($column, $row) : []"
        >
            @if ($column->isHtml())
                {{ new \Illuminate\Support\HtmlString($column->formatted($row)) }}
            @else
                <span x-show="!modify">{{ $column->formatted($row) }} </span>
                <input type="text" x-show="modify" name="{{$column->column}}" value="{{$column->formatted($row)}}" >
            @endif
        </x-livewire-tables::bs5.table.cell>
    @endif
@endforeach
