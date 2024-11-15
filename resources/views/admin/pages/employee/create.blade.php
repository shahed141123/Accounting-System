<x-admin-app-layout :title="'Employee Create'">
    <div class="app-content">
        <div class="card">
            <div class="card-header p-2">
                <div class="d-flex align-items-center justify-content-between">
                    <h4 class="text-gray-800">{{ __('Create Employee') }}</h4>
                    <a href="{{ route('admin.employee.index') }}" class="btn-common-one text-white" tabindex="0">
                        <i class="fa-solid fa-arrow-left-long pe-3"></i>
                        {{ __('Back') }}
                    </a>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.employee.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="mb-3">
                                <x-admin.label for="name" class="form-label">
                                    {{ __('Employee Name') }} <span class="text-danger">*</span>
                                </x-admin.label>
                                <x-admin.input type="text" name="name" id="name" :value="old('name')"
                                    required />
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="mb-3">
                                <x-admin.label for="department_id" class="form-label">
                                    {{ __('Department') }} <span class="text-danger">*</span>
                                </x-admin.label>
                                <x-admin.select-option id="department_id" name="department_id">
                                    <option value="" disabled>{{ __('Select Department') }}</option>
                                    @foreach ($departments as $department)
                                        <option value="{{ $department->id }}" @selected(old('department_id') == $department->id)>
                                            {{ $department->name }}</option>
                                    @endforeach
                                </x-admin.select-option>
                                @error('department_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="mb-3">
                                <x-admin.label for="designation" class="form-label">
                                    {{ __('Designation') }} <span class="text-danger">*</span>
                                </x-admin.label>
                                <x-admin.input type="text" name="designation" id="designation" :value="old('designation')"
                                    required />
                                @error('designation')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="mb-3">
                                <x-admin.label for="mobile_number" class="form-label">
                                    {{ __('Contact Number') }} <span class="text-danger">*</span>
                                </x-admin.label>
                                <x-admin.input type="text" name="mobile_number" id="mobile_number"
                                    :value="old('mobile_number')" />
                                @error('mobile_number')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="mb-3">
                                <x-admin.label for="salary" class="form-label">
                                    {{ __('Salary') }} <span class="text-danger">*</span>
                                </x-admin.label>
                                <x-admin.input type="number" name="salary" id="salary" :value="old('salary')" required
                                    min="0" />
                                @error('salary')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="mb-3">
                                <x-admin.label for="commission" class="form-label">
                                    {{ __('Commission (%)') }}
                                </x-admin.label>
                                <x-admin.input type="number" name="commission" id="commission" :value="old('commission')"
                                    max="100" />
                                @error('commission')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="mb-3">
                                <x-admin.label for="birth_date"
                                    class="form-label">{{ __('Birth Date') }}</x-admin.label>
                                <x-admin.input type="date" name="birth_date" id="birth_date" :value="old('birth_date')" />
                                @error('birth_date')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">


                        <div class="col-lg-3 col-md-6">
                            <div class="mb-3">
                                <x-admin.label for="gender" class="form-label">
                                    {{ __('Gender') }} <span class="text-danger">*</span>
                                </x-admin.label>
                                <x-admin.select-option id="gender" name="gender">
                                    <option value="" disabled>{{ __('Select Gender') }}</option>
                                    <option value="Male" @selected(old('gender') == 'Male')>{{ __('Male') }}</option>
                                    <option value="Female" @selected(old('gender') == 'Female')>{{ __('Female') }}</option>
                                    <option value="Transgender" @selected(old('gender') == 'Transgender')>{{ __('Transgender') }}
                                    </option>
                                    <option value="Other" @selected(old('gender') == 'Other')>{{ __('Other') }}</option>
                                </x-admin.select-option>
                                @error('gender')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="mb-3">
                                <x-admin.label for="blood_group"
                                    class="form-label">{{ __('Blood Group') }}</x-admin.label>
                                <x-admin.select-option id="blood_group" name="blood_group">
                                    <option value="" disabled>{{ __('Select Blood Group') }}</option>
                                    <option value="A+" @selected(old('blood_group') == 'A+')>A+</option>
                                    <option value="B+" @selected(old('blood_group') == 'B+')>B+</option>
                                    <option value="O+" @selected(old('blood_group') == 'O+')>O+</option>
                                    <option value="AB+" @selected(old('blood_group') == 'AB+')>AB+</option>
                                    <option value="A-" @selected(old('blood_group') == 'A-')>A-</option>
                                    <option value="B-" @selected(old('blood_group') == 'B-')>B-</option>
                                    <option value="O-" @selected(old('blood_group') == 'O-')>O-</option>
                                    <option value="AB-" @selected(old('blood_group') == 'AB-')>AB-</option>
                                </x-admin.select-option>
                                @error('blood_group')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="mb-3">
                                <x-admin.label for="religion" class="form-label">{{ __('Religion') }}</x-admin.label>
                                <x-admin.select-option id="religion" name="religion">
                                    <option value="" disabled>{{ __('Select Religion') }}</option>
                                    <option value="Islam" @selected(old('religion') == 'Islam')>{{ __('Islam') }}</option>
                                    <option value="Hinduism" @selected(old('religion') == 'Hinduism')>{{ __('Hinduism') }}
                                    </option>
                                    <option value="Buddhism" @selected(old('religion') == 'Buddhism')>{{ __('Buddhism') }}
                                    </option>
                                    <option value="Christianity" @selected(old('religion') == 'Christianity')>
                                        {{ __('Christianity') }}</option>
                                    <option value="Other" @selected(old('religion') == 'Other')>{{ __('Other') }}</option>
                                </x-admin.select-option>
                                @error('religion')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="mb-3">
                                <x-admin.label for="status" class="form-label">Status <span
                                        class="text-danger">*</span></x-admin.label>
                                <x-admin.select-option id="status" name="status" :allowClear="true"
                                    required>
                                    <option value="active" @selected(old('status') == 'active')>Active</option>
                                    <option value="inactive" @selected(old('status') == 'inactive')>Inactive</option>
                                </x-admin.select-option>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="mb-3">
                                <x-admin.label for="appointment_date"
                                    class="form-label">{{ __('Appointment Date') }}</x-admin.label>
                                <x-admin.input type="date" name="appointment_date" id="appointment_date"
                                    :value="old('appointment_date')" />
                                @error('appointment_date')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="mb-3">
                                <x-admin.label for="joining_date" class="form-label">{{ __('Joining Date') }} <span
                                        class="text-danger">*</span></x-admin.label>
                                <x-admin.input type="date" name="joining_date" id="joining_date" :value="old('joining_date')"
                                    required />
                                @error('joining_date')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="mb-3">
                                <x-admin.label for="image"
                                    class="form-label">{{ __('Profile Photo') }}</x-admin.label>
                                <x-admin.file-input type="file" name="image" id="image" />
                                @error('image')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6">
                            <div class="mt-4 mb-3">

                                <label class="form-check form-switch d-flex align-items-center">
                                    <div>
                                        <input class="form-check-input me-2" type="checkbox" name="allowLogin"
                                            id="allowLogin" @checked(old('allowLogin') == true)/>
                                    </div>
                                    <div class="my-auto">
                                        <span class="form-check-label fw-semibold text-muted mt-1">
                                            Allow Login
                                        </span>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div id="loginFields" class="mt-3"
                        style="display: {{ old('allowLogin') ? 'block' : 'none' }}">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <x-admin.label for="email" class="form-label">{{ __('Email') }} <span
                                            class="text-danger">*</span></x-admin.label>
                                    <x-admin.input type="email" name="email" id="email" :value="old('email')"
                                        placeholder="{{ __('Email') }}" required />

                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <x-admin.label for="password" class="form-label">{{ __('Password') }} <span
                                            class="text-danger">*</span></x-admin.label>
                                    <x-admin.input type="password" name="password" id="password" :value="old('password')"
                                        placeholder="{{ __('Password') }}" required />

                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <x-admin.label for="role" class="form-label">{{ __('Role') }} <span
                                            class="text-danger">*</span></x-admin.label>
                                    <x-admin.select-option name="role" id="role" required>
                                        <option value="" disabled>{{ __('Select Role') }}</option>
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->name }}" @selected(old('role') == $role)>
                                                {{ $role->name}}</option>
                                        @endforeach
                                    </x-admin.select-option>

                                </div>
                            </div>
                        </div>
                    </div>



            </div>

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn-common-one">{{ __('Save') }}</button>
            </div>
            </form>
        </div>
    </div>
    </div>

    @push('scripts')
        <script>
            document.getElementById('allowLogin').addEventListener('change', function() {
                const loginFields = document.getElementById('loginFields');
                if (this.checked) {
                    loginFields.style.display = 'block';
                } else {
                    loginFields.style.display = 'none';
                }
            });
        </script>
    @endpush
</x-admin-app-layout>
