@aware(['component', 'tableName'])
<div @class([
        'ml-0 ml-md-2' => $component->isBootstrap4(),
        'ms-0 ms-md-2' => $component->isBootstrap5(),
    ])
>
    <select wire:model.live="perPage" id="{{ $tableName }}-perPage"
        {{ 
            $attributes->merge($component->getPerPageFieldAttributes())
            ->class([
                'form-control' => $component->isBootstrap4() && $component->getPerPageFieldAttributes()['default-styling'],
                'form-select' => $component->isBootstrap5() && $component->getPerPageFieldAttributes()['default-styling'],
                'block w-full rounded-md shadow-sm transition duration-150 ease-in-out sm:text-sm sm:leading-5 focus:ring focus:ring-opacity-50' => $component->isTailwind() && $component->getPerPageFieldAttributes()['default-styling'],
                'inline-flex justify-center px-4 py-2 w-full text-sm font-medium text-gray-700 bg-white rounded-md border border-gray-300 shadow-sm hover:bg-gray-50 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:hover:bg-gray-600' => $component->isTailwind() && $component->getPerPageFieldAttributes()['default-colors'],
            ])
            ->except(['default','default-styling','default-colors']) 
        }}
    >
        @foreach ($component->getPerPageAccepted() as $item)
            <option
                value="{{ $item }}"
                wire:key="{{ $tableName }}-per-page-{{ $item }}"
            >
                {{ $item === -1 ? __('All') : $item }}
            </option>
        @endforeach
    </select>
</div>
