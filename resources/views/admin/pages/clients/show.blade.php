<x-admin-app-layout :title="'Client'">
    <div class="app-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-lg-3">
                    <div class="card">
                        <div class="card-body box-profile">
                            <div class="text-center mb-2">
                                @if ($allData->image)
                                    <a href="#" id="show-modal" @click="previewModal('{{ $allData->image }}')">
                                        <img src="{{ $allData->image }}" class="profile-user-img img-fluid img-circle"
                                            loading="lazy" />
                                    </a>
                                @else
                                    <div class="bg-secondary no-preview-lg">
                                        <small>{{ __('common.no_preview') }}</small>
                                    </div>
                                @endif
                            </div>
                            <h3 class="profile-username text-center">{{ $allData->name }}</h3>
                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <strong>{{ __('common.client_id') }}</strong>
                                    <span class="float-right">{{ withPrefix($allData->clientID, $clientPrefix) }}</span>
                                </li>
                                <li class="list-group-item">
                                    <strong>{{ __('common.name') }}</strong>
                                    <span class="float-right">{{ $allData->name }}</span>
                                </li>
                                <li class="list-group-item">
                                    <strong>{{ __('common.email') }}</strong>
                                    <span class="float-right">{{ $allData->email }}</span>
                                </li>
                                <li class="list-group-item">
                                    <strong>{{ __('common.contact_number') }}</strong>
                                    <span class="float-right">{{ $allData->phoneNumber }}</span>
                                </li>
                                <li class="list-group-item">
                                    <strong>{{ __('common.company_name') }}</strong>
                                    <span class="float-right">{{ $allData->companyName }}</span>
                                </li>
                                <li class="list-group-item">
                                    <strong>{{ __('common.address') }}</strong>
                                    <span class="float-right">{{ $allData->address }}</span>
                                </li>
                            </ul>
                            @if ($allData->status === 1)
                                <span class="btn-block btn bg-success">{{ __('common.active') }}</span>
                            @else
                                <span class="btn-block btn bg-danger">{{ __('common.in_active') }}</span>
                            @endif
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <div class="col-md-12 col-lg-9">
                    <div class="row">
                        <div class="col-lg-6 col-md-4 col-12">
                            <div class="card bg-info">
                                <div class="card-content">
                                    <div class="card-body pb-1">
                                        <div class="row">
                                            <div class="col-6">
                                                <h6 class="text-white">
                                                    {{ $t('common.invoice_total') }}
                                                </h6>
                                                <h6 class="text-white">
                                                    {{ $t('payments.common.non_invoice_total') }}
                                                </h6>
                                                <hr />
                                                <h4 class="text-white mb-1">{{ $t('common.total') }}</h4>
                                            </div>
                                            <div class="col-6 text-right">
                                                <h6 class="text-white">

                                                </h6>
                                                <h6 class="text-white">
                                                    {{ (allData . nonInvoiceDue) | withCurrency }}
                                                </h6>
                                                <hr />
                                                <h4 class="text-white mb-1">
                                                    {{ (allData . clientInvoiceTotal + allData . nonInvoiceDue) | withCurrency }}
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-12">
                            <div class="card bg-danger">
                                <div class="card-content">
                                    <div class="card-body pb-1">
                                        <div class="row">
                                            <div class="col-6">
                                                <h6 class="text-white">{{ $t('common.invoice_due') }}</h6>
                                                <h6 class="text-white">
                                                    {{ $t('common.non_invoice_due') }}
                                                </h6>
                                                <hr />
                                                <h4 class="text-white mb-1">
                                                    {{ $t('common.total_due') }}
                                                </h4>
                                            </div>
                                            <div class="col-6 text-right">
                                                <h6 class="text-white">
                                                    {{ (allData . clientDue) | withCurrency }}
                                                </h6>
                                                <h6 class="text-white">
                                                    {{ (allData . nonInvoiceCurrentDue) | withCurrency }}
                                                </h6>
                                                <hr />
                                                <h4 class="text-white mb-1">
                                                    {{ (allData . clientDue + allData . nonInvoiceCurrentDue) | withCurrency }}
                                                </h4>
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
