<form method="POST"
      action="{{ isset($article) ? route('admin-articles.update', $article->getSlug()) :  route('admin-articles.store') }}"
>
    @csrf
    @if(isset($article))
        @method('PATCH')
    @endif
    <div class="row">
        <div class="form-group col-6">
            <label class="text-uppercase">{{ phrase('labels.status') }}</label>
            <select class="form-control text-capitalize" name="status" id="admin-form-article-status">
                <option>{{ phrase('labels.choose_status') }}</option>
                <option {{ isset($article) && $article->status === 1 ? 'selected' : '' }} value="1">
                    {{ phrase('labels.active') }}
                </option>
                <option {{ isset($article) && $article->status === 0 ? 'selected' : '' }} value="0">
                    {{ phrase('labels.inactive') }}
                </option>
            </select>
        </div>
        <div class="form-group col-6">
            <label class="text-capitalize">{{ phrase('labels.title') }}</label>
            <input type="text"
                   name="title"
                   value="{{ isset($article) ? old('title', $article->title) : '' }}"
                   id="admin-form-article-title"
                   class="form-control"
            >
        </div>
    </div>
    <div class="row">
        <div class="form-group col-12">
            <label class="text-capitalize">{{ phrase('labels.sub_title') }}</label>
            <textarea name="sub_title"
                   id="admin-form-article-sub_title"
                   class="form-control"
            >{{ isset($article) ? old('sub_title', $article->sub_title) : '' }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-12">
            <label class="text-capitalize">{{ phrase('labels.content') }}</label>
            <textarea name="content"
                   id="admin-form-article-content"
                   class="form-control"
            >{{ isset($article) ? old('content', $article->content) : '' }}</textarea>
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
