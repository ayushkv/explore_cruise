<form class="" role="form" method="post" autocomplete="off" action="{{ route('contact_add') }}"
    enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="mb-3">
                <label class="form-label">Name<span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="full_name" placeholder="Full Name" maxlength="50" required>
            </div>
        </div>
        <div class="col-md-12">
            <div class="mb-3">
                <label class="form-label">Email<span class="text-danger">*</span></label>
                <input type="email" class="form-control" name="email" placeholder="Email ID" maxlength="50" required>
            </div>
        </div>
        <div class="col-md-12">
            <div class="mb-3">
                <label class="form-label">Phone<span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="phone" placeholder="Phone No"
                    onkeypress="javascript:return isNumberKey(event)" minlength="8" maxlength="14" required>
            </div>
        </div>
        <div class="col-md-12">
            <div class="mb-3">
                <label class="form-label">Message<span class="text-danger"></span></label>
                <textarea class="form-control" rows="3" name="message" placeholder="Message" maxlength="800" ></textarea>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Send Message</button>
</form>
