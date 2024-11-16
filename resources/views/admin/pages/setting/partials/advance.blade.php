<div class="row">
    <div class="col-lg-12">
        <div class="py-3 bg-light">
            <h5 class="text-center">Advance Information</h5>
        </div>
    </div>
</div>
<div class="row align-items-center p-5">
    <div class="col-xl-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" name="user_verification"
                id="user_verification" {{ old('user_verification', optional($setting)->user_verification) == '1' ? 'checked' : '' }} />
            <x-admin.label class="form-check-label pt-0 pt-lg-2 ps-3" for="user_verification">
                User Verification Checking
            </x-admin.label>
        </div>
    </div>
    <div class="col-xl-3">
        <div class="mb-10">
            <x-admin.label class="form-label">Minimum Order Amount(Min: 0)</x-admin.label>
            <x-admin.input type="number" name="minimum_order_amount" id="minimum_order_amount"
                min="0" class="form-control mb-2" placeholder="User Minimum Order Amount"
                :value="old('minimum_order_amount', optional($setting)->minimum_order_amount)">
            </x-admin.file-input>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="mb-10">
            <x-admin.label for="currency" class="form-label">Currency</x-admin.label>
            <x-admin.select-option id="currency" name="currency" :allowClear="true">
                <option value="TK" @selected(old('currency', optional($setting)->currency) == 'TK')>Taka (TK)</option>
                <option value="$" @selected(old('currency', optional($setting)->currency) == '$')>Dollar ($)</option>
                <option value="€" @selected(old('currency', optional($setting)->currency) == '€')>Euro (€)</option>
                <option value="£" @selected(old('currency', optional($setting)->currency) == '£')>Pound (£)</option>
            </x-admin.select-option>
        </div>
    </div>

</div>
