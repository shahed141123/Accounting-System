@extends('pdf')

@section('content-area')
    <h3>@lang('All expenses')</h3>
    <div class="table-responsive">
        <table class="table-listing table table-bordered table-striped table-sm">
            <thead class="thead-light">
                <tr>
                    <th>@lang('#')</th>
                    <th>Category</th>
                    <th>@lang('Sub Category')</th>
                    <th>@lang('Reason')</th>
                    <th>@lang('Amount')</th>
                    <th>@lang('Account')</th>
                    <th>@lang('Date')</th>
                    <th>@lang('Status')</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($expenses as $key => $expense)
                {{-- @dd($expense) --}}
                    <tr>
                        <td> {{ ++$key }} </td>
                        <td>
                            {{ $expense['exp_sub_category']['expense_category']['name'] }}<br />
                            [{{ $expense['exp_sub_category']['expense_category']['code'] }}]
                        </td>
                        <td>
                            {{ $expense['exp_sub_category']['name'] }}<br />
                            [{{ $expense['exp_sub_category']['code'] }}]
                        </td>
                        <td>{{ $expense['reason'] }}</td>
                        <td>
                            {{ $expense['exp_transaction']['amount'] }}
                        </td>
                        <td>
                            {{ $expense['exp_transaction']['cashbook_account']['bank_name'] }}<br>
                            [{{ $expense['exp_transaction']['cashbook_account']['account_number'] }}]
                        </td>
                        <td>{{ \Carbon\Carbon::parse($expense['date'])->format('d-M-Y') }}</td>
                        <td>
                            @if ($expense['status'] == 'active')
                                @lang('Active')
                            @else
                                @lang('Inactive')
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
