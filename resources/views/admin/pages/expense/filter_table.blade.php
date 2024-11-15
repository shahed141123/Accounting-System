@foreach ($expenses as $expense)
                                            <tr>
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                {{-- <td class="text-center">
                                                    <div>
                                                        <img width="50px" src="{{ asset('images/no_image.jpg') }}"
                                                            alt="">
                                                    </div>
                                                </td> --}}
                                                <td class="text-center">{{ optional($expense)->reason }}</td>
                                                <td class="text-center">{{ optional($expense->expCategory)->name }}
                                                    [{{ optional($expense->expCategory)->code }}]</td>
                                                <td class="text-center">{{ optional($expense->expSubCategory)->name }}
                                                    [{{ optional($expense->expSubCategory)->code }}]</td>
                                                <td class="text-center">{{ optional($expense)->amount }}</td>
                                                <td class="text-center">
                                                    {{ optional($expense->expTransaction)->cashbookAccount->bank_name }}[{{ optional($expense->expTransaction)->cashbookAccount->account_number }}]
                                                </td>
                                                <td class="text-center">
                                                    {{ optional($expense->date) ? \Carbon\Carbon::parse($expense->date)->format('jS M, Y') : '' }}
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge {{ $expense->status == 'active' ? 'bg-success' : 'bg-danger' }}">
                                                        {{ $expense->status == 'active' ? 'Active' : 'InActive' }}</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{ route('admin.expense.edit', optional($expense)->id) }}"
                                                        class="btn btn-sm btn-primary">
                                                        <i class="fa-solid fa-pen"></i>
                                                    </a>
                                                    {{-- <a href="javascript:void(0)"
                                                        class="btn btn-sm btn-warning text-white">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </a> --}}
                                                    <a href="{{ route('admin.expense.destroy', optional($expense)->id) }}"
                                                        class="btn btn-sm btn-danger delete">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
