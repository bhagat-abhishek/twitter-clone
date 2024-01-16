<h4> Share yours ideas </h4>
<div class="row">
    <form action="{{ route('idea.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <textarea name="content" class="form-control" id="idea" rows="3"></textarea>
        </div>
        <div class="">
            <button class="btn btn-dark" type="submit"> Share </button>
        </div>
    </form>
</div>
