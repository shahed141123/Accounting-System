<x-admin-app-layout>
    <div class="app-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mt-5">
                        <div class="card-header p-2">
                            <div class="d-flex align-items-center justify-content-between">
                                <h4 class="text-gray-800">Create Transfer</h4>
                                <a href="{{ route('admin.balance-transfer.index') }}" class="btn-common-one text-white"
                                    tabindex="0">
                                    <i class="fa-solid fa-arrow-left-long pe-3"></i>
                                    Back
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('admin.balance-transfer.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <x-admin.label for="transferReason" class="form-label">Transfer
                                                Reason</x-admin.label>
                                            <x-admin.input type="text" :value="old('transferReason')" id="transferReason"
                                                name="transferReason" required></x-admin.input>
                                        </div>

                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="fromAccount" class="form-label">From Account</label>
                                            <x-admin.select-option id="fromAccount" name="fromAccount"
                                                :allowClear="true">
                                                <option value="Cash[CASH-0001]">Cash[CASH-0001]</option>
                                                <option value="Dutch Bangla Bank[DBBL-0003]">Dutch Bangla
                                                    Bank[DBBL-0003]</option>
                                                <option value="Islami Bank Bangladesh Ltd[IBBL-0002]">Islami Bank
                                                    Bangladesh Ltd[IBBL-0002]</option>
                                            </x-admin.select-option>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="toAccount" class="form-label">To Account</label>
                                            <x-admin.select-option id="toAccount" name="toAccount" :allowClear="true">
                                                <option value="Cash[CASH-0001]">Cash[CASH-0001]</option>
                                                <option value="Dutch Bangla Bank[DBBL-0003]">Dutch Bangla
                                                    Bank[DBBL-0003]</option>
                                                <option value="Islami Bank Bangladesh Ltd[IBBL-0002]">Islami Bank
                                                    Bangladesh Ltd[IBBL-0002]</option>
                                            </x-admin.select-option>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="availableBalance" class="form-label">Available Balance</label>
                                            <x-admin.input type="text" :value="old('availableBalance')" id="availableBalance"
                                                name="availableBalance" required></x-admin.input>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="amount" class="form-label">Amount </label>
                                            <x-admin.input type="text" :value="old('amount')" id="amount"
                                                name="amount" required></x-admin.input>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="mb-3">
                                            <x-admin.label for="date" class="form-label"> Date</x-admin.label>
                                            <x-admin.input type="date" :value="old('date')" id="date"
                                                name="date" required></x-admin.input>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
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
                                <x-admin.button type="submit" class="">Transfer <i
                                        class="fa-regular fa-floppy-disk ps-2"></i></x-admin.button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-app-layout>
