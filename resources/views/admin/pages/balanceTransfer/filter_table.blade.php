<table class="table table-striped datatable" style="width:100%">
    <thead>
        <tr>
            <th width="3%" class="text-center">Sl</th>
            <th width="15%" class="text-center">Reason</th>
            <th width="10%" class="text-center">From Account</th>
            <th width="20%" class="text-center">To Account</th>
            <th width="10%" class="text-center">Amount</th>
            <th width="15%" class="text-center">Date</th>
            <th width="7%" class="text-center">Status</th>
            <th width="10%" class="text-end">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($transfers as $transfer)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td class="text-center">{{ $transfer->reason }}</td>
                <td>{{ optional($transfer->debitTransaction->cashbookAccount)->bank_name . '[' . optional($transfer->debitTransaction->cashbookAccount)->account_number . ']' ?? '' }}
                </td>
                <td>{{ optional($transfer->creditTransaction->cashbookAccount)->bank_name . '[' . optional($transfer->creditTransaction->cashbookAccount)->account_number . ']' ?? '' }}
                </td>
                <td class="text-center">{{ $transfer->amount }}</td>
                <td class="text-center">
                    {{ optional($transfer->date) ? \Carbon\Carbon::parse($transfer->date)->format('jS M, Y') : '' }}
                </td>
                <td>
                    <span
                        class="badge {{ $transfer->status == 'active' ? 'bg-success' : 'bg-danger' }}">
                        {{ $transfer->status == 'active' ? 'Active' : 'InActive' }}</span>
                </td>
                <td class="text-end">
                    <a href="{{ route('admin.balance-transfer.edit', $transfer->slug) }}"
                        class="btn btn-sm btn-primary toltip" data-tooltip="Edit">
                        <i class="fa-solid fa-pen"></i>
                    </a>
                    {{-- <a href="javascript:void(0)"
                        class="btn btn-sm btn-warning text-white toltip"
                        data-tooltip="View">
                        <i class="fa-solid fa-expand"></i>
                    </a> --}}
                    <a href="{{ route('admin.balance-transfer.destroy', $transfer->id) }}"
                        class="btn btn-sm btn-danger toltip" data-tooltip="Delete">
                        <i class="fa-solid fa-trash"></i>
                    </a>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>
