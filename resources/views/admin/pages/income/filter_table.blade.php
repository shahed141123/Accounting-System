@foreach ($incomes as $income)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        {{-- <td class="text-center">
                                                    <div>
                                                        <img width="50px" src="{{ asset('images/no_image.jpg') }}"
                                                            alt="">
                                                    </div>
                                                </td> --}}
        <td class="text-center">{{ optional($income)->reason }}</td>
        <td class="text-center">{{ optional($income->incomeCategory)->name }}
            [{{ optional($income->incomeCategory)->code }}]</td>
        <td class="text-center">{{ optional($income->incomeSubCategory)->name }}
            [{{ optional($income->incomeSubCategory)->code }}]</td>
        <td class="text-center">{{ optional($income)->amount }}</td>
        <td class="text-center">
            {{ optional($income->incomeTransaction)->cashbookAccount->bank_name }}[{{ optional($income->incomeTransaction)->cashbookAccount->account_number }}]
        </td>
        <td class="text-center">
            {{ optional($income) ? \Carbon\Carbon::parse($income->date)->format('jS M, Y') : '' }}
        </td>
        <td>
            <span class="badge {{ $income->status == 'active' ? 'bg-success' : 'bg-danger' }}">
                {{ $income->status == 'active' ? 'Active' : 'InActive' }}</span>
        </td>
        <td class="text-end">
            <a href="{{ route('admin.income.edit', optional($income)->id) }}" class="btn btn-sm btn-primary">
                <i class="fa-solid fa-pen"></i>
            </a>
            <a href="javascript:void(0)" data-bs-toggle="modal"
                data-bs-target="#showIncome_{{ optional($income)->id }}" class="btn btn-sm btn-warning text-white">
                <i class="fa-solid fa-expand"></i>
            </a>
            <a href="{{ route('admin.income.destroy', optional($income)->id) }}" class="btn btn-sm btn-danger delete">
                <i class="fa-solid fa-trash"></i>
            </a>
        </td>
    </tr>
@endforeach
