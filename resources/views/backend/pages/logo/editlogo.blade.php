<div class="row ">
    <div class="col-md-12">
        <div class="form-group">
            <div>
                <img src="{{ url('public/uploads/logo/'.$viewlogo['logo'] ) }}" alt="logo_image" title="logo-img" class="rounded mr-4" height="100" />
                <br>
                <label class="form-label">Logo Image</label>
                <input type="file" class="form-control" name="logo"><br>
                <input type="hidden" class="form-control hidden" value="{{ $viewlogo['id'] }}" name="id"><br>
            </div>
        </div>
    </div>
</div>
