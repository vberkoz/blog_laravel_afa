@php /** @var \App\Models\BlogCategory $item */ @endphp
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <button class="btn btn-primary" type="submit">Save</button>
            </div>
        </div>
    </div>
</div>
<br>
@if($item->exists)
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li>ID: {{ $item->id }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="created_at">Created</label>
                        <input type="text" class="form-control" value="{{ $item->created_at }}" id="created_at" disabled>
                    </div>
                    <div class="form-group">
                        <label for="updated_at">Updated</label>
                        <input type="text" class="form-control" value="{{ $item->updated_at }}" id="updated_at" disabled>
                    </div>
                    <div class="form-group">
                        <label for="deleted_at">Deleted</label>
                        <input type="text" class="form-control" value="{{ $item->deleted_at }}" id="deleted_at" disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
@endif