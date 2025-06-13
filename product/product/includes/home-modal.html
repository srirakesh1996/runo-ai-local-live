<!-- Modal -->
<div class="modal fade" id="requestDemoModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="custom-modal-box">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5>Get in touch now!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="demo-form" method="POST"
                        data-page-name="<?php echo htmlspecialchars(!empty($page_name) ? $page_name : 'Others'); ?>"
                        data-uuid="<?php echo htmlspecialchars(!empty($form_uuid) ? $form_uuid : '540c6a38-0072-4c48-9fac-b443f814a999'); ?>">
                        <div class="mb-3">
                            <input type="text" name="your_name" class="form-control" id="name" placeholder="Name" />
                            <small class="text-danger d-none" id="nameError">Name is required.</small>
                        </div>
                        <div class="mb-3">
                            <input type="email" name="your_email" class="form-control" id="email" placeholder="Email Address" />
                            <small class="text-danger d-none" id="emailError">Valid email is required.</small>
                        </div>
                        <div class="mb-3">
                            <input type="tel" name="your_phone" class="form-control" id="phone" placeholder="Phone Number" autocomplete="tel" />
                            <small class="text-danger d-none" id="phoneError">Enter a valid phone number.</small>
                        </div>
                        <div class="mb-3">
                            <select name="agents" class="form-select" id="agents">
                                <option value="" disabled selected style="color: #858585;">Number of Calling Agents</option>
                                <option value="50+">50+</option>
                                <option value="11-50">11-50</option>
                                <option value="1-10">1-10</option>
                            </select>
                            <small class="text-danger d-none" id="agentsError">Please select an option.</small>
                        </div>
                        <p style="font-size: 12px;">
                            By submitting this form, I agree to the <a href="../privacy-policy" target="_blank">privacy policy</a>.
                        </p>
                        <button type="submit" id="demo-form-btn" class="btn-default btn-highlighted" style="width: 100%;">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    jQuery(function($) {
        const phoneInput = document.querySelector("#phone");
        const iti = window.intlTelInput(phoneInput, {
            initialCountry: "auto", // <-- add this line
            geoIpLookup: function(callback) {

                fetch('https://ipapi.co/json/')
                    .then(res => {

                        return res.json();
                    })
                    .then(data => {

                        const countryCode = (data && data.country_code) ? data.country_code.toLowerCase() : 'in';

                        callback(countryCode);
                    })
                    .catch(err => {
                        console.error("geoIpLookup error:", err);
                        callback('in');
                    });
            },
            separateDialCode: true,
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@17/build/js/utils.js",
        });
        const fakeNumbers = [
            "1234567890", "0000000000", "1111111111", "2222222222",
            "3333333333", "4444444444", "5555555555", "6666666666",
            "7777777777", "8888888888", "9999999999"
        ];

        const countryLengthMap = {
            in: [10], // India
            ae: [9], // United Arab Emirates
            us: [10], // United States
            ca: [10], // Canada
            gb: [10, 11], // United Kingdom
            sa: [9], // Saudi Arabia
            ph: [10], // Philippines
            id: [10, 11], // Indonesia
            sg: [8], // Singapore
            au: [9], // Australia
            nz: [8, 9], // New Zealand
            pk: [10], // Pakistan
            bd: [10], // Bangladesh
            lk: [9], // Sri Lanka
            ng: [10, 11], // Nigeria
            ke: [9], // Kenya
            za: [9, 10], // South Africa
            my: [9, 10], // Malaysia
            th: [9, 10], // Thailand
            vn: [9, 10], // Vietnam
            kr: [9, 10, 11], // South Korea
            jp: [10, 11], // Japan
            cn: [11], // China
            hk: [8], // Hong Kong
            tw: [9, 10], // Taiwan
            de: [10, 11], // Germany
            fr: [9, 10], // France
            it: [10], // Italy
            es: [9], // Spain
            br: [10, 11], // Brazil
            mx: [10], // Mexico
            ar: [10, 11], // Argentina
            ru: [10], // Russia
            tr: [10], // Turkey
            eg: [10, 11], // Egypt
            iq: [10], // Iraq
            gt: [8] // Guatemala
        };

        function getMaxLengthForCountry() {
            const countryCode = iti.getSelectedCountryData().iso2;
            const allowedLengths = countryLengthMap[countryCode];
            return allowedLengths ? Math.max(...allowedLengths) : 15; // fallback to max 15 digits
        }

        let phoneTouched = false;

        $("#phone").on("focus input", function() {
            phoneTouched = true;
            validatePhone();
        });

        // Restrict phone input to digits only and max length live
        phoneInput.addEventListener("input", () => {
            phoneInput.value = phoneInput.value.replace(/\D/g, "");
            const maxLength = getMaxLengthForCountry();
            if (phoneInput.value.length > maxLength) {
                phoneInput.value = phoneInput.value.slice(0, maxLength);
            }
            validatePhone();
        });

        // Trim phone on country change & revalidate
        phoneInput.addEventListener("countrychange", () => {
            const maxLength = getMaxLengthForCountry();
            phoneInput.value = phoneInput.value.slice(0, maxLength);
            validatePhone();
        });

        // Validation helper functions

        function validateName() {
            const val = $("#name").val().trim();
            if (!val || val.length > 30) {
                $("#nameError").removeClass("d-none");
                return false;
            }
            $("#nameError").addClass("d-none");
            return true;
        }

        function validateEmail() {
            const val = $("#email").val().trim();
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!val || !emailPattern.test(val)) {
                $("#emailError").removeClass("d-none");
                return false;
            }
            $("#emailError").addClass("d-none");
            return true;
        }

        function validatePhone() {
            const phoneNational = phoneInput.value;
            const selectedCountry = iti.getSelectedCountryData().iso2;
            const validLengths = countryLengthMap[selectedCountry];
            if (!phoneTouched) {
                $("#phoneError").addClass("d-none");
                return false;
            }
            if (!iti.isValidNumber()) {
                $("#phoneError").text("Please enter a valid phone number.").removeClass("d-none");
                return false;
            }

            if (fakeNumbers.includes(phoneNational)) {
                $("#phoneError").text("Please enter a real phone number.").removeClass("d-none");
                return false;
            }

            if (validLengths && !validLengths.includes(phoneNational.length)) {
                $("#phoneError").text(`Phone number must be ${validLengths.join(" or ")} digits.`).removeClass("d-none");
                return false;
            }

            $("#phoneError").addClass("d-none");
            return true;
        }

        function validateAgents() {
            if (!$("#agents").val()) {
                $("#agentsError").removeClass("d-none");
                return false;
            }
            $("#agentsError").addClass("d-none");
            return true;
        }

        // Live validation events for form fields
        $("#name").on("input", validateName);
        $("#email").on("input", validateEmail);
        $("#phone").on("input", validatePhone);
        $("#agents").on("change", validateAgents);

        // On submit
        $("#demo-form").on("submit", function(event) {
            event.preventDefault();

            // Validate all fields again
            const validName = validateName();
            const validEmail = validateEmail();
            const validPhone = validatePhone();
            const validAgents = validateAgents();

            if (!(validName && validEmail && validPhone && validAgents)) {
                return; // Don't submit if any invalid
            }

            // Prepare form data
            let formData = $(this).serializeArray().reduce(function(obj, item) {
                obj[item.name] = item.value;
                return obj;
            }, {});

            formData["your_phone"] = iti.getNumber(); // international phone
            formData["custom_Page Name"] = window.location.pathname.replace(/^\/|\/$/g, "") || "Landing Pages";

            const uuid = $(this).data("uuid");

            // Submit form (replace with your actual submit function)
            submitForm("demo-form", formData, uuid);
        });

    });
</script>
<!-- Thank You Modal -->
<div class="modal fade" id="thankYouModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-center p-4">
            <img src="../img/success.webp" alt="success" style="margin:10px auto; display:block;width:50px">
            <h5 class="mb-3">Thank you!</h5>
            <p style="margin-bottom:5px">Your submission has been received. Our team will get back to you shortly.</p>
            <button type="button" class="btn-default btn-highlighted mt-3" data-bs-dismiss="modal">Close</button>
        </div>
    </div>
</div>