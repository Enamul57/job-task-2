<div class="employee-card">
    <div class="row">
        @if(count($employers) > 0 || $searchByEmployee != '' || $status != '' || $featured != '')
            <div class="col-md-12">
                <div class="row mb-3 justify-content-end flex-wrap">
                    <div>
                        <div class="selectgroup mr-4">
                            <input wire:model.debounce.100ms="searchByEmployee" id="searchByEmployee"
                                   type="search"
                                   autocomplete="off"
                                   placeholder="{{ __('web.common.search') }}" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @forelse($employers as $employee)
            @include('companies.companies_card')
        @empty
            <div class="col-md-12">
                <h5 class="text-black text-center">
                    @if ($searchByEmployee)
                        {{ __('messages.company.no_employee_found') }}
                    @else
                        {{ __('messages.company.no_employer_available') }}
                    @endif
                </h5>
            </div>
        @endforelse
        <div class="col-md-12">
            <div class="row mb-3 justify-content-end flex-wrap">
                @if($employers->count() > 0)
                    {{$employers->links()}}
                @endif
            </div>
        </div>
    </div>
</div>
