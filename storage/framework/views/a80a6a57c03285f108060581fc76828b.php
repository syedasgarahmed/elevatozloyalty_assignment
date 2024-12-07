

<?php $__env->startSection('title', 'Edit Profile'); ?>

<?php $__env->startSection('content'); ?>
    <div class="dashboard-container">
        <h1 class="welcome-message">Edit Profile</h1>

        <form id="edit-profile-form" action="<?php echo e(route('update-profile')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name"
                    value="<?php echo e(old('name', Auth::user()->name)); ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email"
                    value="<?php echo e(old('email', Auth::user()->email)); ?>" required>
            </div>
            <div class="mb-3">
                <label for="mobile_no" class="form-label">Mobile Number</label>
                <input type="text" class="form-control" id="mobile_no" name="mobile_no"
                    value="<?php echo e(old('mobile_no', Auth::user()->mobile_no)); ?>" required>
            </div>

            <h3>Address Information:</h3>
            <div class="mb-3">
                <label for="address_1" class="form-label">Address Line 1</label>
                <input type="text" class="form-control" id="address_1" name="address_1"
                    value="<?php echo e(old('address_1', $address->address_1 ?? '')); ?>" required>
            </div>
            <div class="mb-3">
                <label for="address_2" class="form-label">Address Line 2</label>
                <input type="text" class="form-control" id="address_2" name="address_2"
                    value="<?php echo e(old('address_2', $address->address_2 ?? '')); ?>">
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" id="city" name="city"
                    value="<?php echo e(old('city', $address->city ?? '')); ?>" required>
            </div>
            <!-- State dropdown -->
            <div class="mb-3">
                <label for="state" class="form-label">State</label>
                <select name="state" id="state" class="form-control" required>
                    <option value="" disabled selected>Select State</option>
                    <option value="Andhra Pradesh"
                        <?php echo e(old('state', $address->state ?? '') == 'Andhra Pradesh' ? 'selected' : ''); ?>>Andhra Pradesh
                    </option>
                    <option value="Arunachal Pradesh"
                        <?php echo e(old('state', $address->state ?? '') == 'Arunachal Pradesh' ? 'selected' : ''); ?>>Arunachal Pradesh
                    </option>
                    <option value="Assam" <?php echo e(old('state', $address->state ?? '') == 'Assam' ? 'selected' : ''); ?>>Assam
                    </option>
                    <option value="Bihar" <?php echo e(old('state', $address->state ?? '') == 'Bihar' ? 'selected' : ''); ?>>Bihar
                    </option>
                    <option value="Chhattisgarh"
                        <?php echo e(old('state', $address->state ?? '') == 'Chhattisgarh' ? 'selected' : ''); ?>>Chhattisgarh</option>
                    <option value="Goa" <?php echo e(old('state', $address->state ?? '') == 'Goa' ? 'selected' : ''); ?>>Goa
                    </option>
                    <option value="Gujarat" <?php echo e(old('state', $address->state ?? '') == 'Gujarat' ? 'selected' : ''); ?>>
                        Gujarat</option>
                    <option value="Haryana" <?php echo e(old('state', $address->state ?? '') == 'Haryana' ? 'selected' : ''); ?>>
                        Haryana</option>
                    <option value="Himachal Pradesh"
                        <?php echo e(old('state', $address->state ?? '') == 'Himachal Pradesh' ? 'selected' : ''); ?>>Himachal Pradesh
                    </option>
                    <option value="Jharkhand" <?php echo e(old('state', $address->state ?? '') == 'Jharkhand' ? 'selected' : ''); ?>>
                        Jharkhand</option>
                    <option value="Karnataka" <?php echo e(old('state', $address->state ?? '') == 'Karnataka' ? 'selected' : ''); ?>>
                        Karnataka</option>
                    <option value="Kerala" <?php echo e(old('state', $address->state ?? '') == 'Kerala' ? 'selected' : ''); ?>>Kerala
                    </option>
                    <option value="Madhya Pradesh"
                        <?php echo e(old('state', $address->state ?? '') == 'Madhya Pradesh' ? 'selected' : ''); ?>>Madhya Pradesh
                    </option>
                    <option value="Maharashtra"
                        <?php echo e(old('state', $address->state ?? '') == 'Maharashtra' ? 'selected' : ''); ?>>Maharashtra</option>
                    <option value="Manipur" <?php echo e(old('state', $address->state ?? '') == 'Manipur' ? 'selected' : ''); ?>>
                        Manipur</option>
                    <option value="Meghalaya" <?php echo e(old('state', $address->state ?? '') == 'Meghalaya' ? 'selected' : ''); ?>>
                        Meghalaya</option>
                    <option value="Mizoram" <?php echo e(old('state', $address->state ?? '') == 'Mizoram' ? 'selected' : ''); ?>>
                        Mizoram</option>
                    <option value="Nagaland" <?php echo e(old('state', $address->state ?? '') == 'Nagaland' ? 'selected' : ''); ?>>
                        Nagaland</option>
                    <option value="Odisha" <?php echo e(old('state', $address->state ?? '') == 'Odisha' ? 'selected' : ''); ?>>Odisha
                    </option>
                    <option value="Punjab" <?php echo e(old('state', $address->state ?? '') == 'Punjab' ? 'selected' : ''); ?>>Punjab
                    </option>
                    <option value="Rajasthan" <?php echo e(old('state', $address->state ?? '') == 'Rajasthan' ? 'selected' : ''); ?>>
                        Rajasthan</option>
                    <option value="Sikkim" <?php echo e(old('state', $address->state ?? '') == 'Sikkim' ? 'selected' : ''); ?>>Sikkim
                    </option>
                    <option value="Tamil Nadu" <?php echo e(old('state', $address->state ?? '') == 'Tamil Nadu' ? 'selected' : ''); ?>>
                        Tamil Nadu</option>
                    <option value="Telangana" <?php echo e(old('state', $address->state ?? '') == 'Telangana' ? 'selected' : ''); ?>>
                        Telangana</option>
                    <option value="Tripura" <?php echo e(old('state', $address->state ?? '') == 'Tripura' ? 'selected' : ''); ?>>
                        Tripura</option>
                    <option value="Uttar Pradesh"
                        <?php echo e(old('state', $address->state ?? '') == 'Uttar Pradesh' ? 'selected' : ''); ?>>Uttar Pradesh
                    </option>
                    <option value="Uttarakhand"
                        <?php echo e(old('state', $address->state ?? '') == 'Uttarakhand' ? 'selected' : ''); ?>>Uttarakhand</option>
                    <option value="West Bengal"
                        <?php echo e(old('state', $address->state ?? '') == 'West Bengal' ? 'selected' : ''); ?>>West Bengal</option>
                    <option value="Andaman and Nicobar Islands"
                        <?php echo e(old('state', $address->state ?? '') == 'Andaman and Nicobar Islands' ? 'selected' : ''); ?>>
                        Andaman and Nicobar Islands</option>
                    <option value="Chandigarh" <?php echo e(old('state', $address->state ?? '') == 'Chandigarh' ? 'selected' : ''); ?>>
                        Chandigarh</option>
                    <option value="Dadra and Nagar Haveli and Daman and Diu"
                        <?php echo e(old('state', $address->state ?? '') == 'Dadra and Nagar Haveli and Daman and Diu' ? 'selected' : ''); ?>>
                        Dadra and Nagar Haveli and Daman and Diu</option>
                    <option value="Lakshadweep"
                        <?php echo e(old('state', $address->state ?? '') == 'Lakshadweep' ? 'selected' : ''); ?>>Lakshadweep</option>
                    <option value="Delhi" <?php echo e(old('state', $address->state ?? '') == 'Delhi' ? 'selected' : ''); ?>>Delhi
                    </option>
                    <option value="Puducherry" <?php echo e(old('state', $address->state ?? '') == 'Puducherry' ? 'selected' : ''); ?>>
                        Puducherry</option>
                    <option value="Ladakh" <?php echo e(old('state', $address->state ?? '') == 'Ladakh' ? 'selected' : ''); ?>>Ladakh
                    </option>
                    <option value="Jammu and Kashmir"
                        <?php echo e(old('state', $address->state ?? '') == 'Jammu and Kashmir' ? 'selected' : ''); ?>>Jammu and
                        Kashmir</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="pincode" class="form-label">Pincode</label>
                <input type="text" class="form-control" id="pincode" name="pincode"
                    value="<?php echo e(old('pincode', $address->pincode ?? '')); ?>" required minlength="6" maxlength="6">
            </div>

            <button type="submit" class="btn btn-success">Save Changes</button>
            <a href="/my-profile" style="text-decoration:none;" class="btn btn-link">Cancel</a>
        </form>
    </div>

    <script>
        // JavaScript Validation for the form
        document.getElementById("edit-profile-form").addEventListener("submit", function(event) {
            let isValid = true;

            // Clear previous error messages
            const errorMessages = document.querySelectorAll('.error-message');
            errorMessages.forEach(function(msg) {
                msg.remove();
            });

            // Name validation
            const name = document.getElementById('name');
            if (name.value.trim() === "") {
                isValid = false;
                name.insertAdjacentHTML('afterend',
                    '<div class="error-message" style="color: red;">Name is required</div>');
            }

            // Email validation (basic format check)
            const email = document.getElementById('email');
            const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            if (email.value.trim() === "" || !emailPattern.test(email.value)) {
                isValid = false;
                email.insertAdjacentHTML('afterend',
                    '<div class="error-message" style="color: red;">Valid email is required</div>');
            }

            // Mobile number validation (only numbers)
            const mobileNo = document.getElementById('mobile_no');
            const mobilePattern = /^[0-9]{10}$/;
            if (mobileNo.value.trim() === "" || !mobilePattern.test(mobileNo.value)) {
                isValid = false;
                mobileNo.insertAdjacentHTML('afterend',
                    '<div class="error-message" style="color: red;">Mobile number must be 10 digits</div>');
            }

            // Address line 1 validation
            const address1 = document.getElementById('address_1');
            if (address1.value.trim() === "") {
                isValid = false;
                address1.insertAdjacentHTML('afterend',
                    '<div class="error-message" style="color: red;">Address Line 1 is required</div>');
            }

            // City validation
            const city = document.getElementById('city');
            if (city.value.trim() === "") {
                isValid = false;
                city.insertAdjacentHTML('afterend',
                    '<div class="error-message" style="color: red;">City is required</div>');
            }

            // State validation
            const state = document.getElementById('state');
            if (state.value.trim() === "") {
                isValid = false;
                state.insertAdjacentHTML('afterend',
                    '<div class="error-message" style="color: red;">State is required</div>');
            }

            // Pincode validation
            const pincode = document.getElementById('pincode');
            if (pincode.value.trim() === "") {
                isValid = false;
                pincode.insertAdjacentHTML('afterend',
                    '<div class="error-message" style="color: red;">Pincode is required</div>');
            }

            // If the form is not valid, prevent form submission
            if (!isValid) {
                event.preventDefault();
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UserAPI_assignment\resources\views/user/edit-profile.blade.php ENDPATH**/ ?>