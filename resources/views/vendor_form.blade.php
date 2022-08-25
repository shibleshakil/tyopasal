@extends('layouts.back')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
    </div>
    <div class="content-body">
        <section id="icon-tabs">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <form action="{{route ('storeVendor')}}" method="post" class="icons-tab-steps wizard-circle" id="vendorCreateForm">@csrf

                                    <!-- Step 1 -->
                                    <h6><i class="step-icon fa fa-home"></i> Personal Information</h6>
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for="first_name">First Name</label>
                                                <input type="text" class="form-control" id="first_name">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="last_name">Last Name</label>
                                                <input type="text" class="form-control" id="last_name">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="email">Email Address</label>
                                                <input type="email" class="form-control" id="email">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="alt_email">Alternative Email Address</label>
                                                <input type="email" class="form-control" id="alt_email">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="phone">Phone Number</label>
                                                <input type="number" class="form-control phone" id="phone">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="alt_phone">Alternative Phone Number</label>
                                                <input type="number" class="form-control phone" id="alt_phone">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="identity_type">Identity Type</label>
                                                <select class="form-control" id="identity_type" name="identity_type">
                                                    <option value="">Select</option>
                                                    <option value="1">Citizenship</option>
                                                    <option value="2">Driving License</option>
                                                    <option value="3">National ID</option>
                                                    <option value="4">Passport</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 form-group citizenship_pro" style="display:none">
                                                <label for="country">Country</label>
                                                <input type="text" class="form-control" id="country">
                                            </div>
                                            <div class="col-md-6 form-group citizenship_pro" style="display:none">
                                                <label for="citizenship_type">Type of Citizenship</label>
                                                <input type="text" class="form-control" id="citizenship_type">
                                            </div>
                                            <div class="col-md-6 form-group drl_pro" style="display:none">
                                                <label for="drl_no">License No.</label>
                                                <input type="text" class="form-control" id="drl_no">
                                            </div>
                                            <div class="col-md-6 form-group drl_pro" style="display:none">
                                                <label for="drl_issue_date">License Issue Date</label>
                                                <input type="date" class="form-control" id="drl_issue_date">
                                            </div>
                                            <div class="col-md-6 form-group drl_pro" style="display:none">
                                                <label for="drl_expire_date">License Expire Date</label>
                                                <input type="date" class="form-control" id="drl_expire_date">
                                            </div>
                                            <div class="col-md-6 form-group drl_pro" style="display:none">
                                                <label for="license_front_copy">Upload Front Side </label>
                                                <input type="file" class="form-control" id="license_front_copy">
                                            </div>
                                            <div class="col-md-6 form-group drl_pro" style="display:none">
                                                <label for="license_back_copy">Upload Back Side </label>
                                                <input type="file" class="form-control" id="license_back_copy">
                                            </div>
                                        </div>
                                    </fieldset>

                                    <!-- Step 2 -->
                                    <h6><i class="step-icon fa fa-briefcase"></i>Business Information</h6>
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="proposalTitle2">Proposal Title</label>
                                                    <input type="text" class="form-control" id="proposalTitle2">
                                                </div>
                                                <div class="form-group">
                                                    <label for="emailAddress4">Email Address</label>
                                                    <input type="email" class="form-control" id="emailAddress4">
                                                </div>
                                                <div class="form-group">
                                                    <label for="videoUrl2">Video URL</label>
                                                    <input type="url" class="form-control" id="videoUrl2">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="jobTitle3">Job Title</label>
                                                    <input type="text" class="form-control" id="jobTitle3">
                                                </div>
                                                <div class="form-group">
                                                    <label for="shortDescription2">Short Description</label>
                                                    <textarea name="shortDescription" id="shortDescription2"
                                                        rows="4" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <!-- Step 3 -->
                                    <h6><i class="step-icon fa fa-map-marker"></i>Address</h6>
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="eventName2">Event Name</label>
                                                    <input type="text" class="form-control" id="eventName2">
                                                </div>
                                                <div class="form-group">
                                                    <label for="eventType2">Event Type</label>
                                                    <select class="custom-select form-control" id="eventType2"
                                                        data-placeholder="Type to search cities"
                                                        name="eventType2">
                                                        <option value="Banquet">Banquet</option>
                                                        <option value="Fund Raiser">Fund Raiser</option>
                                                        <option value="Dinner Party">Dinner Party</option>
                                                        <option value="Wedding">Wedding</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="eventLocation2">Event Location</label>
                                                    <select class="custom-select form-control"
                                                        id="eventLocation2" name="location">
                                                        <option value="">Select City</option>
                                                        <option value="Amsterdam">Amsterdam</option>
                                                        <option value="Berlin">Berlin</option>
                                                        <option value="Frankfurt">Frankfurt</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Event Date - Time</label>
                                                    <div class='input-group'>
                                                        <input type='text' class="form-control datetime" />
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <span class="feather icon-calendar"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="eventStatus2">Event Status</label>
                                                    <select class="custom-select form-control" id="eventStatus2"
                                                        name="eventStatus">
                                                        <option value="Planning">Planning</option>
                                                        <option value="In Progress">In Progress</option>
                                                        <option value="Finished">Finished</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Requirements</label>
                                                    <div class="c-inputs-stacked">
                                                        <div
                                                            class="d-inline-block custom-control custom-checkbox">
                                                            <input type="checkbox" name="status2"
                                                                class="custom-control-input" id="staffing2">
                                                            <label class="custom-control-label"
                                                                for="staffing2">Staffing</label>
                                                        </div>
                                                        <div
                                                            class="d-inline-block custom-control custom-checkbox">
                                                            <input type="checkbox" name="status2"
                                                                class="custom-control-input" id="catering2">
                                                            <label class="custom-control-label"
                                                                for="catering2">Catering</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <!-- Step 4 -->
                                    <h6><i class="step-icon fa fa-credit-card-alt"></i>Payout Information</h6>
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="meetingName2">Name of Meeting</label>
                                                    <input type="text" class="form-control" id="meetingName2">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="decisions2">Decisions Reached</label>
                                                    <textarea name="decisions" id="decisions2" rows="4"
                                                        class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <!-- Step 5 -->
                                    <h6><i class="step-icon fa fa-image"></i>Image</h6>
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="meetingName2">Upload Image</label>
                                                    <input type="file" class="form-control" id="meetingName2">
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <!-- Step 6 -->
                                    <h6><i class="step-icon fa fa-image"></i>Agreement</h6>
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="meetingName2">Name of Meeting</label>
                                                    <input type="text" class="form-control" id="meetingName2">
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
@section('script')
    <!-- BEGIN: Page JS-->
    <script type="text/javascript">
        $(document).ready(function () {
            $("#identity_type").on("change", function(){
                var id = $(this).val();
                if (id == 1) {
                    $(".citizenship_pro").show();
                    $(".drl_pro").hide();
                }else if (id == 2) {
                    $(".drl_pro").show();
                    $(".citizenship_pro").hide();
                }else{
                    $(".citizenship_pro").hide();
                    $(".drl_pro").hide();
                }
            });
        })
    </script>
    <!-- END: Page JS-->
@endsection
