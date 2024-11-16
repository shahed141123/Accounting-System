<x-admin-app-layout>
    <div class="app-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mt-5">
                        <div class="card-header p-2">
                            <div class="d-flex align-items-center justify-content-between">
                                <h4 class="text-gray-800">Create Payroll</h4>
                                <a href="{{ route('admin.payroll.index') }}" class="btn-common-one text-white"
                                    tabindex="0">
                                    <i class="fa-solid fa-arrow-left-long pe-3"></i>
                                    Back
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form id="payroll-form" method="POST" action="{{ route('admin.payroll.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-5 col-md-6">
                                        <div class="mb-3">
                                            <label for="employee_id" class="form-label">Employee</label>
                                            <x-admin.select-option placeholder="Select Employee" id="employee_id"
                                                name="employee_id" :allowClear="true" required>
                                                <option value="">-- Select Employee --</option>
                                                @foreach ($employees as $employee)
                                                    <option value="{{ $employee->id }}"
                                                        data-salary="{{ $employee->salary }}">{{ $employee->name }}
                                                    </option>
                                                @endforeach
                                            </x-admin.select-option>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="mb-3">
                                            <x-admin.label for="currentSalary" class="form-label"> Current
                                                Salary</x-admin.label>
                                            <input class="form-control form-control-solid " type="text"
                                                value="{{ old('currentSalary') }}" id="currentSalary"
                                                name="currentSalary" readonly></input>
                                            @error('currentSalary')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="mb-3">
                                            <label for="salary_month" class="form-label">Salary Month</label>
                                            <x-admin.select-option id="salary_month" name="salary_month"
                                                :allowClear="true">
                                                <option value="" disabled> -- Select Month -- </option>
                                                @foreach (['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'] as $month)
                                                    <option value="{{ $month }}" @selected(old('salary_month') == $month)>
                                                        {{ $month }}</option>
                                                @endforeach
                                            </x-admin.select-option>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5">
                                        <div class="mb-3">
                                            <x-admin.label for="deduction_amount" class="form-label">Deduction Amount</x-admin.label>
                                            <x-admin.input type="number" :value="old('deduction_amount')" id="deduction_amount"
                                                name="deduction_amount" placeholder="Enter Deduction Amount"></x-admin.input>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-7">
                                        <div class="mb-3">
                                            <x-admin.label for="deduction_reason" class="form-label">Deduction Reason</x-admin.label>
                                            <x-admin.textarea id="deduction_reason"
                                                name="deduction_reason" placeholder="Enter Deduction Reason">{{ old('deduction_reason') }}</x-admin.textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <x-admin.label for="mobile_bill" class="form-label"> Mobile
                                                Bill</x-admin.label>
                                            <x-admin.input type="number" :value="old('mobile_bill')" id="mobile_bill"
                                                name="mobile_bill" required
                                                placeholder="Enter Mobile Bill"></x-admin.input>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <x-admin.label for="food_bill" class="form-label">Food Bill</x-admin.label>
                                            <x-admin.input type="number" :value="old('food_bill')" id="food_bill"
                                                name="food_bill" required placeholder="Enter Food Bill"></x-admin.input>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <x-admin.label for="bonus" class="form-label">Bonus</x-admin.label>
                                            <x-admin.input type="number" :value="old('bonus')" id="bonus"
                                                name="bonus" required placeholder="Enter Bonus"></x-admin.input>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <x-admin.label for="commission"
                                                class="form-label">Commission</x-admin.label>
                                            <x-admin.input type="number" :value="old('commission')" id="commission"
                                                name="commission" required
                                                placeholder="Enter commission"></x-admin.input>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <x-admin.label for="festivalBonus" class="form-label">Festival
                                                Bonus</x-admin.label>
                                            <x-admin.input type="number" :value="old('festivalBonus')" id="festivalBonus"
                                                name="festivalBonus" required
                                                placeholder="Enter festivalBonus"></x-admin.input>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <x-admin.label for="travelAllowance" class="form-label">Travel
                                                Allowance(TA)</x-admin.label>
                                            <x-admin.input type="number" :value="old('travelAllowance')" id="travelAllowance"
                                                name="travelAllowance" required
                                                placeholder="Enter travelAllowance"></x-admin.input>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <x-admin.label for="others" class="form-label">Others</x-admin.label>
                                            <x-admin.input type="number" :value="old('others')" id="others"
                                                name="others" required placeholder="Enter others"></x-admin.input>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="mb-3">
                                            <x-admin.label for="advance" class="form-label">Advance</x-admin.label>
                                            <x-admin.input type="number" :value="old('advance')" id="advance"
                                                name="advance" required placeholder="Enter advance"></x-admin.input>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="mb-3">
                                            <x-admin.label for="totalSalary" class="form-label">Total
                                                Salary</x-admin.label>
                                            <input class="form-control form-control-solid" type="number"
                                                value="{{ old('total_salary') }}" id="totalSalary" readonly
                                                name="total_salary" required placeholder="Enter totalSalary"></input>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="mb-3">
                                            <label for="toAccount" class="form-label">From Account</label>
                                            <x-admin.select-option id="toAccount" name="toAccount" :allowClear="true">
                                                @foreach ($accounts as $account)
                                                    <option value="{{ $account->id }}" @selected(old('toAccount') == $account->id)
                                                        data-balance="{{ $account->availableBalance() }}">
                                                        {{ $account->bank_name }}[{{ $account->account_number }}]
                                                    </option>
                                                @endforeach
                                            </x-admin.select-option>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="mb-3">
                                            <x-admin.label for="availableBalance" class="form-label"> Available
                                                Balance</x-admin.label>
                                            <input class="form-control form-control-solid " type="text"
                                                value="{{ old('availableBalance') }}" id="availableBalance"
                                                name="availableBalance" readonly></input>
                                            @error('availableBalance')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <x-admin.label for="image" class="form-label">Image</x-admin.label>
                                            <x-admin.file-input type="file" :value="old('image')" id="image"
                                                name="image" placeholder="Enter image"></x-admin.file-input>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <x-admin.label for="chequeNo" class="form-label">Cheque No</x-admin.label>
                                            <x-admin.input type="text" :value="old('chequeNo')" id="chequeNo"
                                                name="chequeNo" required placeholder="Enter chequeNo"></x-admin.input>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <x-admin.label for="salaryDate" class="form-label">Salary
                                                Date</x-admin.label>
                                            <x-admin.input type="date" :value="old('salaryDate')" id="salaryDate"
                                                name="salaryDate" required
                                                placeholder="Enter salaryDate"></x-admin.input>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label for="status" class="form-label">Status</label>
                                            <x-admin.select-option id="status" name="status" :allowClear="true">
                                                <option value="active">Active</option>
                                                <option value="inactive">Inactive</option>
                                            </x-admin.select-option>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="note" class="form-label">Note</label>
                                            <textarea class="form-control text-area-input" id="note" name="note" rows="3"
                                                placeholder="write your note here"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <x-admin.button type="submit" class="">Save Invoice <i
                                        class="fa-regular fa-floppy-disk ps-2"></i></x-admin.button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            $('#employee_id').on('change', function() {
                const selectedOption = $(this).find('option:selected'); // jQuery object
                const currentSalary = selectedOption.data('salary'); // Use jQuery's data() method
                alert(currentSalary);

                if (currentSalary) {
                    $('#currentSalary').val(parseFloat(currentSalary).toFixed(2)); // jQuery val() method
                } else {
                    $('#currentSalary').val('');
                }
            });


            $(document).ready(function() {
                // Initialize Select2
                // $('#account_id').select2();

                // Listen for the Select2 select event
                $('#from_account_id').on('change', function(e) {
                    const selectedOption = $(this).find('option:selected');
                    const availableBalance = selectedOption.data('balance');
                    $('#availableBalance').val(availableBalance);
                });
            });
        </script>
        <script>
            // Calculate Total Salary on input change
            document.getElementById('payroll-form').addEventListener('input', function() {
                const currentSalary = parseFloat(document.getElementById('currentSalary').value) || 0;
                const mobile_bill = parseFloat(document.getElementById('mobile_bill').value) || 0;
                const food_bill = parseFloat(document.getElementById('food_bill').value) || 0;
                const bonus = parseFloat(document.getElementById('bonus').value) || 0;
                const commission = parseFloat(document.getElementById('commission').value) || 0;
                const festivalBonus = parseFloat(document.getElementById('festivalBonus').value) || 0;
                const travelAllowance = parseFloat(document.getElementById('travelAllowance').value) || 0;
                const others = parseFloat(document.getElementById('others').value) || 0;
                const advance = parseFloat(document.getElementById('advance').value) || 0;

                const totalSalary = currentSalary + mobile_bill + food_bill + bonus + commission + festivalBonus + travelAllowance +
                    others - advance;
                document.getElementById('totalSalary').value = totalSalary.toFixed(2);
            });
        </script>
    @endpush
</x-admin-app-layout>
