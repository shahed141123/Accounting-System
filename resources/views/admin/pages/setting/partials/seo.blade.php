<div class="row text-center py-5">
    <h5 class="text-center m-0 p-0">SEO Information</h5>
</div>
<div class="row mt-3">
    <div class="fv-row col-lg-6 mb-7">
        <x-admin.label class="fw-semibold fs-6 mb-2">Site Title</x-admin.label>
        <x-admin.input type="text" name="site_title" value="{{ optional($setting)->site_title }}"
            class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Site Title" />
    </div>
    <div class="fv-row col-lg-6 mb-7">
        <x-admin.label class="fw-semibold fs-6 mb-2">Site URL</x-admin.label>
        <x-admin.input type="text" name="site_url" value="{{ optional($setting)->site_url }}"
            class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Site URL" />
    </div>
    <div class="fv-row col-lg-6 mb-7">
        <x-admin.label class="fw-semibold fs-6 mb-2">Meta Keyword</x-admin.label>
        <x-admin.input type="text" name="meta_keyword" value="{{ optional($setting)->meta_keyword }}"
            class="form-control form-control-solid mb-3 mb-lg-0"
            placeholder="keyword one, keyword two, keyword three, ...." />
    </div>
    <div class="fv-row col-lg-6 mb-7">
        <x-admin.label class="fw-semibold fs-6 mb-2">Meta Description</x-admin.label>
        <x-admin.input type="text" name="meta_description"
            value="{{ optional($setting)->meta_description }}"
            class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Meta Description" />
    </div>
    <div class="fv-row col-lg-12 mb-7">
        <x-admin.label class="fw-semibold fs-6 mb-2">Google Analytics</x-admin.label>
        <textarea class="form-control form-control-solid mb-3 mb-lg-0" name="google_analytics" id="" rows="7">{!! optional($setting)->google_analytics !!}</textarea>
    </div>
    <div class="fv-row col-lg-12 mb-7">
        <x-admin.label class="fw-semibold fs-6 mb-2">Google Adsense</x-admin.label>
        <textarea class="form-control form-control-solid mb-3 mb-lg-0" name="google_adsense" id="" rows="7">{!! optional($setting)->google_adsense !!}</textarea>
    </div>
</div>
