<x-admin-app-layout :title="'Account Balance Sheet'">
    <div class="app-content">
        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-12">
                    <div class="card border-0 shadow-none">
                        <div class="card-header p-3 bg-custom text-white">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h4 class="mb-0">Balance Sheet</h4>
                                </div>
                                <div class="btn-group" role="group" aria-label="Basic outlined example">
                                    <button type="button" class="btn btn-outline-light toltip"
                                        data-tooltip="Export To Excel">
                                        <i class="fa-solid fa-file-csv"></i>
                                    </button>
                                    <button type="button" class="btn btn-outline-light toltip"
                                        data-tooltip="Download PDF">
                                        <i class="fa-solid fa-file-pdf"></i>
                                    </button>
                                    <button type="button" class="btn btn-outline-light" onclick="printTable()">
                                        <i class="fa-solid fa-print"></i>
                                    </button>
                                    <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-light toltip"
                                        data-tooltip="Back To Home">
                                        <i class="fa-solid fa-arrow-left-long"></i> Back
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body printBody">
                            <div class="row gx-0 p-3">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            {{-- Logo Area --}}
                                            <div class="d-flex justify-content-between align-items-center py-4">
                                                <div>
                                                    <a href="{{ route('admin.dashboard') }}" class="brand-link">
                                                        <img src="{{ asset('images/logo-color.png') }}"
                                                            alt="AdminLTE Logo" class="brand-image" width="150px" />
                                                    </a>
                                                    <p class="pt-3">Ultimate Sales, Inventory <br>
                                                        Accounting Management System
                                                    </p>
                                                </div>
                                                <div class="text-end">
                                                    <p><b>Phone:</b> 0170000000</p>
                                                    <p><b>Email:</b> support@codeshape.net</p>
                                                    <p><b>Address:</b> Ground Floor, Road# 24, House# 339 <br> New DOHS,
                                                        Mohakhali, Dhaka - 1206, Bangladesh</p>
                                                </div>
                                            </div>
                                            {{-- Logo Area End --}}
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="row gx-0">
                                                <div class="col-lg-6">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered mb-0">
                                                            <tbody>
                                                                <tr class="table-info border-0">
                                                                    <td colspan="3" class="text-center"><strong
                                                                            class="text-uppercase">Income</strong></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>Total Security/Asset=></td>
                                                                    <td class="text-end">$250000.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>Inventory Value=></td>
                                                                    <td class="text-end">$65681.80</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>3</td>
                                                                    <td>Client's Dues=></td>
                                                                    <td class="text-end">$109495.25</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>4</td>
                                                                    <td>Bank Balance=></td>
                                                                    <td class="text-end">$424878.08</td>
                                                                </tr>
                                                                <tr class="table-primary border-0">
                                                                    <td colspan="2">Total Income=></td>
                                                                    <td class="text-end">$850055.13</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered mb-0">
                                                            <tbody>
                                                                <tr class="table-info border-0">
                                                                    <td colspan="3" class="text-center"><strong
                                                                            class="text-uppercase">Liability</strong>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>Supplier's Dues=></td>
                                                                    <td class="text-end">$128109.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>Bank Loan=></td>
                                                                    <td class="text-end">$190454.60</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>3</td>
                                                                    <td>Bank Loan=></td>
                                                                    <td class="text-end">$190454.60</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>4</td>
                                                                    <td>Bank Loan=></td>
                                                                    <td class="text-end">$190454.60</td>
                                                                </tr>
                                                                <tr class="table-primary border-0">
                                                                    <td colspan="2">Total Liability=></td>
                                                                    <td class="text-end">$318563.60</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered mb-0">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="50%">Total Liability & Total Income <br> (Income -
                                                                        Liabilities)</td>
                                                                    <td width="50%" class="text-end" colspan="2">($850055.13 -
                                                                        $318563.60)</td>
                                                                </tr>
                                                            </tbody>
                                                            <tbody>
                                                                <tr class="table-info border-0 fw-bold">
                                                                    <td>Total Asset:</td>
                                                                    <td class="text-end" colspan="2">$850055.13</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-app-layout>
