<div class="row ">
    <div class="col-md-12">
        <div class="form-group">
            <div>
                <img src="{{ url('public/uploads/testimonials/'.$viewtestimonials['image'] ) }}" alt="testimonials_image" title="testimonials-img" class="rounded mr-4" height="100" />
                <br>
                <label class="form-label">Testimonials Image</label>
                <input type="file" class="form-control" name="image"><br>
                <input type="hidden" class="form-control hidden" value="{{ $viewtestimonials['id'] }}" name="id"><br>
                <input type="text" class="form-control" name="name" placeholder="Enter Title" value="{{ $viewtestimonials['name'] }}"><br>
                <input type="text" class="form-control" name="position" placeholder="Enter Author Name" value="{{ $viewtestimonials['position'] }}"><br>
                <textarea class="form-control" name="message" placeholder="Enter Content here">{{ $viewtestimonials['message'] }}</textarea><br>
            </div>
        </div>
    </div>
</div>
