@extends('admin-layout.base')

@section('content')
@vite('resources/css/resident/app.css')
    <div class="py-12 bg-white shadow-xl rounded-t-lg mx-5 mt-5">
        <div class="max-w-7-xl mx-auto sm:px-6 lg:px-8">
            <h3 class="mb-3 text-3xl">Master Data Account</h3>
            <div class="flex w-full justify-between">
                <div class=" breadcrumbs mb-3">
                    <ul>
                        <li><a href="{{ url('data/bookkeeping') }}">Home</a></li>
                        <li><a href="{{ url('data/bookkeeping/account') }}">Master Data Account</a></li>
                        <li>Show Details</li>
                    </ul>
                </div>
            </div>
            {{-- content --}}
            <div class="border-t border-gray-200">
                <dl>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Full Address</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $account->household->full_address }}</dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Name Account</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $account->name_account }}</dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Number Account</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $account->number_account }}</dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 mb-5">
                        <dt class="text-sm font-medium text-gray-500">Balance</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">Rp {{ number_format($account->balance, 0, ',', '.') }}</dd>
                    </div>
                </dl>
            </div>
            <a class="add-btn btn-lg px-4 py-1.5 text-white rounded-md mt-5" href="{{ url('data/bookkeeping/account') }}">Back</a>
        </div>
    </div>
@endsection
