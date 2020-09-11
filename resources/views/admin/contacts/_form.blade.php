<form method="POST"
      action="{{ isset($contact) ? route('admin-contacts.update', $contact->getSlug()) :  route('admin-contacts.store') }}"
>
    @csrf
    @if(isset($contact))
        @method('PATCH')
    @endif
    <div class="row">
        <div class="form-group col-6">
            <label class="text-capitalize">{{ phrase('labels.name') }}</label>
            <input type="text"
                   name="name"
                   value="{{ isset($contact) ? old('name', $contact->name) : '' }}"
                   id="admin-form-contact-name"
                   class="form-control"
            >
        </div>
        <div class="form-group col-6">
            <label class="text-capitalize">{{ phrase('labels.email') }}</label>
            <input type="text"
                   name="email"
                   value="{{ isset($contact) ? old('email', $contact->email) : '' }}"
                   id="admin-form-contact-email"
                   class="form-control"
            >
        </div>
    </div>
    <div class="row">
        <div class="form-group col-12">
            <label class="text-capitalize">{{ phrase('labels.content') }}</label>
            <textarea name="content"
                   id="admin-form-contact-content"
                   class="form-control"
            >{{ isset($contact) ? old('content', $contact->content) : '' }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-12">
            <button type="submit" class="btn btn-primary float-right text-uppercase pl-5 pr-5">
                {{ phrase('buttons.submit') }}
            </button>
        </div>

    </div>
</form>
