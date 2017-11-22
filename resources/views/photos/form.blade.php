<div class="row col-md-6">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Url:</strong>
            {!! Form::text('url', null, array('placeholder' => 'Url','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Caption:</strong>
            {!! Form::textarea('caption', null, array('placeholder' => 'Caption','class' => 'form-control','style'=>'height:150px')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
