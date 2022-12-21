@extends('layouts.form')

@section('form')
    <div class="space-y-4">
        <x-input wire:model.defer="item.name" label="Name" />

        <x-input wire:model.defer="item.email" label="Email" />
        <x-input wire:model.defer="item.mobile" label="Mobile" maxlength="10" />
        <div>
            <x-label>Logo</x-label>
            @if ($logo)
                <div class="inline-block mt-2 w-40 bg-gray-100 p-1 border mb-1">
                    <img class="w-full" src="{{ $logo->temporaryUrl() }}" />
                </div>
            @else
                @if (@$item['logo'])
                    <div class="inline-block mt-2 w-40 bg-gray-100 p-1 border mb-1">
                        <img class="w-full" src="{{ $item['logo_url'] }}" />
                    </div>
                @endif
            @endif

            <div>
                <input accept="image/*" x-ref="logo" hidden type="file" wire:model="logo">
                <button x-on:click="$refs.logo.click()" type="button"
                    class="bg-white py-2 mt-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    @if ($logo || @$item['logo'])
                        Change
                    @else
                        Choose
                    @endif
                </button>
            </div>
            <x-input-error for="logo" />
        </div>

        <div class="grid grid-cols-6 gap-6">
            <div class="col-span-6 sm:col-span-3">
               <label for="state" class="block text-sm font-medium text-gray-700">State</label>
               <select wire:change="onStateChange()" wire:model="item.state_id" id="state"
                  class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  <option value="">Select State</option>
                  @foreach ($this->states as $s)
                     <option value="{{ $s->id }}">{{ $s->name }}</option>
                  @endforeach
               </select>
               <x-input-error for="item.state_id" />
            </div>
      
            <div class="col-span-6 sm:col-span-3">
               <label for="city" class="block text-sm font-medium text-gray-700">City</label>
               <select wire:model.defer="item.city_id" id="city"
                  class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  <option value="">Select City</option>
                  @foreach ($this->cities as $c)
                     <option value="{{ $c->id }}">{{ $c->name }}</option>
                  @endforeach
               </select>
               <x-input-error for="item.city_id" />
            </div>
      
            
         </div>
      

    </div>
@endsection
